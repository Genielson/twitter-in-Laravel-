<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserAuthenticationController;
class UserController extends Controller
{

    public function createUser($name,$email,$password){
        $user = new User();
        $user->email = $email;
        $user->username = $name;
        $user->password = $password;
        $user->save();
        $user->login($email,$password);
        return redirect()->route('home');
    }

}
