<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Shooping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   <style type="text/css">
      body{
    background-image: url("{{asset('book/back.jfif')}}");

    }

    .icon{
        margin-top:20px;
        background-color: #130d0d;
        color: #f2f2f2;
        padding:20px;
        position:sticky;
    }
    .icon .btn{
        color: blanchedalmond;
        margin-left:10px;
    }
    .icon .btn1{
        color: rgb(205, 208, 255);
        float: right;
        margin-right:20px;

    }
    .header{
      color: #f2f2f2;
      font-size: 25px;
      padding: 8px 12px;
      position: absolute;

      width: 100%;
      text-align: center;
      margin-right: 150px;
    }
    .row{
    margin: auto;
    float:left;
  }
  .row .post img{
    float: left;
    padding-left: 20px;
    display: table;
     zoom: 1;
     position: relative;
     width: 100%;
     max-width: 100%;
     max-height:768px;
     margin:0px auto 0px;
     z-index:90;
     text-align:left;
     font-size: 10px;
     text-shadow: none;
     }



  .row .post{
    padding: 20px;
    margin-bottom: 18;
    margin-top:180px;
  }
  .row{
    margin: auto;
    float:left;
  }
  .row .img img{
    float: left;
    padding-left: 20px;
    display: table;
     zoom: 1;
     position: relative;
     width: 100%;
     max-width: 100%;
     max-height:768px;
     margin:0px auto 0px;
     z-index:90;
     text-align:left;
     font-size: 10px;
     text-shadow: none;
     }



  .row .img{
    padding: 20px;
    margin-bottom: 18;
    margin-top:180px;
  }


    </style>


    </head>
    <body>
        <div class="icon">
        <div class="text-order">
        <a href="{{ route('product.index') }}"class="btn btn-dark mt-2">HOME</a>
        <a href="{{ route('product.catagories') }}"class="btn btn-dark mt-2">BOOK Catagories</a>
        <a href=""class="btn btn-dark mt-2">About Us</a>
        <a href="{{ route('product.create') }}"class="btn1 btn-dark mt-2">SIGNUP</a>
        <a href="{{ route('product.login') }}"class="btn1 btn-dark mt-2">LOGIN</a>
        <a href="{{ route('product.show') }}"class="btn1 btn-dark mt-2">Show</a>
       <input type="search" name="search">
    </div>
</div>
<div class="header">
    <section>
        <p class="text-center">Search AnyBook</p>
       </section>
       <footer>
    <p>&copy; 2023 BOOK STORE. All rights reserved.</p>
</footer>
</div>

<div class="row">
    <div class="post">
        <img src="{{ asset('book/th1.jfif') }}" alt="Uploaded Image">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">214 page</p>
    <a href="books/create" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a>
</div>
</div>

<div class="row">
    <div class="post">
        <img src="{{ asset('book/th2.jfif') }}" alt="Uploaded Image">
    <h3>Hostory of the Battle</h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 page</p>
    <a href="movieplayer.php" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a>


</div>
</div>

<div class="row">
    <div class="post">
        <img src="{{ asset('book/th3.jfif') }}" alt="Uploaded Image">
    <h3>First World War</h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
    <a href="movieplayer2.php" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a>
</div>
</div>

<div class="row">
    <div class="post">
    <img src="{{ asset('book/th4.jfif') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
    <a href="https://t.me/c/1801220558/448" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a>
</div>
</div>

<div class="row">
    <div class="img">
    <img src="{{ asset('book/Alemawek.jpg') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
    <a href="https://t.me/c/1801220558/448" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a>
</div>
</div>

<div class="row">
    <div class="img">
    <img src="{{ asset('book/Fkr Eske Mekabr.jpg') }}" alt="image">
    <h3>Alfa</h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
    <a href="https://t.me/c/1801220558/448" style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a><br>
</div>
</div>

<div class="row">
    <div class="img">
    <img src="{{ asset('book/Lela Sew.jpg') }}" alt="">
    <h3>Lord of the war</h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
</div>
</div>

<div class="row">
    <div class="img">
    <img src="{{ asset('book/Zguwara.jpg') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
    <a href=""style="text-decoration:none;color:black; font-family:monospace;font-size:.90em">BookNow</a><br>
</div>
</div>

<div class="row">
    <div class="post">
    <img src="{{ asset('book/sememen.jpg') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
</div>
</div>

<div class="row">
    <div class="post">
    <img src="{{ asset('book/Sew.jpg') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
</div>
</div>
<div class="row">
    <div class="post">
    <img src="{{ asset('book/The Power.jpg') }}" alt="">
    <h3></h3>
    <p class="post_info" style=" font-size: .75em;color:#8b8b9f;margin: 0.5em 0;">PG13 | 109 minutes</p>
</div>
</div>



    </body>
    </html>



