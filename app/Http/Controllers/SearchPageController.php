<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    public function search_global(Request $request)
    {   
        $query = $request->query('q');
        return view('searchglobal', [
            'slimHeader' => true,
            'query' => $query,
            'results' => array()
        ]);
    }

    public function search_finance(Request $request)
    {
        return response()->json($request->query());
    }
}
