<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'posts' => Post::latest()->paginate(9),
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }
}
