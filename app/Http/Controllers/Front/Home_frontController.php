<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\advertisement;
use App\Models\Blog;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Design;
use App\Models\Project;
use App\Models\Faq;
use App\Models\Leadership;
use App\Models\MenuSetting;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Testimonial;

class Home_frontController extends Controller
{
    public function index()
    {
        // get last 6 designs designs
        $designs = Design::first()->take(6)->get();
        // get 3 statistics
        $statistics = Statistic::take(3)->get();
        $services = Service::take(3)->get();
        // get the one before the latest design
        $latestDesign = Design::latest()->first();
        $about = Design::where('id', '<', $latestDesign->id)->latest()->first();
        // get testimonial slider data
        $testimonials = Testimonial::take(6)->latest()->get();
        // dd($testimonials);
        $blogs = Blog::with('category')->latest()->take(6)->get();

        // get brands data
        $brands = Statistic::take(8)->latest()->get();
        return view('front.home.index', compact('designs', 'statistics', 'services', 'about', 'testimonials', 'blogs', 'brands'));
    }
    public function getProjectsByCategory($categoryId)
    {
        $projects = Project::where('project_category', $categoryId)->latest()->take(6)->get();
        return response()->json($projects);
    }
    public function PrivacyPolicy()
    {
        return view('front.policy.index');
    }
}
