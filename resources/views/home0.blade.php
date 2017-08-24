@extends('layout')

@section('bodyClass', 'home')

@section('header-content')
<section class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <img class="gamebox img-responsive" src="img/leJeuDuHaka-3D.png"/>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1 description-main">
      <p class="description-main-firstp">
        <!-- Transformez votre énergie <span class="color-red">négative en énergie <span class="color-green">positive</span> ! -->
        Gagnez en énergie avec le jeu du Haka !
      </p>
      <p class="description-main-secondp">
        <!-- grâce au pouvoir des danses ancestrales maori ! -->
        en deux temps trois mouvements
      </p>
      <p class="h3">
        Bientôt disponible en librairie et sur
      </p>
      <div class="row badges-download center-block">
        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
          <img class="img-responsive badge-download badge-download-first" src="img/app-store-badge.png"/>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
          <img class="img-responsive badge-download" src="img/google-play-badge.png"/>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="info">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="h3 text-center">
          Nous serons présents   au <a href="https://www.salon-zen.fr/">salon Zen de Paris</a> du 28 septembre au 2 octobre 2017
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section-pad container">
  <div class="row step-description-first">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <p class="h3 text-center">
        Avec le JEU DU HAKA (tahitien et marquisien),
        transformez votre énergie négative en énergie
        positive en deux temps (le corps et l’esprit) trois
        mouvements (avoir, faire, être), et (re)trouvez le
        trésor inestimable que nous possédons tous :
      </p>
      <p class="h3 text-center">
        le <span class="description-main-mana">Mana</span> (pouvoir).
      </p>
      <p class="h3 text-center">
        À vous de jouer !
      </p>
    </div>
  </div>
  <div class="row step-container">
    <div class="col-xs-12 col-sm-8 col-lg-7 col-lg-offset-1 step-verb-container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2">
          <span class="step-number color-red">A</span>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10">
          <span class="step-text"><b>AVOIR</b> une émotion limitante</span>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <img src="img/carte-peur-236x346.png" class="img-responsive card-step" />
    </div>
  </div>
  <div class="row step-container">
    <div class="col-xs-12 col-sm-8 col-sm-push-4 col-lg-7 step-verb-container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-lg-offset-2">
          <span class="step-number color-orange">B</span>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-8">
          <span class="step-text">« Yaka » <b>FAIRE</b>...</span>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-lg-4 col-lg-pull-6">
      <img src="img/carte-protection-237x346.png" class="img-responsive card-step" />
    </div>
  </div>
  <div class="row step-container">
    <div class="col-xs-12 col-sm-8  col-lg-7 col-lg-offset-1 step-verb-container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2">
          <span class="step-number color-green">C</span>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10">
          <span class="step-text"><b>ÊTRE</b> mieux.</span>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">
      <img src="img/carte-paix-237x346.png" class="img-responsive card-step" />
    </div>
  </div>
  {{--<div class="row step-description-last">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <p class="description-main-lastp h3 text-center">
        Les gestes du haka joints à la parole
        vont vous permettre de trouver le trésor inestimable que nous possédons tous :
        le <span class="description-main-mana">Mana</span> (pouvoir).
      </p>
    </div>

    <!-- <p class="description-main-fb-btn">
      <a href="https://www.facebook.com/jeuduhaka" class="btn btn-primary btn-lg" role="button">Suivez-nous sur Facebook</a>
    </p> -->
  </div>--}}
</section>
<section class="video-trailer">
  <div class="video-container">
    <div style="background-color: red">

    </div>
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe
      class="embed-responsive-item"
      src="https://www.youtube-nocookie.com/embed/NVT_XBTZndI?rel=0"
      allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

  <section class="authors">
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
