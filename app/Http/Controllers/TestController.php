<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class TestController extends Controller
{
    public function test()
    {
    	$suppliers = Supplier::where('id', 1046)->get();

    	return response()->json($suppliers);
    }
}
