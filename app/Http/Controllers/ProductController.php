<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
	/*
 	 *	Find a product, according the typed phrase
 	 *  @param Request $request
 	 *  return $products
	 */
	public function find(Request $request){

		// Get the typed search 
		$search = $request->input('search');

		// Using a raw query, for find a product
		$products = DB::select(
			DB::raw("SELECT * FROM products WHERE description LIKE '%" .$search. "%';")
		);

		// Rendering data to view
		return view('app.details.list', ['products' => $products]);
		
	}
}
