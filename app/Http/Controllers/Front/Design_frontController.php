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
        $design = Design::with('images', 'category')->where('id', $id)->firstOrFail();
        // dd($design);
        // get the next design with it's design details and design details images
        // check if id is the greatest one or not
        // dd($id);
        if ($design->id == $design->max('id')) {
            // Get the previous design
            $nextDesign = Design::with('images', 'category')
                ->where('id', '<', $design->id)
                ->orderBy('id', 'desc')
                ->firstOrFail();
        } else {
            // Get the next design
            $nextDesign = Design::with('images', 'category')
                ->where('id', '>', $design->id)
                ->orderBy('id', 'asc')
                ->firstOrFail();
        }

        return view('front.design.view', compact('design', 'nextDesign'));
    }
}
