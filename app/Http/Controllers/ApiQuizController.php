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

    // public function edit($id)
    // {
    //     return view('project.edit',[

    //         'project' => Quiz::find($id)
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request)
    // {
    //     $project = Quiz::find($request->id);
    //     $project->project_name = $request->input('title');
    //     $project->description = $request->input('description');
    //     $project->save();

    //     return  redirect('/')->with('success', 'Project aangepast');
    // }

}
            
            
            
            
            
            
            
            
            