<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FoodController extends Controller
{
    public function add(Request $request){
        if(!Gate::allows('admin')){
            abort(403);
        }

        return view('add');
    }

    public function detail($id){
        $food = Food::find($id);

        if(isset($food)){
            return view('detail', compact('food'));
        }else{
            abort(404);
        }
    }

    public function order($id){
        $food = Food::find($id);

        if(!isset($food)){
            abort(404);
        }

        $check = Cart::where([
            'user_id' => auth()->user()->id,
            'food_id' => $id
        ]);

        if(sizeof($check->get()) > 0){
            $check = $check->more('quantity');
            $success = true;

            return view('detail', compact('success', 'food'));
        }

        auth()->user()->cart()->create([
            'food_id' => $id,
            'quantity' => 1
        ]);

        $success = true;
        return view('detail', compact('success', 'food'));
    }

    public function store(Request $request)
    {
        if(!Gate::allows('admin')){
            abort(403);
        }

        $request->validate([
            'name' => 'required|min:5',
            'brief_desc' => 'required|max:100',
            'full_desc' => 'required|max:255',
            'category' => 'required',
            'price' => 'required|gt:0',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/assets/Food/', $filename, 'public');

        Food::create([
            'name' => $request->name,   
            'brief_desc' => $request->brief_desc,  
            'full_desc' => $request->full_desc, 
            'category' => $request->category,
            'price' => $request->price,   
            'image' => $filename
        ]);

        $success = true;
        return view('add', compact('success'));
    }

    public function manage_index(Request $request){
        if(empty($request->all())){
            if(Gate::allows('admin')){
                return view('manage');
            }else{
                abort(403);
            }
        }else{
            return $this->manage_search($request);
        }
    }

    public function manage_search(Request $request){
        if(!Gate::allows('admin')){
            abort(403);
        }
        
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
        return view('manageresult', compact('product', 'last_query', 'category'));
    }

    public function update_index($id){
        if(!Gate::allows('admin')){
            abort(403);
        }

        $food = Food::find($id);

        if(!isset($food)){
            abort(404);
        }

        return view('update', compact('food'));
    }
    
    public function update(Request $request, $id)
    {
        if(!Gate::allows('admin')){
            abort(403);
        }

        $request->validate([
            'name' => 'required|min:5',
            'brief_desc' => 'required|max:100',
            'full_desc' => 'required|max:255',
            'category' => 'required',
            'price' => 'required|gt:0',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $food = Food::find($id);
        if(!isset($food)){
            abort(404);
        }

        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/assets/Food/', $filename, 'public');

        $food->name = $request->name;   
        $food->brief_desc = $request->brief_desc;   
        $food->full_desc = $request->full_desc;   
        $food->category = $request->category;   
        $food->price = $request->price;   
        $food->image = $filename;
        
        $food->save();
        $success = true;
        return view('update', compact('food', 'success'));
    }

    public function destroy(Request $request)
    {
        if(!Gate::allows('admin')){
            abort(403);
        }
        
        $request->validate([
            'delete' => 'required'
        ]);

        $item = Food::find($request->delete);
        if(!isset($item)){
            abort(403);
        }

        try {
            $item->delete();
        } catch (\Exception $th) {
            return back();
        }

        return back();
    }
}
