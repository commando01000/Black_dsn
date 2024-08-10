<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Blog_frontController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::paginate(4);
        // dd($allBlogs);
        return view('front.blog.view-all-blogs', compact('blogs'));
    }
    public function view($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);

        $blog = Blog::with(['category', 'comments' => function ($query) {
            $query->with('replies');
        }])->where('slug', $slug)->first();
        // $blog = Blog::with('category')->where('slug', $slug)->first();

        // dd($blog);

        if (!$blog) {
            abort(404);
        }

        $prevBlog = Blog::with('category')
            ->where('id', '<', $blog->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextBlog = Blog::with('category')
            ->where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first();

        //$blogComments = BlogComments::where('blog_id', $blog->id)->get();
        // dd($blogComments);
        // $allBlogs = Blog::where('id', '!=', $blog->id)->get();
        $blog_category = BlogCategory::find($blog->category_id);
        $categories = BlogCategory::with('blogs')->get();
        // dd($blog_category);
        return view('front.blog.view-blog', compact('blog', 'slug', 'lang', 'blog_category', 'prevBlog', 'nextBlog', 'categories'));
    }
}
