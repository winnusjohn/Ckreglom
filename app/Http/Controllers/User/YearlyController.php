<?php

namespace App\Http\Controllers\User;

use App\Model\user\yearly;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YearlyController extends Controller
{
    public function index()
    {
        // $testimonial = testimonial::where('status', 1)->orderBy('created_at', 'DESC');
        $yearly = yearly::where('status', '1')->orderBy('id', 'ASC')->get();
        return view('user.yearly', compact('yearly'));
    }
}
