<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function search(Request $request)
    {
        // Retrieve the search query from the request
        $query = $request->input('query');

        // Perform your search logic here
        
        // Example: Get products that match the search query
        $products = Product::where('name', 'like', "%{$query}%")->get();

        // Pass the search results to the view
        return view('search-results', ['products' => $products]);
    }
    //
}
