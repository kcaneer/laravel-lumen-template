<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        //show json of all of my books
        // create query to get all the books and then do 

        return Book::all();
    }

    public function create()
    {
        //shows a view (form) to create a new book
        //is this postman ? tinker ? react ? 
        Book::factory()->create();
        
    }

    public function read()
    {
        //see the single book that you just created
        $book = Book::find(1);
    }

    public function update(Request $request)
    {
        //edit books already in the database
        $book = new Book;
        $book->title = $request->title;
        $book->save();
    }

    public function delete()
    {
        //delete books from the database
        $book = Book::find(1);
        $book->delete();
    }
}
