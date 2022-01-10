<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController
{
    public function getAll(){
        $cat = Book::all();
        return view('User_home', ['cats' => $cat]);
    }

    public function getArt(){
        $cat = "art";
        $cat = Book::where('category', "art")->get();
        return view('User_home', ['cats' => $cat]);
//        return Redirect::back()->withErrors(['cat', $cat]);

//        return redirect()->back()->with([['cat' => $cat]]);

    }
    public function getGeo(){
        $cat = Book::where('category', "geography")->get();
        return view('User_home', ['cats' => $cat]);
    }
    public function getScience(){
        $cat = Book::where('category', "science")->get();
        return view('User_home', ['cats' => $cat]);
    }
    public function getHistory(){
        $cat = Book::where('category', "history")->get();
        return view('User_home', ['cats' => $cat]);
    }
    public function getRel(){
        $cat = Book::where('category', "religion")->get();
        return view('User_home', ['cats' => $cat]);
    }

}
