<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return Slider::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Slider::create(
            [
                'name' => $request->get('name'),
                'src' => $request->get('src')
            ]
        );

        return $slider;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
        // $slider = Slider::where('id', $id)->get()->first();
        return $slider;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $slider->update($request->all());

        return $slider;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        $deleted = $slider->delete();

        if($deleted){
            return [
                'success'=> true
            ];
        }else {
           return [
           'success'=> false
           ];
        }
    }

    public function filter(){
         $name = Input::get('name');

         return Slider::where('name', 'like', '%' . $name. '%')->get();
    }
}