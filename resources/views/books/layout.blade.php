<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Books</title>

    <!--Boostrap Css-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">  
    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
</head>
<body>

<nav class="nav bg-custom">
  <a class="nav-link active" href="{{route('books.index')}}">EBooks</a>
  <a class="nav-link" href="{{route('books.index')}}">Inicio</a>
  <a class="nav-link" href="#">Link</a>
  
</nav>
    
    @yield('content')


    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
</body>
</html>