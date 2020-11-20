<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lesson = Lesson::with(['user'])->GET();
        return view("lessons",  compact("lesson"));
        
    }

}
