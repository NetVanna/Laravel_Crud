
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
        <h3>Movies:</h3>
        <a href="{{ url('/add') }}" class="btn btn-link">Add New</a>
    </div>
    <div class="row">
        @if($message = Session::get('delete'))
        <div class="alert alert-warning ">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if($message = Session::get('success'))
        <div class="alert alert-success ">
            <p>{{ $message }}</p>
        </div>
        @endif
        @foreach($movies as $movie)
            <div class="col-md-3 my-3" >
                <div class="card">
                    <img src="{{ is_null($movie->cover)? asset("image/nothumb.jpg"):$movie->cover }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::substr($movie->title, 0, 15) }}...</h5>
                        <p class="card-text">{{ substr($movie->description,0,50) }}...</p>
                        <a href="{{ route('ShowMovie',$movie->id) }}" class="btn btn-primary">More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</div>



</body>
</html>

