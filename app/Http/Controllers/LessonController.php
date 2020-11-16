<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $quiz = Lesson::with(['user'])->GET();
        return view("lessons");
        
    }
}
