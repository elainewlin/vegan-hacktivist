<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Show the question details page.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('question');
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
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }
}