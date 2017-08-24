@extends('layout')

@section('title', 'Photos')

@section('header-content')
<section class="container">
  <div class="row">
    <h2 class="description-main-firstp text-center">
      Photos
    </h2>
  </div>
</section>
@endsection

@section('content')
<section class="section-pad container photos">
  <div class="row">
    <p class="h3 text-center">
      Développement personnel par la parole
    </p>
    <div class="col-sm-12 photo-cell">
      <img src="img/demo-yogavision.jpg" class="img-responsive" alt="">
    </div>
    <p class="h3 text-center">
      Développement personnel par le corps
    </p>
    <div class="col-sm-6 photo-cell">
      <img src="img/demo-espace-du-possible.jpg" class="img-responsive" alt="">
    </div>
    <div class="col-sm-6 photo-cell">
      <img src="img/demo-avtpremiere.jpg" class="img-responsive" alt="">
    </div>
  </div>
</section>
@endsection
