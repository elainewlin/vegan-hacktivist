<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    /**
     * Show the question details page.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $answerQuery = "select text from answers where question_id={$id} order by created_at asc";
        // $answers = DB::select($answerQuery);
        $answers = array(
            "Some answer 1",
            "Some answer 2"
        );

        $questionQuery = "select text from questions where question_id={$id}";
        // $question = DB:select($questionQuery);
        $question = "Some question?";
        return view('question', ['answers' => $answers, 'question' => $question ]);
    }

    /**
     * Store a new answer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        error_log($request->answer);
    }
}