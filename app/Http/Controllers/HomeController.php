<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \Auth::user()->posts()->orderBy('updated_at', 'DESC')->paginate(5);
        return view('homes/index')->with(['posts' => $posts]);
    }
}
