<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
class PublisherController
{
    public function addPublisher(Request $request)
    {
        $publisher_name = $request->publisher_name;
        $address = $request->address;
        $telephone_no = $request->telephone_no;
        if ($publisher_name != null && $address != null && $telephone_no != null) {
            $publisher = new Publisher();
            $publisher->publisher_name = $publisher_name;
            $publisher->address = $address;
            $publisher->telephone_no = $telephone_no;
            $publisher->save();
        }
        return redirect()->back();
    }
}
