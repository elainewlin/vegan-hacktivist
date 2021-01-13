<?php

namespace App\Http\Controllers;

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
            'What is your favorite color?',
            'Do you like unicorns?',
            'What is the weather in Topeka?'
        );
        $randomIndex = array_rand($randomQuestions);
        $random = $randomQuestions[$randomIndex];

        $query = 'select text, id from questions order by created_at desc';
        // $questions = DB::select($query);
        $questions = array(
            array("Some question?", 1),
            array("Some question 2?", 2)
        );
        return view('home', ['random' => $random, 'questions' => $questions ]);
    }

    /**
     * Store a new question.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        error_log($request->question);
        return view('home');
    }
}