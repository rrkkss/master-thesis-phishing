<style>
    /* base.css */
img { border: 0; }
.center { text-align: center; }
span.acc { background-color: #cfcfcf; }
td, th { padding-top: 0; padding-bottom: 0; }
td.odsazena, th.zahlavi { padding-left: 5px; padding-right: 5px; }
tr.zahlavi td, tr.zahlavi th { padding-left: 5px; padding-right: 5px; }
tr.zahlavi, td.zahlavi, th.zahlavi { font-weight: bold; }
td.strom { padding: 0; margin: 0; border: 0; line-height: 10px; }
table.strom td:last-child { width: auto; }
td.strom img { vertical-align: middle; }
td.uzke,th.uzke { padding: 1px; margin: 1px; border: 0; }
table { font-size: 13px; }
table.strom { border-collapse: collapse; padding: 0; table-layout: auto;}
table.strom a { padding: 0; margin: 0; border: 0; }
table.strom a:hover { padding: 0; margin: 0; border: 0; }
div.inpage { border: 1px solid black; }
span.small,span.small28,span.small415,
    span.ysmall,span.ysmall28,span.ysmall415 { font-size: 13px; }
div.small,div.small28,div.small415 { font-size: 15px; text-align: justify; }
div.xsmall,div.xsmall28,div.xsmall415 { display: inline; font-size: 13px; }
.reqfields, .pseudoreqfields { background-color: #ffee99; }
.skrtaci { text-decoration: line-through; padding-left: 5px; padding-right: 5px; }
.skrtaci td { text-decoration: line-through; padding-left: 5px; padding-right: 5px; }
.zasadky-info { background-color: #ffffcc; border: solid 1px black; }
.zasadky-crit { background-color: #fff1dd; border: solid 1px black; }
.zasadky-container { display: flex; flex-wrap: wrap; }
div.zasadka { margin: 5px; display: block; }
div.zasadka .zasadky-info { height: 100%; }
div.zasadka .zasadky-crit { height: 100%; }
.vyveska ul { padding: 0px; }
.rozvrh-pred { color:black; background-color: lightgreen; border: dashed 1px black; }
.rozvrh-cvic { color:black; background-color: lightcyan; border: dashed 1px black; }
.cvic-vyb { background-color: #99ffff; border: 1px solid; }
.pred-vyb { background-color: #4ee44e; border: 1px solid; }
.konzultace-akce { color:black; background-color: #dacbff; border: dashed 1px black; }
.rozvrh-blok { color:black; background-color: lightgrey; border: dashed 1px black; }
.rozvrh-akce { color:black; background-color: #ffffc5; border: dashed 1px black; }
.rozvrh-sep { color:black; background-color: #808080; border: dashed 1px black; }
.rozvrh-reze { color:black; background: rgb(255, 205, 197); border: dashed 1px black; }
.rozvrh-zadost { color: black; background-color: #FFE788; border: dashed 1px black; }
.rozvrh-volno { color:black; background: rgb(255, 255, 255); border: dashed 1px black; }
.rozvrh-blok a, .rozvrh-reze a, .rozvrh-pred a, .rozvrh-cvic a, .rozvrh-volno a, .rozvrh-zadost a { color:blue; }
.nowrap { white-space: nowrap; }
.radek-vyrazny { background-color: #ffe88a; }
.radek-chyba { background-color: #FAA5A5; }
.gdpr-rules { border: solid 1px black; width: 900px; padding: 15px 10px; }
.gdpr-rules ol { list-style-type: decimal; }
table.velky_ramecek { border: 1px solid black; }
table.detailni_ramecek td { border: 1px solid black; }
.naseptavac { border: 1px solid #aaa; font: 11px sans-serif; position: absolute; margin: 0px; visibility: hidden; background-color: white; cursor: pointer; _cursor: hand; z-index: 1000; overflow: hidden; }
.naseptavac ul { padding: 0px; margin: 2px; list-style-type: none; }
.naseptavac ul li.sel { background-color: blue; color: white; }
.naseptavac .naseptavac-more { text-align: right; _cursor: default; cursor: default; font: 10px sans-serif; color: black; }
.kalendar-den_bez_akce { background-color: #EEEEEE; }
.kalendar-tyden_zahlavi { background-color: #DDDDDD; }
.kalendar-prac_doba { background-color: #CCCCCC; }
.kalendar-dnes { background-color: #3399FF; }
.kalendar-den { background-color: #99CCFF; }
.kalendar-den_mimo_mesic { background-color: #DDDDDD; }
.kalendar-den_vikend { background-color: #66CC66; }
.kalendar-den_mimo_vikend { background-color: #BBBBBB; }
.kalendar-den_zvyrazneny { background-color: #FFFF66; }
.uni-fake-info { margin:10px;padding:15px 10px;background:#ffe992;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;width:900px;color:#000;font-size:16px; }
.uni-devel-info { border: solid #392983 1px; color: #392983; background-color: silver; text-align: center; margin:5px 0; width:900px; }
.big-info,.uni-unusual-info { text-align:center;margin:0px 0px 15px 0px;padding:15px 10px;background:#c80000;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;width:900px;color:#fff;font-size:16px; }
.big-info a,.uni-unusual-info a { color: orange; }
.hider-nazev-skryti{ transition: opacity .2s ease-in-out; }
.hider{border-top:1px solid #ccc; height:15px;}
.hider a{ display:block; height:100%; position:relative; }
.hider a span{ display:block; background-position:center center; background-repeat:no-repeat; background-color:#ccc; position:absolute; width:21px; height:21px; right:0px; top:-11px; -moz-border-radius:3px; -webkit-border-radius:3px; -ms-border-radius:3px; border-radius:3px; }
.hider:hover { border-top:1px solid #aaa; }
.hider:hover a span{ background-color:#aaa; }
.hider a span{ background-image: url(/img.pl?sysid=hider-h); transition: rotate .2s ease-in-out; }
.hider.hider-open a span{ rotate:-180deg; }
.zasadky-info ul li{ list-style:none; background:transparent; }
.translatedebug { background-color: cyan; color: black; }
.translatedebug_button { background-color: cyan; color: black; }
.icon_small_button { display: block; background-repeat: no-repeat; background-position: 6px center; padding-left:27px; font-size: 13px; line-height: 13px; height: 25px; border-radius: 5px; border: solid 1px #777; cursor: pointer; }
.icon_big_button { display: block; background-repeat: no-repeat; background-position: 6px center; padding-left: 45px; font-size: 16px; line-height: 16px; height: 43px; border-radius: 5px; border: solid 1px #777; cursor: pointer; }
.highlightbox { border: 1px solid black; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 5px #888; -webkit-boz-shadow: 0 0 5px #888; box-shadow: 0 0 5px #888; padding-left: 50px; padding-right: 50px; padding-top: 20px; padding-bottom: 20px; margin-top: 20px; margin-bottom: 20px; }
.loginform, #loginform { width: 500px; margin-left: 100px; margin-top: 40px; margin-bottom: 40px; background-color: #f4f4f4; color: black; }
.loginform input[type=submit], #loginform input[type=submit] { padding: 10px 20px 10px 20px; font-weight: bold; }
.loginform input[type=text], #loginform input[type=text], #loginform input[type=password] { width: 250px; }
#loginform .loginform-section { text-align: center; margin-top: 15px; margin-bottom: 15px; }
#loginform .loginform-section table { margin-left: auto; margin-right: auto; }
#loginform .loginform-section > div { margin-left: auto; margin-right: auto; }
#loginform .loginalternative > span  { border: solid 1px #ccc; border-radius: 5px; padding: .7em; margin-top: .7em; display: inline-block; cursor: pointer; width: 66%; }
#loginform .loginalternative > span:hover { background-color: #ccc; }
#loginform .loginalternative > span > span { margin-left: 1em; vertical-align: middle; }
#loginform .loginalternative > span > a > img { vertical-align: middle; }
#loginform .loginform-section > div.loginalternativecaption { margin-top: 3em; margin-bottom: 1em; }
div.loginalternativecaption:before, div.loginalternativecaption:after { content: ''; vertical-align: middle; display: inline-block; width: 30%; border-bottom: 1px solid #ccc; margin: 0 2% 0 -45%; }
div.loginalternativecaption:after { margin: 0 -45% 0 2%; }
.diskuze-svetly { background-color: #DAF1FF; color: black; }
.diskuze-tmavy { background-color: #82CAFF; color: black; }
.bunka_zelena { background-color: #26BA03; }
.bunka_cervena { background-color: #F61F17; }
.bunka_seda { background-color: #F7F7F7; padding: 5px }
hr.hr_seda { background: #D8D8D8; }
table.border_collapse { border-collapse:collapse; }
h1 { padding-bottom: 5px; }
h1 a.context-help-invoke { vertical-align: middle; display: inline-block; margin-left: 10px; }

.gradient_admin { border-left: #cc0000 solid 10px; padding-left: 8px; }
.gradient_zadani { border-left: #0066ff solid 10px; padding-left: 8px; }
.gradient_uzivatel { border-left: #ffaf4b solid 10px; padding-left: 8px; }
.gradient_zakaznik { border-left: #00b201 solid 10px; padding-left: 8px; }
.zvyrazneny_komentar:not(.gradient_admin,.gradient_zadani,.gradient_uzivatel,.gradient_zakaznik) { border: #cc0000 solid 3px; padding: 2px; }
.zvyrazneny_komentar.gradient_admin,.zvyrazneny_komentar.gradient_zadani,.zvyrazneny_komentar.gradient_uzivatel,.zvyrazneny_komentar.gradient_zakaznik {
    border-top: #cc0000 solid 3px; padding-top: 2px;
    border-bottom: #cc0000 solid 3px; padding-bottom: 2px;
    border-right: #cc0000 solid 3px; padding-right: 2px;
}

.odkaz_na_problem { color: red; }
.odkaz_na_info { color: green; }

.hidden { display: none; }

#uis-context-help-reader {
    border: solid 1px black;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    position: fixed;
    z-index: 20;
    min-width: 350px;
    min-height: 250px;
    background: white;
}

#uis-context-help-reader .documentation {
    position: absolute;
    top: 40px;
    bottom: 20px;
    left: 0;
    right: 0;
    padding-left: 16px;
    padding-right: 16px;
    overflow: auto;
    background: white;
    text-align: left;
    font-size: 10pt;
    font-family: Verdana, Arial;
}

#uis-context-help-titlebar {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 24px;
    background: #fcfcfc; /* Old browsers */
    background: -moz-linear-gradient(top, #fcfcfc 0%, #e0e0e0 40%, #b7b7b7 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #fcfcfc 0%,#e0e0e0 40%,#b7b7b7 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #fcfcfc 0%,#e0e0e0 40%,#b7b7b7 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#b7b7b7',GradientType=0 ); /* IE6-9 */
    border-bottom: solid 1px black;
    cursor: move;
}

#uis-context-help-footerbar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 20px;
    background-color: white;
}

#uis-context-help-title {
    display: inline;
    line-height: 24px;
    margin-left: 16px;
    font-weight: bold;
}

#uis-context-help-enlargebtn {
    position: absolute;
    right: 72px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-maximize ) no-repeat;
    cursor: pointer;
}

#uis-context-help-resetbtn {
    position: absolute;
    right: 44px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-reset ) no-repeat;
    cursor: pointer;
}

#uis-context-help-freezebtn {
    position: absolute;
    right: 128px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-freeze ) no-repeat;
    cursor: pointer;
}

#uis-context-help-minimizebtn {
    position: absolute;
    right: 100px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-minimize ) no-repeat;
    cursor: pointer;
}

#uis-context-help-backbtn {
    position: absolute;
    right: 156px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-back ) no-repeat;
    cursor: pointer;
}

#uis-context-help-closebtn {
    position: absolute;
    right: 16px;
    top: 2px;
    height: 20px;
    width: 20px;
    background: url( /img.pl?sysid=base-dialog-close ) no-repeat;
    cursor: pointer;
}

.uis-context-help-frozen {
    background: url( /img.pl?sysid=base-dialog-unfreeze ) no-repeat !important;
}

.uis-context-help-minimized {
    min-height: 24px !important;
    height: 24px !important;
}
.uis-context-help-minimized .documentation, .uis-context-help-minimized #uis-context-help-footerbar, .uis-context-help-minimized .ui-resizable-handle { display: none !important; }
.help .documentation{ width: 600px; }
.help { font-family: Verdana, Arial; font-size: 10pt; text-align: left; line-height: 20px; }
#uis-context-help-reader a, .help a { text-decoration: none; font-size: 13px; }
#uis-context-help-reader h1, .help h1 { font-size: 15pt }
#uis-context-help-reader h2, .help h2 { font-size: 13pt }
#uis-context-help-reader h3, .help h3 { font-size: 11pt }
#uis-context-help-reader table, #uis-context-help-reader td, .help table, .help td { font-size: 10pt; vertical-align: top; }
#uis-context-help-reader table thead td, .help table thead td { background: #CCCCDD; font-weight: bold; }
#uis-context-help-reader table td, .help table td { padding: 4px; }
#uis-context-help-reader table tr:nth-child(odd), .help table tr:nth-child(odd) { background: none; }
#uis-context-help-reader table tr:nth-child(even), .help table tr:nth-child(even) { background: #eeeeee; }
#uis-context-help-reader .index, .help .index { display: none; }
#uis-context-help-reader .index.application, .help .index.application { display: inline; font-weight: bold; }
#uis-context-help-reader .quote::before, .help .quote::before { content: open-quote; }
#uis-context-help-reader .quote::after, .help .quote::after { content: close-quote; }
#uis-context-help-reader .hint, #uis-context-help-reader .note, .help .hint, .help .note { background-size: 33px 33px; background-repeat: no-repeat; background-position: 4px 4px; padding: 10px 10px 10px 45px; vertical-align: middle; border-radius: 5px; margin: 10px 0px; }
#uis-context-help-reader .note, .help .note { background-image: url( /img.pl?sysid=dekorace-info ); background-color: #DCF2FA; border: 1px solid #A0E2FA; }
#uis-context-help-reader .hint, .help .hint { background-image: url( /img.pl?sysid=dekorace-crit ); background-color: #FFEAE6; border: 1px solid #FFB4A6; }
#uis-context-help-reader .icon-inline, .help .icon-inline { max-height: 20px; position: relative; top: 5px; }
#uis-context-help-reader .ucfirst, .help .ucfirst { display: inline-block; }
@-moz-document url-prefix() { #uis-context-help-reader .ucfirst, .help .ucfirst { display: inline-block; margin-right: -0.6em } }
#uis-context-help-reader .lcfirst, .help .lcfirst { display: inline-block; }
#uis-context-help-reader .ucfirst:first-letter, .help .ucfirst:first-letter { text-transform: uppercase; }
#uis-context-help-reader .lcfirst:first-letter, .help .lcfirst:first-letter { text-transform: lowercase; }

.cerveny_on { background-image: url('/img.pl?sysid=helpdesk-pin-admin'); }
.cerveny_off { background-image: url('/img.pl?sysid=helpdesk-pin-admin-zrus'); }
.zluty_on { background-image: url('/img.pl?sysid=helpdesk-pin-uziv'); }
.zluty_off { background-image: url('/img.pl?sysid=helpdesk-pin-uziv-zrus'); }
.modry_on { background-image: url('/img.pl?sysid=helpdesk-pin-ukol'); }
.modry_off { background-image: url('/img.pl?sysid=helpdesk-pin-ukol-zrus'); }

.UISSuggestPanel { font-family: sans-serif; }

html.ajax-in-progress { cursor: wait; }

.imagedebug { position: absolute; top: 0px; left: 0px; z-index: 1000; background-color: white; color: black; border: 1px solid black; padding: 5px; box-shadow: 0px 0px 14px 0px rgba(140,140,140,1); white-space: nowrap; text-align: left; font-size: 12px; }
.imagedebug img { max-width: 100px; max-height: 100px; margin-right: 2px }

.cookie-bar { position: fixed; overflow: hidden; box-sizing: border-box; line-height: 1.5em; display: flex; align-items: center; flex-wrap: nowrap; top: 0; left: 0; right: 0; z-index: 9999; background-color: black; color: white; padding: 16px; opacity: 1; transition: opacity 1s ease; font-size: 16px; }
.cookie-bar-shown + .wholepage { margin-top: 68px; }
.cookie-message { flex: 1; }
.cookie-btns { display: flex; align-items: center; align-content: space-between; }
.cookie-btn { border-radius: 5px; flex: 1; padding: .4em .8em; font-size: .9em; display: block; font-weight: 700; text-align: center; white-space: nowrap; cursor: pointer; }
.cookie-btn + .cookie-btn { margin-left: 20px; }
.cookie-btn-accept { background-color: #6cb274; min-width: 140px; color: black; }
.cookie-btn-more { color: white; }
.cookie-btn-accept:hover, .cookie-btn-accept:focus { color: black; background-color: #59a862; text-decoration: none; }
.cookie-btn-more:hover, .cookie-btn-more:focus { color: white; text-decoration: underline; }

.uis-multicolumn-container { display: flex; justify-content: baseline; align-items: flex-start; flex-direction: row; flex-wrap: wrap; }
.uis-multicolumn-column { padding-right: 20px; }
.cb-single { display: flex; align-items: baseline; }
.cb-single input[type=checkbox] { flex: none; }
.cb-single:not(.cb-single-center) { margin-right: 1em; }
.cb-single-center { justify-content: center; }

.add-bottom-margin { margin-bottom: 1.2em; }
.add-padding-top { padding-top: 2em; }

.study-badge { margin: 2px; padding: 4px 10px; min-width: 100px; display: inline-block; text-align: center; font-weight: bold; font-size: 90%; letter-spacing: 1.2px; border-radius: 3px; }
.study-badge + .study-badge { margin-left: 10px; }
.study-badge-aftertext{ margin-left: 20px }
audio,video{outline: 0}

.fakebutton { border: none; margin: none; padding: none; background: none; cursor: pointer; }
.fakelink { border: none; margin: none; padding: none; background: none; cursor: pointer; }
/* .fakelink:hover {} */

[hidden] { display: none; }
tr.collapsed-row > td.collapsible_icon_field > .level-wrapper > span > img.collapse-icon, tr.collapsed-row > td.collapsible_icon_field > small > .level-wrapper > span > img.collapse-icon,
    tr.collapsed-row > td.collapsible_icon_field > div > .level-wrapper > span > img.collapse-icon, tr.collapsed-row > td.collapsible_icon_field > span > .level-wrapper > span > img.collapse-icon{ display: none; }
tr:not(.collapsed-row) > td.collapsible_icon_field > .level-wrapper > span > img.expand-icon, tr:not(.collapsed-row) > td.collapsible_icon_field > small > .level-wrapper > span > img.expand-icon,
    tr:not(.collapsed-row) > td.collapsible_icon_field > div > .level-wrapper > span > img.expand-icon, tr:not(.collapsed-row) > td.collapsible_icon_field > span > .level-wrapper > span > img.expand-icon { display: none; }
tr > td.collapsible_link_field { cursor: pointer; }
.collapse-icon, .expand-icon { cursor: pointer; padding-right: 0.5em; }
.filler-icon { padding-right: 0.5em; }
.next-by-content { flex-grow: 1; padding-top: 0.25em; }
.level-wrapper { display: flex; align-items: flex-start; align-content: flex-start; }

input[data-field-validate].error, .errfield { background-color: #ffdddc; color: red; }
label.error { color: red; padding-left: 2em; padding-right: 2em; }

td[data-hd-cervena] div, td[data-hd-cervena] span { color: red !important; }

textarea.uis-ta-fullwidth { width: 100%; }
.uis-ta-counter-area { font-size: 80%; }
.uis-ta-counter-invalid{ color: red; }
.uis-ta-counter-left { text-align: left; }
.uis-ta-counter-area:not(.uis-ta-counter-area-left) span { text-align: right; display: inline-block; }
.ui-widget { z-index: 2010!important; }
.ui-widget-overlay  { z-index: 2000!important; }
.uis-std-icon-preview { height: 48px; }
.portal_menu td { padding-right: 3rem!important; }

.first-line, .second-line { display: none; }

.hide-row { display: none; }



/* pseudostrap.css */

button { border-radius: 0; }
button:focus:not(:focus-visible) { outline: 0; }
button, select { text-transform: none; }
input, button, select, optgroup, textarea { margin: 0; }
button, [type=button], [type=reset], [type=submit] { appearance: button; }
button:not(:disabled), [type=submit]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled) { cursor: pointer; }
select { word-wrap: normal; }

body, table { font-size: .8rem; font-weight: 400; }

textarea, input:not([type=image]):not([type=radio]):not([type=checkbox]):not([type=file]), select, optgroup, button, input[type=file].pseudofile + label {
    padding: 0.375rem 0.6rem;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.4;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    margin-top: 0.1em;
    margin-bottom: 0.1em;
    vertical-align: middle;
}

textarea, input:not([type=image]):not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=reset]), select, optgroup {
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: inset 0 3px 5px -2px hsl(0deg 0% 78% / 50%);
}

select {
    padding: 0.375rem 2.25rem 0.375rem 0.6rem;
}

select[size="1"], select:not([size]):not([multiple]) {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.6rem center;
    background-size: 16px 12px;
}

textarea:focus, input:not([type=image]):not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=reset]):focus, select:focus, optgroup:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

input[type=file].pseudofile:focus + label, input[type=file].pseudofile.has-focus + label, input[type=button]:focus, input[type=submit]:focus, button:focus, input[type=reset]:focus {
    appearance: button;
    outline: solid black 2px;
    outline: -webkit-focus-ring-color auto 1px;
}

button, [type=submit], [type=reset], [type=button], input[type=file].pseudofile + label {
    color: black;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: 1px solid #ced4da;
    background-color: #e7eaed;
    font-size: 1rem;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

input[type=file].pseudofile + label {
    font-size: .9rem;
}

button:hover, [type=submit]:hover, [type=reset]:hover, [type=button]:hover, input[type=file].pseudofile + label:hover {
    color: white;
    background-color: #0b5ed7;
    border-color: #0a58ca !important;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

button:disabled, [type=submit]:disabled, [type=reset]:disabled, [type=button]:disabled, input[type=file].pseudofile + label:disabled {
    opacity: 0.65;
    pointer-events: none;
}

select { cursor: pointer; }

[type=radio], [type=checkbox] {
    width: 1rem;
    height: 1rem;
    margin: .3rem;
    vertical-align: middle;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid rgba(0, 0, 0, 0.25);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
    cursor: pointer;
}

[type=radio]:active, [type=checkbox]:active {
   filter: brightness(90%);
}

[type=radio]:focus, [type=checkbox]:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

[type=radio]:checked, [type=checkbox]:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

[type=radio]:disabled, [type=checkbox]:disabled {
    pointer-events: none;
    filter: none;
    opacity: 0.5;
}

[type=radio] {
    border-radius: 50%;
}

[type=radio]:checked {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");    
}

[type=checkbox] {
    border-radius: 0.25em;
}

[type=checkbox]:checked {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}

.ui-datepicker-trigger {
    width: 0px;
    height: 0px;
    margin-top: 0.22rem;
    margin-bottom: 0.1rem;
    margin-left: 4px;
    padding: .8rem;
    border: none;
    background: url("data:image/svg+xml,%3Csvg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' viewBox='0 0 28.808 28.808' style='enable-background:new 0 0 28.808 28.808;' xml:space='preserve'%3E%3Cg%3E%3Cpath style='fill:%23030104;' d='M21.473,6.081c1.105,0,2-0.889,2-1.994V1.998c0-1.106-0.895-1.998-2-1.998 c-1.104,0-1.996,0.892-1.996,1.998v2.089C19.477,5.192,20.369,6.081,21.473,6.081z'/%3E%3Cpath style='fill:%23030104;' d='M28.572,3.457h-4.021v1.017c0,1.676-1.363,3.043-3.043,3.043c-1.682,0-3.041-1.367-3.041-3.043 V3.457H10.35v1.017c0,1.676-1.363,3.043-3.043,3.043S4.266,6.149,4.266,4.473V3.457L0.207,3.406v25.402h2.029h24.34l2.025-0.006 L28.572,3.457z M26.576,26.785H2.236V10.557h24.34V26.785z'/%3E%3Cpath style='fill:%23030104;' d='M7.275,6.081c1.105,0,1.998-0.889,1.998-1.994V1.998C9.273,0.892,8.381,0,7.275,0 C6.172,0,5.279,0.892,5.279,1.998v2.089C5.279,5.192,6.172,6.081,7.275,6.081z'/%3E%3Crect x='10.357' y='12.735' style='fill:%23030104;' width='3.195' height='2.821'/%3E%3Crect x='15.525' y='12.735' style='fill:%23030104;' width='3.199' height='2.821'/%3E%3Crect x='20.318' y='12.735' style='fill:%23030104;' width='3.195' height='2.821'/%3E%3Crect x='10.357' y='17.42' style='fill:%23030104;' width='3.195' height='2.819'/%3E%3Crect x='15.525' y='17.42' style='fill:%23030104;' width='3.199' height='2.819'/%3E%3Crect x='20.318' y='17.42' style='fill:%23030104;' width='3.195' height='2.819'/%3E%3Crect x='10.357' y='22.198' style='fill:%23030104;' width='3.195' height='2.819'/%3E%3Crect x='5.279' y='17.42' style='fill:%23030104;' width='3.193' height='2.819'/%3E%3Crect x='5.279' y='22.198' style='fill:%23030104;' width='3.193' height='2.819'/%3E%3Crect x='15.525' y='22.198' style='fill:%23030104;' width='3.199' height='2.819'/%3E%3Crect x='20.318' y='22.198' style='fill:%23030104;' width='3.195' height='2.819'/%3E%3C/g%3E%3C/svg%3E");
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.ui-datepicker-trigger:hover {
    box-shadow: 0 0 0.2rem 0.2rem #ddd;
    border-radius: 0.25rem;
}

#uis-context-help-reader button {
    line-height: .8rem;
    font-size: .8rem;
    vertical-align: baseline;
    cursor: initial;
}

#uis-context-help-reader button:hover {
    color: black;
    border: 1px solid transparent;
    background-color: #e7eaed;
}

.portlet { border-radius: .25rem; padding: 0.25rem 0.375rem; }

.zasadky-crit, .zasadky-info { border-radius: .25rem; }

table.detailni_ramecek td { border-color: #9da9b5; border-radius: .25rem; }
table.detailni_ramecek tr.zahlavi td { border: none; }

#uis-context-help-reader, #uis-quicksave-container { border-radius: .25rem; }
#uis-context-help-titlebar, #uis-quicksave-titlebar { border-radius: .25rem .25rem 0 0; }
#uis-context-help-footerbar { border-radius: 0 0 .25rem .25rem; }

.reqfields.important, input[type=file].pseudofile.reqfields.important + label, .pseudoreqfields.important, [input=type].pseudofile.pseudoreqfields.important { background-color: #e8f4df; border-color: #c3e2ab !important; } 

.reqfields, input[type=file].pseudofile.reqfields + label, .pseudoreqfields, [input=type].pseudofile.pseudoreqfields { background-color: #fff9db; border-color: #ffd979 !important; }

.important, input[type=file].pseudofile.important + label { background-color: #f0fbfe; border-color: #abe8f9 !important; } 

.simulated, input[type=file].pseudofile.simulated + label { background-color: white !important; }

tr.zahlavi > th, tr.zahlavi > td, tr.zahlavi > th.zahlavi, tr.zahlavi > td.zahlavi, th.zahlavi, td.zahlavi {
    min-height: 1.4rem;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    box-shadow: inset -0.125rem -0.125rem 0.3rem -0.15rem hsl(0deg 0% 50% / 50%),
        inset 0.125rem 0.125rem 0.3rem 0 hsl(0deg 0% 95% / 50%);
    border-radius: 0.25rem;
}

td.odsazena, td.zahlavi, th.zahlavi, tr.zahlavi > th, tr.zahlavi > td, tr.zahlavi > th.zahlavi, tr.zahlavi > td.zahlavi {
    padding-left: 0.6rem !important;
    padding-right: 0.6rem !important;
}

a:hover { text-decoration: underline; }

input[data-field-validate].error, .errfield:not([type=radio]):not([type=checkbox]), .invalid:not([type=radio]):not([type=checkbox]) {
    background-color: #fff5f5;
    border: 1px solid #d03a3b !important;
}

[type=radio].errfield, [type=checkbox].errfield, [type=radio].invalid, [type=checkbox].invalid {
    background-color: #fff5f5;
    border-color: #d03a3b !important;
}

[type=radio].errfield:checked, [type=radio].invalid:checked, [type=checkbox].errfield:checked, [type=checkbox].invalid:checked {
    background-color: #dc150e;
}

input[data-field-validate].error, textarea[data-field-validate].error, input.errfield:not([type=radio]):not([type=checkbox]), textarea.errfield, input.invalid:not([type=radio]):not([type=checkbox]), textarea.invalid {
    background: #fff5f5 url("data:image/svg+xml,%0A%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%23ed1c24' d='M179.38 435.028c0-45.602 31.419-77.75 77.02-77.75 45.577 0 75.491 32.148 76.22 77.75 0 44.048-29.913 76.972-76.22 76.972-45.601 0-77.02-32.924-77.02-76.972zm26.949-104.654L186.859 0h139.013l-19.427 330.374H206.329z'/%3E%3C/svg%3E") 98% 50% no-repeat;
    background-position: right .6rem bottom 50%;
    background-size: 14px;
    padding-right: 28px !important;
    box-sizing: border-box;
}

input.visualvalid.valid:not([type=radio]):not([type=checkbox]):not(:disabled), textarea.visualvalid.valid:not(:disabled) {
    background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%230db14b' d='M189.211 445.403L0 256.308l55.902-56.017 133.309 133.308L456.098 66.596 512 122.46z'/%3E%3C/svg%3E") 98% 50% no-repeat;
    background-position: right .6rem bottom 50%;
    background-size: 14px;
    padding-right: 28px !important;
    box-sizing: border-box;
}

input.reqfields.visualvalid.valid:not([type=radio]):not([type=checkbox]):not(:disabled), textarea.reqfields.visualvalid.valid:not(:disabled), input.pseudoreqfields.visualvalid.valid:not([type=radio]):not([type=checkbox]):not(:disabled), textarea.pseudoreqfields.visualvalid.valid:not(:disabled) {
    background: #fff9db url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%230db14b' d='M189.211 445.403L0 256.308l55.902-56.017 133.309 133.308L456.098 66.596 512 122.46z'/%3E%3C/svg%3E") 98% 50% no-repeat;
    background-size: 14px;
    background-position: right .6rem bottom 50%;
    padding-right: 28px !important;
    box-sizing: border-box;
}

input:not([type=radio]):not([type=checkbox]):not([type=button]):not([type=submit]):not([type=reset]).pseudoreqfields.visualvalid.valid:placeholder-shown, textarea.pseudoreqfields.visualvalid.valid:placeholder-shown {
    background: #fff9db !important;
    padding: 0.375rem 0.6rem !important;
}

/*
[type=radio].valid, [type=checkbox].valid {
}
*/

img[sysid="base-help"]:not(.in-header), span[sysid="base-help"] {
    background-color: #0066b3;
    border-radius: 50%;
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%23ffffff' d='M322.07 61.031c0 34.48-25.85 61.776-66.771 61.776-40.221 0-65.37-27.296-65.37-61.776C189.93 25.849 215.78 0 256 0s65.369 25.849 66.07 61.031zM191.42 512V158.691h129.248V512H191.42z'/%3E%3C/svg%3E");
    width: .8rem;
    height: .8rem;
    padding: .2rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    filter: drop-shadow( 1px 1px 2px rgba(0, 0, 0, .375));
}

img[sysid="base-delete-btn"], span[sysid="base-delete-btn"] {
    background-color: #c40f16;
    border-radius: 50%;
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%23ffffff' d='M381.926 71L255.959 197.048 129.912 71 71 129.953 197.048 255.96 71 381.967 129.952 441 256 314.912 382.048 440.92 441 381.967 314.871 255.96l126.048-126.089z'/%3E%3C/svg%3E");
    width: .8rem;
    height: .8rem;
    padding: .2rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    filter: drop-shadow( 1px 1px 2px rgba(0, 0, 0, .375));
}

img[sysid="base-add"], span[sysid="base-add"] {
    background-color: #009900;
    border-radius: 50%;
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='512' height='512'%3E%3Cpath fill='%23ffffff' d='M511.926 197.065l-197.019.075L314.833.047H197.094l.074 197.093L0 197.215.075 314.897l197.131-.074.037 197.13h117.738l-.074-197.168L512 314.748z'/%3E%3C/svg%3E");
    width: .8rem;
    height: .8rem;
    padding: .2rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    filter: drop-shadow( 1px 1px 2px rgba(0, 0, 0, .375));
}

img[sysid="base-help"]:hover, img[sysid="base-add"]:hover, img[sysid="base-delete-btn"]:hover, 
span[sysid="base-help"]:hover, span[sysid="base-add"]:hover, span[sysid="base-delete-btn"]:hover {
    filter: drop-shadow( 1px 1px 3px rgba(0, 0, 0, .5));
}

span.clip {
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='black' d='M81.171,452.414c-50.909-50.948-47.534-128.176,8.076-183.805L306.784,51.092 c36.564-36.644,96.111-36.644,132.677-0.04c36.563,36.523,36.523,96.032-0.081,132.615L214.77,408.296 c-25.313,25.354-64.771,25.635-89.683,0.683c-24.912-24.83-24.912-65.453,0-90.365l119.577-119.457l25.957,25.917L151.084,344.65 c-10.567,10.608-10.567,27.766,0.041,38.293c10.366,10.367,26.921,10.125,37.609-0.603l224.649-224.689 c22.22-22.26,22.3-58.423,0.04-80.603c-22.18-22.26-58.342-22.26-80.602,0L115.243,294.666 c-41.144,41.145-44.479,95.308-8.076,131.671c36.403,36.443,90.567,33.068,131.712-8.036l177.598-177.558l25.956,25.957 L264.875,444.257C209.346,499.908,132.039,503.283,81.171,452.414z'/%3E%3C/svg%3E");
    width: 1rem;
    height: 1rem;
    padding: .2rem;
    vertical-align: middle;
}

input[type=file].pseudofile + label:hover span.clip{
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='white' d='M81.171,452.414c-50.909-50.948-47.534-128.176,8.076-183.805L306.784,51.092 c36.564-36.644,96.111-36.644,132.677-0.04c36.563,36.523,36.523,96.032-0.081,132.615L214.77,408.296 c-25.313,25.354-64.771,25.635-89.683,0.683c-24.912-24.83-24.912-65.453,0-90.365l119.577-119.457l25.957,25.917L151.084,344.65 c-10.567,10.608-10.567,27.766,0.041,38.293c10.366,10.367,26.921,10.125,37.609-0.603l224.649-224.689 c22.22-22.26,22.3-58.423,0.04-80.603c-22.18-22.26-58.342-22.26-80.602,0L115.243,294.666 c-41.144,41.145-44.479,95.308-8.076,131.671c36.403,36.443,90.567,33.068,131.712-8.036l177.598-177.558l25.956,25.957 L264.875,444.257C209.346,499.908,132.039,503.283,81.171,452.414z'/%3E%3C/svg%3E");
}

input[type=file].pseudofile + label.dragaccept {
    border-color: #86b7fe !important;
    outline: 0 !important;
    box-shadow: 0 0 0 .25rem rgb(13 110 253 / 25%) !important;
}

table.velky_ramecek {
    border-radius: 0.5rem;
    border: 1px solid silver;
    padding: 0.375rem 0.6rem;
}

.uis-listview-row > .uis-listview-col:first-child {
    border-radius: 0.25rem 0 0 0.25rem;
}

.uis-listview-row > .uis-listview-col:last-child {
    border-radius: 0 0.25rem 0.25rem 0;
}

.form-edit tr {
    line-height: 1.4rem;
    font-size: .9rem;
}

.form-edit tr td:first-child, .form-edit th:first-child {
    padding: 0.375rem 0.6rem;
}

.as-field {
    padding-top: 0.6rem;
    padding-bottom: 0.6rem;
    line-height: 1.4;
}

table a {
    font-size: inherit !important;
}

button.loading, [type=submit].loading, [type=button].loading, span[data-hidden-button-follower].loading {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid'%3E%3Cg transform='translate(80 50)'%3E%3Cg%3E%3Ccircle cx='0' cy='0' r='6'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.9886363636363635s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.9886363636363635s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 71.213)'%3E%3Cg transform='rotate(45)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.875'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.7045454545454546s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.7045454545454546s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 80)'%3E%3Cg transform='rotate(90)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.75'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.4204545454545454s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.4204545454545454s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 71.213)'%3E%3Cg transform='rotate(135)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.625'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.1363636363636365s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.1363636363636365s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(20 50)'%3E%3Cg transform='rotate(180)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.5'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.8522727272727273s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.8522727272727273s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 28.787)'%3E%3Cg transform='rotate(225)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.375'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.5681818181818182s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.5681818181818182s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 20)'%3E%3Cg transform='rotate(270)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.25'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.2840909090909091s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.2840909090909091s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 28.787)'%3E%3Cg transform='rotate(315)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.125'%3E%3CanimateTransform attributeName='transform' type='scale' begin='0s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='0s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: 1.4rem;
    background-position: right .6rem bottom 50%;
    padding-right: 2.5rem !important;
}

div.loading:empty {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid'%3E%3Cg transform='translate(80 50)'%3E%3Cg%3E%3Ccircle cx='0' cy='0' r='6'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.9886363636363635s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.9886363636363635s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 71.213)'%3E%3Cg transform='rotate(45)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.875'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.7045454545454546s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.7045454545454546s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 80)'%3E%3Cg transform='rotate(90)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.75'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.4204545454545454s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.4204545454545454s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 71.213)'%3E%3Cg transform='rotate(135)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.625'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.1363636363636365s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.1363636363636365s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(20 50)'%3E%3Cg transform='rotate(180)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.5'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.8522727272727273s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.8522727272727273s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 28.787)'%3E%3Cg transform='rotate(225)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.375'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.5681818181818182s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.5681818181818182s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 20)'%3E%3Cg transform='rotate(270)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.25'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.2840909090909091s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.2840909090909091s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 28.787)'%3E%3Cg transform='rotate(315)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.125'%3E%3CanimateTransform attributeName='transform' type='scale' begin='0s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='0s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: cover;
    width: 1.4rem;
    height: 1.4rem;
}

span[data-hidden-button-follower] {
    width: 1.4rem;
    height: 1.4rem;
    display: inline-block;
    padding-right: 1rem !important;
}

.loading svg {
    color: white;
}

span[data-hidden-button-follower].loading svg {
    color: black;
}

button.loading:hover, [type=submit].loading:hover, [type=button].loading:hover {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' fill='white' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid'%3E%3Cg transform='translate(80 50)'%3E%3Cg%3E%3Ccircle cx='0' cy='0' r='6'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.9886363636363635s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.9886363636363635s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 71.213)'%3E%3Cg transform='rotate(45)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.875'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.7045454545454546s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.7045454545454546s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 80)'%3E%3Cg transform='rotate(90)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.75'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.4204545454545454s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.4204545454545454s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 71.213)'%3E%3Cg transform='rotate(135)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.625'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.1363636363636365s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.1363636363636365s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(20 50)'%3E%3Cg transform='rotate(180)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.5'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.8522727272727273s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.8522727272727273s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 28.787)'%3E%3Cg transform='rotate(225)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.375'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.5681818181818182s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.5681818181818182s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 20)'%3E%3Cg transform='rotate(270)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.25'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.2840909090909091s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.2840909090909091s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 28.787)'%3E%3Cg transform='rotate(315)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.125'%3E%3CanimateTransform attributeName='transform' type='scale' begin='0s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='0s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

td > a.akredMultipleFieldRemoveBtn {
    margin-left: 1rem;
    margin-right: 1rem;
}

#navig-footer {
    margin-bottom: 40px;
}

.vcenter {
    vertical-align: middle;
}

label.error-tooltip {
    color: white;
    font-weight: normal;
    background: #d03a3b;
    padding: 4px 8px;
    font-size: 0.8rem;
    border-radius: 4px;
    border: solid 1px white;
    filter: drop-shadow( 1px 1px 2px rgba(0, 0, 0, .375));
}

.ui-datepicker-trigger + label.error-tooltip[data-popper-placement^='right'] {
    margin-left: 1.8rem !important;
}

.arrow, .arrow::before {
    position: absolute;
    width: 8px;
    height: 8px;
    background: inherit;
}

.arrow { visibility: hidden; }

.arrow::before {
    visibility: visible;
    content: '';
    transform: rotate(45deg);
}

[data-popper-placement^='left'] > .arrow {
    right: -6px;
}

[data-popper-placement^='left'] > .arrow, [data-popper-placement^='left'] > .arrow::before {
    border-top: solid 1px white;
    border-right: solid 1px white;
}

[data-popper-placement^='right'] > .arrow {
    left: -6px;
}

[data-popper-placement^='right'] > .arrow, [data-popper-placement^='right'] > .arrow::before {
    border-bottom: solid 1px white;
    border-left: solid 1px white;
}

[data-popper-placement^='top'] > .arrow {
    bottom: -4px;
}

[data-popper-placement^='top'] > .arrow, [data-popper-placement^='top'] > .arrow::before {
    border-bottom: solid 1px white;
    border-right: solid 1px white;
}

[data-popper-placement^='bottom'] > .arrow {
    top: -4px;
}

[data-popper-placement^='bottom'] > .arrow, [data-popper-placement^='bottom'] > .arrow::before {
    border-top: solid 1px white;
    border-left: solid 1px white;
}

.portal_menu {
    display: inline-block;
    vertical-align: bottom;
}

.portal_menu tr {
    display: inline-block;
}

.portal_menu td:not(.portal_menu_hole) {
    display: inline-block;
    border-top: solid 1px lightgray;
    border-left: solid 1px lightgray;
    border-right: solid 1px lightgray;
    border-bottom: solid 1px lightgray;
    border-radius: 8px 8px 0 0;
    padding: 0.4rem 1rem !important;
    min-height: 1.2rem;
    box-shadow: rgba(0, 0, 0, 0.07) 0px -1px 1px, rgba(0, 0, 0, 0.07) 0px -2px 2px;
    position: relative;
    margin-top: .5rem;
    margin-bottom: .5rem;
    vertical-align: bottom;
    height: 100%;
    transition: min-height .15s ease-in-out, margin-top .15s ease-in-out;
}

.portal_menu td:not(.active):not(.portal_menu_hole) {
    background: #fafafa;
    margin-top: .8rem;
}

.portal_menu td.portal_menu_hole {
    display: inline-block;
    min-height: 1.2rem;
    vertical-align: bottom;
    margin-bottom: .5rem;
    height: 100%;
    padding: 0;
    padding-right: 0!important;
    width: .5rem;
    border-bottom: solid 1px lightgray;
}

.portal_menu td:not(.portal_menu_hole).active {
    border-color: #777;
    box-shadow: rgba(0, 0, 0, 0.07) 0px -1px 1px, rgba(0, 0, 0, 0.07) 0px -2px 2px, rgba(0, 0, 0, 0.07) 0px -4px 4px;
    border-bottom: none;
    min-height: 1.5rem;
}

.portal_menu td:not(.portal_menu_hole):not(.active):hover {
    cursor: pointer;
    margin-top: 0.5rem;
    min-height: 1.5rem;
}

.portal_menu td:not(.portal_menu_hole):hover a {
    text-decoration: none;
}

.portal_menu_wrapper {
    display: flex;
    align-items: flex-end;
}

.portal_menu_order {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    margin-right: 1.5rem;
    margin-bottom: .5rem;
    margin-top: .8rem;
    min-height: 1.2rem;
    cursor: default;
    align-self: flex-start;
}

.portal_menu_order div {
    display: inline-block;
    border: solid 1px #bbb;
    border-radius: 50%;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    padding: 1px;
    height: 1.5rem;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    color: #bbb;
    font-size: 80%;
    font-weight: normal;
}

.portal_menu_wrapper + p {
    display: none;
}

.portal_menu_wrapper + p + hr.uisseparator, .portal_menu_wrapper + hr.uisseparator {
    display: none;
}

hr.portal_menu_sep {
    border: none;
    background: inherit !important;
    margin-bottom: 2rem;
}

hr.uisseparator {
    width: 80%;
    border: none;
    background: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(255,255,255,1) 100%);
    height: 1px;
    max-width: 80%;
    margin-bottom: 2rem;
    margin-left: 0;
}

tr.sudy:not(.zahlavi) {
    background-color: #e7eaed;
}

.uni-unusual-info {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 1px 4px;
}

.focused, tr.uis-hl-table:hover {
    background-color: #dbe3e9;
}

.uni-unusual-info .ribbon { 
    padding: 15px 10px;
    width: 230px;
    background-color: #e43;
    position: absolute;
    text-align: center;
    letter-spacing: 1px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    position: fixed;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 34px 35px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px, rgba(0, 0, 0, 0.5) 0px 0px 5px 0px inset;
    text-shadow: -1px -1px black;
    top: 25px;
    left: -70px;
    color: white;
    z-index: 10000;
    line-height: 1rem;
}

.uni-unusual-info {
    background: none;
    border: none;
    box-shadow: none;
    margin: 0;
    padding: 0;
    height: 0;
    width: 0;
}

.uni-unusual-info.db-type-test .ribbon, .uni-unusual-info.db-type-test .detail {
    background-color: #080;
}

.uni-unusual-info.db-type-dev .ribbon, .uni-unusual-info.db-type-dev .detail {
    background-color: #009;
}

.uni-unusual-info.db-type-unknown .ribbon, .uni-unusual-info.db-type-unknown .detail {
    background-color: #8b0000;
}

.uni-unusual-info .first-line {
    display: block;
}

.uni-unusual-info .second-line {
    display: block;
    font-size: 70%;
}

.uni-unusual-info .detail {
    display: none;
    position: fixed;
    padding: 1rem 2rem;
    border-radius: 5px;
    top: 100px;
    left: 100px;
    width: 480px;
    text-shadow: none;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 34px 35px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    z-index: 10000;
}

.nowrap {
    white-space: nowrap;
}

#cookieconsent {
    position: fixed;
    padding: 20px;
    color: white;
    z-index: 9000;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    font-size: 1.05rem;
    bottom: 10px;
    left: 10px;
    width: 70%;
    max-width: 700px;
    box-shadow: rgba(0, 0, 0, 0.5) 1px 1px 4px;
    display: none;
}

#cookieconsent .cookieconsent-close, #cookieconsent .cookieconsent-back {
    margin-top: -5px;
    margin-right: -5px;
    background-color: transparent;
    box-shadow: none;
    border: none;
    color: white;
    text-shadow: none;
    font-size: 1.51875rem;
    font-weight: 400;
    opacity: .5;
    line-height: .8rem;
    padding: 0;
}

#cookieconsent .cookieconsent-close {
    float: right;
}

#cookieconsent .cookieconsent-back {
    float: left;
    display: none;
}

@media (max-width: 911.98px) {
    #cookieconsent {
        bottom: 0;
        left: 0;
        width: 100vw;
        max-height: 100vh;
        overflow-y: auto;
        box-shadow: none;
    }
}

@media (max-width: 767.98px) {
    #cookieconsent {
        width: auto;
    }

    #cookieconsent button:not(.cookieconsent-close):not(.cookieconsent-back) {
        display: block;
        max-width: 100%;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
    }
}

#cookieconsent button:not(.cookieconsent-close):not(.cookieconsent-back) {
    margin-bottom: .2rem;
    background-color: transparent;
    background-image: none;
    border-color: white;
    color: white;
}

#cookieconsent button:not(.cookieconsent-close):not(.cookieconsent-back):hover {
    background-color: white;
    color: black;
}

.cookieconsent-buttons button + button {
    margin-left: .5rem;
}

#cookieconsent .cookieconsent-close:hover, #cookieconsent .cookieconsent-back:hover {
    opacity: .75;
    text-decoration: none;
}

.cookieconsent-customization {
    display: none;
}

input:checked:disabled + .slider {
    opacity: .3;
}

#cookieconsent .cookieconsent-customization > div {
    margin-bottom: .2rem;
}

.switch {
    position: relative;
    display: inline-block;
    width: 30px;
    height: 17px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: red;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 17px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 13px;
    width: 13px;
    left: 2px;
    bottom: 2px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: green;
}

input:focus + .slider {
    box-shadow: 0 0 1px green;
}

input:checked + .slider:before {
    -webkit-transform: translateX(13px);
    -ms-transform: translateX(13px);
    transform: translateX(13px);
}

.pseudofile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

select[size]:not([size="1"]), select[multiple] {
    padding-right: 0.6rem;
}

.ui-datepicker-year {
    min-width: 80px;
}

.slider_controls_box {
    margin-bottom: 20px;
}


/* informacni hlasky */
.uis_msg{
    margin: 0.2rem 0rem;
    padding: 0.2rem 0.5rem 0.2rem 3.5rem;
    max-width: 760px;
    font-size: 1em;
}

.uis_msg.info {
    background: url("https://is.czu.cz/img.pl?sysid=base-informace") no-repeat 1rem 0.6rem;
}

.uis_msg.ok {
    background: url("https://is.czu.cz/img.pl?sysid=bullet-green-big-faja") no-repeat 1rem 0.6rem;
}

.uis_msg.ko {
    background: url("https://is.czu.cz/img.pl?sysid=bullet-red-big-vykricnik") no-repeat 1rem 0.6rem;
}

.uis_msg.tip {
    background: url("https://is.czu.cz/img.pl?sysid=bullet-ruka") no-repeat 1rem 0.5rem;
    font-weight: normal;
}

.uis_msg div.text {
    margin: 0.2rem 0rem;
    padding: 0.4rem 0rem 0.4rem 0rem;
    font-weight: bold;
}

.uis_msg div.text p {
    margin: 0;
    padding: 0;
}

.uis_msg ul {
    margin: 0rem 0rem 0.3rem 0rem;
    padding: 0rem 0rem 0rem 1.2rem;
    list-style-type: disc;
    list-style-image: none;
}

.uis_msg ul.detail {
    font-weight: bold;
}

.uis_msg ul li {
    background-image: none;
    padding: 0.2rem 0;
    margin: 0;
    list-style-type: disc;
}

.uis_msg ul li::marker{
    font-size: 1.1rem;
}

.uis_msg.ko ul.detail li::marker{
    color: red;
}

.uis_msg.ko div.text, .uis_msg.ko ul.detail {
    color: red;
}

.uis_msg.ok ul.detail li::marker{
    color: green;
}


/* legenda pod tabulkama */
.uisLegend {
    padding: 0.5rem 0rem 2rem 0rem;
}

.uisLegend .uisLegendTitle {
    padding: 0.2rem 0rem;
}

.uisLegend .uisLegendTitle a{
    font-weight: bold;
}
.uisLegend .uisLegendContent {
    padding: 0.5rem 0rem 0.5rem 1rem;
}

/* experimantalni, chceme vyhazovat radek v legende a resit to jen stylem */ 
.uisLegend .uisLegendContent > p {
    display: none;
}


/* helpdesk - stylovani odkazu na rozpocty, ukoly */
.hd_ozn_pozadavek, .hd_ozn_ukol, .hd_ozn_rozpocet {
    cursor: help;
    border: 1px black dotted;
    padding: 0px 3px;
    line-height: 18px;
    border-radius: 4px;
}

.hd_ozn_pozadavek {
    background-color: antiquewhite;
}
.hd_ozn_ukol {
    background-color: darkseagreen;
}
.hd_ozn_rozpocet {
    background-color: #bde6ff;
}
.tag-over-max {
    position: relative;
    cursor: help;
}

.badge {
    background-color: #e70800;
    border-radius: 500px;
    color: white;
    text-align: center;
    padding: 3px 6px 2px 6px;
    margin-left: .5em;
    font-size: .8rem;
}

table { border-spacing: 1px; }

table:not(.nostickyheaders) > thead:not(.zahlavi) > tr.zahlavi-int,
table:not(.nostickyheaders) > thead.zahlavi,
table:not(.nostickyheaders) > tbody > tr.zahlavi-middle {
    position: sticky;
    top: 0px;
    z-index: 10;
}

.mt-1 {
    margin-top: 0.3rem;
}

.hd_priloha {
    display: block;
    width: 20ch;
    word-break: break-all;
}


/* zalamovani radku v hd tabulce */
table[data-max-length="1"] {
    word-break: break-word;
}


/* helpdesk - nove komentare */
.hd_komenty {
    display: flex;
    flex-direction: column;
    max-width: 150rem;
    gap: .5rem;
}
.hd_komenty[data-is-employee="1"]:not([data-hide-internal="1"]) {
    background-image: linear-gradient(90deg, transparent, transparent 50%, #ccc calc(50% + 1.5px), transparent calc(50% + 1.5px));
}
.hd_komenty .generated {
    display: flex;
    align-items: center;
    grid-column: 1 / 5;
}
.hd_komenty[data-is-employee="1"] .generated {
    grid-column: 1 / 10;
}
.hd_komenty .generated::before,
.hd_komenty .generated::after {
    content: "";
    flex-grow: 1;
    height: 1px;
    background: #cccccc90;
}

.hd_komenty .generated .more-comments,
.hd_komenty .generated .gen {
    background-color: #f0f0f0;
    padding: .4rem 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: .15rem;
}

.hd_komenty .row {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
}
.hd_komenty > .row.spacer {
    height: 1rem;
}
.hd_komenty[data-is-employee="1"]:not([data-hide-internal="1"]) .row {
    grid-template-columns: repeat(20, 1fr);
}
.hd_komenty[data-is-employee="1"][data-hide-internal="1"] .row {
    grid-template-columns: repeat(10, 1fr);
}

.hd_komenty > .row.header {
    line-height: 2;
    font-weight: bold;
    font-size: .9rem;
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 30%);
    min-height: 2rem;
}
.hd_komenty[data-hide-internal="1"] > .row.header > div:nth-child(2) {
    font-style: italic;
    font-size: .8rem;
}

.hd_komenty > .row.header > div {
    grid-column: 1 / 11;
    text-align: center;
    border-bottom: 1px solid #888;
}
.hd_komenty > .row.header > div:nth-child(2) {
    grid-column: 11 / 21;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
}
.hd_komenty > .row.header > div:nth-child(2) > img#internal-toggle {
    rotate: 0deg;
    transition: rotate 0.3s ease-in-out;
    height: 60%;
}
.hd_komenty[data-hide-internal="1"] > .row.header > div:nth-child(2) > img#internal-toggle {
    rotate: 315deg;
}

.hd_komenty > .row > a[name]:not(a[name=""]) {
    display: block;
    position: relative;
    top: -2rem;
    visibility: hidden;
}

.hd_komenty .koment {
    background: #99999950;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    grid-column: 2 / 11;
    transition: box-shadow .2s ease-in-out, padding .2s ease-in-out;
}
.hd_komenty .koment[data-autor-zam="1"] {
    display: flex;
    flex-direction: column;
    position: relative;
    grid-column: 1 / 10;
}
.hd_komenty[data-is-employee="1"] .koment {
    grid-column: 1 / 10;
}
.hd_komenty[data-is-employee="1"] .koment[data-autor-zam="1"] {
    grid-column: 2 / 11;
}

.hd_komenty .koment[data-autor-zam="1"][data-interni="1"] {
    grid-column: 11 / 20;
}
.hd_komenty .koment[data-autor-zam="1"][data-interni="1"][data-autor-ja="1"] {
    grid-column: 12 / 21;
}

.hd_komenty[data-hide-internal="1"] .row[data-int="1"] {
    display: none;
}

.hd_komenty:not([data-is-employee="0"]) .koment[data-autor-zam="1"][data-interni="1"]:not([data-autor-ja="1"]) {
    margin-left: .5rem;
    background-color: #f0f0f0;
    border-color: #e0e0e0;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}
.hd_komenty:not([data-is-employee="0"]) .koment[data-autor-zam="1"][data-interni="1"][data-autor-ja="1"] {
    background-color: #fffae0;
    border-color: #ffdb20;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}
.hd_komenty:not([data-is-employee="0"]) .koment[data-autor-zam="1"]:not([data-interni="1"]) {
    margin-right: .5rem;
    background-color: #cefad0;
    border-color: #7bf180;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}
.hd_komenty:not([data-is-employee="0"]) .koment:not([data-autor-zam="1"]):not([data-interni="1"]) {
    background-color: #f0f0f0;
    border-color: #e0e0e0;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}

.hd_komenty[data-is-employee="0"] .koment[data-autor-zam="0"] {
    margin-right: .5rem;
    background-color: #cefad0;
    border-color: #7bf180;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}
.hd_komenty[data-is-employee="0"] .koment[data-autor-zam="1"] {
    margin-right: .5rem;
    background-color: #f0f0f0;
    border-color: #e0e0e0;
    border-width: 1px;
    border-style: solid;
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}


.hd_komenty .gen {
    box-shadow: 2px 2px 2px rgba(0,0,0,10%);
}
.hd_komenty .zadal_zadano {
    display: flex;
    font-size: .7rem;
    color: gray;
    justify-content: space-between;
    width: 100%;
}

.hd_komenty .koment .koment-autor {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    gap: 3rem;
    /* position: sticky;
    top: 2rem;
    background: inherit; */
    /* need to move the image -inside- .koment-autor for it to scroll with the head */
}

.hd_komenty .koment[data-pin-admin="1"] {
    padding-left: 5px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000 !important;
}
.hd_komenty .koment[data-pin-uzivatel="1"] {
    padding-left: 5px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #ffaf4b !important;
}
.hd_komenty .koment[data-pin-zadani="1"] {
    padding-left: 5px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #0066ff !important;
}
.hd_komenty .koment[data-pin-zakaznik="1"] {
    padding-left: 5px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #00b201 !important;
}


/* jestli te napada lepsi zpusob nez mit pro kazdou kombinaci specialni selector tak sem s nim*/

.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="1"][data-pin-uzivatel="0"][data-pin-zadani="0"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #00b201 !important;
} /* admin zakaznik */
.hd_komenty .koment[data-pin-admin="0"][data-pin-zakaznik="1"][data-pin-uzivatel="0"][data-pin-zadani="1"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #00b201, inset 10px 0px 0px 0px #0066ff !important;
} /* zakaznik zadani */
.hd_komenty .koment[data-pin-admin="0"][data-pin-zakaznik="1"][data-pin-uzivatel="1"][data-pin-zadani="0"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #00b201, inset 10px 0px 0px 0px #ffaf4b !important;
} /* zakaznik uzivatel */
.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="0"][data-pin-uzivatel="0"][data-pin-zadani="1"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #0066ff !important;
} /* admin zadani */
.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="0"][data-pin-uzivatel="1"][data-pin-zadani="0"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #ffaf4b !important;
} /* admin uzivatel */
.hd_komenty .koment[data-pin-admin="0"][data-pin-zakaznik="0"][data-pin-uzivatel="1"][data-pin-zadani="1"] {
    padding-left: 10px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #ffaf4b, inset 10px 0px 0px 0px #0066ff !important;
} /* zadani uzivatel */

.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="1"][data-pin-uzivatel="0"][data-pin-zadani="1"] {
    padding-left: 15px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #00b201, inset 15px 0px 0px 0px #0066ff !important;
} /* admin zakaznik zadani */
.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="1"][data-pin-uzivatel="1"][data-pin-zadani="0"] {
    padding-left: 15px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #00b201, inset 15px 0px 0px 0px #ffaf4b !important;
}/* admin zakaznik uzivatel */
.hd_komenty .koment[data-pin-admin="0"][data-pin-zakaznik="1"][data-pin-uzivatel="1"][data-pin-zadani="1"] {
    padding-left: 15px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #00b201, inset 10px 0px 0px 0px #ffaf4b, inset 15px 0px 0px 0px #0066ff !important;
}/* zakaznik uzivatel zadani */
.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="0"][data-pin-uzivatel="1"][data-pin-zadani="1"] {
    padding-left: 15px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #ffaf4b, inset 15px 0px 0px 0px #0066ff !important;
}/* admin uzivatel zadani */

.hd_komenty .koment[data-pin-admin="1"][data-pin-zakaznik="1"][data-pin-uzivatel="1"][data-pin-zadani="1"] {
    padding-left: 20px;
    box-shadow: 2px 2px 2px rgb(0 0 0 / 10%), inset 5px 0px 0px 0px #cc0000, inset 10px 0px 0px 0px #00b201, inset 15px 0px 0px 0px #ffaf4b, inset 20px 0px 0px 0px #0066ff !important;
} /* admin zakaznik uzivatel zadani */



.hd_komenty .koment[data-pin-zvyrazneny="1"] {
    filter: drop-shadow(0px 0px 10px #bb0000);
    border-left-width: 0px !important;
    margin: .4rem 0;
}

.hd_komenty .koment .akce {
    opacity: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 1.3rem;
    transition: opacity .15s ease-in-out;
}
.hd_komenty .koment:hover .akce {
    opacity: 1;
}

.hd_komenty .koment .akce > .custom_piny {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: .5rem;
}
.hd_komenty .koment .akce > .custom_piny > [data-pin] {
    display: block;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: rgb(0 0 0 / 10%);
    transition: box-shadow .2s ease-in-out, background .2s ease-in-out;
}
.hd_komenty .koment .akce > .custom_piny > [data-pin]:hover { cursor: pointer; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-admin]    { border: 1px solid #cc0000; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-uzivatel] { border: 1px solid #ffaf4b; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zadani]   { border: 1px solid #0066ff; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zakaznik] { border: 1px solid #00b201; }

.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-admin="1"]    { background: #cc0000; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-uzivatel="1"] { background: #ffaf4b; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zadani="1"]   { background: #0066ff; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zakaznik="1"] { background: #00b201; }

.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-admin="1"]:hover    { background: rgb(0 0 0 / 10%); box-shadow: inset 0 0 0 3px #cc0000; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-uzivatel="1"]:hover { background: rgb(0 0 0 / 10%); box-shadow: inset 0 0 0 3px #ffaf4b; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zadani="1"]:hover   { background: rgb(0 0 0 / 10%); box-shadow: inset 0 0 0 3px #0066ff; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zakaznik="1"]:hover { background: rgb(0 0 0 / 10%); box-shadow: inset 0 0 0 3px #00b201; }

.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-admin="0"]:hover    { background: #cc0000; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-uzivatel="0"]:hover { background: #ffaf4b; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zadani="0"]:hover   { background: #0066ff; }
.hd_komenty .koment .akce > .custom_piny > [data-pin][data-pin-zakaznik="0"]:hover { background: #00b201; }

.hd_komenty .koment .akce .add_edit {
    display: flex;
    gap: 0.4rem;
}
.hd_komenty .koment .akce .add_edit:empty {
    display: none;
}
.hd_komenty .koment .akce .add_edit > .pridavani-ukolu {
    display: flex;
    mix-blend-mode: multiply;
}
.hd_komenty .koment .akce .add_edit > .editace {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='20' width='20'%3E%3Cpath d='m16.125 7.688-3.604-3.646.833-.854q.584-.584 1.365-.605.781-.021 1.427.605l.875.874q.646.584.573 1.407-.073.823-.636 1.385Zm-1.104 1.104-8.813 8.791H2.583v-3.604l8.813-8.791Z'/%3E%3C/svg%3E");
    width: 16px;
    height: 16px;
    background-repeat: no-repeat;
    background-size: contain;
}

.hd_komenty .koment-autor {
    padding: .4rem .7rem .25rem .7rem;
    border-bottom: 1px solid rgb(0 0 0 / 15%);
}
.hd_komenty .koment-autor > .cas {
    display: flex;
    gap: .5rem;
}
.hd_komenty .koment-autor > .cas > .popper-hover-elem {
    user-select: none;
}
.hd_komenty .koment-autor > .cas > .popper-hover-elem > img {
    mix-blend-mode: multiply;
}
.hd_komenty .koment-autor > .cas > .popper-hover-elem[data-has-popper="0"] {
    display: none;
}

.hd_komenty .koment_text {
    padding: .25rem .7rem;
    overflow-wrap: anywhere;
}
.hd_komenty .koment_info {
    padding: .25rem .7rem;
    border-top: 1px solid rgb(0 0 0 / 15%);
    display: flex;
    flex-direction: column;
    gap: 0.3rem;
    font-style: italic;
}
.hd_komenty .koment_info:empty {
    display: none;
}

.hd_komenty .header {
    top: 0;
    position: sticky;
    z-index: 10;
    background-color: white;
} 
.hd_komenty .header + .row {
    margin-top: 1rem;
}

[data-popper] {
    display: none;
    background: #333;
    color: white;
    font-weight: bold;
    padding: 4px 8px;
    font-size: 13px;
    border-radius: 4px;
    position: absolute;
    z-index: 20;
}
[data-popper][data-show] {
    display: block;
}

.hd_komenty .koment-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: #eee;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 1;
    display: inline-block;
    position: absolute;
    top: -6px;
    left: -8px;
    box-shadow: 2px 2px 3px rgba(0,0,0,.1);
}
.hd_komenty .koment-autor .jmeno {
    margin-left: 28px;
    display: flex;
    align-items: baseline;
}
.hd_komenty .koment .koment-autor .jmeno .subjekt {
    margin-left: 10px;
    color: gray;
    font-size: .6rem;
}
.hd_komenty .koment[data-interni="1"] .koment-autor .jmeno .subjekt {
    display: none;
}

.hd_komenty .koment {
    position: relative;
}

/* Spec. formatovani MD elementu */

.hd_komenty .koment:not([data-markup='none']) .koment_text code,
.markup-comment code,
.mkup_comment > #kom_prev code {
    border: 1px solid #aaaaaa80;
    border-radius: 4px;
    text-align: left;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text code.smol,
.markup-comment code.smol,
.mkup_comment > #kom_prev code.smol {
    padding: .05em .3em;
    color: #24292e;
    background: #fff;
}

code[data-lang] {
    position: relative;
    display: block;
    overflow-x: auto;
    padding: 0.5em 0.75em;
    margin: 0.5rem 0;
    color: #24292e;
    background: #fff;
}

/*
pri scrollu toto nefunguje
code[data-lang]::before {
    content: attr(data-lang);
    position: absolute;
    top: 0;
    right: 0;
    padding: 0 0.4rem;
    background-color: #ced4da;
    border-bottom-left-radius: 4px;
    text-transform: uppercase;
    font-size: .7rem;
}
*/

code[data-script-tag]:empty { display: none; }
code[data-script-tag]:not(:empty)::before { content: "<script>"; }
code[data-script-tag]:not(:empty)::after { content: "</script>"; }

.hd_komenty .koment:not([data-markup='none']) .koment_text,
.markup-comment,
.mkup_comment > #kom_prev {
    line-height: 1.6;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text p,
.markup-comment p,
.mkup_comment > #kom_prev p {
    margin-top: 3px;
    margin-bottom: 3px;
}

.hd_komenty .koment:not([data-markup='none']) .koment_text blockquote,
.markup-comment blockquote,
.mkup_comment > #kom_prev blockquote {
    border-left: 5px solid #cccccc80;
    margin: 1.5em 10px;
    padding-left: 1em;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text blockquote p,
.markup-comment blockquote p,
.mkup_comment > #kom_prev blockquote p {
    display: inline;
    font-style: italic;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text hr,
.markup-comment hr,
.mkup_comment > #kom_prev hr {
    border: none;
    border-bottom: 1.5px solid gray;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text th,
.hd_komenty .koment:not([data-markup='none']) .koment_text td,
.markup-comment th,
.markup-comment td,
.mkup_comment > #kom_prev th,
.mkup_comment > #kom_prev td {
    border: 1px solid #aaaaaa80;
    padding: .15rem .3rem;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text table,
.markup-comment table,
.mkup_comment > #kom_prev table {
    display: block;
    border-spacing: 0;
    border-collapse: collapse;
    box-sizing: border-box;
    margin: .5rem 0;
    overflow-x: auto;
    white-space: nowrap;

}
.hd_komenty .koment:not([data-markup='none']) .koment_text h1,
.markup-comment h1,
.mkup_comment > #kom_prev table h1 {
    display: block;
    font-size: 2em;
    margin-block-start: .67em;
    margin-block-end: .67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.hd_komenty .koment:not([data-markup='none']) .koment_text tbody > tr:nth-child(even),
.markup-comment tbody > tr:nth-child(even),
.mkup_comment > #kom_prev tbody > tr:nth-child(even) {
    background-color: #77777730;
}

.mkup_comment {
    max-width: 95vw;
    min-width: 45vw;
}

.mkup_comment > #komentar {
    box-shadow: none;
}

.mkup_comment > #komentar,
.mkup_comment > #kom_prev {
    margin: 0;
    width: -webkit-fill-available;
    width: -moz-available;
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    min-height: 13rem;
}
.mkup_comment > #komentar:focus {
    box-shadow: none;
    border-color: #ced4da;
}
.mkup_comment > #kom_prev:focus {
    box-shadow: none;
    border-color: #ced4da;
    cursor: default;
}
.mkup_comment > #kom_prev {
    display: none;
    padding: .375rem .6rem;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.4;
    word-wrap: break-word;
    border: 1px solid #ced4da;
    border-top: none;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
}


.mkup_comment_btns {
    border: 1px solid #ced4da;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    display: flex;
    align-items: flex-end;
    border-bottom: none;
    overflow: hidden;
    width: fill-available !important;
    width: -webkit-fill-available !important;
    width: -moz-available !important;
    align-items: stretch;
}

.mkup_comment_btns > button {
    margin: 0;
    border-radius: 0;
    border: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, box-shadow .15s ease-in-out, padding .15s ease-in-out, border-color .1s ease-in-out;
    box-shadow: none !important;
    border-right: 1px solid #ced4da !important;
    white-space: nowrap;
}
.mkup_comment_btns > button:hover {
    box-shadow: none !important;
}
.mkup_comment_btns > button:first-child {
    border-top-left-radius: .25rem;
}
.mkup_comment_btns > button:last-child {
    border-right: 1px solid #ced4da !important;
}
.mkup_comment_btns > button[data-selected="1"] {
    color: black;
    background-color: transparent;
    border-bottom: 1px solid transparent;
}
.mkup_comment_btns > button[data-selected="1"].loading:hover {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid'%3E%3Cg transform='translate(80 50)'%3E%3Cg%3E%3Ccircle cx='0' cy='0' r='6'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.9886363636363635s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.9886363636363635s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 71.213)'%3E%3Cg transform='rotate(45)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.875'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.7045454545454546s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.7045454545454546s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 80)'%3E%3Cg transform='rotate(90)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.75'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.4204545454545454s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.4204545454545454s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 71.213)'%3E%3Cg transform='rotate(135)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.625'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-1.1363636363636365s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-1.1363636363636365s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(20 50)'%3E%3Cg transform='rotate(180)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.5'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.8522727272727273s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.8522727272727273s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(28.787 28.787)'%3E%3Cg transform='rotate(225)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.375'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.5681818181818182s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.5681818181818182s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(50 20)'%3E%3Cg transform='rotate(270)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.25'%3E%3CanimateTransform attributeName='transform' type='scale' begin='-0.2840909090909091s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='-0.2840909090909091s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3Cg transform='translate(71.213 28.787)'%3E%3Cg transform='rotate(315)'%3E%3Ccircle cx='0' cy='0' r='6' fill-opacity='.125'%3E%3CanimateTransform attributeName='transform' type='scale' begin='0s' values='1.5 1.5;1 1' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite'/%3E%3Canimate attributeName='fill-opacity' keyTimes='0;1' dur='2.272727272727273s' repeatCount='indefinite' values='1;0' begin='0s'/%3E%3C/circle%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.mkup_comment_btns > button:not([data-selected="1"]) {
    border-bottom: 1px solid #ced4da;
}
.mkup_comment_btns > button:not([data-selected="1"]):hover {
    background-color: #3b7ddf;
    color: white;
    border-bottom: 1px solid #ced4da !important;
}
.mkup_comment_btns > button:hover {
    border-color: #ced4da !important;
    border-bottom: 1px solid transparent !important;
}

input#mkup_chkbx + .slider {
    background-color: #999ea3;
}
input#mkup_chkbx:checked + .slider {
    background-color: green;
}
input#mkup_chkbx:focus + .slider {
    box-shadow: none;
}

#help_btn {
    display: none;
    line-height: normal;
}
.mkup_comment[data-help-visible="0"] #mkup_preview {
    pointer-events: none;
    background-color: transparent;
    color: transparent;
    border-right: none !important;
}
.mkup_comment[data-help-visible="0"] #mkup_komentar {
    cursor: auto;
}

.mkup_comment_btns > #mkup_rest {
    width: 100%;
    border-bottom: 1px solid #ced4da;
    display: flex;
    justify-content: flex-end;
    padding-right: 0.5rem;
    align-items: center;
    gap: 0.5rem;
}
#mkup_lang {
    margin-top: 0;
    margin-bottom: 0;
    border-top: none;
    border-bottom: none;
    border-radius: 0;
    box-shadow: none;
    height: 100%;
}
#mkup_lang:disabled {
    display: none;
}


#mkup_switch {
    display: flex;
    align-items: center;
    gap: .5rem;
}

#komentar::-webkit-scrollbar,
.hd_komenty .koment:not([data-markup='none']) .koment_text table::-webkit-scrollbar,
.hd_komenty .koment:not([data-markup='none']) .koment_text code::-webkit-scrollbar,
.mkup_comment > #kom_prev table::-webkit-scrollbar,
.mkup_comment > #kom_prev code::-webkit-scrollbar  {
    width: .5rem;
    height: .5rem;
}

#komentar::-webkit-scrollbar-track,
.hd_komenty .koment:not([data-markup='none']) .koment_text table::-webkit-scrollbar-track,
.hd_komenty .koment:not([data-markup='none']) .koment_text code::-webkit-scrollbar-track,
.mkup_comment > #kom_prev table::-webkit-scrollbar-track,
.mkup_comment > #kom_prev code::-webkit-scrollbar-track {
    background: #aaaaaa40;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}
#komentar::-webkit-scrollbar-thumb,
.hd_komenty .koment:not([data-markup='none']) .koment_text table::-webkit-scrollbar-thumb,
.hd_komenty .koment:not([data-markup='none']) .koment_text code::-webkit-scrollbar-thumb,
.mkup_comment > #kom_prev table::-webkit-scrollbar-thumb,
.mkup_comment > #kom_prev code::-webkit-scrollbar-thumb  {
    background: #888;
}

#komentar::-webkit-scrollbar-thumb:hover,
.hd_komenty .koment:not([data-markup='none']) .koment_text table::-webkit-scrollbar-thumb:hover,
.hd_komenty .koment:not([data-markup='none']) .koment_text code::-webkit-scrollbar-thumb:hover,
.mkup_comment > #kom_prev table::-webkit-scrollbar-thumb:hover,
.mkup_comment > #kom_prev code::-webkit-scrollbar-thumb:hover  {
    background: #555;
}

/* Tagy v HD */
div.color-picker-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    align-items: center;
}
div.text-picker-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    justify-content: space-evenly;
}

label.color-picker-label {
    background-color: transparent;
    border: 1px solid gray;
    display: block;
    height: 3rem;
    width: 3rem;
}

label.color-picker-label > input[type="color"] {
    visibility: hidden;
}

#tag-edit-container {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.hd-tag {
    padding: 2px 4px;
    border: 1px solid rgba(0,0,0, .3);
    border-radius: 5px;
    width: fit-content;
    display: inline;
    cursor: default;
}
.hd-tag:empty {
    width: 2ch;
    height: 2ch;
}
.hd-tag[draggable] {
    cursor: move;
    cursor: grab;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

.tagy-poradi {
    display: flex;
    justify-content: space-between;
}

.tag-remove-btn.rotate {
    animation: rotate 1.5s linear infinite; 
}
@keyframes rotate { to { transform: rotate(360deg); } }

.seznam-tagu {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: .5rem;
    width: fit-content;
    padding: 1rem;
    border: 1px dashed gray;
    min-width: 5rem;
    min-height: 2rem;
}

#tags-place {
    display: flex;
    width: fit-content;
    gap: 2rem;
}

.tagy-nadpisek {
    margin-bottom: .5rem;
}

.hd-tag-filter {
    cursor: pointer;
    user-select: none;
    transition: all .2s ease;
}
.hd-tag-filter:not([data-selected='1']) {
    filter: grayscale(100%) opacity(.75);
}

.hd-tag-filter:not([data-selected='1']):hover {
    filter: grayscale(0%);
}

.uis-masonry {
    display: grid;
    max-width: 1000px;
    grid-template-columns: 1fr;
    gap: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
}

.uis-masonry-box {
    margin: 0;
    display: grid;
    grid-template-rows: auto auto auto;
    grid-template-columns: auto;
    border-left: solid 5px #26BA03;
    background-color: #f7f7f7;
    box-shadow: rgba(0, 0, 0, 0.15) 1.5px 1.5px 2.6px;
    color: black;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    justify-items: start;
}

.uis-masonry-box-normal {
    border-left: solid 5px blue;
}

.uis-masonry-box-info {
    border-left: solid 5px #777;
}

.uis-masonry-box-issue {
    border-left: solid 5px #f77036;
}

.uis-masonry-box-title {
    grid-row: 1;
    grid-column: 1;
    font-weight: bold;
    font-size: 120%;
    justify-self: start;
    align-self: start;
}

.uis-masonry-box-desc {
    grid-row: 2;
    grid-column: 1;
    margin-top: 1rem;
    margin-bottom: 1rem;
    justify-self: start;
    text-align: justify;
    align-self: start;
}

.uis-masonry-box-actions {
    grid-row: 3;
    grid-column: 1;
    gap: 16px;
    display: flex;
    justify-items: end;
    width: 100%;
    align-items: end;
    justify-content: flex-end;
}

.uis-masonry-box-action {
    justify-self: end;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: 1px solid #ced4da;
    background-color: #e7eaed;
    font-size: 1rem;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    padding: 10px 20px 10px 20px;
    font-weight: bold;

    font-size: .9rem;
    line-height: 1.4;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-clip: padding-box;
    margin-top: 0.1em;
    margin-bottom: 0.1em;
    color: black;
}

.uis-masonry-box-actions a {
    text-decoration: none;
}

.uis-masonry-box-action:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca !important;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    color: white;
}

.uis-masonry-box-action-primary {
    border: 1px solid #9eaab5;
}

.small {
    max-width: 1000px;
    width: auto;
}

.checked-email-area {
    color: #555;
    font-style: italic;
}

.checked-email-area.error {
    font-weight: bold;
    color: red;
    font-style: normal;
}

.checked-email-area.confirmed {
    color: green;
    font-weight: bold;
    font-style: normal;
}


.skryte {
    display: none;
}

tr:not(.zahlavi):nth-child(even of .lbn:not([style*="display: none"]):not(.hide-row):not([hidden])) {
    background-color: #e7eaed;
}

nav[aria-label="breadcrumb"] {
    background-color: #f2f2f2;
    border-radius: 1rem;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

ol.breadcrumb {
    flex-grow: 2;
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    list-style: none;
    align-items: center;
    margin-bottom: 0;
    margin-top: 0;
}

.breadcrumb-item {
    background-image: none;
    background-position: 0 0;
    margin: 0;
    padding-left: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.6rem;
    padding-left: 0.6rem;
    color: #6c757d;
    content: "\00BB";
    font-weight: bold;
}

.breadcrumb-item.active {
    font-weight: bold;
}

@media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
}

#automatic-back-to-home {
    position: fixed;
    right: 16px;
    bottom: 30px;
    width: 46px;
    height: 35px;
    z-index: 1000;
    border: 1px solid #ced4da;
    border-radius: 50%;
    background: rgba(151, 164, 177, 0.35);
    color: #555;
    line-height: 1.2;
    font-size: 22px;
    text-align: center;
    padding-top: 10px;
    cursor: pointer;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

#arrowup svg {
    color: black;
    width: 24px;
    height: 24px;
}

#automatic-back-to-home:hover {
    color: white;
    background-color: #0b5ed7;
    border-color: #0a58ca !important;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important
}

#automatic-back-to-home:hover #arrowup svg {
    color: white;
}

.helpinbreadcrumbs {
    text-align: right;
    padding: 0.6rem 1rem;
    align-items: center;
    margin-bottom: 0;
    margin-top: 0;
}

.helpinbreadcrumbs span[sysid="base-help"] {
    content: url("data:image/svg+xml,%3C%3Fxml version='1.0' %3F%3E%3Csvg fill='none' height='512' viewBox='0 0 512 512' width='512' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M256 20C125.66 20 20 125.66 20 256C20 386.34 125.66 492 256 492C386.34 492 492 386.34 492 256C492 125.66 386.34 20 256 20ZM277.76 406.09C271.467 412.25 263.107 415.33 252.68 415.33C242.253 415.33 233.82 412.25 227.38 406.09C221.093 399.93 217.947 392.127 217.94 382.68C217.94 373.08 221.157 365.203 227.59 359.05C234.17 352.75 242.533 349.597 252.68 349.59C262.827 349.583 271.117 352.737 277.55 359.05C284.117 365.197 287.403 373.073 287.41 382.68C287.41 392.133 284.193 399.937 277.76 406.09ZM344.44 214.48C339.013 225.22 329.51 237.177 315.93 250.35L298.56 266.89C287.7 277.35 281.483 289.593 279.91 303.62C279.683 307.177 278.109 310.513 275.508 312.949C272.906 315.385 269.474 316.737 265.91 316.73H252.5C236.85 316.73 223.67 303.94 226.18 288.49C227.19 281.756 228.958 275.157 231.45 268.82C236.31 256.94 245.173 245.273 258.04 233.82C271.04 222.22 279.687 212.84 283.98 205.68C288.167 198.737 290.39 190.788 290.41 182.68C290.41 158.48 279.26 146.38 256.96 146.38C246.387 146.38 237.883 149.673 231.45 156.26C220.06 167.93 208.58 183.11 192.28 183.11H191.05C173.63 183.11 158.76 168.51 164.21 151.96C168.329 139.211 175.775 127.791 185.78 118.88C203.22 103.42 226.947 95.6867 256.96 95.68C287.273 95.68 310.787 103.057 327.5 117.81C344.233 132.417 352.597 153.11 352.59 179.89C352.626 191.9 349.834 203.75 344.44 214.48V214.48Z' fill='black'/%3E%3C/svg%3E");
    background: none;
    border: none;
    filter: none;
    height: 1.3rem;
    width: 1.3rem;
    display: block;
}

.helpinbreadcrumbs a:hover span,
.breadcrumb-item a:hover img[sysid="base-home"] {
    filter: drop-shadow( 1px 1px 3px rgba(0, 0, 0, .4));
}

.mainpage {
    padding-bottom: 1rem !important;
}


/* img.pl */

body {
    font-family: Verdana, Geneva, Arial, Helvetica, sans-serif !important;
    font-size: 12px;
    background: white;
    color: black;
    text-align: left;
    vertical-align: middle;
    padding: 0;
    margin: 0;
}

a, .fakelink {
    color: #28642d;
    text-decoration: none;
}

a:hover, .fakelink:hover{
  color:#000;
}

h1{
    font-size: 130%;
    margin-bottom:0;
    color: #28642d;
}

tr.sudy{
   background-color: rgb(238, 243, 245);
}

.mainpage{
    padding:5px;
    padding-top:0;
}

tr.zahlavi > th, tr.zahlavi > td, tr.zahlavi > th.zahlavi, tr.zahlavi > td.zahlavi, th.zahlavi, td.zahlavi, tr.zahlavi th, tr.zahlavi td {
    padding:3px 6px;
    background-color: #28642d;
    color: white;
}

tr.zahlavi > th a, tr.zahlavi > td a, tr.zahlavi > th.zahlavi a, tr.zahlavi > td.zahlavi a, th.zahlavi a, td.zahlavi a {
  color:#fff; text-decoration:underline;
}

pre{
    margin-top: 0;
    margin-bottom: 0;
}

span.small, div.small, .small, .small28, .small415, .xsmall28, .xsmall415, .ysmall, .xsmall, .ysmall28, .ysmall415 {
    color: #555;
}

div.small, span.small, .small28, .small415, .xsmall28, .xsmall415, .ysmall, .xsmall, .ysmall28, .ysmall415 {
    width: 810px;
    text-align: justify;
}

td span.small, td div.small, td .small, td .small28, td .small415, td .xsmall28, td .xsmall415, td .ysmall, td .xsmall, td .ysmall28, td .ysmall415 {
    color: black;
}

td div.small, td span.small, td .small28, td .small415, td .xsmall28, td .xsmall415, td .ysmall, td .xsmall, td .ysmall28, td .ysmall415 {
    width: 810px;
    text-align: justify;
}

th span.small, th div.small, th .small, th .small28, th .small415, th .xsmall28, th .xsmall415, th .ysmall, th .xsmall, th .ysmall28, th .ysmall415 {
    color: white;
}

tr.zahlavi span.small, tr.zahlavi div.small, tr.zahlavi .small, tr.zahlavi .small28, tr.zahlavi .small415, tr.zahlavi .xsmall28, tr.zahlavi .xsmall415, tr.zahlavi .ysmall, tr.zahlavi .xsmall, tr.zahlavi .ysmall28, tr.zahlavi .ysmall415, td.zahlavi div.small, td.zahlavi span.small, td.zahlavi .small28, td.zahlavi .small415, td.zahlavi .xsmall28, td.zahlavi .xsmall415, td.zahlavi .ysmall, td.zahlavi .xsmall, td.zahlavi .ysmall28, td.zahlavi .ysmall415 {
    color: white;
}

.focused, tr.uis-hl-table:hover {
    background-color: #d2dce4;
}

hr.cleaner {
      clear:both;
      height:1px;
      margin: -1px 0 0 0; padding:0;
      border:none;
      visibility: hidden;
      }

.portlet{
    padding:3px; 
    border: 1px solid rgb(219, 219, 219);
    margin-bottom:2px;
}

.sideportlet{
    padding:3px 3px 20px 3px;    margin-bottom:20px; 
    border: 1px solid rgb(219, 219, 219);
}

#hlavicka{
    position: relative;
    margin: 0;
    padding: 0;
    width: 100%; 
    /*background: #fff url('/img.pl?userunid=2282');*/
    /*background: #fff url('/img.pl?userunid=2941') no-repeat 200px bottom;*/
    height: 110px;
    background-color: #73be47;
}

#menu_top{
   height: 29px; 
   color: #fff;
   position: relative;
   background: #28642d;
   border: 0px;
   border-left: 0px;
   border-right: 0px; 
   font-size: 10px;
}

#log{
      position:absolute;left:10px;
      top:9px;
}

#ema{position:absolute; left:44%;}

#ema img{vertical-align:top !important;}

#ema a{
      position:relative; top:9px; color:#FFF;
}

#ikonky{
	position:absolute; right:10px;
}

#ikonky a{
       display:block; float:left; width:29px; height:29px;
       text-align:center;
}

#ikonky img{
       margin-top:2px; margin-left:4px;
}

#ikonky span img{
  margin-top:0px;
}
#top-nav ul {
    margin: 0 0 0 10px;
}

#top-nav ul li{
   float: left;
   list-style:none;    
}

#top-nav ul li a {
    font-size: 11px;
    line-height: 28px;
    font-weight: bold;   
    color: #28642d;
    padding-left: 8px;
    padding-right: 8px;
    text-decoration: underline;
}
#svatek{
	position:absolute;
	top:6px; right:10px;
}

#listicka {
  height: 29px;
  background: #E9E9E9;
  position: relative;
  border-bottom: 0px;
}

#head2{ /* Napis UIS */
    position: absolute;
    left: 0;
    font-family: Roboto, Arial, Helvetica, sans-serif;
    font-size: 28px;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 0px;
    min-height: 100px;
    padding: 0 0 0 400px;
    background: url('https://is.czu.cz/img.pl?userunid=18100') 20px 28px no-repeat;
}

#univerzita {
    padding-top: 60px;
    width: 520px;
}

#dekor{position:absolute;top:0;right:0;}
#logo{z-index:5;}

#stranka { margin: 15px; }

hr.cara{
  height:3px;
  border: 0;
  padding: 0;
  margin: 6px 0px;
  background:#F4F4F4;
}

table a, small{
  font-size:12px;
}

ul{
list-style-image: url('https://is.czu.cz/img.pl?userunid=2281');
margin: 0.5em 0px 0px 1.5em;
padding:0; line-height: 1.5em;
}

#navig-footer{
 clear:both;
margin-top:40px;
} 
</style>