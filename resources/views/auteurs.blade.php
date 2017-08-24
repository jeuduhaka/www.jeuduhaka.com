@extends('layout')

@section('title', 'Les auteurs')

@section('header-content')
<section class="authors container">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-sm-offset-0">
        <div class="thumbnail">
          <img class="img-responsive img-circle img-author center-block" src="img/Tehotu.png"/>
          <div class="caption">
            <h3 class="author-name">Tehotu</h3>
            <p class="author-description">Tahitien, coach en bien-être et danseur</p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-sm-offset-0">
        <div class="thumbnail">
          <img class="img-responsive img-circle img-author center-block" src="img/Hinenao.png"/>
          <div class="caption">
            <h3 class="author-name">Hinenao</h3>
            <p class="author-description">Marquisienne, illustratrice et coach en bien-être</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-0">
        <div class="thumbnail">
          <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0">
              <a href="http://www.marckucharz.com/">
                <img class="img-responsive img-circle img-author center-block" src="img/Marc.png"/>
              </a>
            </div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
              <div class="caption">
                <h3 class="author-name">Marc</h3>
                <p class="author-description">
                  Parisien, auteur de jeux depuis plus de vingt-cinq ans, fondateur de la méthode ludocoaching et formateur.
                </p>
                <p class="author-website">
                  <a href="http://www.marckucharz.com/">www.marckucharz.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
