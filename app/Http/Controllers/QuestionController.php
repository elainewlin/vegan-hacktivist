<?php

namespace App\Http\Controllers;

use \Datetime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Show the home page for submitting a question.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $randomQuestions = array(
            "What is your favorite color?",
            "Do you like unicorns?",
            "What is the weather in Topeka?"
        );
        $randomIndex = array_rand($randomQuestions);
        $random = $randomQuestions[$randomIndex];

        $query = "SELECT text, id FROM questions ORDER BY created_at DESC";
        error_log($query);
        // $questions = DB::select($query);
        $questions = array(
            array("Some question?", 1),
            array("Some question 2?", 2)
        );
        return view("home", ["random" => $random, "questions" => $questions ]);
    }

    /**
     * Store a new question.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        $date = new DateTime();
        $createdAt = $date->getTimestamp();

        $queryArr = [
            "text" => $request->question,
            "createdAt" => $createdAt
        ];
        // DB::insert("INSERT INTO questions (text, created_at) VALUES (:text, :createdAt)", $queryArr);
        return redirect()->back();
    }
}