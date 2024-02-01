<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class HomeController extends Controller
{
    public function index(Request $request){
        $main_course = Food::where('category', 'Main Course')->get();
        $beverages = Food::where('category', 'Beverages')->get();
        $dessert = Food::where('category', 'Dessert')->get();
        return view('home', compact('main_course', 'beverages', 'dessert'));
    }
}
