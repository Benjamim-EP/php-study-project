<?php

return [
        '/' => 'Home@index', // quando estiver em '/' chama o controller Home e o metodo index dentro de Home
        '/user/create' => 'User@create',
        '/user/[0-9]+' => 'User@show',
        '/user/[0-9]+/name/[a-z]+' => 'User@create'
];
