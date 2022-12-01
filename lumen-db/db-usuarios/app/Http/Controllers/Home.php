<?php
namespace App\Http\Controllers;

use App\Models\Post;

class Home extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('site.home',['title' => 'Home', 'posts'=>$posts]);
    }
}
?>
