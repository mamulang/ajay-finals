<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Post::count();
        $Published = Post::where('status', 1)->count();
        $Unpublished = Post::where('status', 0)->count();

        return view('dashboard', compact('total', 'Published', 'Unpublished'));
    }
    
}
