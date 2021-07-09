<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbTestController extends Controller
{
    public function selectUserData(Request $request)
    {
        if ($request->id > 0) {
            $user_data = DB::select('SELECT * FROM user WHERE id='.$request->id);
        } else {
            $user_data = DB::select('SELECT * FROM user');
        }
        $data = [
            'id'=> $request->id,
            'user_data'=> $user_data,
        ];

        return view('index', $data);
    }
}