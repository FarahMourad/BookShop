<?php

namespace App\Http\Controllers;

use App\Models\Book;

class CategoryController
{
    public function getArt(){
        $cat = "art";
        $cat = Book::where('category', $cat)->get();
        return redirect()->back()->with(['cat' => $cat]);

    }
    public function getGeo(){
        $cat = Book::where('category', "geography")->get();
        return redirect()->back()->with(['cat' => $cat]);
    }
    public function getScience(){
        $cat = Book::where('category', "science")->get();
        return redirect()->back()->with(['cat' => $cat]);
    }
    public function getHistory(){
        $cat = Book::where('category', "history")->get();
        return redirect()->back()->with(['cat' => $cat]);
    }
    public function getRel(){
        $cat = Book::where('category', "religion")->get();
        return redirect()->back()->with(['cat' => $cat]);
    }

}
