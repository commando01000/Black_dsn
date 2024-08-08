<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;

class Portfolio_frontController extends Controller
{
    public function index()
    {
        // get last 6 designs designs
        $designs = Design::first()->take(6)->get();
        return view('front.portfolio.index', compact('designs'));
    }
}
