<?php
namespace App\Http\Controllers;


class Home extends Controller
{
    public function index()
    {
        return view('site.home',['title' => 'Home', 'name' => 'Benjamim']);
    }
}
?>