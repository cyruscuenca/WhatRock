<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use App\{Entry, Photo, Tag};
use Session;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{

    public function home()
    {
        // fetch entries with status of 2(published) from database
        $entries = Entry::where('status', 2)->latest()->paginate(4);
        $categories = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 5)->pluck('hex');
        return view('index', compact('entries', 'colors', 'categories'));
    }

    public function index()
    {
        // fetch entries with status of 2(published) from database
        $entries = Entry::where('status', 2)->latest()->paginate(12);
        $categories = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 5)->pluck('hex');
        return view('entries.index', compact('entries', 'colors', 'categories'));
    }

    public function search(Request $request)
    {
        if (Entry::where('status', 2)->latest()->paginate(8)){
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
        $categories = Tag::where('type_id', 2)->pluck('name', 'id');
        $colors = Tag::where('type_id', 5)->pluck('name', 'id');
        $streaks = Tag::where('type_id', 4)->pluck('name', 'id');
        $lustres = Tag::where('type_id', 3)->pluck('name', 'id');
        $tags = Tag::where('type_id', 1)->pluck('name', 'id');
       	return view('entries.create', compact('categories', 'colors', 'tags', 'streaks', 'lustres'));
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'min:2', 'max:40', 'unique:entries'],
            'summary' => ['required', 'min:100', 'max:450', 'unique:entries'],
            'body' => ['required', 'min:250', 'max:5000', 'unique:entries'],
            'photo_id' => ['required|image'],
            'photo_id' => ['dimensions:min_width=480,max_width=1920,min_height=480,max_height=1920'],
            'category_id' => ['required'],
            'lustre_id' => ['required'],
            'streak_id' => ['required'],
            'color_id' => ['required'],
            'tag_id' => ['required'],
        ];
        $messages = [
            'photo_id.mimes' => 'Your image must be a .jpg, .jpeg, or a .png',
        ];
        $this->validate($request, $rules, $messages);
        $data = request()->all();
        $data['slug'] = str_slug(request()->title);
        $data['user_id'] = Auth::user()->id;
        //$data['status'] = request()->status;
        if ($file = request()->file('photo_id')) {
            $filename = $file->store('images', 'public');
            $photo = $file->store('images', 'public');

            $data['photo_id'] = Photo::create(['photo' => $photo])->id;
        }
        $entry = Entry::create($data);
        $entry->tag()->detach();
        if ($request->input('category_id') != NULL) {
          $category_id = $request->input('category_id');
          $entry->tag()->attach($category_id);
        }
        if ($request->input('lustre_id') != NULL) {
          $lustre_id = $request->input('lustre_id');
          $entry->tag()->attach($lustre_id);
        }
        if ($request->input('streak_id') != NULL) {
          $streak_id = $request->input('streak_id');
          $entry->tag()->attach($streak_id);
        }
        if (request()->color_id != NULL) {
          $color_id = request()->color_id;
          $entry->tag()->attach($color_id);
        }
        if (request()->tag_id != NULL) {
          $tag_id = request()->tag_id;
          $entry->tag()->attach($tag_id);
        }
        Session::flash('flash_message', 'Your entry has been submitted successfully!');
        return back();
    }
    public function show($slug)
    {
        $entry = Entry::whereSlug($slug)->first();
        return view('entries.show', compact('entry'));
    }
    public function edit($id)
    {
        $categories = Tag::where('type_id', 2)->pluck('name', 'id');
        $colors = Tag::where('type_id', 5)->pluck('name', 'id');
        $streaks = Tag::where('type_id', 4)->pluck('name', 'id');
        $lustres = Tag::where('type_id', 3)->pluck('name', 'id');
        $tags = Tag::where('type_id', 1)->pluck('name', 'id');
        $entry = Entry::findOrFail($id);
        return view('entries.edit', compact('entry', 'categories', 'colors', 'streaks', 'lustres', 'tags'));

    }
    public function update($id, Request $request)
    {
        $rules = [
            'title' => ['required', 'min:2', 'max:40'],
            'summary' => ['required', 'min:100', 'max:400'],
            'body' => ['required', 'min:250', 'max:5000'],
            'photo_id' => 'required|image',
            'category_id' => ['required'],
            'lustre_id' => ['required'],
            'streak_id' => ['required'],
            'color_id' => ['required'],
            'tag_id' => ['required'],
        ];

        $messages = [
            'photo_id.mimes' => 'Your image must be a JPG/JPEG, or a PNG',
        ];
        $this->validate($request, $rules, $messages);
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
