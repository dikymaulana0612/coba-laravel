<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="{{asset('/bootstrap-5/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="{{asset('/bootstrap-5/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('/css/blog.css')}}">

    <title>Blog Form </title>
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="mt-2">Form Tambah Data</h1>
                <form action=" {{ url('posts') }} " class="form-control" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Konten</label>
                        <textarea name="content" type="text" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-danger" type="submit">Simpan</button>
                    <a href="{{url ('posts')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        </form>
    </div>
</body>

</html>