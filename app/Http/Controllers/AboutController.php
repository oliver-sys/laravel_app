<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');

        // Process the data (e.g., save to database, perform actions)

        return view('about', compact('name', 'address', 'phone'));
    }
}
