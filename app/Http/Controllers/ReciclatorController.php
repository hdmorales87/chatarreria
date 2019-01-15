<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciclator;

class ReciclatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reciclator = new Reciclator;
        //Declaramos el nombre con el nombre enviado en el request
        $reciclator->id_document_type = $request->id_document_type;        
        $reciclator->document         = $request->document;
        $reciclator->first_name       = $request->first_name; 
        $reciclator->last_name        = $request->last_name; 
        $reciclator->address          = $request->address; 
        $reciclator->phone_number     = $request->phone_number;
        $reciclator->mobile_number    = $request->mobile_number;
        $reciclator->id_type_purchase = $request->id_type_purchase;       

        //Guardamos el cambio en nuestro modelo
        $reciclator->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Reciclator::where('id', $id)->get();        
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
