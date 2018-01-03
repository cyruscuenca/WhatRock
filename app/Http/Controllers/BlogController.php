<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public  function index()
    {
    	// fetch content from database
    	$blogs = Blog::latest()->get();
    	return view('entry.index', compact('blogs'));
    }

    public function create()
    {
    	return view('entry.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return back();
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('entry.show', compact('blog'));

    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('entry.edit', compact('blog'));

    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return redirect('/entry');
    }
    public function trash()
    {
        $deletedBlogs = Blog::onlyTrashed()->get();
        return view('entry.trash', compact('deletedBlogs'));
    }
    public function restore($id)
    {
        $restoredBlogs = Blog::onlyTrashed()->findOrFail($id);
        $restoredBlogs->restore($restoredBlogs);
        return redirect('/entry');
    }
    public function softDestroy(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete($request->all());
        return redirect('/entry/trash');
    }
    public function destroy($id)
    {
        $destroy = Blog::onlyTrashed()->findOrFail($id);
        $destroy->forceDelete($destroy);
        return back();
    }
}

