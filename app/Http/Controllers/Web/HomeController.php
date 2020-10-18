<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class HomeController extends Controller
{
    public function index() {
        $lstSliders = Slider::where('status', 'PUBLISHED')->where('deleted', 0)->get();

        return view('contents.Index', ['lstSliders' => $lstSliders]);
    }
}
