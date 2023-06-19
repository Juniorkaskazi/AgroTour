<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIController extends Controller
{
    public function homePage(){
        return view('index');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function contacts(){
        return view('contact');
    }

    public function tourGrid(){
        return view('tour-grid');
    }

    public function tourDetails(){
        return view('tour-detail');
    }

    public function tourDetailsSliders(){
        return view('tour-grid-slider');
    }

    public function tourList(){
        return view('tour-list');
    }

     public function tourListSlider(){
        return view('tour-list-slider');
    }

    public function destination(){
        return view('destination-detail');
    }

    public function destinationGrid(){
        return view('destination-grid');
    }

    public function destinationGridSlider(){
        return view('destination-grid-slider');
    }

    public function destinationList(){
        return view('destination-list');
    }

    public function destinationListSlider(){
        return view('destination-list-slider');
    }
}
