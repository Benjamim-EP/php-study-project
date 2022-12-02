<?php
namespace App\Http\Controllers;

use App\Models\Post;
//use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index()
    {
        //dd(Auth::user());

        $posts = Post::with('user')->get();
        return view('site.home',['title' => 'Home', 'posts'=>$posts]);
    }
}
?>
