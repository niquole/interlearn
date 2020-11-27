<?php

namespace App\Http\Controllers;
use App\Models\Quiz; 

use Illuminate\Http\Request;

class ApiQuizController extends Controller
{
    public function index()
    {
        return Quiz::with('user')->orderBy('created_at', 'desc')->get();
    }
    
    public function store(Request $request)
    {
        $request->merge(["user_id" => \Auth::user()->id]);
        
        return Quiz::create($request->all());
    }
}