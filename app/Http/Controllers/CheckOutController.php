<?php

namespace App\Http\Controllers;

use App\Models\transaction_detail;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Food;

class CheckOutController extends Controller
{
    public function index(){
        return view('checkout');
    }

    public function checkout(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'phoneNum' => 'required|digits:12',
            'country' => 'required|min:5',
            'city' => 'required|min:5',
            'cardName' => 'required|min:3',
            'cardNum' => 'required|digits:16',
            'address' => 'required|min:5',
            'postalCode' => 'required|numeric'
        ]);
        
        $transaction = auth()->user()->transactionHeader()->create();
        $cart = Cart::whereBelongsTo(auth()->user());
        $items = $cart->get();

        foreach($items as $item){
            transaction_detail::create([
                'transaction_header_id' => $transaction->id,
                'food_name' => $item->food->name,
                'food_price' => $item->food->price,
                'quantity' =>  $item->quantity
            ]);
        }

        $cart->delete();
        $success = true;

        $main_course = Food::where('category', 'Main Course')->get();
        $beverages = Food::where('category', 'Beverages')->get();
        $dessert = Food::where('category', 'Dessert')->get();

        return view('home', compact('main_course', 'beverages', 'dessert', 'success'));
    }
}
