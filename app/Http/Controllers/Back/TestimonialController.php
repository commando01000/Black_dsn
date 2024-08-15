<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function index()
    {

        $sliders = Testimonial::all();
        return view('back.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('back.slider.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'string|max:255|nullable',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp,svg',

        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders');
        }

        $socialLinks = json_encode([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        Testimonial::create([
            'title' => $request->title,
            'image' => $path,
            'position' => $request->position,
            'description' => $request->description,
            'social' => $socialLinks, // Store the social links JSON object
        ]);
        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit($id)
    {
        $slider = Testimonial::find($id);
        $socialLinks = json_decode($slider->social, true);
        return view('back.slider.edit', compact('slider', 'socialLinks'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'string|max:255|nullable',
            'image' => 'image|mimes:jpg,png,jpeg,webp,svg', // Adjust max size as needed

        ]);
        $slider = Testimonial::find($id);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders');

            if (Storage::exists($slider->image)) {
                Storage::delete($slider->image);
            }
        }
        else
        {
            $path = $slider->image;
        }

        $socialLinks = json_encode([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        $slider->update([
            'title' => $request->title,
            'image' => $path,
            'position' => $request->position,
            'description' => $request->description,
            'social' => $socialLinks, // Store the social links JSON object
        ]);
        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slider = Testimonial::find($id);
        if (Storage::exists($slider->image)) {
            Storage::delete($slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
