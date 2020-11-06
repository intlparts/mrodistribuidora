<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplie;
use App\Manufacturer;

class SupplieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Supplie::paginate(20);

        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();

        $title = 'PRODUCTOS';

        return view('products', compact('items', 'title', 'supplies_footer'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($number)
    {
        $supplie = Supplie::where('number', $number)->first();

        $fabricante = Manufacturer::where('id', $supplie->manufacturers_id)->first();
        $supplies = Supplie::where('manufacturers_id', $fabricante->id)->orderByRaw('rand()')->take(4)->get();

        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();


        $title = strtoupper($number);
        return view('product', compact('supplie', 'supplies', 'title', 'supplies_footer'));
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
