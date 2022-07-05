<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate(10);

        return view("layouts/list",compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
        $city = City::create($request->all());
        //$city->created_at = now();
        if($city){
            $city->refresh();
            return view("layouts.element",compact('city'));
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
        $city = City::find($id);
        if($city){
            return view("layouts.element",compact('city'));
        }else{
            return view("error",401);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
        $city = City::find($id);
        if($city){
            if($city->fill($request->all())->save()){
                return view("layouts.element",compact('city'));
            }else{
                return view("error",401);
            }

        }else{
            return response()->json([
                'res' => false,
                'message' => 'Not found'
            ]);
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
        $city = City::find($id);
        if($city){
            if($city->delete()){
                $cities = City::paginate(10);   
                return view("layouts/list",compact('cities'));
            }else{
                return view("error",401);
            }
        }else{
            return response()->json([
                'res' => false,
                'message' => 'Not found'
            ]);
        }
    }
}
