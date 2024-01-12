<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller{
    public function index()
    {
        $books = Book::all();
        $totalBooks = $books->count();
        return view('Book.index', compact('books','totalBooks'));
    }
    public function create()
    {
        $books = Book::all();
        return view('Book.create', compact('books'));
    }
    public function store(BookRequest $request)
    {
        $Book = new Book();
        $Book->book_name = $request['book_name'];
        $Book->isbn = $request['isbn'];
        $Book->author = $request['author'];
        $Book->genre = $request['genre'];
        $Book->page_count = $request['page_count'];
        $Book->publication_year	 = $request['publication_year'];
        $Book->save();

        return redirect()->route('book.index')->with('success', 'Thêm thành công!');
    }
    public function edit($id)
    {
        $book = Book::find($id);
        return view('Book.edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->book_name = $request->book_name;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->page_count = $request->page_count;
        $book->publication_year = $request->publication_year;
        $book->save();

        return redirect()->route('book.index')->with('success', 'Sửa thành công!');
    }
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Xóa thành công!');
    }
}

