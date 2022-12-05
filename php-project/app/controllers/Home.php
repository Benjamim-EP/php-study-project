<?php
namespace app\controllers;

class Home
{
    public function index($params){
        $users = all('users');
        //var_dump($users);
        //die();
        return[
            'view' => 'home.php',
            'data' => ['title'=> 'Home','users' => $users]
        ];
    }
}