<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateQuizController extends Controller
{
    public function index()
    {
        return view('create_quiz');
    }
}
