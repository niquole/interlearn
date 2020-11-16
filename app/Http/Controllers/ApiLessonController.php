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

    public function store(Request $request)
    {
        $request->merge(["user_id" => \Auth::user()->id]);
        Lesson::create($request->all());
    }
    // public function index()
    // {

    //     return Lesson::with(['user' => function ($query) {
    //         $query->with(['user'])->orderBy('created_at', 'desc');
    //     }])->orderBy('created_at', 'desc')->get();

    // }

    // public function show($id)
    // {
    //     return Lesson::where('id', $id)->with(['user' => function ($query) {
    //         $query->with(['user'])->orderBy('created_at', 'desc');
    //     }])->orderBy('created_at', 'desc')->first();

    // }

    // public function latest()
    // {

    //     return Lesson::with(['user' => function ($query) {
    //         $query->with(['user'])->orderBy('created_at', 'desc');
    //     }])->orderBy('created_at', 'desc')->limit(3)->get();
    // }

    // public function store(Request $request)
    // {
    //     $request->merge(["user_id" => \Auth::user()->id]);
    //     Lesson::create($request->all());

    // }

    // public function delete($id)
    // {
    //     return Lesson::destroy($id);
    // }

}
