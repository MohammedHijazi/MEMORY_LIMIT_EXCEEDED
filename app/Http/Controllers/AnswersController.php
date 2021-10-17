<?php

namespace App\Http\Controllers;

use App\Events\QuestionAnswered;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnswersController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
    //
    }


    public function store(Request $request)
    {
        $request->merge([
            'user_id'=> Auth::id(),
        ]);

        $answer = Answer::create($request->all());

        event(new QuestionAnswered($answer));



        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
