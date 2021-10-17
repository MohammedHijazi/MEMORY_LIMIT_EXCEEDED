<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    public function question_vote(Request $request){
        $request->merge([
           'user_id'=>Auth::id(),
           'votable_type'=>'question'
        ]);
        $ccs=Votes::where('user_id',Auth::id())->pluck('votable_id')->toArray();
        $flag=true;
        foreach ($ccs as $c){
            if ($c == $request->post('votable_id')){
                $flag=false;
                break;
            }
        }
        if(request('vote')=='up'){
            $request->merge(['score'=>+1]);
            if ($flag){
                Votes::create($request->except('vote'));
            }
        }else{
            $request->merge(['score'=>-1]);
            if ($flag){
                Votes::create($request->except('vote'));

            }
        }
        return redirect()->back();
    }

    public function answer_vote(Request $request){
        $request->merge([
            'user_id'=>Auth::id(),
            'votable_type'=>'answer'
        ]);
        $ccs=Votes::where('user_id',Auth::id())->pluck('votable_id')->toArray();
        $flag=true;
        foreach ($ccs as $c){
            if ($c == $request->post('votable_id')){
                $flag=false;
                break;
            }
        }
        if(request('vote')=='up'){
            $request->merge(['score'=>+1]);
            if ($flag){
                Votes::create($request->except('vote'));
            }
        }else{
            $request->merge(['score'=>-1]);
            if ($flag){
                Votes::create($request->except('vote'));

            }
        }
        return redirect()->back();
    }
}
