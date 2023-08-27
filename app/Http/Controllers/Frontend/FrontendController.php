<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.modules.index');
    }

    public function singlePost(){
        return view('Frontend.modules.singlePost');
    }
}
