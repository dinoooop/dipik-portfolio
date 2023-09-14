<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GeneralController extends Controller
{
    public function home(Request $request)
    {
        $story = Option::get('story');
        return view('home', [
            'story' => $story
        ]);
    }

    public function blogs(Request $request)
    {
        $blogs = [];
        return view('blogs.index', [
            'story' => $blogs
        ]);
    }

    public function story(Request $request)
    {
        $story = Option::get('story');
        return view('admin.generals.story', [
            'story' => $story
        ]);
    }

    public function store(Request $request)
    {

        if($request->action == 'story'){
            Option::set('story', $request->story);
        }

        
        return redirect('/admin/story');
    }

}
