<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Post;

class CategoryController extends Controller
{
    public function posts_category(Country $country, Category $category, Post $post)
    {
        $posts = $post->getByCategory($category, $country);
        
        return view('categories/posts_category')->with(['posts' => $posts, "country" =>$country]);
    }
    public function home_category(Category $category, Post $post)
    {
        
        $user_id = \Auth::id();
        $posts = $post->getByCategory_home($category, $user_id);
     
        
        return view('categories/home_category')->with(['posts' => $posts]);
    }
}