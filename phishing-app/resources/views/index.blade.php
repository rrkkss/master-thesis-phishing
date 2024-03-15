@extends('header')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/{{ \App\Helpers\AppHelper::setParameters() }}">
                <img
                    src="https://is.czu.cz/img.pl?unid=18661"
                    alt=""
                    title="Czech University of Life Sciences Prague"
                    sysid="base-home">
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $translation->title }}
        </li>
    </ol>
</nav>

<div class="zasadky-container">
    <div class="zasadka" style="order: 2;">
        <table class="zasadky-info">
            <tbody>
                <tr class="">
                    <td class="odsazena" valign="middle" align="left">
                        <img
                            src="https://is.czu.cz/img.pl?unid=388"
                            alt=""
                            sysid="dekorace-info">
                    </td>
                    <td class="odsazena" align="left">
                        •&nbsp;
                        <a
                            href="javascript:void(0)"
                            onclick="open_helper_modal()"
                            >Návod - Kontaktní centrum - student
                        </a>&nbsp;
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
        <p></p>
    </div>
</div>

<table width="980">
    <tbody>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img
                    src="https://is.czu.cz/img.pl?unid=17780"
                    alt=""
                    sysid="menu-osobni-administrativa"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->administration}}</b>
                </span>
                <br><br>
                &nbsp;•&nbsp;&nbsp;
                <a href="/auth{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->administrationLogin}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/navod{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->administrationFirstLogin}}
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/dok/integratori.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->administrationIntegrators}}
                    </span>
                </a>
            </td>
        </tr>
        <tr class="">
            <td class="odsazena" align="left">
                &nbsp;
            </td>
        </tr>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img
                    src="https://is.czu.cz/img.pl?unid=2966"
                    alt=""
                    sysid="menu-prijimaci-rizeni"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->admission}}</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/prihlaska{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->admissionApplication}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;
                <a href="/prijimacky/verejne_vysledky.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->admissionResults}}
                    </span>
                </a><br>&nbsp;•&nbsp;&nbsp;
                <a href="/navratka/{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->admissionEnrollment}}
                        </span>
                    </b>
                </a>
            </td>
        </tr>
        <tr class="">
            <td class="odsazena" align="left">
                &nbsp;
            </td>
        </tr>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img 
                    src="https://is.czu.cz/img.pl?unid=1196"
                    alt=""
                    sysid="menu-info"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->czu}}</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/pracoviste/pracoviste.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->czuDepartments}}
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/dok_server/{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->czuDocuments}}
                    </span>
                </a>
            </td>
        </tr>
        <tr class="">
            <td class="odsazena" align="left">
                &nbsp;
            </td>
        </tr>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img
                    src="https://is.czu.cz/img.pl?unid=457"
                    alt=""
                    sysid="menu-info-studijni"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->study}}</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/student/harmonogram.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->studySchedule}}
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/plany.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->studyPlans}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->studyCourses}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/dohody.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->studyAgreements}}
                    </span>
                </a> <br>&nbsp;•&nbsp;&nbsp;
                <a href="/zp{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->studyTheses}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/rozvrhy_view.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->studyTimetables}}
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/financovani/index.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->studyFinancing}}
                    </span>
                </a>
            </td>
        </tr>
        <tr class="">
            <td class="odsazena" align="left">
                &nbsp;
            </td>
        </tr>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img
                    src="https://is.czu.cz/img.pl?unid=5412"
                    alt=""
                    sysid="menu-spoluprace-firma"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->jobs}}</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/praxe/index.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->jobsRegistration}}
                        </span>
                    </b>
                </a>
                <br><br>
            </td>
        </tr>
        <tr class="">
            <td class="odsazena" align="left">
                &nbsp;
            </td>
        </tr>
        <tr class="">
            <td
                class="odsazena"
                width="70"
                align="center"
                valign="top"
            >
                <img
                    src="https://is.czu.cz/img.pl?unid=395"
                    alt=""
                    sysid="menu-info-o-UIS"
                >
            </td>
            <td class="odsazena" align="left">
                &nbsp;
            </td>
            <td class="odsazena" align="left">
                <span class="sekce-nadpis">
                    <b>{{$translation->system}}</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/dok/help.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <b>
                        <span class="nowrap">
                            {{$translation->systemUis}}
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/system/agregat.pl{{ \App\Helpers\AppHelper::setParameters() }}">
                    <span class="nowrap">
                        {{$translation->systemStatistics}}
                    </span>
                </a><br>&nbsp;•&nbsp;&nbsp;
                <a href="http://www.uis-info.com">
                    <b>
                        <span class="nowrap">
                            {{$translation->systemImplementation}}
                        </span>
                    </b>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<ul id="navig-footer">
    @if (\App\Helpers\AppHelper::canShowCzech(request()->get('lang')))
    <li>
        <i>
            <a href="/?lang=cz{{request()->get('reset') ? "&reset=" . request()->get('reset') : ""}}">
                Česká verze informačního systému (Czech version)
            </a>
        </i>
    </li>
    @endif
    @if (\App\Helpers\AppHelper::canShowSlovakian(request()->get('lang')))
    <li>
        <i>
            <a href="/?lang=sk{{request()->get('reset') ? "&reset=" . request()->get('reset') : ""}}">
                Slovenská verzia informačného systému (Slovak version)
            </a>
        </i>
    </li>
    @endif
    @if (\App\Helpers\AppHelper::canShowEnglish(request()->get('lang')))
    <li>
        <i>
            <a href="/?lang=en{{request()->get('reset') ? "&reset=" . request()->get('reset') : ""}}">
               English version of the information system
            </a>
        </i>
    </li>
    @endif
</ul>

<div
    id="uis-control-data"
    data-uis_ang_lokalizace="GB"
    data-cookiebar_cookie="uis_cookiebar_policy"
    data-stat_tel_predvolba="+420"
></div>

<div id="modal-base" style="display: none">
    <div id="modal-window" class="obsah">
        <big>
            <b>Návod - Kontaktní centrum - student</b>
        </big>
        <p></p>
        <div class="small">
            <span class="small">
                <p class="MsoNormal" style="margin-bottom:8.0pt">
                    <span style="font-size: 12pt;">
                        Jakou žádost můžu podat? Kde? Jak doplnit přílohy?
                    </span>
                    <span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">
                    </span>
                    </p><p>
                    <span style="font-size: 11pt; font-family: Calibri, sans-serif;">
                        Návod je tady:&nbsp;
                        <a href="https://czuvpraze.sharepoint.com/sites/tf/Sdilene%20dokumenty/Navody/Kontaktn%C3%AD%20centrum%20-%20n%C3%A1vod%20pro%20studenty.pdf" contenteditable="false" data-ogsc="">
                            pro studenty
                        </a>
                    </span>
                </p>
            </span>
        </div>
        <br>
    </div>
</div>

@endsection
