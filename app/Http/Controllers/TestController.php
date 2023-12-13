<?php

namespace App\Http\Controllers;

use App\Helpers\Dback;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test(Request $request)
    {

        
        // echo config('database.connections.mysql.prefix');
        // $dbackObj = new Dback();
        // $dbackObj->printer();
        $latestSqlFile = storage_path('app/dback/2023-11-22-07-35-08.sql');
        if (Storage::exists('dback/2023-11-22-07-35-08.sql')) {
            // The file exists in the storage directory
            echo "File exists!";
        }

    }
}
