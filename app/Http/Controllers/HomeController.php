<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \Auth::user()->posts()->orderBy('updated_at', 'DESC')->paginate(5);
        return view('home/index')->with(['posts' => $posts]);
    }
    public function detail(Post $post)
    {
        return view('home/detail')->with(['post' => $post]);
    }
    public function edit(Post $post, Category $category)
    {
        return view('home/edit')->with(['post' => $post, 'categories' => $category->get()]);
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
        return redirect('home/' . $post->id );
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/home');
    }
}
