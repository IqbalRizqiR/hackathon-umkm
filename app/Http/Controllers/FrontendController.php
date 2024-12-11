<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $slider = Slider::all();
        $timedeals = Carbon::createFromFormat('Y-m-d H:i', '2024-12-13 11:59')->timestamp;
        $posts = Post::all();
        return view('pages.user.index', compact('product', 'slider', 'timedeals', 'posts'));
    }

    public function shop()
    {
        $product = Product::all();
        return view('pages.user.shop', compact('product'));
    }
}