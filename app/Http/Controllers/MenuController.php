<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // 以下の記述を追加
    public function menu()
    {
        return view('menu');
    }
    // ここまで
}