<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $data = Blog::all();
        return view('admin.blog.index', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        return view('admin.blog.edit', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'sometimes',
            'image' => 'sometimes',
            'status' => 'required',
        ]);

        $validated['user_id'] = gcuid();
        $validated['slug'] = Str::slug($validated['title'], '-');

        $data = Blog::create($validated);
        return redirect('/admin/blogs');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'sometimes',
            'image' => 'sometimes',
            'status' => 'required',
        ]);

        $validated['slug'] = Str::slug($validated['title'], '-');

        $data = Blog::find($id)->update($validated);
        return redirect('/admin/blogs');
    }

    public function destroy(Request $request, $id)
    {
        $data = Blog::find($id)->delete();
        return response()->json($data);
    }

    public function blogs(Request $request)
    {
        $data = Blog::all();
        return view('blog.index', ['data' => $data]);
    }
}
