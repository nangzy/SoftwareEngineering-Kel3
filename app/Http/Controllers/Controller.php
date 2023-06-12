<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUser($userEmail): \Illuminate\Database\Query\Builder
    {
        return DB::table('users')
            ->select([
                'id',
                'name',
                'email',
                'password',
                'date_of_birth',
                'gender',
                'phone_number'
            ])
            ->where('users.email', '=', $userEmail)
            ->whereNull('deleted_at');
    }

    public function loginUser(Request $request) {
        if (!filter_var($request->user_email, FILTER_VALIDATE_EMAIL)) {
            return $this->loginPage('wrong_email_format');
        }

        $getUser = $this->getUser($request->user_email)->get()->first();

        if (empty($getUser)) {
            return $this->loginPage('login_failed');
        }
        else {
            $checkPassword = Hash::check($request->user_password, $getUser->password);

            if (!$checkPassword) {
                return $this->loginPage('login_failed');
            }
            else {
                // kasih id buat session
                $request->session()->put(
                    'loginUser', $getUser
                );
                $request->session()->regenerate();
                return $this->home();
            }
        }
    }

    public function logout(Request $request) {
        if ($request->session()->has('loginUser')) {
            $request->session()->pull('loginUser');
            return $this->home();
        }

        return $this->home();
    }

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

    public function loginPage($validateUserInput = null){
        return view('signin.login',[
            'validateUserInput' => $validateUserInput
        ]);
    }

    public function home(){
        return view('home',[
            'active' => 'home'
        ]);
    }

    public function userProfile(){
        return view('userProfile',[
            'active' => 'user_profile'
        ]);
    }
}
