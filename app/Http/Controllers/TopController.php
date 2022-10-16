<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function index() {
        return view('top');
    }

    public function html_css() {
        $items = Items::latest()->get();
        return view('html_css', compact('items'));
    }
}
