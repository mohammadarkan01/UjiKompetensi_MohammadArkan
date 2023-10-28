<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('src/comic-book.png') }}" type="image/x-icon">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    {{-- DataTable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <title>@yield('title')</title>
</head>

<body class="background-home">
    {{-- Content Web --}}
    <div class="content container-fluid min-vh-100 d-flex justify-content-center py-5">
        <div class="row">
            <div class="col container d-flex h-100">
                <div class="card row justify-content-center align-self-center border border-dark rounded-circle p-5">
                    <div class="card-body text-center">
                        <div class="text-center p-4">
                            <img src="{{ asset('src/comic-book.png') }}" class="img-fluid logo-komik" alt="Logo Komik">
                        </div>
                        <h1 class="card-text text-center font-family animated-font">Welcome to Data Comic</h1>
                        <a href="{{ route('komik.index') }}">
                            <button type="button" class="btn btn-primary my-3 px-5 font-family">Masuk</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- DataTable --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
