<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larabel CRUD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
          <li clas="nav-item">
            <a class="nav-link text-light" href="/">Previous Page</a>
          </li>

        </ul>

      </nav>

    <div class="container">
    <div class="text-right">
    </div>
        <h1>Show </h1>
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Nmae</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $product as $product )

              <tr>
                <td>{{$loop->index}}</td>
                <td>
                    <a href="product/{{$product->id}}/show" class="text-dark">{{ $product->name}}</a>
                </td>
                <td>
                    <img src="product/{{ $product->image}}" class="rounded-circle" width="50" height="50">
                </td>
                <td>
                    <a href="product/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                <form method="POST" class="d-inline" action="product/{{$product->id}}/delete">
                    @csrf

                    @method('POST')

                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </td>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
