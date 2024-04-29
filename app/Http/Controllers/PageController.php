<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('components.layout.about');
    }

    public function service()
    {
        return view('components.layout.service');
    }

    public function project()
    {
        return view('components.layout.project');
    }

    public function contact()
    {
        return view('components.layout.contact');
    }
}
