<?php

namespace App\Http\Controllers;

use App\Helpers\Dback;
use App\Models\Option;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function test(Request $request)
    {
        createTags(null);
    }
}
