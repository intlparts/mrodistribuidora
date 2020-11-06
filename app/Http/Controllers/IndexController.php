<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacturer;
use App\Supplie;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Manufacturer::whereNotIn('name', ['GENERICO', 'generico', 'Fabricante', 'fabricante', ''])
                                   ->take(7)->get();

        $supplies1 = Supplie::orderByRaw('rand()')->take(3)->get();
        $supplies2 = Supplie::orderByRaw('rand()')->take(3)->get();
        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();

        return view('index', compact('suppliers', 'supplies1', 'supplies2', 'supplies_footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $title = 'CONTACTANOS';
        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();
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
        $text = $request->search;

        $items = Supplie::where('number', 'like', "%$text%")->paginate(20);

        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();

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
        $title = 'QUIENES SOMOS';
        $supplies_footer = Supplie::orderByRaw('rand()')->take(2)->get();
        return view('about', compact('title', 'supplies_footer'));
    }
}
