<?php

namespace App\Http\Controllers;

use Storage;
use Carbon\Carbon;
use App\{Entry, Category, Photo};

class EntryController extends Controller
{
    public  function index()
    {
    	// fetch content from database
    	$entries = Entry::latest()->get();
    	return view('entries.index', compact('entries'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
    	return view('entries.create', compact('categories'));
    }

    public function store()
    {
        $input = request()->all();

        if ($file = request()->file('photo_id')) {
            $directory = 'images';
            $name = uniqid('photo-', true);
            $saved = Storage::disk('public')->put($directory.'/'.$name , $file);
            $photo = request()->file('photo_id')->store('images', 'public');
            $input['photo_id'] = $photo->id;
        }

        $entry = Entry::create($input);
        if ($categoryIds = request()->category_id) {
            $entry->category()->sync($categoryIds);
        }
        return back();
    }
    public function show($id)
    {
        $entry = Entry::findOrFail($id);
        return view('entries.show', compact('entry'));

    }
    public function edit($id)
    {
        $categories = Category::pluck('name', 'id');
        $entry = Entry::findOrFail($id);
        return view('entries.edit', compact('entry', 'categories'));

    }
    public function update($id)
    {
        $input = request()->all();
        $entry = Entry::findOrFail($id);
        $directory = 'images';

        if ($file = request()->file('photo_id')) {

            if ($entry->has('photo'))
            {
                $saved = Storage::disk('public')->put($directory.'/'.$name , $file);
                $photo = request()->file('photo_id')->store('images', 'public');
            }

            $saved = Storage::disk('public')->put($directory.'/'.$name , $file);
            $photo = request()->file('photo_id')->store('images', 'public');
            $input['photo_id'] = $photo->id;
        }

        $entry->update($input);
        if ($categoryIds = request()->category_id) {
            $entry->category()->sync($categoryIds);
        }
        return redirect('/entries');
    }
    public function trash()
    {
        $deletedEntries = Entry::onlyTrashed()->get();
        return view('entries.trash', compact('deletedEntries'));
    }
    public function restore($id)
    {
        $restoredEntries = Entry::onlyTrashed()->findOrFail($id);
        $restoredEntries->restore($restoredEntries);
        return redirect('/entries');
    }
    public function softDestroy($id)
    {
        $entry = Entry::findOrFail($id);
        $categoryIds = request()->category_id;
        $entry->category()->detach($categoryIds);
        $entry->delete(request()->all());
        return redirect('/entries/trash');
    }
    public function destroy($id)
    {
        $destroyedEntry = Entry::onlyTrashed()->findOrFail($id);

        if ($destroyedEntry->photo) {
            unlink('images/' . $destroyedEntry->photo->photo);
            $destroyedEntry->photo()->delete('photo');
        }

        $destroyedEntry->forceDelete($destroyedEntry);
        return back();
    }
}

