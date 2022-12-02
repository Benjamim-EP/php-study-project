<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class Login extends Controller
{
    public function index()
    {
        return view('site.login', ['title' => 'Login']);
    }
    public function store(Request $request)
    {
        $user = User::where('email',$request->input('email'))->first();
        
        $this->validate($request, [
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password'=> 'required'
        
        ]);

        
        if(!$user){
            return response()->json(['message'=>'Ocorreu um erro'],401);
        }
        if (!password_verify($request->input('password'), $user->password)) {
            return response()->json(['message' => 'senha invalida'],401);
        }
        
        $_SESSION['userId'] = $user->id;
        return response()->json(['message' =>'logado com sucesso'],200);
    }
}