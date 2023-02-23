<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Country;
use App\Models\Category;
use Cloudinary;

class PostController extends Controller
{
    public function create(Country $country,Category $category, $id)
    {
        return view('posts/create')->with(['country' => $country->where('id',$id)->first(), 'categories' => $category->get()]);
    }
    public function store(PostRequest $request,Country $country, $id)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $post = new Post();
        $post->fill([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $image_url,
                'category_id' => $request->category_id,
                'country_id' => $id,
            ])->save();
        return redirect('countries/' . $id)->with(['country' => $country->where('id',$id)->first()]);
    }
}
?>