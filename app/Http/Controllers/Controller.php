<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function signup(){
        return view('signin.signup',[

        ]);
    }

    public function signupConfirm(){
        return view('signin.signup-confirm',[

        ]);
    }

    public function forgotpw(){
        return view('signin.forgotpw',[

        ]);
    }

    public function forgotpwConfirm(){
        return view('signin.forgotpw-confirm',[

        ]);
    }

    public function loginPage(){
        return view('signin.login',[

        ]);
    }
    public function home(){
        return view('home',[
            
        ]);
    }

    public function userProfile(){
        return view('userProfile',[
            
        ]);
    }
}
