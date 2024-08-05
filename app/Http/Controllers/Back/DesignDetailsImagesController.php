<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\DesignDetailsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignDetailsImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get the images of the design
        // if (Auth::user()->can('manage-project')) {
        //     $design_images = DesignDetailsImages::with('design')->get();
        //     return view('back/design.index', compact('designs'));
        // } else {
        //     return redirect()->back()->with('failed', __('Permission denied.'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Auth::user()->can('manage-project')) {
            // get design_image where id = $design_id in design
            $design_images = DesignDetailsImages::where('design_id', $id)->with('design')->get();
            dd($design_images);
            return view('back/design.view', compact('design_images'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
