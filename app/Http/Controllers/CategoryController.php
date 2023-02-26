<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;

class CategoryController extends Controller
{
    public function index(Country $country, Category $category)
    {
        $posts_category = $category->getByCategory();
        
        $posts = collect();
        foreach ($posts_category as $post_category){
            if($post_category->country_id == $country->id)
                $posts->add($post_category);
        }
        return view('categories/index')->with(['posts' => $posts, "country" =>$country]);
    }
}