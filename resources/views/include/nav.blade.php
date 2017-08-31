<nav class="navbar navigation-bar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img class="img-responsive logo-img" src="img/logo/jeu-du-haka-logo-50px.png" alt="Jeu du Haka logo"/>
        <span class="logo-text">Le Jeu du Haka</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ URL::route('home') }}">Accueil</a></li>
        {{--<!-- <li><a href="#">Le jeu</a></li> -->--}}
{{--        <!-- <li><a class="{{ Route::is('auteurs') ? 'active' : '' }}" href="{{ URL::route('auteurs') }}">Les auteurs</a></li> -->--}}
        <li><a class="{{ Route::is('definition-haka-faire') ? 'active' : '' }}" href="{{ URL::route('definition-haka-faire') }}">Définition du Haka</a></li>
        <li><a class="{{ Route::is('photos') ? 'active' : '' }}" href="{{ URL::route('photos') }}">Photos</a></li>
        <li><a class="{{ Route::is('videos') ? 'active' : '' }}" href="{{ URL::route('videos') }}">Vidéos</a></li>
        <li>
          <a href="mailto:contact@jeuduhaka.com">
            Contact
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
