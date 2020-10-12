<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;
use App\Job;
use App\Location;

class JobsController extends Controller
{
    public function index() {
        $lstJobs = Job::where('deleted', 0)->orderBy('created_at', 'DESC')->get();
        return view('panel.contents.jobs.Index', ['lstJobs' => $lstJobs]);
    }

    public function create() {
        $lstLocations = Location::where('deleted', false)->orderBy('id', 'DESC')->get();
        return view('panel.contents.jobs.Create', ['lstLocations' => $lstLocations]);
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/bolsa-trabajo/trabajo-crear', 'panel/bolsa-trabajo');

        $objJob = new Job();
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
        }

        return $objReturn->getRedirectPath();
    }

    public function edit($id) {
        $return = redirect('panel/bolsa-trabajo');
        $objJob = Job::where('id', $id)->first();

        if($objJob != null) {
            $lstLocations = Location::where('deleted', false)->orderBy('id', 'DESC')->get();
            $return = view('panel.contents.jobs.Edit', ['objJob' => $objJob, 'lstLocations' => $lstLocations]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objReturn = new ActionReturn('panel/bolsa-trabajo/trabajo-editar/'.$request['hddIdJob'], 'panel/bolsa-trabajo');

        $objJob = Job::where('id', $request['hddIdJob'])->first();

        if($objJob != null) {
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
        }

        return $objReturn->getRedirectPath();
    }
}
