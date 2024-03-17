<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='robots' content='noindex,follow' />
        <title>{{ \App\Helpers\AppHelper::getSiteName(request()->get('lang')) }}</title>
        <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    </head>

    <body class="antialiased phishing-body">
        <div class="phishing-warning">
            <div class="phishing-warning-inner">
                <h1>
                    {{$translation->title}}
                </h1>
                <p>
                    {{$translation->thesis}}
                    <ul>
                        <li>
                            {{$translation->contact}}
                        </li>
                        <li>
                            {{$translation->source}}&nbsp;
                            <a href="https://github.com/rrkkss/master-thesis-phishing">
                                https://github.com/rrkkss/master-thesis-phishing
                            </a>
                        </li>
                        <li>
                            {{$translation->nopwd}}
                            <ul>
                                <li>{{$translation->login}} <span class="phishing-data">{{$username}}</span> </li>
                                <li>user agent - <span class="phishing-data">{{$useragent}}</span></li>
                                <li>{{$translation->geo}} <span class="phishing-data">{{$geolocation}}</span> (Hetzner hosting is blocked from using whois)</li>
                            </ul>
                        </li>
                    </ul>
                </p>

                <h1>
                    {{$translation->tip}}
                </h1>
                <ul>
                    <li>
                        {{$translation->tip1Fake}} 
                        https://<span class="phishing-wrong-data">isczu</span>.cz
                        {{$translation->tip2Real}} 
                        https://<span class="phishing-data">is.czu</span>.cz
                    </li>
                    <li>
                        {{$translation->tip2}}
                    </li>
                    <li>
                        {{$translation->tip3}}
                    </li>
                    <li>
                        {{$translation->tip4}}
                    </li>
                    <li>
                        {{$translation->tip5}}
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
