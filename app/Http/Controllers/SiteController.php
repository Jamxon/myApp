<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Contracts\View\View;
use \Illuminate\Foundation\Application;
use  \Illuminate\Contracts\View\Factory;

class SiteController extends Controller
{
    public function details(): View|Factory|Application
    {
        return view('layouts/details');
    }

    public function notfound(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layouts/404');
    }
    public function contact(): View|Factory|Application
    {
        return view('layouts/contact');
    }
}
