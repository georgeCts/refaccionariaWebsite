<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Library\Errors;
use App\User;
use Auth;
use Session;
use Redirect;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return Redirect('/panel');
        } else {
            return view("panel.Login");
        }
    }

    public function access(Request $request) {
        if(Auth::attempt(['user'  => $request->user, 'password'  => $request->password])) {
            $this->accessLog();
            return Redirect('/panel');
        } else {
            Session::flash("login_error_title", Errors::LOGIN_01_TITLE);
            Session::flash("login_error_message", Errors::LOGIN_01_MESSAGE);
            return Redirect('/login-panel');
        }
    }

    public function accessLog() {
        $objUser                = User::where('id', Auth::user()->id)->first();
        $objUser->last_access   = date('Y-m-d H:i:s');
        $objUser->save();
    }

    public function logout() {
        if (Auth::check()) {
           Auth::logout();
           Session::flush();
        }
        return Redirect('/login-panel');
   }
}
