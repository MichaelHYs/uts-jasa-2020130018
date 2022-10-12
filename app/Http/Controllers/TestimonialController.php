<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $carousels = [
            [
                "<div class="col-md-4 col-sm-6">
                <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                    <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                class="glyphicon glyphicon-star"></span><span data-value="1"
                                class="glyphicon glyphicon-star"></span><span data-value="2"
                                class="glyphicon glyphicon-star"></span><span data-value="3"
                                class="glyphicon glyphicon-star"></span><span data-value="4"
                                class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                class="glyphicon glyphicon-star-empty"></span> </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth.
                        So why would Hollywood start now? This latest attempt at bringing the son of Zeus to
                        the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If
                        the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                </div>
                <div class="person-text rel">
                    <img
                        src="" />
                    <a title="" href="#">Anna</a>
                    <i>from Glasgow, Scotland</i>
                </div>
            </div>"
            ],
            [
            "url" => "https://travelprnews.com/wp-content/uploads/2018/03/AVANI-announces-AVANI-Hotel-Suites-Branded-Residences-in-Dubai-scheduled-to-open-in-2020-1280x720.jpg",
            "width" => "900",
            "height" => "300"
            ],
            [
            "url" => "https://thepapandayan.com/wp-content/uploads/2018/03/slide-spa.jpg",
            "width" => "900",
            "height" => "300"
            ]
            ];
            return view('services', compact('carousels'));
    }
}
