<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link bootstrap -->
    <link href="{{asset('/bootstrap-5/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="{{asset('/bootstrap-5/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('/css/blog.css')}}">
    <title>Detail </title>
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ date ( "d M Y H:i", strtotime ($post->created_at))}}</p>

                    <p>{{ $post->content}}</p>

                    <a href="{{ url ("posts") }}" class="btn btn-warning">Kembali</a>
                </article>
            </div>
        </div>
    </div>
</body>

</html>