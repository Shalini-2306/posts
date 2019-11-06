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
            
                        <a href="{{ URL::to('/') }}">Home</a>

                    
                </div>
            
			 <div class="position-ref padd">
            <div class="content">
				
                <div class="title m-b-md">
                    {{$catName}} Posts:
                </div>
                @if(isset($posts))
				@if(count($posts)>0)
				@foreach($posts as $post)
                <div class="links">
                   <p><b>{{$post->title}}</b></p>
                   <p><b>Posted On: {{$post->created_at}}</b></p>
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
