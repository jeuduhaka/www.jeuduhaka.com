@extends('layout')

@section('bodyClass', 'home')

@section('header-content')
<section class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <img class="gamebox img-responsive" src="img/jeu-du-haka-coffret-3d.png" alt="Jeu du Haka coffret 3D"/>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1 description-main">
      <h1 class="description-main-firstp">
        <!-- Transformez votre énergie <span class="color-red">négative en énergie <span class="color-green">positive</span> ! -->
        Gagnez en énergie avec <strong>le Jeu du Haka</strong> !
      </h1>
      <p class="description-main-secondp">
        <!-- grâce au pouvoir des danses ancestrales maori ! -->
        en deux temps trois mouvements
      </p>
      <p class="h3">
        Disponible en librairie début 2018
      </p>
      <p class="h4">
        Retrouvez votre ludocoach sur votre smartphone !
      </p>
      <div class="row badges-download center-block">
        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-2">
          <a href="https://itunes.apple.com/fr/app/hakas-game-ludocoach/id1289735068&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com">
            <img class="img-responsive badge-download badge-download-first" src="img/badges/app-store-badge-fr.png" alt="App Store badge"/>
          </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4">
          <a href='https://play.google.com/store/apps/details?hl=fr&id=com.marckucharz.jeuduhakaludocoach&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
            <img alt='Disponible sur Google Play' src='img/badges/google-play-badge-fr.png' class="img-responsive badge-download"/>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
{{--<section class="info">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="h3 alert alert-info">
          <p>Rendez-vous du <strong>28 septembre au 2 octobre 2017</strong> au <a href="https://www.salon-zen.fr/" >salon Zen de Paris</a> !</p>
          <p class="h4 text-italic"><em><a href="https://www.salon-zen.fr/entree-gratuite/">>> Obtenir une entrée gratuite</a></em></p>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <a href="http://bit.ly/2jvNoUj" class="btn btn-primary btn-lg btn-block btn-action" role="button">Accéder aux formations</a>
      </div>
    </div>
  </div>
</section>--}}
<section class="section-pad container">
  <div class="row step-description-first">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <h2 class="h3 text-center">
        Avec <strong>le Jeu du Haka</strong>,
        transformez votre énergie négative en énergie
        positive en
      </h2>
      <p class="h3 text-center">
        <strong>2 temps</strong> (le CORPS et l’ESPRIT)
      </p>
      <p class="h3 text-center">
        <strong>3 mouvements</strong> (AVOIR, FAIRE, ÊTRE)
      </p>
      <p class="h3 text-center">
        et (re)trouvez le
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
{{--<section class="info section-pad">--}}
  {{--<div class="container">--}}
    {{--<div class="row">--}}
      {{--<div class="col-xs-12">--}}
        {{--<img class="img-responsive" src="img/jeu-du-haka-carte-rouge-verso.png" style="border-radius: 25px;"/>--}}
        {{--<img class="img-responsive" src="img/jeu-du-haka-carte-orange-verso.png" style="border-radius: 25px;"/>--}}
        {{--<img class="img-responsive" src="img/jeu-du-haka-carte-verte-verso.png" style="border-radius: 25px;"/>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</section>--}}
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
            <img class="img-responsive img-circle img-author center-block" src="img/jeu-du-haka-auteur-tehotu.png" alt=""/>
            <div class="caption">
              <h3 class="author-name">Tehotu</h3>
              <p class="author-description">Tahitien, coach en bien-être et danseur</p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-offset-0">
          <div class="thumbnail">
            <img class="img-responsive img-circle img-author center-block" src="img/jeu-du-haka-auteur-hinenao.png" alt=""/>
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
                <img class="img-responsive img-circle img-author center-block" src="img/jeu-du-haka-auteur-marc.png" alt=""/>
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
                  <p class="text-center">
                    <a href="https://www.linkedin.com/in/marc-kucharz-197a5729">
                      <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                    </a>
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
