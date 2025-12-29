<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::with('posts')->findOrFail($id);

        return view('tag', [
            'tag' => $tag,
            'posts' => $tag->posts,
            'categories' => Category::all(),
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(20);
        return view ('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        Tag::create($request->all());
       $request->session()->flash('success','Тег добавлен');
        return redirect()->route('tags.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view ('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
        ]);
        $tag = Tag::find($id);
        $tag->update($request->all());
         $request->session()->flash('success','Изменения сохранены');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $tag = Tag::find($id);

        if ($tag->posts()->exists()) {
    return redirect()->back()->with('success', 'Тег используется в статьях');
}       
        $tag->delete();
       
        return redirect()->route('tags.index')->with('success','Тег удален');
    }
}
