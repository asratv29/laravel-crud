@extends('layout.nav')
@section('content')
<style>

    .carousel-item img {
        height: 700px;
        width: 50%;
    }
</style>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('book/best1.webp') }}" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/R.0f670c572c46d6688b5287a4b7ad480e?rik=DfZkouwmcR1vow&riu=http%3a%2f%2fs3-eu-west-1.amazonaws.com%2frankia%2fimages%2fvaloraciones%2f0025%2f3131%2flibros-donald-trump-queremos-que-seas-rico.png%3f1478779696&ehk=jx3oG9fsVumkxcpIwvzhBYlSEZK7Cm6dmIt5FPCGEY0%3d&risl=&pid=ImgRaw&r=0" alt="Chicago" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.richdad.com/MediaLibrary/RichDad/Images/3d-books/v2/3d-spine-HTBYFIP.png" alt="New York" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

@endsection
