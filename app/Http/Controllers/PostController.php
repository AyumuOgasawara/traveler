<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Country;
use App\Models\Category;

class PostController extends Controller
{
    public function create(Country $country,Category $category, $id)
    {
        return view('posts/create')->with(['country' => $country->where('id',$id)->first(), 'categories' => $category->get()]);
    }
    public function store(Request $request,Country $country, $id)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->country_id = $id;
        $post->save();
        return redirect('countries/' . $id)->with(['country' => $country->where('id',$id)->first()]);
    }
}
?>