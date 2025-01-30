<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IngatlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ingatlan::with("category")->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'category'=> 'integer|required|exists:categories,id',
            'leiras' => 'string',
            'hirdetesDatuma' => 'date',
            'tehermentes'=> 'boolean|required',
            'ar'=>'integer|required',
            'kepUrl'=>'string',
            
        ]);
        if($validator->fails()){
            return response()->json(['message'=>'Hiányos adatok'], 400);
        }
        $ingatlan= Ingatlan::create($request->all());
        return response()->json(['Id'=>$ingatlan->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingatlan $ingatlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingatlan $ingatlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingatlan $ingatlan)
    {
        //
    }
}
