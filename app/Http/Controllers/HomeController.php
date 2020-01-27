<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Category;
use App\Mail\postDeleteMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showPost($id)
    {
      $post = Post::findOrFail($id);
      return view('pages.showPost', compact('post'));
    }
    public function deletePost($id)
    {
      $post = Post::findOrFail($id);
      $post -> delete();
      Mail::to('mia@mail.it') -> send(new postDeleteMail($post -> title,$post-> category -> name));
      return redirect() -> route('category.index', compact('post'));
    }
}
