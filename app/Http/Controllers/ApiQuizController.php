<?php

namespace App\Http\Controllers;
use App\Models\Quiz;


use Illuminate\Http\Request;

class ApiQuizController extends Controller
{
    public function index()
    {
        return Quiz::with('user')->get();
    }
    
    public function store(Request $request)
    {
        $request->merge(["user_id" => \Auth::user()->id]);
        dd($request->all());
        Quiz::create($request->all());
    }

}
            
            
            
            
            
            
            
            
            