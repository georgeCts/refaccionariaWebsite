<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Library\Encryption;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;

use App\Video;

class VideosController extends Controller
{
    public function index() {
        $lstVideos = Video::where('deleted', 0)->orderBy('pk_video', 'DESC')->get();
        return View('panel.contents.videos.Index', ['lstVideos' => $lstVideos]);
    }

    public function create() {
        return View('panel.contents.videos.Create');
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/videos/video-crear', 'panel/videos');

        if(FormatValidation::isValidString($request['txtCodigo']) && FormatValidation::isValidString($request['txtTitle'])) {
            
            $lstVideos = Video::where('status', 'PUBLISHED')->where('pk_video', '!=', $request['hddPkVideo'])->where('deleted',0)->get();
            if(sizeof($lstVideos) < 1 || $request['rdEstatus'] != 'PUBLISHED') {
            
                $objVideo = new Video();
                $objVideo->title     = FormatValidation::getValidString($request['txtTitle']);
                $objVideo->url_video = FormatValidation::getValidString($request['txtCodigo']);
                $objVideo->status    = $request['rdEstatus'];
                try {
                    if($objVideo->create()) {
                        $objReturn->setResult(true, Messages::VIDEOS_CREATE_TITLE, Messages::VIDEOS_CREATE_MESSAGE);
                    } else {
                        $objReturn->setResult(false, Errors::VIDEOS_CREATE_03_TITLE, Errors::VIDEOS_CREATE_03_MESSAGE);
                    }
                } catch(Exception $exception) {
                    $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
                } 
            } else {
                $objReturn->setResult(false, Errors::VIDEOS_CREATE_02_TITLE, Errors::VIDEOS_CREATE_02_MESSAGE);
            }
        } else {
            $objReturn->setResult(false, Errors::VIDEOS_CREATE_01_TITLE, Errors::VIDEOS_CREATE_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }

    public function edit($pkVideo) {
        $return = redirect('panel/videos');
        $objVideo = Video::where('pk_video' , $pkVideo)->first();

        if($objVideo != null) {
            $return = View('panel.contents.videos.Edit', ['objVideo' => $objVideo]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objVideo = Video::where('pk_video' , $request['hddPkVideo'])->first();
        $objReturn = new ActionReturn('panel/videos/video-editar/'.$request['hddPkVideo'], 'panel/videos');

        if($objVideo != null) {
            if(FormatValidation::isValidString($request['txtCodigo']) && FormatValidation::isValidString($request['txtTitle'])) {
                
                $lstVideos = Video::where('status', 'PUBLISHED')->where('pk_video', '!=', $request['hddPkVideo'])->where('deleted',0)->get();
                if(sizeof($lstVideos) < 1 || $request['rdEstatus'] != 'PUBLISHED') {

                    $objVideo->title     = FormatValidation::getValidString($request['txtTitle']);
                    $objVideo->url_video = FormatValidation::getValidString($request['txtCodigo']);
                    $objVideo->status    = $request['rdEstatus'];
                    try {
                        if($objVideo->update()) {
                            $objReturn->setResult(true, Messages::VIDEOS_EDIT_TITLE, Messages::VIDEOS_EDIT_MESSAGE);
                        } else {
                            $objReturn->setResult(false, Errors::VIDEOS_EDIT_04_TITLE, Errors::VIDEOS_EDIT_04_MESSAGE);
                        }
                    } catch(Exception $exception) {
                        $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
                    } 
                } else {
                    $objReturn->setResult(false, Errors::VIDEOS_EDIT_03_TITLE, Errors::VIDEOS_EDIT_03_MESSAGE);
                }
            } else {
                $objReturn->setResult(false, Errors::VIDEOS_EDIT_02_TITLE, Errors::VIDEOS_EDIT_02_MESSAGE);
            }
        } else {
            $objReturn->setResult(false, Errors::VIDEOS_EDIT_01_TITLE, Errors::VIDEOS_EDIT_01_MESSAGE);
        }


        return $objReturn->getRedirectPath();
    }
}
