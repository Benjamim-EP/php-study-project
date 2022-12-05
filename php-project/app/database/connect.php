<?php

function connect()
{
    // PDO::FETCH_OBJ = para vir como objeto  do modo item->nome e não item['nome']
    return new PDO("mysql:host=localhost;dbname=db_lumen",'root','benjamim',[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}

?>