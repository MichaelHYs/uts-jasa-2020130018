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
                "url" => "https://travelprnews.com/wp-content/uploads/2018/03/AVANI-announces-AVANI-Hotel-Suites-Branded-Residences-in-Dubai-scheduled-to-open-in-2020-1280x720.jpg",
                "width" => "900",
                "height" => "300"
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
