<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class dbTeamController extends Controller
{
    public function selectTeamData(Request $request)
    {
      $auths = Auth::user();
      $user = auth()->user();
      $teamtablej1 = DB::select('SELECT teamName FROM teamtable WHERE NOT EXISTS (SELECT favoritetable.teamName FROM favoritetable,users WHERE favoritetable.teamName = teamtable.teamName) AND category = "J1"');
      $teamtablej2 = DB::select('SELECT teamName FROM teamtable WHERE NOT EXISTS (SELECT favoritetable.teamName FROM favoritetable,users WHERE favoritetable.teamName = teamtable.teamName) AND category = "J2"');
      $teamtablej3 = DB::select('SELECT teamName FROM teamtable WHERE NOT EXISTS (SELECT favoritetable.teamName FROM favoritetable,users WHERE favoritetable.teamName = teamtable.teamName) AND category = "J3"');
      $teamtableFavorite = DB::select('SELECT teamName FROM favoritetable INNER JOIN users ON favoritetable.email = users.email WHERE users.email ='."'".$user->email."'");

        $data = [
            'teamtablej1'=> $teamtablej1,
            'teamtablej2'=> $teamtablej2,
            'teamtablej3'=> $teamtablej3,
            'teamtableFavorite'=> $teamtableFavorite,
        ];
        return view('home',$data);
    }
}