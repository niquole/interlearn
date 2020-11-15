<?php

namespace App\Http\Controllers;
use App\Models\Quiz;


use Illuminate\Http\Request;

class ApiQuizController extends Controller
{
    public function index()
    {
        return Quiz::all();
    }
}
