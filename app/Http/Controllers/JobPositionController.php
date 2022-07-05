<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPositionRequest;
use App\Models\JobPosition;
use Illuminate\Http\Request;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPositions = JobPosition::with('job_position')->paginate(10);
        return view('layouts/list', compact('jobPositions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobPositionRequest $request)
    {
        $jobPosition = JobPosition::create($request->all());
        if($jobPosition){
            $jobPosition->refresh();
            return view("layouts.element",compact('jobPosition'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobPosition = JobPosition::find($id);
        if($jobPosition){
            return view("layouts.element",compact('jobPosition'));
        }else{
            abort(401,"Not Found");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jobPosition = JobPosition::find($id);
        if($jobPosition){
            if($jobPosition->id_job_position == 1){
                abort(401);
            }
            if($jobPosition->fill($request->all())->save()){
                return view("layouts.element",compact('jobPosition'));
            }else{
                abort(401,"Not Found");
            }

        }else{
            abort(401,"Not Found");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobPosition = JobPosition::find($id);
        if($jobPosition){
            if($jobPosition->id_job_position == 1){
                abort(401);
            }
            if($jobPosition->delete()){
                $jobPositions = JobPosition::paginate(10);   
                return view("layouts/list",compact('jobPositions'));
            }else{
                abort(401,"Not Found");
            }
        }else{
            abort(401,"Not Found");
        }
    }
}
