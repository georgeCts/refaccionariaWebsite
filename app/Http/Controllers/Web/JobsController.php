<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use View;

class JobsController extends Controller
{
    public function index() {
        $lstJobs = Job::where('deleted', false)->where('status', 'PUBLISHED')->orderBy('created_at', 'DESC')->get();
        return View::make('contents.BolsaTrabajo', ['lstJobs' => $lstJobs]);
    }
}
