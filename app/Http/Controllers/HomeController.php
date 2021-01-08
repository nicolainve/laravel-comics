<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('dc-database');

        // Gen Slugs for comics url (friendly url)

        foreach ($comics as $key => $comic) {
            $slug = Str::slug($comic['title'], '-');
            $comics[$key]['slug'] = $slug;
        }

        return view('home', compact('comics'));
    }
}
