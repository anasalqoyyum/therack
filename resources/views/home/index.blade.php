@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- GET FIT FROM HOME [S]-->
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="{{ route('product.index') }}">
              <img src="{{ asset('photo/4667.jpg') }}" alt="responsive image" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block" style="color: white">
                <h2>SUGENG RAWUH</h2>
                <h4>Flora Delivery With The Best Service</h4>
                <br>
                <span class="button" style="color: white">Learn More</span>
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="{{ route('product.index') }}">
              <img src="{{ asset('photo/4628.jpg') }}" alt="responsive image" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block" style="color: white">
                <h2>Rizs Florist</h2>
                <h4>Kualitas & Servis Terbaik, Harga Terjangkau, dan Gratis Ongkir</h4>
                <br>
                <span class="button" style="color: white">Learn More</span>
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="{{ route('product.index') }}">
              <img src="{{ asset('photo/4675.jpg') }}" alt="responsive image" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block" style="color: white">
                <h2>Pilih Produk Kamu</h2>
                <h4>Kualitas Bunga yang Fresh dan Jangkauan Luas</h4>
                <br>
                <span class="button" style="color: white">Learn More</span>
              </div>
            </a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- GET FIT FROM HOME [E]-->

  <!-- MEN & WOMEN [S]-->
    <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
  <button id="maleBtn">
    <div class="gender">
      <img class="d-block w-100" src="{{ asset('photo/model3.jpg') }}" alt="">
      <h2 class="pt-2">Bouquet</h2>
    </div>
  </button>
  </a>
</div>
<div class="col-6 d-flex flex-column align-items-center genderwrapper">
  <a href="{{ route('product.index') }}">
    <button id="femaleBtn">
      <div class="gender">
        <img class="d-block w-100" src="{{ asset('photo/model4.jpg') }}" alt="">
        <h2 class="pt-2">Hampers</h2>
      </div>
    </button>
  </a>
</div>
</div>
<!-- MEN & WOMEN [E]-->

<!-- CATEGORY [S]-->
<div class="row m-0 pt-4">
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
    <a href="{{ route('product.index') }}">
      <div class="category">
        <img class="" height="200px" src="{{ asset('photo/shoes.jpg') }}" alt="">
        <h5 class="pt-2">Bunga Meja</h5>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
    <a href="#">
      <div class="category">
        <img class="" height="200px" src="{{ asset('photo/shirt.jpg') }}" alt="">
        <h5 class="pt-2">Bunga Papan</h5>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
    <a href="#">
      <div class="category">
        <img class="" height="200px" src="{{ asset('photo/bag.jpeg') }}" alt="">
        <h5 class="pt-2">Dried Flower</h5>
      </div>
    </a>
  </div>
</div>
<!-- CATEGORY [E]-->

<!-- FEATURED SHOES [S]-->
<h2 class="pt-4 d-flex justify-content-center">Best Seller</h2>
<div class="row d-flex justify-content-center">
  @foreach ($products as $product)
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
    <div class="card">
      <a href="{{ route('product.show',['product'=>$product->id]) }}">
        <div class="card-body ">
          <div class="product-info">
            <div class="info-1 text-center"><img src="{{ asset('/storage/'.$product->image) }}" alt=""></div>
            <div class="info-4 text-center">
              <h5>{{ $product->brand }}</h5>
            </div>
            <div class="info-2 text-center"><a href="product/{{ $product->id }}">
                <h4>{{ $product->name }}</h4>
              </a></div>
            <div class="info-3">
              <h5>Rp {{ $product->price }}</h5>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  @endforeach
</div>
<!-- FEATURED SHOES [E]-->

<!-- ADVANTAGE [S]-->
<h2 class="pt-4 d-flex justify-content-center">Quick Buy and Delivery Order</h2>
<div class="row m-0 pt-4">
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
    <img class="" height="80px" src="{{ asset('photo/free.png') }}" alt="">
    <h4>Gratis Ongkir</h4>
  </div>
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
    <img class="" height="80px" src="{{ asset('photo/fresh.png') }}" alt="">
    <h4>Fresh Flower</h4>
  </div>
  <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
    <img class="" height="80px" src="{{ asset('photo/kualitas.png') }}" alt="">
    <h4>Kualitas & Servis Terbaik</h4>
  </div>
</div>
<!-- ADVANTAGE [E]-->

</div>

@endsection