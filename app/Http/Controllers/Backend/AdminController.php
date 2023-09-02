<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminpanel()
    {
        
        return view('Backend.adminpanel');
    }
    public function home() {
        
        return view('Container.Home.home1');
    }
    public function about() {
        
        return view('Container.about');
    }
}
