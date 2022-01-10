<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Sales;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $sale->save();
        redirect()->back();
    }

//    public function firstStat(){
//        $sales = Sales::where('date','>=',Carbon::now()->subdays(30))->get(['sales_id', 'ISBN', 'date']);
//        return view('Statistics', ['first' => $sales]);
//    }
//    public function secondStat(){
//        $users = Sales::all()->groupBy('user_id')->orderBy('total_price', 'DESC')->get([
//            'user_id',
//            'total_price'
//        ]);
//        $top = [10];
//        for ($i = 0; $i < count($users) ; $i++){
//            foreach ($users[$i] as $user){
//
//            }
//        }
//
//        return view('Statistics', ['first' => $sales]);
//    }

}
