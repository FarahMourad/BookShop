<?php

namespace App\Http\Controllers;

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
        $sale->user_id = auth()->user()->id;
        $sale->copies = $request->copies;
    }
}
