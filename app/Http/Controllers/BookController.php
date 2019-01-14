<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*nos va a mostar una vista donde nos va a listar todos los libros*/
        $books = Book::paginate(3);/*esto nos permite la paginacion*/
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*validacion de los inputs, que tengan algun dato*/
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::create($request->all());
        /*envia un mensaje al usuario*/    
        Session::flash('message','Libro Creado Correctamente');
        return redirect()->route('books.index');/*nos redirecciona*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
         /*validacion de los inputs, que tengan algun dato*/
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $book->update($request->all());
        Session::flash('message','Libro Actualizado Correctamente');
        return redirect()->route('books.index');/*nos redirecciona*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        Session::flash('message','Libro Borrado Correctamente');
        return redirect()->route('books.index');/*nos redirecciona*/
    }
}
