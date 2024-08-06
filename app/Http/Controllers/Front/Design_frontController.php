<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\DesignDetailsImages;
use Illuminate\Http\Request;

class Design_frontController extends Controller
{
    public function show(string $id)
    {
        // get the current design with it's design details and design details images
        $design = Design::with('images', 'category')->where('id', $id)->first();
        // dd($design);
        // get the next design with it's design details and design details images
        $nextDesign = Design::with('images', 'category')->where('id', '>', $id - 1)->first();
        // dd($nextDesign);
        return view('front.design.view', compact('design', 'nextDesign'));
    }
}
