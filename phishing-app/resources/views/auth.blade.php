@extends('header')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/{{ \App\Helpers\AppHelper::setParameters() }}">
                <img
                    src="https://is.czu.cz/img.pl?unid=18661"
                    alt=""
                    title="Main page of the information system"
                    sysid="base-home">
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{$translation->title}}
        </li>
    </ol>
    
    <div class="helpinbreadcrumbs">
        <a
            href="/help.pl?page=8762;back=aHR0cHM6Ly9pcy5jenUuY3ovYXV0aC8={{ \App\Helpers\AppHelper::setParameters() }}"
            class="context-help-invoke"
            target="_blank"
            title="View application help"
            data-contexthelppage="8762"
        >
            <span src="https://is.czu.cz/img.pl?unid=13828" alt="" sysid="base-help">
            </span>
        </a>
    </div>
</nav>

<div id="titulek">
    <h1>{{$translation->title}}</h1>
    <hr class="uisseparator">
</div>

<div class="small">
    <span class="small">
        {{$translation->infoText}}
    </span>
</div>

<br>

<div class="uis_msg info">
    <div class="text">
        <p>
            {{$translation->infoOne}}
            <a href="https://www.oikt.czu.cz/en/r-16550-it-helpdesk">
                {{$translation->infoOneLink}}
            </a>.
        </p>
    </div>
</div>

<div class="uis_msg info">
    <div class="text">
        {{$translation->infoTwo}}
        <a href="/prihlaska/auth/evidence_eprihlasek.pl{{ \App\Helpers\AppHelper::setParameters() }}">
            {{$translation->infoTwoLink}}
        </a>
    </div>
</div>

<div class="uis_msg info">
    <div class="text">
        <a href="/system/aad_login.pl?redir=1;destination=%2Fauth%2F{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->infoThree}}</a>
    </div>
</div>

<form method="POST" action="/auth{{ \App\Helpers\AppHelper::setParameters() }}">
    @csrf
    <div class="highlightbox" id="loginform">
        <noscript>
            <div id="probiha_kontrola">
                <p></p>
                <table>
                    <tbody>
                        <tr class="">
                            <td class="odsazena" style="vertical-align: top;" align="left">
                                <img
                                    src="https://is.czu.cz/img.pl?unid=1532"
                                    alt="in_progress"
                                    title="{{$translation->cookie}}" 
                                    sysid="in-progress">
                            </td>
                            <td class="odsazena" align="left">
                                {{$translation->cookie}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p></p>
            </div>
        </noscript>
        <div class="loginform-section">
            <table>
                <tbody>
                    <tr class=" password_rows">
                        <td class="odsazena">
                            {{$translation->userName}}
                        </td>
                        <td class="odsazena">
                            <input
                                type="text"
                                name="credential_0"
                                size="20"
                                maxlength="100"
                                class="reqfields"
                                id="credential_0"
                                value="">
                        </td>
                    </tr>
                    <tr class=" password_rows">
                        <td class="odsazena">
                            {{$translation->password}}
                        </td>
                        <td class="odsazena">
                            <input
                                type="password"
                                name="credential_1"
                                size="20"
                                maxlength="100"
                                value=""
                                id="credential_1"
                                class="reqfields">
                        </td>
                    </tr>
                </tbody>
            </table>
        <p></p>
        </div>
        <div class="loginform-section">
            <input type="submit" name="login" value="{{$translation->login}}" id="login-btn">
        </div>
        <div class="loginform-section" id="odhlasit1">
            {{$translation->logoutInfo}} (<a href="" onclick="auth_logout()">{{$translation->logoutInfoChange}}</a>).
        </div>
        <div class="loginform-section" id="odhlasit2" style="display: none">
            <!-- @TODO - update to other languages -->
            Log out after
            <input type="radio" name="credential_2" value="1800">30 min
            <input type="radio" name="credential_2" value="3600">1 hour
            <input type="radio" name="credential_2" value="28800">8 hours
            <input type="radio" name="credential_2" value="86400" checked="checked">1 day
            <input type="radio" name="credential_2" value="345600">4 days    of inactivity.
        </div>
    </div>
</form>

<p></p>
<br>
<div class="small">
    <span class="small">
        <b>Tip: </b>{{$translation->tip}}
    </span>
</div>
<br>
<div class="small">
    <span class="small">
        {{$translation->footerTip}}
        <a href="/navod{{ \App\Helpers\AppHelper::setParameters() }}">
            {{$translation->footerLink}}
        </a> {{$translation->footerTipTwo}}
    </span>
</div>
<br>
<div class="uis_reloaded_non_auth"></div>
<div class="pseudostrap-activated"></div>

@endsection
