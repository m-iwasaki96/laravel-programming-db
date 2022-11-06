<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class TopController extends Controller
{
    
    public function index() {
        return view('login2');
    }

    public function register() {
        return view('register2');
    }

    public function html_css() {
        $items = Items::latest()->get();
        return view('/categories.html_css', compact('items'));
    }
}
