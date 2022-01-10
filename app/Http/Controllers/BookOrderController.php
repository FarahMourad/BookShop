<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_order;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
class BookOrderController
{
    public function placeOrder(Request $request)
    {
        $user_id = auth()->user()->id;
        $ISBN = $request->ISBN;
        $publisher_name = $request->publisher_name;
        $quantity = $request->quantity;

        $order = new Book_order();
        $order->ISBN = $ISBN;
        $order->publisher_name = $publisher_name;
        $order->quantity = $quantity;
        $order->save();
    }

    public function confirmOrder(Request $request)
    {
        $order = Book_order::where('id', $request->order_id)->first();
        $order->delete();
        $this->confirmOrderPage();
    }
    public function confirmOrderPage()
    {
        $cat = Book_order::all();
        return view('Confirm', ['cats' => $cat]);
    }

}
