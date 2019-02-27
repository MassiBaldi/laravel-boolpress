<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
  public function index() {
    $posts = Post::get()->sortByDesc('created_at')->take(5);
    return view('home', compact('posts'));
  }
}
