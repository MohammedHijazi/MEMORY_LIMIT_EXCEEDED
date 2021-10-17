<?php

namespace App\Http\Controllers;


use App\Models\Answer;
use App\Models\Question;
use App\Models\Tag;
use App\Models\User;
use App\Models\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::with('User')->orderBy('created_at','DESC')->get();
        $answers=Answer::with('Question')->get();
        $tags=Tag::all();
        return view('index', compact('questions','tags','answers'));
    }


    public function create()
    {
        $tags= Tag::all();
        $question = new Question();
        return view('create', compact('question','tags'));
    }


    public function store(Request $request)
    {
        $userId=Auth::id();
        $request->merge([
            'status' => 'open',
            'user_id'=> $userId,
        ]);
        DB::beginTransaction();
        try {
            $question = Question::create($request->except('tags'));

            $tags = request('tags');
            if ($tags) {
                $tags_array = explode(',', $tags);
                foreach ($tags_array as $tag_name) {
                    $tag_name = trim($tag_name);
                    $tag = Tag::where('name', $tag_name)->first();
                    if (!$tag) {
                        $tag = Tag::create([
                            'name' => $tag_name
                        ]);
                    }
                    DB::table('question_tag')->insert([
                        'question_id' => $question->id,
                        'tag_id' => $tag->id
                    ]);
                    }
            }
            DB::commit();
        }
        catch (Throwable $e){
            DB::rollBack();
            return view('404');
        }



        return redirect()->route('questions.index')
            ->with('success', 'Question posted');
    }


    public function show($id)
    {
        $question = Question::with('User')->withoutGlobalScope('active')->findOrFail($id);
        $answers=Answer::with('User')->get();
        $tags=$question->tags;
        $qscores=Votes::where('votable_id',$id)->get();
        $ascores=Votes::where('votable_type','answer')->get();
        $qvote_count=0;
        foreach ($qscores as $s){
            $qvote_count+=$s->score;
        }





        return view('details',[
            'question'=>$question,
            'answers'=>$answers,
            'tags'=>$tags,
            'qscore'=>$qvote_count,
            'ascores'=>$ascores
        ]);

    }


    public function edit($id)
    {
        $tags= Tag::all();
        $question = Question::withoutGlobalScope('active')->findOrFail($id);
        return view('edit_question', [
            'question' => $question,
            'tags'=>$tags,
        ]);
    }


    public function update(Request $request, $id)
    {
        $question = Question::withoutGlobalScope('active')->findOrFail($id);

        $question->update( $request->all() );

        return redirect()->route('questions.show',$question->id)
            ->with('success', "Question ($question->name) updated.");
    }


    public function destroy($id)
    {
        $question = Question::withoutGlobalScope('active')->findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')
            ->with('success', "Question deleted.");
    }


    public function search(Request $request){
        $query=$request->get('search');
        $result = Question::where('title','LIKE','%'.$query.'%')->get();
        return view('search',[
            'questions'=>$result,
            'query'=>$query
        ]);
    }
}
