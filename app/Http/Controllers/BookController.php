<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function createBook(){
        return view('createBook');
    }

    public function storeBook(Request $request){
        Book::create([
            'Name' => $request->Name,
            'PublicationDate' => $request->PublicationDate,
            'Stock' => $request->Stock,
            'Author' => $request->Author,
        ]);
        return redirect('/');
    }

    public function show(){
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('editBook', compact('book'));
    }

    public function update(Request $request, $id){
        Book::findOrFail($id)->update([
            'Name' => $request->Name,
            'PublicationDate' => $request->PublicationDate,
            'Stock' => $request->Stock,
            'Author' => $request->Author,
        ]);
        return redirect('/');
    }

    public function delete($id){
        Book::destroy($id);
        return redirect('/');
    }

}
