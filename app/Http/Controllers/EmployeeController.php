<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with(["city","document_type"])->paginate(10);
        return view('layouts/list', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        if($employee){
            $employee->refresh();
            return view("layouts.element",compact('employee'));
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
        $employee = Employee::where('id_employee',$id)->with(["city","document_type"])->first();
        if($employee){
            return view("layouts.element",compact('employee'));
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
        $employee = Employee::find($id);
        if($employee){
            if($employee->id_job_position == 1){
                abort(401);
            }
            if($employee->fill($request->all())->save()){
                $employee = Employee::where('id_employee',$id)->with(["city","document_type"])->first();
                var_dump($employee->toArray());die;
                if($employee){
                    return view("layouts.element",compact('employee'));
                }else{
                    abort(401,"Not Found");
                }
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
        $employee = Employee::find($id);
        if($employee){
            if($employee->id_job_position == 1){
                abort(401);
            }
            if($employee->delete()){
                $employees = Employee::paginate(10);   
                return view("layouts/list",compact('employees'));
            }else{
                abort(401,"Not Found");
            }
        }else{
            abort(401,"Not Found");
        }
    }
}
