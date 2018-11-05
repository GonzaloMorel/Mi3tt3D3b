<?php

namespace miette\Http\Controllers;

use Illuminate\Http\Request;
use \miette\Slider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('home', ['sliders'=>$sliders]);
    }
}
