<?php

namespace app\controllers;

class User
{
    public  function show($params)
    {
        if(!isset($params['user'])){
            return header('Location: /');
        }
        $user = findBy('users','id', $params['user']);
        var_dump($user);
        die();
    }

    public function create(){
        return [
            'view' => 'create.php',
            'data' => ['title' => 'Create']
        ];
    }

    public function store(){
        $validate = validate([
            'firstName' => 'required',
            'lastName'  => 'required',
            'email'     => 'email|unique',
            'password' => 'required|maxlen'
        ]);

        if(!$validate){
            return redirect('/user/create');
        }
    }
}