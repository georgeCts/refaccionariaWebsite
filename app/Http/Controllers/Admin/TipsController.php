<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;
use App\Tip;

class TipsController extends Controller
{
    public function index() {
        $lstTips = Tip::where('deleted', 0)->orderBy('created_at', 'DESC')->get();
        return view('panel.contents.expert-tips.Index', ['lstTips' => $lstTips]);
    }

    public function create() {
        return view('panel.contents.expert-tips.Create');
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/tips/tip-crear', 'panel/tips');

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
        $return = redirect('panel/tips');
        $objTip = Tip::where('id', $id)->first();

        if($objTip != null) {
            $return = view('panel.contents.expert-tips.Edit', ['objTip' => $objTip]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objReturn = new ActionReturn('panel/tips/tip-editar/'.$request['hddIdJob'], 'panel/tips');

        /* $objTip = Tip::where('id', $request['hddIdTip'])->first();

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
