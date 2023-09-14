<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UploadController extends Controller
{

    public function index(Request $request)
    {
        $query = Upload::query();
        $query->orderBy('id', 'desc');
        $data['uploads'] = $query->paginate();
        return view('admin.upload.index', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = Upload::find($id);
        return view('admin.upload.edit', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.upload.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required',
            'url_two' => 'sometimes',
        ]);

        createPubDir('uploads');
        $url = $request->file('url')->store('public/uploads');
        $validated['url'] = basename($url);
        
        $data = Upload::create($validated);
        return redirect('/admin/uploads');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'url' => 'required',
            'url_two' => 'sometimes',
        ]);

        $data = Upload::find($id)->update($validated);
        return redirect('/admin/uploads');
    }

    public function destroy(Request $request, $id)
    {
        $data = Upload::find($id)->delete();
        return response()->json($data);
    }
}
