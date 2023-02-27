<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index(Country $country, Category $category, Post $post)
    {
        $first_country = $country->posts()->first();
        $first_category = $category->posts()->first();
        
        $posts = $post->getByCategory($first_category, $first_country);
        
        return view('categories/index')->with(['posts' => $posts, "country" =>$country]);
    }
}