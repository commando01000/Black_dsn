<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        if (\Auth::user()->can('manage-category')) {
            $categories = CategoryService::paginate(5);
            return view('back/service-category.index', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function create()
    {
        if (\Auth::user()->can('create-category')) {
            return view('back/service-category.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function show(CategoryService $service_category)
    {
        if (\Auth::user()->can('edit-project')) {
            // dd($project);

            return view('back/service-category.view', compact('service_category'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-category')) {
            request()->validate([
                'name'   => 'required|max:191|unique:blog_categories',
                'status' => 'required',
            ]);
            $path = "";
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'mimes:jpg,jpeg,png,gif',
                ]);
                $path = $request->file('cover')->store('services');
            }
            CategoryService::create([
                'name'   => $request->name,
                'description' => $request->description,
                'status' => $request->status,
                'cover' => $path
            ]);
            return redirect()->route('service-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }



    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = CategoryService::find($id);
            return view('back/service-category.edit', compact('category'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-category')) {
            request()->validate([
                'name' => 'required|max:191',
                'status' => 'required',
            ]);
            $category = CategoryService::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->description = $request->description;
            $old_cover = $category->cover;
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'image|mimes:jpg,png,jpeg,svg,webp',
                ]);
                $path = $request->file('cover')->store('services');
                $category->cover = $path;
            } else {
                $category->cover = $old_cover;
            }

            $category->update();
            return redirect()->route('service-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function destroy($id)
    {
        if (\Auth::user()->can('delete-category')) {
            $category = CategoryService::find($id);
            $category->delete();
            return redirect()->route('service-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function serviceCategoryStatus(Request $request, $id)
    {
        $category = CategoryService::find($id);
        $input          = ($request->value == "true") ? 1 : 0;
        if ($category) {
            $category->status = $input;
            $category->save();
        }
        return response()->json(['is_success' => true, 'message' => __('Category status changed successfully.')]);
    }
}
