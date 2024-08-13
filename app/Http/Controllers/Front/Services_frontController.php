<?php

namespace App\Http\Controllers\Front;

use App\Facades\UtilityFacades;
use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Services_frontController extends Controller
{
    public function seeAllServices(Request $request)
    {
        // get all services
        $services = Service::with('category')->get();
        $categories = CategoryService::with('services')->get();
        // get testimonial slider data
        $testimonials = Testimonial::take(4)->get();

        // get the brands
        $brands = Statistic::where('id', '>', 29)->get();
        return view('front.services.index', compact('services', 'testimonials', 'brands', 'categories'));
    }

    public function viewService($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);
        // $project = Project::findOrFail($slug);
        // find the project with the slug that matches the slug parameter
        $service = Service::where('slug', $slug)->first();
        // if (!$project) {
        //     $newSlug = str_replace(' ', '-', $slug);
        //     $project       =  Project::where('slug', $newSlug)->first();
        //     if(!$project)
        //     abort(404);
        // }
        $allServices = Service::all();
        $categories = CategoryService::with('services')->get();
        $clientCategory = ClientCategory::with('clients')->take(9)->get();
        // dd($categories_projects);
        // dd($categories);
        return view('front/services.view-service', compact('allServices', 'categories', 'clientCategory', 'service'));
    }

    public function getServicesByCategory($categoryId)
    {
        $services = Service::where('service_category', $categoryId)->paginate(9);
        return response()->json($services);
    }
}
