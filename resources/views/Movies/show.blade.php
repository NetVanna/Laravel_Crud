
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <h3>{{ $movie->title }}</h3>
    </div>
    <div class="row">
        <div class="col-8">
            <img src="{{ is_null($movie->cover)? asset("image/nothumb.jpg"):asset($movie->cover) }}" class="card-img-top" style="width:300px">
            <p>
                {{ $movie->description }}
            </p>
        </div>
        <div class="col-4">
            <a class="btn btn-primary " href="/edit/{{ $movie->id }}">Update</a>
            <form action="{{ route('RemoveMovie',$movie->id) }}" class="mt-3" method="POST">
                @csrf
                <button class="btn btn-danger ">Delete</button>
            </form>
        </div>
    </div>


</div>



</body>
</html>

