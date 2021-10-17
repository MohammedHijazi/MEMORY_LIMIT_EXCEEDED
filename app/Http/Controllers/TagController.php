<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($id)
    {
        $tag=Tag::find($id);


        $questions = $tag->questions;


        return view('tag',compact('questions','tag'));
    }
}
