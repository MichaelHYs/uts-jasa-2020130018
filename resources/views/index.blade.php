@include('layout.head', ['title' => 'Home'])
<div class="text-center">
    <hr class="featurette-divider">
    <h1 class="btn btn-primary">Book your stay</h1>
    <h1>
        We have the best hospitality and prices at the same time!.
    </h1>
    <hr class="featurette-divider">
    <h4 class="text-center">
        We guerantee you will be have the best experience of traveling. High class Hospitality with affordable prices.
    </h4>
    <hr class="featurette-divider">
    <h3>Where you can visit us</h3>
    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.1733363235376!2d55.11654633412019!3d25.130485853200483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f153e3609c979%3A0x5945a418a804ac5!2sAtlantis!5e1!3m2!1sid!2sid!4v1665591394563!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@include('layout.foot')
