@include('layout.head',['title' => 'Home'])
    <div id="carousel-reviews" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card">
                    <div class="col-md-4 col-sm-6">
                        <div class="block-text rel zmin">
                            <a title="" href="#">Hercules</a>
                            <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                        class="glyphicon glyphicon-star"></span><span data-value="1"
                                        class="glyphicon glyphicon-star"></span><span data-value="2"
                                        class="glyphicon glyphicon-star"></span><span data-value="3"
                                        class="glyphicon glyphicon-star"></span><span data-value="4"
                                        class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                        class="glyphicon glyphicon-star-empty"></span> </span></div>
                            <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why
                                would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen
                                is
                                brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director
                                wasn't
                                enough to dissuade ...</p>
                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                        </div>
                        <div class="person-text rel">
                            <img src="" />
                            <a title="" href="#">Anna</a>
                            <i>from Glasgow, Scotland</i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                        <a title="" href="#">The Purge: Anarchy</a>
                        <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                    class="glyphicon glyphicon-star"></span><span data-value="1"
                                    class="glyphicon glyphicon-star"></span><span data-value="2"
                                    class="glyphicon glyphicon-star-empty"></span><span data-value="3"
                                    class="glyphicon glyphicon-star-empty"></span><span data-value="4"
                                    class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                    class="glyphicon glyphicon-star-empty"></span> </span></div>
                        <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a
                            pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon
                            seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we
                            really don't need another one of these." </p>
                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel">
                        <img src="" />
                        <a title="" href="#">Ella Mentree</a>
                        <i>United States</i>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @include('layout.foot')
