<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BookController
{
    public function getBooks(Request $request): JsonResponse
    {
        $books = Book::all()->orderBy('title', 'ASC')->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function addBook(Request $request)
    {
        $ISBN = $request->ISBN;
        $title = $request->title;
        $publication_year = $request->publication_year;
        $publisher_name = $request->publisher_name;
        $selling_price = $request->selling_price;
        $category = $request->category;
        $quantity = $request->quantity;
        $threshold = $request->threshold;

        if (ISBN != null && $title != null && $publication_year != null && $publisher_name != null &&
            $selling_price != null && $category != null && $quantity != null && $threshold != null) {
            $book = new Book();
            $book->ISBN = $ISBN;
            $book->title = $title;
            $book->publication_year = $publication_year;
            $book->publisher_name = $publisher_name;
            $book->selling_price = $selling_price;
            $book->category = $category;
            $book->quantity = $quantity;
            $book->threshold = $threshold;
            $book->save();
        }

    }

    public function editBook(Request $request)
    {
        $ISBN = $request->ISBN;
        $title = $request->title;
        $publication_year = $request->publication_year;
        $publisher_name = $request->publisher_name;
        $selling_price = $request->selling_price;
        $category = $request->category;
        $quantity = $request->quantity;
        $threshold = $request->threshold;

        $book = Book::where([
            ['ISBN', $ISBN]
        ]);

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
    }

    public function searchByISBN(Request $request)
    {
        $ISBN = $request->ISBN;
        $books = Book::where([
            ['ISBN', $ISBN]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByTitle(Request $request)
    {
        $title = $request->title;
        $books = Book::where([
            ['title', $title]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByPublicationYear(Request $request)
    {
        $publication_year = $request->publication_year;
        $books = Book::where([
            ['publication_year', $publication_year]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByPublisherName(Request $request)
    {
        $publisher_name = $request->publisher_name;
        $books = Book::where([
            ['publisher_name', $publisher_name]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchBySellingPrice(Request $request)
    {
        $selling_price = $request->selling_price;
        $books = Book::where([
            ['selling_price', $selling_price]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByCategory(Request $request)
    {
        $category = $request->category;
        $books = Book::where([
            ['category', $category]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByQuantity(Request $request)
    {
        $quantity = $request->quantity;
        $books = Book::where([
            ['quantity', $quantity]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }

    public function searchByThreshold(Request $request)
    {
        $threshold = $request->threshold;
        $books = Book::where([
            ['threshold', $threshold]
        ])->get([
            'ISBN',
            'title',
            'publication_year',
            'publisher_name',
            'selling_price',
            'category',
            'quantity',
            'threshold']);
        return response()->json($books);
    }
}
