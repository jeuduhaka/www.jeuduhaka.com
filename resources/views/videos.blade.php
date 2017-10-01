@extends('layout')

@section('title', 'Vidéos')

@section('header-content')
<section class="container">
  <div class="row">
      <div class="video-container">
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
          class="embed-responsive-item"
          src="https://www.youtube-nocookie.com/embed/xs0aM3xUmqo?rel=0"
          allowfullscreen
          ></iframe>
        </div>
      </div>
      <p class="h3 text-center">
        Démonstration du 21 juin 2017
      </p>
  </div>

</section>
@endsection

@section('content')
<section class="section-pad container">
  {{--<p class="h3 text-center">
    Présentation du Jeu du Haka
  </p>
  <div class="video-container">
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/ozyqlE6I36M?rel=0" allowfullscreen></iframe>
    </div>
  </div>--}}
  <p class="h3 text-center">
    Le Jeu du Haka en centre de vacances
  </p>
  <div class="video-container">
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/21EWt0i9-Yw?rel=0" allowfullscreen></iframe>
    </div>
  </div>
  <p class="h3 text-center">
    Haka dansé par des enfants
  </p>
  <div class="video-container">
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item"
          src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAitoGuerrierDuPacifique%2Fvideos%2F611549839039132%2F&show_text=0"
          allowFullScreen></iframe>
    </div>
  </div>
  <p class="h3 text-center">
    Haka dansé par des femmes
  </p>
  <div class="video-container">
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/nROgKfXf-fo?rel=0" allowfullscreen></iframe>
    </div>
  </div>
  {{--<!-- <div class="video-container">--}}
    {{--<!- - 16:9 aspect ratio - ->--}}
    {{--<div class="embed-responsive embed-responsive-16by9">--}}
      {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/yiKFYTFJ_kw"--}}
      {{--frameborder="0" allowfullscreen></iframe>--}}
    {{--</div>--}}
  {{--</div> -->--}}
</section>
@endsection
