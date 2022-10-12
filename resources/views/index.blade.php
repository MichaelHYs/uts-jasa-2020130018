@extends('layout.master')
@section('title', 'Home')
@section('content')
    <h1 class="cover-heading">Hello!</h1>
    <p class="lead">
        MyCompany is a multi-disciplinary, independently-owned design studio.
    </p>
    <p class="text-left">
        Our work encompasses graphics and identity, products and packaging, exhibitions
        and installations, websites and digital experiences, advertising and
        communications, sound and motion.
    </p>
    <h3>Where you can visit us</h3>
    <!--The div element for the map -->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.1733363235376!2d55.11654633412019!3d25.130485853200483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f153e3609c979%3A0x5945a418a804ac5!2sAtlantis!5e1!3m2!1sid!2sid!4v1665591394563!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
