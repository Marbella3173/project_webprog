<?php

namespace App\Http\Controllers;

use App\Models\transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\transaction_header;


class TransactionController extends Controller
{
    public function index(){
        $transaction_header = transaction_header::whereBelongsTo(auth()->user())->get();

        if(sizeof($transaction_header) == 0){
            $transaction = [];
            return view('transaction', compact('transaction'));
        }

        $transaction = transaction_detail::whereBelongsTo($transaction_header)->get();
        return view('transaction', compact('transaction'));
    }
}
