<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function test(Request $request)
    {

        $user = User::find(1)->update([
            'tele' => '253 636',
            'email' => 'john@mail101.com'
        ]);

    }
}
