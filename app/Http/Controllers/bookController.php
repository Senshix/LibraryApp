<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\books;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index()
    {
        $books = books::all();
        return view('books.index', ['books' => $books]);
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        // Validation logic for the form fields
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'cover_image' => 'required',
            'publication_date' => 'required|date',
        ]);

        // Create a new book using the form data
        $books = new Books;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->publication_date = $request->published_date;
        $books->description=$request->description;
        $books->cover_image=$request->cover_image;
        $books->save();

        // Redirect to a success page or perform further actions
        
    }
}
