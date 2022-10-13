<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Fox Hotel') | Fox Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>

</head>

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto mr-auto ml-auto">
            <div class="inner">
                <div class="text-center"><img src="img/logo.png" height="200"></div>
                <nav class="nav justify-content-center nav-masthead">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link active" href="{{ route('services') }}">Services</a>
                    <a class="nav-link active" href="/testimonials">Testimonials</a>
                    <a class="nav-link active" href="/about">About</a>
                </nav>
            </div>
        </header>
        <main role="main" class="inner cover">
            @yield('content')
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>
                    ©{{ date('Y') }} <a href="{{ route('home') }}">Fox Hotel</a>
                </p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>

</html>
