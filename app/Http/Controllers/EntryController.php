<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;

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
    	return view('entries.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Entry::create($input);
        return back();
    }
    public function show($id)
    {
        $entry = Entry::findOrFail($id);
        return view('entries.show', compact('entry'));

    }
    public function edit($id)
    {
        $entry = Entry::findOrFail($id);
        return view('entries.edit', compact('entry'));

    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $entry = Entry::findOrFail($id);
        $entry->update($input);
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
    public function softDestroy(Request $request, $id)
    {
        $entry = Entry::findOrFail($id);
        $entry->delete($request->all());
        return redirect('/entries/trash');
    }
    public function destroy($id)
    {
        $destroy = Entry::onlyTrashed()->findOrFail($id);
        $destroy->forceDelete($destroy);
        return back();
    }
}

