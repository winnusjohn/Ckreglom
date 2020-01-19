<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // $testimonial = testimonial::where('status', 1)->orderBy('created_at', 'DESC');
        $testimonial = testimonial::where('status', '1')->orderBy('id', 'DESC')->get();
        return view('user.home', compact('testimonial'));
    }

    // public function testimonial(testimonial $testimonial)
    // {
    //     $testimonial = testimonial::where('status', '1')->first()->orderBy('created_at', 'DESC');
    //     return view('user.home', compact('testimonial'));
    // }
}
