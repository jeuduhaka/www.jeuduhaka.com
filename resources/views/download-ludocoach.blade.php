@php
$locale = App::getLocale();
$appStoreCountry = $locale === 'en' ? 'us' : $locale;
@endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('application.metaTitle') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="{{ request()->root() }}/css/fonts.css"/>
    <link rel="stylesheet" media="screen" href="{{ request()->root() }}/css/styles.css"/>
    <link rel="icon" href="{{ request()->root() }}/img/iphone-jeu-du-haka/iphone-jeu-du-haka-32x32.png" sizes="32x32"/>
    <link rel="icon" href="{{ request()->root() }}/img/iphone-jeu-du-haka/iphone-jeu-du-haka-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="{{ request()->root() }}/img/iphone-jeu-du-haka/iphone-jeu-du-haka-180x180.png"/>
    <meta name="keywords"
          content="jeux, haka, formation, polynésie, tahiti, coaching, coach, serious games, bien être, épanouissement personnel, marc kucharz"/>
    <meta name="description"
          content="{{ __('application.metaDescription') }}"/>
    <meta name="robots" content="index,follow"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta property="og:title" content="{{ __('application.ogTitle') }}"/>
    <meta property="og:description" content="{{ __('application.ogDescription') }}"/>
    <meta property="og:url" content="https://www.jeuduhaka.com/application" />
    <meta property="og:image" content="{{ request()->root() }}/img/iphone-jeu-du-haka/iphone-jeu-du-haka-facebook-1200x630-vague.jpg"/>
    {{-- no cache --}}
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
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
        html {
            background: url('/img/fond-bleu-vague-1980x1980.jpg') no-repeat center center fixed;
            background-size: cover
        }
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
                <img class="img-responsive-for-absolute" src="{{ request()->root() }}/img/logo/logo-coffret-200px.png"
                     alt="Jeu du Haka logo">
                <div class="block-text">
                    <div class="title">{{ __('application.hakasGameLudocoach') }}</div>
                    <div class="subtitle">{{ __('application.appGoodAndFree') }}</div>
                    <div class="subtitle">{{ __('application.downloadAndShare') }}</div>
                </div>
                <a href="https://itunes.apple.com/{{ $appStoreCountry }}/app/hakas-game-ludocoach/id1289735068&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com">
                    <img class="img-responsive img-badge" src="{{ request()->root() }}/img/badges/app-store-badge-{{ $locale }}.png"
                         alt="{{ __('application.availableAppStore') }}"/>
                </a>
                <a href='https://play.google.com/store/apps/details?hl={{ $locale }}&id=com.marckucharz.jeuduhakaludocoach&utm_source=jeuduhaka.com&utm_campaign=jeuduhaka.com&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                    <img alt='{{ __('application.availableGooglePlay') }}' src='{{ request()->root() }}/img/badges/google-play-badge-{{ $locale }}.png'
                         class="img-responsive img-badge"/>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

