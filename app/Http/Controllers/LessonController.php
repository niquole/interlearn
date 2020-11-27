<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lesson = Lesson::with(['user'])->GET();

        return view("lessons");
        
    }

    public function show($id)
    {
        $lesson = Lesson::where('id', $id)->with(['user'])->orderBy('created_at', 'desc')->first();

        return view("lesson", compact("lesson"));
    }

}
