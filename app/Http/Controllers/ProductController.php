<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){

        $movies = array(
            "movieTitleOne" => "The Exorcism",
            "cinemaNumOne" => "SM City Baguio Cinema 1",
            "movieTitleTwo" => "Cabrini",
            "cinemaNumTwo" => "SM City Baguio Cinema 2",
            "movieTitleThree" => "Inside Out 2",
            "cinemaNumThree" => "SM City Baguio Cinema 3",
            "movieTitleFour" => "How to Make Millions Before Grandma Dies",
            "cinemaNumFour" => "SM City Baguio Cinema 4",
        );
        return view("products", $movies);
    }
}
