<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Sales;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
class SalesController
{
    //check out
    public function buyBook(Request $request){
        $sale = new Sales();
        $sale->ISBN = $request->isbn;
        $price = Book::where('ISBN', $request->isbn)->first();
        $sale->user_id = auth()->user()->id;
        $sale->copies = $request->copies;
        $sale->total_price = $price * $request->copies;
        redirect()->back();
    }
}
