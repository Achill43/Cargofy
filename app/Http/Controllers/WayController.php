<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WayCreateRequest;
use App\Way;

class WayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ways=Way::orderBy('id', 'desc')->get();
        $data=json_encode($ways);
        return ($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(WayCreateRequest $request)
    {
        $debug=array();
        $debug['status']="success";
        $newWay=new Way;
        $newWay->APoint=$request['APoint'];
        $newWay->BPoint=$request['BPoint'];
        $newWay->product=$request['product'];
        $newWay->weight=$request['weight'];
        $debug['newWay']=$newWay;
        $newWay->save();
        /**/
        $data=json_encode($debug);
        return ($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
