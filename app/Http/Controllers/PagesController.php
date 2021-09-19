<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //master page
    public function Home()
    {
        return view('index');
    }
}
