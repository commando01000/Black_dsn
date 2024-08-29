<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\DesignCategory;
use App\Models\DesignDetails;
use App\Models\DesignDetailsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::user()->can('manage-project')) {
            $designs = Design::with('images')->get();
            // dd($designs);
            $designs = Design::with('details')->paginate(10);

            return view('back/design.index', compact('designs'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (\Auth::user()->can('create-project')) {
            $categories = DesignCategory::where('status', 1)->get();
            return view('back/design.create', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->can('create-project')) {
            request()->validate([
                'title'             => 'required|unique:designs',
                'cover'            => 'image|mimes:jpg,jpeg,png,webp',
                'description'       => 'required',
            ]);


            // dd($request->all());

            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('cover')->store('designs');
            }

            $design = Design::create([
                'title'                 => $request->title,
                'slug'                 => $request->title,
                'description'           => $request->description,
                'builder'           => request()->builder ?? "off",
                'design_category'          => $request->category_id,
                'project_status'        => request()->builder == "on" ? 1 : 0,
                'cover'                => $path,
                'created_by'            => Auth::user()->id,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Store the image and get the path
                    $path = $image->store('design_images');

                    // Save the image path in the design_images table
                    $design_details_image =  DesignDetailsImages::create([
                        'design_id' => $design->id,
                        'image' => $path,
                    ]);
                }
            }


            $details = $request->input('details', []); // Default to empty array if null

            // dd($details);
            // Iterate over details to store them
            foreach ($details as $detail) {
                if (!empty($detail['advantage'])) {
                    // Store each category and number in your database
                    $design->details()->create([
                        'advantage' => $detail['advantage'],
                    ]);
                }
            }

            return redirect()->route('designs.index')->with('success', __('Design created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Design $design)
    {
        if (Auth::user()->can('edit-project')) {
            // dd($project);

            return view('back.design.view', compact('design'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::user()->can('edit-project')) {
            $categories = DesignCategory::where('status', 1)->get();
            $design = Design::with('details')->find($id);
            return view('back.design.edit', compact('design', 'categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (\Auth::user()->can('edit-project')) {
            request()->validate([
                'title'             => 'required|max:191',
                'description'       => 'required',
            ]);
            $design = Design::find($id);
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'required|image|mimes:jpg,png,jpeg,webp',
                ]);
                $old_cover = $design->cover;
                $path           = $request->file('cover')->store('designs');
                $design->cover   = $path;
            }
            $design->title                 = $request->title;
            $design->slug                 = $request->title;
            $design->description           = $request->description;
            $design->design_category          = $request->category_id;


            $design->save();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Store the image and get the path
                    $path = $image->store('design_images');

                    // Update the image path in the design_images table
                    DesignDetailsImages::where('design_id', $design->id)->update([
                        'image' => $path,
                    ]);
                }
            }

            $existingDetailsIds = $design->details->pluck('id')->toArray();
            $details = $request->input('details', []);
            $updatedDetailsIds = [];
            foreach ($details as $detail) {
                if (isset($detail['id'])) {
                    // Update existing details
                    $designDetail = DesignDetails::findOrFail($detail['id']);
                    $designDetail->advantage = $detail['category'];
                    $designDetail->design_id = $detail['number'];
                    $designDetail->save();
                    $updatedDetailsIds[] = $detail['id'];
                } else {
                    // Create new details
                    $newDetail = $design->details()->create([
                        'advantage' => $detail['category'],
                        'design_id' => $detail['number'],
                    ]);
                    $updatedDetailsIds[] = $newDetail->id;
                }
            }
            $detailsToDelete = array_diff($existingDetailsIds, $updatedDetailsIds);
            DesignDetails::destroy($detailsToDelete);

            if (isset($old_cover))
                Storage::delete($old_cover);
            return redirect()->route('designs.index')->with('success', __('projects updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::user()->can('delete-project')) {
            // delete the design with its design_images and design_details
            $design = Design::find($id);
            $design->delete();
            // delete all design_images with design_id $id
            $design_images = DesignDetailsImages::where('design_id', $id)->delete();
            // delete all design_details with design_id $id
            $design_details = DesignDetails::where('design_id', $id)->delete();
            return redirect()->route('designs.index')->with('success', __('Posts deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
