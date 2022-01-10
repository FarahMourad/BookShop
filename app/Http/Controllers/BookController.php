<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class BookController
{
    public function getBooks(Request $request): JsonResponse
    {
        $books = Book::all()->orderBy('title', 'ASC')->get();
        return response()->json($books);
    }

    public function addBook(Request $request)
    {
        $publisher_name = $request->publisher_name;
        $publisher = Publisher::where([
            ['publisher_name', $publisher_name]
        ])->first();
        if ($publisher == null) {
            return;
        }
        $ISBN = $request->ISBN;
        $title = $request->title;
        $publication_year = $request->publication_year;
        $selling_price = $request->selling_price;
        $category = $request->category;
        $quantity = $request->quantity;
        $threshold = $request->threshold;
        $authors = $request->authors;

        if (ISBN != null && $title != null && $publication_year != null && $publisher_name != null &&
            $selling_price != null && $category != null && $quantity != null && $threshold != null && $authors != null) {
            $book = new Book();
            $book->ISBN = $ISBN;
            $book->title = $title;
            $book->publication_year = $publication_year;
            $book->publisher_name = $publisher_name;
            $book->selling_price = $selling_price;
            $book->category = $category;
            $book->quantity = $quantity;
            $book->threshold = $threshold;
            $this->addAuthors($authors, $ISBN);
            $book->save();
        }
        redirect()->back();
    }

    public function editBook(Request $request)
    {
        $publisher_name = $request->publisher_name;
        $publisher = Publisher::where([
            ['publisher_name', $publisher_name]
        ])->first();
        if ($publisher == null) {
            return;
        }
        $ISBN = $request->ISBN;
        $title = $request->title;
        $publication_year = $request->publication_year;
        $selling_price = $request->selling_price;
        $category = $request->category;
        $quantity = $request->quantity;
        $threshold = $request->threshold;
        $authors = $request->authors;
        $this->deleteAuthors($ISBN);
        $this->addAuthors($authors, $ISBN);

        $book = Book::where([
            ['ISBN', $ISBN]
        ])->first();
        redirect()->back();
        if ($book != null) {
            $book->title = $title != null ? $title : $book->title;
            $book->publication_year = $publication_year != null ? $publication_year : $book->publication_year;
            $book->publisher_name = $publisher_name != null ? $publisher_name : $book->publisher_name;
            $book->selling_price = $selling_price != null ? $selling_price : $book->selling_price;
            $book->category = $category != null ? $category : $book->category;
            $book->quantity = $quantity != null ? $quantity : $book->quantity;
            $book->threshold = $threshold != null ? $threshold : $book->threshold;
            $book->save();
        }
        redirect()->back();
    }

    public function addAuthors($authors, $ISBN)
    {
        $authors_list = explode(',', $authors);
        for ($i = 0; $i < $authors_list->count($authors); $i++) {
            $newAuthor = new Author();
            $newAuthor->ISBN = $ISBN;
            $newAuthor->author_name = $authors_list[$i];
            $newAuthor->save();
        }
        redirect()->back();
    }

    public function deleteAuthors($ISBN)
    {
        $old_authors = Author::where([
            ['ISBN', $ISBN]
        ])->get();
        $old_authors->delete();
        redirect()->back();
    }

    public function searchByISBN(Request $request)
    {
        $ISBN = $request->ISBN;
        $books = Book::where([
            ['ISBN', $ISBN]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByTitle(Request $request)
    {
        $title = $request->title;
        $books = Book::where([
            ['title', $title]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByPublicationYear(Request $request)
    {
        $publication_year = $request->publication_year;
        $books = Book::where([
            ['publication_year', $publication_year]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByPublisherName(Request $request)
    {
        $publisher_name = $request->publisher_name;
        $books = Book::where([
            ['publisher_name', $publisher_name]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchBySellingPrice(Request $request)
    {
        $selling_price = $request->selling_price;
        $books = Book::where([
            ['selling_price', $selling_price]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByCategory(Request $request)
    {
        $category = $request->category;
        $books = Book::where([
            ['category', $category]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByQuantity(Request $request)
    {
        $quantity = $request->quantity;
        $books = Book::where([
            ['quantity', $quantity]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }

    public function searchByThreshold(Request $request)
    {
        $threshold = $request->threshold;
        $books = Book::where([
            ['threshold', $threshold]
        ])->get();
        $user = auth()->user();
        if($user->is_manager == 1){
            return view('Admin_home', ['cats' => $books]);
        } else
            return view('User_home', ['cats' => $books]);
//        return response()->json($books);
    }
}
