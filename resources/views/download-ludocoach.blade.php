<!doctype html>
<html lang="{{ app()->getLocale() }}" style="background: url('/img/fond-bleu-vague-1980x1980.jpg') no-repeat center center fixed;
        background-size: cover">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @hasSection ('title')
    <title>@yield('title') - Le Jeu du Haka</title>
    @else
        <title>Le Jeu du Haka</title>
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="css/fonts.css"/>
    <link rel="stylesheet" media="screen" href="css/styles.css"/>
    <link rel="stylesheet" media="screen" href="css/media-queries.css"/>
    <link rel="stylesheet" media="screen" href="css/footer.css"/>
    <link rel="icon" href="img/logo/cropped-logo-coffret-HD-32x32.png" sizes="32x32"/>
    <link rel="icon" href="img/logo/cropped-logo-coffret-HD-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="img/logo/cropped-logo-coffret-HD-180x180.png"/>
    <meta name="msapplication-TileImage" content="img/logo/cropped-logo-coffret-HD-270x270.png"/>
    <meta name="keywords"
          content="jeux, haka, formation, polynésie, tahiti, coaching, coach, serious games, bien être, épanouissement personnel, marc kucharz"/>
    <meta name="description"
          content="Téléchargez gratuitement l'application Ludocoach du Jeu du Haka!"/>
    <meta name="robots" content="index,follow"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-98200036-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        .Absolute-Center {
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
        }

        .Absolute-Center.is-Responsive {
            min-width: 200px;
            padding: 15px;
            text-align: center;
        }
        .img-badge {
            display: inherit;
            max-height: 50px;
        }
        .subtitle {
            font-size: 24px;
        }
        .title {
            font-family: "charcuterie_sans_inlineRg";
            font-size: 36px;
            font-weight: 500;
            line-height: 1.1;
            color: #014DA2;
            margin: 0;
            padding: 5px 0 0 10px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
        }
        .img-responsive-for-absolute {
            max-width: 100%;
            height: auto;
        }
        .block-text {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <img class="img-responsive-for-absolute" src="img/logo/logo-coffret-200px.png"
                     alt="Jeu du Haka logo">
                <div class="block-text">
                    <div class="title">Le Jeu du Haka Ludocoach</div>
                    <div class="subtitle">C'est une application qui fait du bien et c'est gratuit!</div>
                    <div class="subtitle">A partager! :)</div>
                </div>
                <a href="https://itunes.apple.com/app/hakas-game-ludocoach/id1289735068&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com">
                    <img class="img-responsive img-badge" src="img/app-store-badge-fr.png"
                         alt="Disponible sur App Store"/>
                </a>
                <a href='https://play.google.com/store/apps/details?id=com.marckucharz.jeuduhakaludocoach&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                    <img alt='Disponible sur Google Play' src='img/google-play-badge-fr.png'
                         class="img-responsive img-badge"/>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

