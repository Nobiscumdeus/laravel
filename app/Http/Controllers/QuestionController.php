<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return Inertia::render('Questions');
        // Inside your controller method
       // $questions = Question::all(); // Assuming you have a Question model
        //return Inertia::render('Questions', ['questions' => $questions]);

        $questions=Question::with('answers')->get();
        return Inertia::render('Questions',[
                'questions'=>$questions
            ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $requestData=$request->all();
        $question=$requestData['question'];

        //Save Question in database ;
        $newQuestion=new Question;
        $newQuestion->question=$question;
        $newQuestion->save();

        $answers=$requestData['answers'];

        forEach($answers as $answer){
            $newAnswer=new Answer;
            $newAnswer->answer=$answer['answer']; //Will pick the correct answer, coming from the frontend

            $newAnswer->question_id=$newQuestion->id;

            $newAnswer->correct_answer=$answer['correct_answer'];
            $newAnswer->save();
        }


        return redirect('/questions')->with('success','Question and answers created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        
        //return $request->all();
        $id=$request['id'];
        $editQuestion=Question::findOrFail($id);
        $editQuestion->question=$request['question'];
        $editQuestion->save();

        return redirect('/questions')->with('success','Question edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
    }
}
