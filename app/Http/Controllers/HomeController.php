<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Auth;
use App\Post;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
		$request->user()->authorizeRoles(['admin', 'author', 'user']);
		$role='';
		if(Auth::user()->hasRole("admin"))
		{
			$role='Admin';
		}
		if(Auth::user()->hasRole("author"))
		{
			$role='Author';
		}
		if(Auth::user()->hasRole("user"))
		{
			$role='User';
		}
		$category=array();
		$categories=Category::get();
		if(count($categories)>0)
		{
			foreach($categories as $cat)
			{
				$category[$cat->id]=$cat->name;
			}
		}
		
        return view('home')->with('role', $role)->with('category', $category);
    }
}
