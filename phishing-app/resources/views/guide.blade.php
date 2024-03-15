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
</nav>

<div id="titulek">
    <h1>{{$translation->title}}</h1>
    <hr class="uisseparator">
</div>
<div class="small">
    <span class="small">
        {{$translation->desc}}
    </span>
</div>
<br>
    <big><b>{{$translation->heading1}}</b></big>
<p></p>

<div class="small">
    <span class="small">
        {{$translation->browserInfo}}
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        {{$translation->allUsers}}
        <a href="/{{ \App\Helpers\AppHelper::setParameters() }}">https://is.czu.cz/</a>
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        {{$translation->password}}
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        <b>{{$translation->students}}</b> {{$translation->studentsNext}}
        <a href="/auth{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->studentsLink}}</a> {{$translation->studentsLast}}<br>
        <b>{{$translation->applicants}}</b> {{$translation->applicantsNext}}
        <a href="/prihlaska{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->applicantsLink}}</a> {{$translation->applicantsLast}}<br>
        <b>{{$translation->admitted}}</b> {{$translation->admittedNext}}
        <a href="/navratka{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->admittedLink}}</a> {{$translation->admittedLast}}
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        {{$translation->descLast}}
    </span>
</div>
<br>

<big>
    <b>{{$translation->heading2}}</b>
</big>
<p></p>
<div class="small">
    <span class="small">
        <b>{{$translation->staff}}</b> {{$translation->staffNext}}
        <br>

        <b>{{$translation->students2}}</b> 
        {{$translation->students2Next}} 
        <a href="/prihlaska{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->students2Link}}</a> 
        {{$translation->students2Last}}
        <br>

        <b>{{$translation->applicants2}}</b> 
        {{$translation->applicants2Next1}} 
        <a href="/prihlaska{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->applicants2Link1}}</a> 
        {{$translation->applicants2Next2}} 
        <a href="/navratka{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->applicants2Link2}}</a>
        {{$translation->applicants2Next3}}
        <a href="/prihlaska{{ \App\Helpers\AppHelper::setParameters() }}">{{$translation->applicants2Link3}}</a>
        {{$translation->applicants2Last}}
        <br>

        <b>{{$translation->other}}</b> 
        {{$translation->otherNext}}
    </span>
</div>
<br>

<big>
    <b>{{$translation->heading3}}</b>
</big>
<p></p>

<div class="small">
    <span class="small">
        {{$translation->info1}}
    </span></div><br>
<div class="small">
    <span class="small">
        {{$translation->info2}}
    </span></div><br>
<div class="small">
    <span class="small">
        {{$translation->info3}}
    </span></div><br>
<div class="small">
    <span class="small">
        {{$translation->info4}}
    </span>
</div>
<br>
    <big><b>{{$translation->heading4}}</b></big>
<p></p>
<div class="small">
    <span class="small">
        {{$translation->problems}}
        <a href="mailto:helpdesk@czu.cz">helpdesk@czu.cz</a>.
    </span>
</div>
<br>

<div class="pseudostrap-activated"></div>
<br>

<ul id="navig-footer">
    <li>
        <i>
            <a href="/auth{{ \App\Helpers\AppHelper::setParameters() }}">
                {{$translation->login}}
            </a>
        </i>
    </li>
</ul>

@endsection
