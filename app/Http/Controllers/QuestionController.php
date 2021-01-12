<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Show the home page for submitting a question.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('home');
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