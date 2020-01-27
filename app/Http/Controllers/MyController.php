<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class MyController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('pages.index', compact('categories'));
  }
}
