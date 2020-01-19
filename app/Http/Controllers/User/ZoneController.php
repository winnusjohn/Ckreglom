<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\zone;
use App\Model\user\category;

class ZoneController extends Controller
{
    public function index()
    {
        // $yearly = yearly::where('status', '1')->orderBy('id', 'ASC')->get();
        // return view('user.yearly', compact('yearly'));
        $zones = zone::where('status', '1')->orderBy('created_at', 'ASC')->get();
        $categories = category::all();
        return view('user.zone', compact('zones', 'categories'));
    }

    // public function category(category $category)
    // {
    //     $categories = $category->zones();
    //     return view('user.zone', compact('categories'));
    // }
}
