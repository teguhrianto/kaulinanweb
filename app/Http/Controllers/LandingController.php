<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Blog;
use App\Models\Category;

class LandingController extends Controller
{
    public function index()
    {
        // Fetch categories grouped by type (age and general) and limit each group to 4
        $categoriesByAge = Category::where('type', 'age')->take(4)->orderBy('name')->get();
        $categoriesByGeneral = Category::where('type', 'general')->take(4)->orderBy('name')->get();

        // Fetch the features
        $features = Feature::take(4)->get();

        // Fetch the three most recent featured blogs
        $featuredBlogs = Blog::where('is_featured', true)
            ->orderBy('created_at', 'desc') // Order by the creation date in descending order
            ->take(3)
            ->get();

        return view('landing', [
            'categoriesByAge' => $categoriesByAge,
            'categoriesByGeneral' => $categoriesByGeneral,
            'features' => $features,
            'featuredBlogs' => $featuredBlogs
        ]);
    }
}
