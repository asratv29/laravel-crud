<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style type="text/css">
			body{
			background-image:url("{{ asset('book/book2.jpg') }}");
	background-position: center;
		}
		</style>

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/sin.css') }}">
</head>
<body>

    <nav class="navbar bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
          <li clas="nav-item">
            <a class="nav-link text-light" href="/">Product</a>
          </li>

        </ul>

      </nav>
      @if ( $message =Session::get('success'))
      <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>

      @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                <form method="POST" action="/product/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                       <label>Name</label>
                       <input type="text" name="name" class="form-control"value="{{old('name')}}">
                       @if ($errors->has('name'))
                         <span class="text-danger">{{ $errors->first('name')}}</span>
                          @endif
                    </div>

                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="text" name="Email" class="form-control"value="{{old('Email')}}">
                        @if ($errors->has('Email'))
                          <span class="text-danger">{{ $errors->first('Email')}}</span>
                           @endif
                    </div>
                       <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="Password" class="form-control" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                         <span class="text-danger">{{ $errors->first('password')}}</span>
                          @endif
                     </div>
                     <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" value="{{old('name')}}">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image')}}</span>
                         @endif
                    </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                </form>
</div>
</body>
</html>
