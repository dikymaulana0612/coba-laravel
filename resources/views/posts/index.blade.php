<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/bootstrap-5/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="{{asset('/bootstrap-5/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Blog Isun</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-3">Daftar Blog Terbaru</h1>
        <a href="{{ url('posts/create') }}" class="btn btn-success mb-3">Tambah Data</a>

        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text"><small class="text-body-secondary">Last Update {{ date("d M Y H:i", strtotime ($post ->created_at)) }}</small></p>
                <a href="{{ url ("posts/$post->id")}}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url ("posts/$post->id/edit")}}" class="btn btn-warning">Edit</a>
            </div>
            @endforeach


        </div>

</body>

</html>