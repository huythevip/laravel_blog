<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <!-- Styles -->
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }

            .main-header {
                height: 50px;
                background-color: gray;
                line-height: 50px;
                margin-bottom: 50px;
            }

            .search-bar {
                float: right;
                margin-right: 20px;
            }

            .blog-title {
                float: left;
                margin-left: 20px;
            }

            .main-body {
                clear: both;
            }

            .post-title {
                text-align: center;
                margin-top: 20px;
            }

            .main-body {
                margin: 0 50px;
            }

            .comment-list {
                margin-left: 50px;
                margin-bottom: 20px;
            }



        </style>
    </head>
    <body>
            <div class="main-header" style="background-color: gray">
                <h1 class="blog-title">Laravel Blog</h1>
                <form action="{{route('post.search')}}" class="search-bar" method="GET">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" class="btn btn-info">Search</button>
                </form>
            </div>
        <div class="main-body">
            <div class="content">
                @foreach($posts as $post)
                    <h1 class="post-title">Title: {{$post->title}}</h1>
                    <p class="post-content">Content: {{$post->content}}</p>
                    <h3>Comments:</h3>
                    <ul class="comment-list">
                    @foreach($post->comments as $comment)
                        <li>{{ $comment->content }}</li>
                    @endforeach
                    </ul>
                    <hr>
                @endforeach
            </div>
        </div>
    </body>
</html>
