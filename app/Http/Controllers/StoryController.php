<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoryController extends Controller
{

    public function index(Request $request)
    {
        $data = Story::all();
        return view('admin.stories.index', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = Story::find($id);
        return view('admin.stories.edit', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = Story::create($validated);
        return redirect('/admin/stories');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = Story::find($id)->update($validated);
        return redirect('/admin/stories');
    }

    public function destroy(Request $request, $id)
    {
        $data = Story::find($id)->delete();
        return response()->json($data);
    }
}
