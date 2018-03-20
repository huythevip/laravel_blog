<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>


            html, body {
                background-color: #fff;
                color: #555;
                font-family: Arial, sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
            	<h1>Create Post</h1>
		  
		</form> 

            	<form action="{{route('post.ed_su')}}" method="POST">
            		{{csrf_field()}}
            		<table>
                    <tr>
                        <td>Enter Post ID you wish to modify </td>
                        <td><input type="text" name="post_id"></td>
                    </tr>
                    <tr>
                        <td>Enter new title </td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>Enter new content </td>
                        <td><input type="text" name="content"></td>
                    </tr>
                    <tr>
                        <td>Below is the list of available Post IDs: </td>
                        <td>
                            @foreach($ids as $key => $value)
                                {{$value}}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            	</form>
                
            </div>
        </div>
    </body>
</html>
