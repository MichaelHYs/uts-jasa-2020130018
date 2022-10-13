<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Fox Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="text-center text-white">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto mr-auto ml-auto">
            <div class="inner">
                <div class="text-center"><img src="img/logo.png" height="200"></div>
                <nav class="nav justify-content-center nav-masthead">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link active" href="/services">Services</a>
                    <a class="nav-link active" href="/testimonials">Testimonials</a>
                    <a class="nav-link active" href="/about">About</a>
                </nav>
            </div>
        </header>
