<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Book</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-book">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-book">View Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-buyer">View buyer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-category">Create Category</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="m-5">
        <h1>Show Data</h1>
        @foreach ( $books as $book )
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title"> {{$book->Name}} </h2>
                <h3 class="card-title"> {{$book->PublicationDate}} </h3>
                <h4 class="card-title">Stok Buku:  {{$book->Stock}} </h4>
                <p class="card-text">Penulis Buku: {{$book->Author}} </p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                <p class="card-text">Category: {{$book->category->CategoryName}} </p>

                <a href="{{route('edit', $book->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route('delete', $book->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    @endforeach
    </div>



</body>
</html>
