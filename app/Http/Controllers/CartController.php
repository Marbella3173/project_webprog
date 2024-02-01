<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $list = Cart::whereBelongsTo(auth()->user())->get();

        $total = 0;
        foreach($list as $item){
            $total += $item->quantity * $item->food->price;
        }

        return view('cart', compact('list', 'total'));
    }

    public function process(Request $request){
        if($request->action == 'delete'){
            return $this->delete($request);
        }else if($request->action == 'more'){
            return $this->more($request);
        }else if($request->action == 'less'){
            return $this->less($request);
        }
    }

    private function delete(Request $request){
        Cart::where([
            'user_id' => auth()->user()->id,
            'food_id' => $request->remove_id
        ])->delete();

        return back();
    }

    private function more(Request $request){
        Cart::where([
            'user_id' => auth()->user()->id,
            'food_id' => $request->food_id
        ])->increment('quantity');

        return back();
    }

    private function less(Request $request){
        $food = Cart::where([
            'user_id' => auth()->user()->id,
            'food_id' => $request->food_id
        ]);
        
        $food->decrement('quantity');

        if($food->get()[0]->quantity <= 0){
            $food->delete();
        }

        return back();
    }
}
