<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;
use App\Promotion;

class PromotionsController extends Controller
{
    public function index() {
        $lstPromotions = Promotion::where('deleted', 0)->orderBy('created_at', 'DESC')->get();
        return view('panel.contents.promotions.Index', ['lstPromotions' => $lstPromotions]);
    }

    public function create() {
        return view('panel.contents.promotions.Create');
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/promociones/promocion-crear', 'panel/promociones');

        /* $objJob = new Job();
        $objJob->title      = $request['txtTitle'];
        $objJob->slug       = $request['txtSlug'];
        $objJob->body       = $request['txtBody'];
        $objJob->status     = $request['rdEstatus'];

        try {
            if($objJob->save()) {
                $objReturn->setResult(true, Messages::JOBS_CREATE_TITLE, Messages::JOBS_CREATE_MESSAGE);
            } else {
                $objReturn->setResult(false, Errors::JOBS_CREATE_01_TITLE, Errors::JOBS_CREATE_01_MESSAGE);
            }
        } catch(Exception $exception) {
            $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
        } */

        return $objReturn->getRedirectPath();
    }

    public function edit($id) {
        $return = redirect('panel/promociones');
        $objPromotion = Promotion::where('id', $id)->first();

        if($objPromotion != null) {
            $return = view('panel.contents.promotions.Edit', ['objPromotion' => $objPromotion]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objReturn = new ActionReturn('panel/promociones/promocion-editar/'.$request['hddIdJob'], 'panel/promociones');

        /* $objTip = Tip::where('id', $request['hddIdPromotion'])->first();

        if($objTip != null) {
            $objJob->title      = $request['txtTitle'];
            $objJob->slug       = $request['txtSlug'];
            $objJob->body       = $request['txtBody'];
            $objJob->status     = $request['rdEstatus'];

            try {
                if($objJob->update()) {
                    $objReturn->setResult(true, Messages::JOBS_EDIT_TITLE, Messages::JOBS_EDIT_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::JOBS_EDIT_02_TITLE, Errors::JOBS_EDIT_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
            }
        } else {
            $objReturn->setResult(false, Errors::JOBS_EDIT_01_TITLE, Errors::JOBS_EDIT_01_MESSAGE);
        } */

        return $objReturn->getRedirectPath();
    }
}
