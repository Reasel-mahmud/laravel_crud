<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Template Main CSS Files -->
    <link href="{{ asset('asset') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('asset') }}/css/style.css" rel="stylesheet">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Laravel CRUD</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home')}}">Add Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manage.blog')}}">Manage Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('add.category')}}">Add Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Manage Category</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')

    <script src="{{ asset('asset') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
