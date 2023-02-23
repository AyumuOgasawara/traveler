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
        $validated = $request->validate([
                'title' => 'required|max:255',
                'body' => 'required|max:4000',
                'category_id' => 'required',
            ]);
            
        $post = new Post();
        $post->fill([
                'title' => $validated('title'),
                'body' => $validated('body'),
                'category_id' => $validated('category_id'),
                'country_id' => $id,
            ])->save();
        return redirect('countries/' . $id)->with(['country' => $country->where('id',$id)->first()]);
    }
}
?>