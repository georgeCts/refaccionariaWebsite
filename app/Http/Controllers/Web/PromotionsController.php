<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Promotion;

class PromotionsController extends Controller
{
    public function index() {
        $lstPromotions = Promotion::where('is_promotion', true)
                            ->where('status', 'PUBLISHED')
                            ->where('deleted', false)
                            ->get();

        $lstOffers = Promotion::where('is_promotion', false)
                            ->where('status', 'PUBLISHED')
                            ->where('deleted', false)
                            ->get();

        return view('contents.Promociones', ['lstPromotions' => $lstPromotions, 'lstOffers' => $lstOffers]);
    }
}
