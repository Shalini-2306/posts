<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           

            .title {
                font-size: 44px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .padd
            {
				padding:20px;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    
                    
                </div>
            @endif
			 </div>
			 <div class="position-ref padd">
            <div class="content">
				<ul class="navbar-nav ml-auto">
                     <li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							Categories <span class="caret"></span>
						</a>
						@if(count($category)>0)
						@foreach($category as $k => $v)
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ URL::to($k.'/'.$v) }}">
								{{ $v }}
							</a>

						</div>
						@endforeach
						@endif
					</li>
					</ul>
                <div class="title m-b-md">
                    Posts:
                </div>
                @if(isset($posts))
				@if(count($posts)>0)
				@foreach($posts as $post)
                <div class="links">
                   <p><b>{{$post->title}}</b></p>
                   <p><b>Posted On: {{date('D, jS M y, g:i A', strtotime($post->created_at))}}</b></p>
                   <p>{{$post->description}}</p>
                </div>
                <hr>
                @endforeach
                @else
                <div class="links">
                   <p><b>Not Found Any Posts</b></p>
                </div>
                @endif
                @endif
            </div>
        </div>
    </body>
</html>
