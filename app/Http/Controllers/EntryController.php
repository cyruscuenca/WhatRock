<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use App\{Entry, Photo, Tag};

class EntryController extends Controller
{

    public function index()
    {
        // fetch entries with status of 1(published) from database
        $entries = Entry::where('status', 1)->latest()->paginate(12);
        $categories = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 5)->pluck('hex');
        return view('entries.index', compact('entries', 'colors', 'categories'));
    }

    public function search(Request $request)
    {
        if (Entry::where('status', 1)->latest()->paginate(8)){
            $term = $request->get('term');
            $entries = Entry::where(function($query) use ($request) {
            if($term = $request->get('term')) {
                $query->orWhere('title', 'like', '%' . $term . '%');
            }
            })
            ->orderBy("id", "desc")
            ->paginate(8);
            return view('search.index', compact('entries' , 'term'));
        }
    }

    public function create()
    {
        $categories = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 4)->pluck('name');
        $streaks = Tag::where('type_id', 5)->pluck('name');
        $lustres = Tag::where('type_id', 3)->pluck('name');
        $tags = Tag::where('type_id', 1)->pluck('name');
       	return view('entries.create', compact('categories', 'colors', 'tags', 'streaks', 'lustres'));
    }

    public function store()
    {
        $data = request()->all();
        $data['slug'] = str_slug(request()->title);

        if ($file = request()->file('photo_id')) {
            $photo = $file->store('images', 'public');
            $data['photo_id'] = Photo::create(['title' => $photo, 'photo' => $photo])->id;
        }

        $entry = Entry::create($data);

        if ($categoryIds = request()->category_id) {
            $entry->tag()->sync($categoryIds);
        }

        if ($colorIds = request()->color_id) {
            $entry->tag()->sync($colorIds);
        }

        if ($lustreIds = request()->lustre_id) {
            $entry->tag()->sync($lustreIds);
        }

        if ($streakIds = request()->streak_id) {
            $entry->tag()->sync($streakIds);
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
        $categories = Tag::where('type_id', 2)->lists('name', 'id');
        $colors = Tag::where('type_id', 4)->lists('name', 'id');
        $streaks = Tag::where('type_id', 5)->lists('name', 'id');
        $lustres = Tag::where('type_id', 3)->lists('name', 'id');
        $entry = Entry::findOrFail($id);
        return view('entries.edit', compact('entry', 'categories', 'colors', 'streaks', 'lustres'));

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
        if ($colorIds = request()->color_id) {
            $entry->color()->sync($colorIds);
        }
        if ($streakIds = request()->streak_id) {
            $entry->streak()->sync($streakIds);
        }
        if ($lustreIds = request()->lustre_id) {
            $entry->lustre()->sync($lustreIds);
        }
        return redirect('/entries');
    }
    public function publish(Request $request, $id)
    {
        $input = $request->all();
        $entry = Entry::findOrFail($id);
        $entry->update($input);
        return back();
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
