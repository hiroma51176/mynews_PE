<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if($cond_name != ""){
            // 検索されたら検索結果を取得する
            $profiles = Profile::where('name', $cond_name)->get();
        }else{
            // それ以外はすべてのニュースを取得する
            $profiles = Profile::all();
        }
        return view('admin.profile.index', ['profiles' => $profiles, 'cond_name' => $cond_name]);
    }
}
