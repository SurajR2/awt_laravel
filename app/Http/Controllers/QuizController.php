<?php

namespace App\Http\Controllers;
use App\Models\Question;

use Illuminate\Http\Request;

class QuizController extends Controller
{
   public function index()
    {
        // Get a random question from the database
        $question = Question::inRandomOrder()->first();

        // Pass the question to the view
        return view('quiz.index', compact('question'));
    }

    public function showAnswer(Request $request)
    {
        // Validate the request
        $request->validate([
            'question_id' => 'required|exists:question,id',
        ]);

        // Get the answer for the specified question
        $answer = Question::findOrFail($request->input('question_id'))->answer;

        // Return the answer (you might want to return it as JSON in a real application)
        return view('quiz.answer', compact('answer'));
    }
}
