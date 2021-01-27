<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacturer;
use App\Supplie;
use SEO;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        SEO::setTitle('Inicio');
        SEO::setDescription('Empresa dedicada a la venta de piezas mantenimiento, reparación y operaciones 
        en Jalisco');

        $suppliers = Manufacturer::whereNotIn('name', ['GENERICO', 'generico', 'Fabricante', 'fabricante', ''])
                                   ->take(7)->get();

        $supplies1 = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
            ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
            ->where('manufacturers.slug', '<>', '')
            ->where('supplies.slug', '<>', '')
            ->orderByRaw('rand()')
            ->take(3)
            ->get();

        $supplies2 = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
            ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
            ->where('manufacturers.slug', '<>', '')
            ->where('supplies.slug', '<>', '')
            ->orderByRaw('rand()')
            ->take(3)
            ->get();

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();

        return view('index', compact('suppliers', 'supplies1', 'supplies2', 'supplies_footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        SEO::setTitle('Contacto');
        SEO::setDescription('Empresa dedicada a la venta de piezas mantenimiento, reparación y operaciones 
        en Jalisco');

        $title = 'CONTACTANOS';

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();

        return view('contact', compact('title', 'supplies_footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        SEO::setTitle("$request->search - MRO");
        SEO::setDescription('Empresa dedicada a la venta de piezas mantenimiento, reparación y operaciones 
        en Jalisco');

        $text = $request->search;
        $items = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->Where('supplies.number', 'like', "%$text%")
        ->distinct('number')
        ->paginate(20);

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();

        $title = 'BUSCAR: '.strtoupper($text);

        return view('products', compact('items', 'title', 'supplies_footer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        SEO::setTitle('Nosotros');
        SEO::setDescription('Empresa dedicada a la venta de piezas mantenimiento, reparación y operaciones 
        en Jalisco');

        $title = 'QUIENES SOMOS';
        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();
        return view('about', compact('title', 'supplies_footer'));
    }
}
