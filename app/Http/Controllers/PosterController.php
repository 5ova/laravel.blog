<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $posts = Post::with(['category', 'tags'])
            ->latest()
            ->simplePaginate(6);

        return view('home', compact('posts'));
    }

    public function show($id)
    {
        return view('post', [
            'post' => Post::findOrFail($id),
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }


     public function post_tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(6);
        return view('home', compact('posts'));
    }

     public function category($slug)
    {
       $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(6);

        return view('home', compact('posts'));
    }
}
