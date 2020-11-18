<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

use Illuminate\Http\Request;

class CreateQuizController extends Controller
{
    public function index()
    {
        return view('create_quiz');
    }

}
