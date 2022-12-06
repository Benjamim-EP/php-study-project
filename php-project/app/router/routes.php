<?php

return [
        'POST' => [
            '/login' => 'Login@store',
            '/user/store' => 'user@store'
        ],
        'GET' => [
            '/' => 'Home@index', // quando estiver em '/' chama o controller Home e o metodo index dentro de Home
            '/user/create' => 'User@create',
            '/user/[0-9]+' => 'User@show',
            '/login' => 'Login@index',
            '/logout' => 'Login@destroy',
            
        ]
        
];
