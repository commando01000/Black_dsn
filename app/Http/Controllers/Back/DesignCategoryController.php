<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\DesignCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignCategoryController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('manage-category')) {
            $categories = DesignCategory::paginate(10);
            // dd($categories);
            return view('back/design-category.index', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function create()
    {
        if (Auth::user()->can('create-category')) {
            return view('back/design-category.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function store(Request $request)
    {
        if (Auth::user()->can('create-category')) {
            request()->validate([
                'name'   => 'required|max:191|unique:blog_categories',
                'status' => 'required',
            ]);
            DesignCategory::create([
                'name'   => $request->name,
                'status' => $request->status
            ]);
            return redirect()->route('design-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }



    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = DesignCategory::find($id);
            return view('back/design-category.edit', compact('category'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function update(Request $request, $id)
    {
        if (Auth::user()->can('edit-category')) {
            request()->validate([
                'name' => 'required|max:191',
                'status' => 'required',
            ]);
            $category = DesignCategory::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->update();
            return redirect()->route('design-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function destroy($id)
    {
        if (Auth::user()->can('delete-category')) {
            $category = DesignCategory::find($id);
            $category->delete();
            return redirect()->route('design-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function projectCategoryStatus(Request $request, $id)
    {
        $category = DesignCategory::find($id);
        $input          = ($request->value == "true") ? 1 : 0;
        if ($category) {
            $category->status = $input;
            $category->save();
        }
        return response()->json(['is_success' => true, 'message' => __('Category status changed successfully.')]);
    }
}
