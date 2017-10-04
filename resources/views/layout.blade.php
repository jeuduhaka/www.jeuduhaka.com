<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @hasSection ('title')
      <title>@yield('title') - Le Jeu du Haka</title>
    @else
      <title>Le Jeu du Haka</title>
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="css/fonts.css" />
    <link rel="stylesheet" media="screen" href="css/styles.css" />
    <link rel="stylesheet" media="screen" href="css/media-queries.css" />
    <link rel="stylesheet" media="screen" href="css/footer.css" />
    <link rel="icon" href="img/logo/cropped-logo-coffret-HD-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/logo/cropped-logo-coffret-HD-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/logo/cropped-logo-coffret-HD-180x180.png" />
    <meta name="msapplication-TileImage" content="img/logo/cropped-logo-coffret-HD-270x270.png" />
    <meta name="keywords" content="jeux, haka, formation, polynésie, tahiti, coaching, coach, serious games, bien être, épanouissement personnel, marc kucharz"/>
    <meta name="description" content="Avec le Jeu du Haka, transformez votre énergie négative en énergie positive en deux temps (le CORPS et l'ESPRIT), trois mouvements (AVOIR, FAIRE, ÊTRE)"/>
    <meta name="robots" content="index,follow"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-98200036-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  @hasSection ('bodyClass')
  <body class="@yield('bodyClass')">
  @else
  <body>
  @endif
    @hasSection ('headerClass')
    <header class="header-background @yield('headerClass')">
    @else
    <header class="header-background">
    @endif
      @include("include/nav")
      @yield("header-content")
    </header>
    @yield("content")
    @unless ("hideFooter")
      @include("include/footer")
    @endunless
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery||document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
