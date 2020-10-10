<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use View;

class LocationsController extends Controller
{
    public function index() {
        $lstLocations = Location::where('deleted', false)->orderBy('id', 'DESC')->get();
        return View::make('panel.contents.locations.Index', ['lstLocations' => $lstLocations]);
    }

    public function create() {
        return View::make('panel.contents.locations.Create');
    }

    public function store() {

    }

    public function edit($id) {
        $objLocation = Location::find($id);
        return View::make('panel.contents.locations.Edit', ['objLocation' => $objLocation]);
    }
}
