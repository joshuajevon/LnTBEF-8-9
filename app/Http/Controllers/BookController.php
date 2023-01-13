<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function createBook(){
        $categories = Category::all();
        return view('createBook', compact('categories'));
    }

    public function storeBook(Request $request){
        Book::create([
            'Name' => $request->Name,
            'PublicationDate' => $request->PublicationDate,
            'Stock' => $request->Stock,
            'Author' => $request->Author,
            'Category_Id' => $request->CategoryName
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
