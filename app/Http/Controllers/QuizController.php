<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quiz = Quiz::with(['user'])->GET();
        return view("quizzes",  compact("quiz"));
        
    }
    
}
