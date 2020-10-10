<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use View;

class ContactController extends Controller
{
    public function index() {
        $lstLocations = Location::where('deleted', false)->get();
        return View::make('contents.Contacto', ['lstLocations' => $lstLocations]);
    }
}
