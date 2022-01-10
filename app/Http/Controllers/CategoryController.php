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
    public function getAllAdimin(){
        $cat = Book::all();
        return view('Admin_home', ['cats' => $cat]);
    }
    public function getArtAdmin(){
        $cat = "art";
        $cat = Book::where('category', "art")->get();
        return view('Admin_home', ['cats' => $cat]);
    }

    public function getGeoAdmin(){
        $cat = Book::where('category', "geography")->get();
        return view('Admin_home', ['cats' => $cat]);
    }
    public function getScienceAdmin(){
        $cat = Book::where('category', "science")->get();
        return view('Admin_home', ['cats' => $cat]);
    }
    public function getHistoryAdmin(){
        $cat = Book::where('category', "history")->get();
        return view('Admin_home', ['cats' => $cat]);
    }
    public function getRelAdmin(){
        $cat = Book::where('category', "religion")->get();
        return view('Admin_home', ['cats' => $cat]);
    }
    

    public function getArt(){
        $cat = "art";
        $cat = Book::where('category', "art")->get();
        return view('User_home', ['cats' => $cat]);
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
