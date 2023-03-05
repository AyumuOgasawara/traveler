<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(Country $country)
    {
        return view('countries/index')->with(['countries' => $country->get()]);
    }
    public function show($code)
    {
        $country = Country::where("code", $code)->get();
        return view('countries/show')->with(['country' => $country[0], 'posts' => $country[0]->posts()->orderBy('updated_at', 'DESC')->paginate(5)]);
    }
}