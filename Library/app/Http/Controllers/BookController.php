<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function submit(BookRequest $request)
    {

        $book = new Book();
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->pageCount = $request->input('pageCount');

        $book->save();

        return redirect()->route('hall')->with('success', 'Книга успешно добавлена!');
    }

    public function allBook()
    {
        $book = new Book;
        //$book->orderBy('id', 'desc')->skip(1)->take(1)->get()
        return view('books', ['data' => $book->all()]);
    }

    public function showOneBook($id)
    {
        $book = new Book;
        return view('one-book', ['data' => $book->find($id)]);
    }

    public function bookUpdate($id)
    {
        $book = new Book;
        return view('update-book', ['data' => $book->find($id)]);
    }

    public function bookUpdateSubmit($id, BookRequest $request)
    {

        $book = Book::find($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->pageCount = $request->input('pageCount');

        $book->save();

        return redirect()->route('book-getBook-one', $id)->with('success', 'Книга успешно обновлена!');
    }

    public function bookDelete($id)
    {
        Book::find($id)->delete();
        return redirect()->route('book-getBook')->with('success', 'Книга удалена');
    }
}
