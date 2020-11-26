<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quiz = Quiz::with(['user'])->GET();
        return view("quizzes");
    }
    
    // public function single()
    // {
    //     $quiz = Quiz::with(['user'])->GET();
    //     return view("quiz");
    // }
    
    public function show($id)
    {
        $quiz = Quiz::where('id', $id)->with(['user'])->orderBy('created_at', 'desc')->first()
        // => function ($query) {
            // $query->with(['user'])->orderBy('created_at', 'desc');
        ;

        return view("quiz", compact("quiz"));
    }
}