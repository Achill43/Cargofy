<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WayCreateRequest;
use App\Load;
use App\Point;
use App\Http\Resources\LoadResource;

class WayController extends Controller
{
    public function index()
    {
        return LoadResource::collection(Load::orderBy('id', 'desc')->get());
    }
    public function store(WayCreateRequest $request)
    {
        $newLoad=Load::create($request->all());
        $APoint=Point::create([
            'name' => $request->input('APoint'),
            'data' => $newLoad->created_at,
            'load_id'=>$newLoad->id
            ]);
        $BPoint=Point::create([
            'name' => $request->input('BPoint'),
            'data' => $newLoad->created_at,
            'load_id'=>$newLoad->id
            ]);
        $newLoad['points']=$APoint->name."-".$BPoint->name;
        return ($newLoad);
    }
}
