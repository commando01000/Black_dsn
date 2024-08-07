<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\Leadership;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Testimonial;
use Illuminate\Support\Facades\App;

class About_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);
        $testimonials = Testimonial::all();
        $leaderships = Leadership::get();
        $about = Statistic::where('title', 'about')->first();
        $statistics = Statistic::where('title', 'statistics')->first();
        $allBlogs = Blog::take(3)->get();
        $services = Service::paginate(6);
        $brands = Statistic::take(8)->latest()->get();
        return view('front.about-us.index', compact('lang', 'testimonials', 'leaderships', 'about', 'statistics', 'allBlogs', 'services', 'brands'));
    }
    public function team_detail($id)
    {

        $teamMember = Leadership::where('id', $id)->first();
        return view('front.team-details.index', compact('teamMember'));
    }
}
