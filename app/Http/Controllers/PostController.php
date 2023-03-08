<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Country;
use App\Models\Category;
use App\Models\User;
use Cloudinary;

class PostController extends Controller
{
    public function create(Country $country,Category $category)
    {
        return view('posts/create')->with(['country' => $country, 'categories' => $category->get()]);
    }
    
    public function store(PostRequest $request,Country $country)
    {
        $input = [
                'title' => $request->title,
                'body' => $request->body,
                'user_id' => \Auth::id(),
                'category_id' => $request->category_id,
                'country_id' => $country->id,
            ];
            
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image' => $image_url];
        }
        
        $post = new Post();
        $post->fill($input)->save();
        return redirect('countries/' . $country->code );
    }
    
    public function detail(Post $post)
    {
        return view('posts/detail')->with(['post' => $post]);
    }
    
    public function edit(Post $post, Category $category)
    {
        
        return view('posts/edit')->with(['post' => $post, 'categories' => $category->get()]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = [
                'title' => $request->title,
                'body' => $request->body,
                'user_id' => \Auth::id(),
                'category_id' => $request->category_id,
                'country_id' => $post->country_id,
            ];
            
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image' => $image_url];
        }
        
        $post->fill($input)->save();
        return redirect('countries/' . $post->country->code );
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/countries/' . $post->country->code );
    }
}
?>