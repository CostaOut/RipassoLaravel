<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate(
            [
                "email" => ["required","email"],
                "password" => ["required"],
            ]);
        
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            return $user->createToken('app')->plainTextToken;
        } else {
            return "Stronzo hai sbagliato, ahahah coglione";
        }
    }


}
