<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('site.login', ['title' => 'Login']);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email|unique:users',
            'password'=> 'required'
        
        ]);

        $user = User::where('email',$request->input('email')->first());

        if(!user){
            return response()->json(['message'=>'Ocorreu um erro'],401);
        }
    }
}