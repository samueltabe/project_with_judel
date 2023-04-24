@extends('layouts.frontend')
@section('content')

<!-- navbar-->


<!-- hero section-->
<div id="carouselExampleCaptions" class=" container-fluid carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('frontend/img/male.jpg') }}" class="d-block w-100 h-75" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/img/female.jpg') }}" class="d-block w-100 h-75" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/img/banner1.webp') }}" class="d-block h-75 w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<!--Product listing-->
<div class="container">
    <div class="row my-5">
        <h2>Featured Products</h2>
        <div class="owl-carousel owl-theme featured-carousel">
            @foreach ( $featured_prod as $feat )
                <div class="item">
                    <div class="card my-3">
                        <img src="{{ asset('upload/product/'.$feat->image) }}" width="305px" height="300px" alt="Product image">
                        <div class="card-body">
                            <h5>{{ $feat->name }}</h5>
                            <span class="float-start">{{ $feat->selling_price }}</span>
                            <span class="float-end"> <s>{{ $feat->original_price }}</s></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
