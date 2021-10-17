<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = DB::table('users')->find($id);
        $questions=DB::table('questions')->where('user_id','=',$id)->get();

        return view('user-profile', compact('user','questions'));
    }
}
