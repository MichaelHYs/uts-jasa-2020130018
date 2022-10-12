<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Fox Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto mr-auto ml-auto">
            <div class="inner">
                <div class="text-center"><img src="img/logo.png" height="200"></div>
                <nav class="nav justify-content-center nav-masthead">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link active" href="/services">Services</a>
                    <a class="nav-link active" href="/testimonials">Testimonials</a>
                    <a class="nav-link active" href="{{ route('home') }}">About</a>
                </nav>
            </div>
        </header>
