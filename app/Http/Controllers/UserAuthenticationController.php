<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserAuthenticationController extends Controller
{

    public function loginUser($email,$password){

        $user = new User();
        if($user->login($email,$password)){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
            ->with('messageFailLogin','Email ou senha inexistentes');
        }

    }

    public function logout(){
        session_destroy();
        return redirect()->route('login');
    }

}
