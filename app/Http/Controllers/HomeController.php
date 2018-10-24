<?php

namespace miette\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
        $products = products::all();
        return view('home');
    }
}
