<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        $mydata = ['amina', 'williams', 'joseph', 'peter', 'ebube', 'innocent'];
        return Inertia::render('Home' , ['mydata' => $mydata]);
    }

    public function about()
    {
        return Inertia::render('About');
    }
}
