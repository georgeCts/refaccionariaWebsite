<?php

namespace App\Http\Controllers\Web;

use App\Slider;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $lstSliders = Slider::where('status', 'PUBLISHED')->where('deleted', 0)->get();
        $lstCategories = Category::where('deleted', 0)->orderBy('created_at', 'DESC')->get();

        return view('contents.Index', ['lstSliders' => $lstSliders, 'lstCategories' => $lstCategories]);
    }
}
