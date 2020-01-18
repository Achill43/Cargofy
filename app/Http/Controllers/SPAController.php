<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Way;

class SPAController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function test(){
        $ways=Way::get();
        $data=json_encode($ways);
        return view('testForm');
        //return ($data);
    }
    public function testForm(Request $request){
        $debug=array();
        $rules=[
            'APoint'=>'string|max:100|min:3',
            'BPoint'=>'string|max:100|min:3',
            'product'=>'string|max:100|min:3',
            'weight'=>'required|between:0,99.99',
        ];
        $validationData=$this->validate($request, $rules);
        return view('testM', array(
            'validationData'=>$validationData
        ));
    }
}
