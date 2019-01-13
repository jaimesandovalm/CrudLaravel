@extends('books.layout')

    @section('content')
<h1 class="text-center">LIBROS</h1><br>
        @if(Session::has('message'))
            <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif

<div class="container">
        <a class="btn btn-info mb-3" href="{{route('books.create')}}">+ Agregar Libros</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td><a class="btn btn-info" href="{{route('books.edit',$book->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>

    {{ $books->links() }} <!--esto nos permite la paginacion-->
</div>

    @endsection