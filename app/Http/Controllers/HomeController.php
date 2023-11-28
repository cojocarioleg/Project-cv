<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $advantages = Advantage::orderBy('id','desc')->take(4)->get();
        return view('web.home.index', compact('advantages'));
    }
}
