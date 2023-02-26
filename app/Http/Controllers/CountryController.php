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
    public function show(Country $country)
    {
        return view('countries/show')->with(['country' => $country, 'posts' => $country->posts()->orderBy('updated_at', 'DESC')->paginate(5)]);
    }
    
}