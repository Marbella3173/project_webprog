<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class SearchController extends Controller
{
    public function index(Request $request){
        if(empty($request->all())){
            return view('search');
        }else{
            return $this->search($request);
        }
    }

    public function search(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $last_query = $request->search;

        $category = [
            'Main Course' => $request->main,
            'Beverages' => $request->beverage,
            'Dessert' => $request->dessert
        ];

        $categories = [];

        foreach($category as $key => $value){
            if(!$value){
                continue;
            }

            $categories[] = $key;
        }

        $product = Food::where("name", "LIKE", "%$request->search%")->whereIn('category', $categories)->get();
        return view('searchresult', compact('product', 'last_query', 'category'));
    }
}
