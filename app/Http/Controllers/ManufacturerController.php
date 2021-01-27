<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacturer;
use App\Supplie;
use SEO;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Manufacturer::paginate(20);

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();

        $title = 'FABRICANTES';

        return view('manufacturers', compact('items', 'title', 'supplies_footer'));
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
    public function show($name)
    {
        $fabricante = Manufacturer::where('slug', $name)->first();
        SEO::setTitle($fabricante->name);
        SEO::setDescription("Piezas $fabricante->name de la mejor calidad y disposición a su servicio");
        $items =  Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers_id', $fabricante->id)
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->distinct()
        ->paginate(20);

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();

        $title = strtoupper($fabricante->name);

        return view('products', compact('items', 'title', 'supplies_footer'));
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
