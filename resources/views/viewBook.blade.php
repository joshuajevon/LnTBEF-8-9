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
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-book">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/view-book">View Book</a>
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
        <h1>View Book</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Stock</th>
              <th scope="col">Buyer</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($books as $book)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$book->Name}}</td>
                  <td>{{$book->Stock}}</td>
                  <td>
                      @foreach ($book->buyers as $item)
                          - {{$item->BuyerName}} <br>
                      @endforeach
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>

</body>
</html>
