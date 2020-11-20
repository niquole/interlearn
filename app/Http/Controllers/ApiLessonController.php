<?php

namespace App\Http\Controllers;
use App\Models\Lesson;

use Illuminate\Http\Request;

class ApiLessonController extends Controller
{
    public function index()
    {
        return Lesson::with('user')->get();
    }

    // public function store(Request $request)
    // {
    //     $request->merge(["user_id" => \Auth::user()->id]);
    //     Lesson::create($request->all());
    // }
}