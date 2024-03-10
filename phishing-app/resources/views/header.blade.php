<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ \App\Helpers\AppHelper::getSiteName(request()->get('lang')) }}</title>
        <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    </head>

    <body class="antialiased">
        <div id="listicka">
            <div id="head">
                <div id="top-nav">
                    <ul>
                        <li><a href="http://www.pef.czu.cz/cs/">PEF</a></li>
                        <li><a href="http://www.af.czu.cz/cs/">FAPPZ</a></li>
                        <li><a href="http://www.tf.czu.cz/cs/">TF</a></li>
                        <li><a href="http://www.fld.czu.cz/cs/">FLD</a></li>
                        <li><a href="http://www.fzp.czu.cz/cs/">FŽP</a></li>
                        <li><a href="http://www.ftz.czu.cz/cs/">FTZ</a></li>
                        <li><a href="http://www.ivp.czu.cz/cs/">IVP</a></li>
                        <li><a href="http://wp.czu.cz/">KONTAKTY</a></li>
                    </ul>
                </div>
                <div id="svatek">
                    <img class="in-header"
                         src="https://is.czu.cz/img.pl?userunid=83"
                         title=""
                         alt=""
                    > {{ \App\Helpers\AppHelper::getCurrentDate(request()->get('lang')) }} - {{\App\Helpers\AppHelper::getWeekInfo(request()->get('lang'))}}
                    &nbsp;
                    <img class="in-header"
                         src="https://is.czu.cz/img.pl?userunid=84"
                         title=""
                         alt=""
                    > &nbsp; {{ \App\Helpers\AppHelper::getNamedayPerson() }}
                    &nbsp;
                    
                    @if (\App\Helpers\AppHelper::canShowCzech(request()->get('lang')))
                    <a href="?lang=cs">
                        <img
                            class="in-header"
                            src="https://is.czu.cz/img.pl?userunid=115"
                            title="Česká verze"
                            alt="">
                    </a>
                    @endif
                    @if (\App\Helpers\AppHelper::canShowSlovakian(request()->get('lang')))
                    <a href="?lang=sk">
                        <img
                            class="in-header"
                            src="https://is.czu.cz/img.pl?userunid=40"
                            title="Slovenská verzia"
                            alt="">
                    </a>
                    @endif
                    @if (\App\Helpers\AppHelper::canShowEnglish(request()->get('lang')))
                    <a href="?lang=en">
                        <img 
                            class="in-header" 
                            src="https://is.czu.cz/img.pl?userunid=12" 
                            title="English version"
                            alt="">
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <div id="hlavicka">
            <div id="head2">
                <div id="univerzita">
                    {{ \App\Helpers\AppHelper::getSiteName(request()->get('lang')) }}
                </div>
            </div>
        </div>

        <div id="menu_top">
            <div id="log">
                &nbsp;
			</div>
            <div id="ema">
                <span id="navbar-info-text">&nbsp;</span>
                &nbsp;&nbsp;&nbsp;
                <span id="navbar-info-text">&nbsp;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span id="navbar-info-text">&nbsp;</span>
		    </div>
            <div id="ikonky">
		    </div>
        </div>

        <div id="base">
            <div id="base_right">
                <div id="stranka">
                    <div id="mainpage">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
