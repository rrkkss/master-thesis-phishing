@extends('header')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">
                <img
                    src="https://is.czu.cz/img.pl?unid=18661"
                    alt=""
                    title="Czech University of Life Sciences Prague"
                    sysid="base-home">
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            University information system
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
                        <!-- <a
                            href="javascript:void(0);"
                            onclick="uis.box.open_fixed(
                                '1',
                                '<big><b>Návod - Kontaktní centrum - student</b></big><p /><div class=&quot;small&quot;><span class=&quot;small&quot;><p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:8.0pt&quot;><span style=&quot;font-size: 12pt;&quot;>Jakou žádost můžu podat? Kde? Jak doplnit přílohy? <u1:p class=&quot;ContentPasted0&quot;>&nbsp;</u1:p></span><span style=&quot;font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;&quot;><o:p></o:p></span></p><p><span style=&quot;font-size: 11pt; font-family: Calibri, sans-serif;&quot;>Návod je tady:&nbsp;<a href=&quot;"https://czuvpraze.sharepoint.com/sites/tf/Sdilene%20dokumenty/Navody/Kontaktn%C3%AD%20centrum%20-%20n%C3%A1vod%20pro%20studenty.pdf&quot; contenteditable=&quot;false&quot; data-ogsc=&quot;&quot;>pro studenty</a></span></p></span></div><br />');" -->
                                <!-- >Návod - Kontaktní centrum - student -->

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
                    <b>Personal administration</b>
                </span>
                <br><br>
                &nbsp;•&nbsp;&nbsp;
                <a href="/auth/">
                    <b>
                        <span class="nowrap">
                            Log in to the Personal administration of UIS
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/navod/">
                    <span class="nowrap">
                        First log in to UIS instructions
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/dok/integratori.pl">
                    <span class="nowrap">
                        System integrators
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
                    <b>Admission procedure</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/prihlaska/">
                    <b>
                        <span class="nowrap">
                            E-application form to study at CZU
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;
                <a href="/prijimacky/verejne_vysledky.pl">
                    <span class="nowrap">
                        Admission procedure results
                    </span>
                </a>•&nbsp;&nbsp;
                <a href="/navratka/">
                    <b>
                        <span class="nowrap">
                            Pre-enrollment confirmation for application to study at CZU
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
                    <b>Information about CZU</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/pracoviste/pracoviste.pl">
                    <span class="nowrap">
                        Departments
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/dok_server/">
                    <span class="nowrap">
                        Public document server
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
                    <b>Study information</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/student/harmonogram.pl">
                    <span class="nowrap">
                        Academic year schedule
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/plany.pl">
                    <b>
                        <span class="nowrap">
                            Study plans
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/">
                    <b>
                        <span class="nowrap">
                            Course catalogue
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/dohody.pl">
                    <span class="nowrap">
                        Agreements with foreign partners
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/zp/">
                    <b>
                        <span class="nowrap">
                            Final theses at CZU
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/katalog/rozvrhy_view.pl">
                    <span class="nowrap">
                        Timetables
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/financovani/index.pl">
                    <span class="nowrap">
                        Study financing
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
                    <b>Jobs portal</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/praxe/index.pl">
                    <b>.
                        <span class="nowrap">
                            Registration of a company to Internship Portal
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
                    <b>About the information system</b>
                </span>
                <br><br>&nbsp;•&nbsp;&nbsp;
                <a href="/dok/help.pl">
                    <b>
                        <span class="nowrap">
                            UIS documentation
                        </span>
                    </b>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="/system/agregat.pl">
                    <span class="nowrap">
                        Statistics of using UIS
                    </span>
                </a> &nbsp;•&nbsp;&nbsp;
                <a href="http://www.uis-info.com">
                    <b>
                        <span class="nowrap">
                            Are you thinking of implementing a study information system at your university?
                        </span>
                    </b>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<ul id="navig-footer">
    <li>
        <i>
            <a href="/?lang=cz">
                Česká verze informačního systému (Czech version)
            </a>
        </i>
    </li>
    <li>
        <i>
            <a href="/?lang=sk">
                Slovenská verzia informačného systému (Slovak version)
            </a>
        </i>
    </li>
</ul>

<div
    id="uis-control-data"
    data-uis_ang_lokalizace="GB"
    data-cookiebar_cookie="uis_cookiebar_policy"
    data-stat_tel_predvolba="+420"
></div>

<div
    id="automatic-back-to-home"
    title="Na začátek stránky"
    style=""
>
    <span id="arrowup">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115.4 122.88">
            <path fill="currentColor" d="M24.94,67.88A14.66,14.66,0,0,1,4.38,47L47.83,4.21a14.66,14.66,0,0,1,20.56,0L111,46.15A14.66,14.66,0,0,1,90.46,67.06l-18-17.69-.29,59.17c-.1,19.28-29.42,19-29.33-.25L43.14,50,24.94,67.88Z">
            </path>
        </svg>
    </span>
</div>

@endsection
