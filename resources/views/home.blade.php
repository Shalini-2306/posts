@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <p style="text-align:right;">Welcome to {{$role}} Dashboard</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <br/>
                    @if($role !='' && ($role ==='Admin' || $role==='Author'))
                    <h2>Add Post:</h2>
                     <form method="POST" action="{{ URL::to('create-post') }}">
                        @csrf
						<div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Select Category') }}</label>

                            <div class="col-md-6">
								
								<select class="form-control" name="category">
									@if(count($category)>0)
									@foreach($category as $k=>$v)
									<option value="{{$k}}">{{$v}}</option>
									@endforeach
									@else
									<option value="1">Social</option>
									@endif
								</select>
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"  required autocomplete="Post Title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Post Message') }}</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                       </form>
                       @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
