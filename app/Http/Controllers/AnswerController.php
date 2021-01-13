<?php

namespace App\Http\Controllers;

use \Datetime;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
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
        $queryArr = [ "id" => $id ];
        // $answers = DB::select("SELECT text FROM answers WHERE question_id=:id ORDER BY created_at ASC", $queryArr);
        $answers = array(
            "Some answer 1",
            "Some answer 2"
        );

        // $question = DB::select("SELECT text FROM questions WHERE question_id=:id", $queryArr);
        $question = "Some question?";
        return view("question", [
            "answers" => $answers,
            "question" => $question,
            "questionId" => $id
        ]);
    }

    /**
     * Store a new answer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        $date = new DateTime();
        $createdAt = $date->getTimestamp();

        $queryArr = [
            "text" => $request->answer,
            "createdAt" => $createdAt,
            "questionId" => $request->questionId
        ];
        // DB::insert("INSERT INTO answers (text, created_at, question_id) VALUES (:text, :createdAt, :questionId)", $queryArr);
        return redirect()->back();
    }
}