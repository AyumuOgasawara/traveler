<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;

class UserController extends Controller
{
    public function contributer($code, User $user)
    {
        $country = Country::where("code", $code)->get();
        return view('user/contributer')->with(['country'=>$country[0], 'posts' => $user->posts()->orderBy('updated_at', 'DESC')->paginate(3)]);
    }
}
