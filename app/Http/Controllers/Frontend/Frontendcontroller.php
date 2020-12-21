<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index()
    {
        return view('frontend.page_layout.home');
    }
    public function services()
    {
        return view('frontend.single_pages.service');
    }
    public function contactUs()
    {
        return view('frontend.single_pages.contact');
    }
}
