<?php
namespace App\Http\Controllers;

use App\Models\Post;

class Home extends Controller
{
    public function index()
    {
        $posts = Post::all();
        echo $posts;
        return view('site.home',['title' => 'Home', 'name' => 'Benjamim']);
    }
}
?>