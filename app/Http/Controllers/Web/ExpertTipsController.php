<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tip;
use View;

class ExpertTipsController extends Controller
{
    public function index() {
        $lstTips = Tip::where('deleted', false)->orderBy('created_at', 'DESC')->get();
        return View::make('contents.ExpertTips', ['lstTips' => $lstTips]);
    }
}
