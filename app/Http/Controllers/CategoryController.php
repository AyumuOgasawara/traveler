<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index(Country $country, Category $category, Post $posts)
    {
        $first_country = $country->posts()->first();
        $first_category = $category->posts()->first();

        
        $posts = Post::where("category_id", "=", $first_category->category_id)->where("country_id", "=", $first_country->country_id)->orderBy('updated_at', 'DESC')->paginate(1);
        
        return view('categories/index')->with(['posts' => $posts, "country" =>$country]);
    }
}