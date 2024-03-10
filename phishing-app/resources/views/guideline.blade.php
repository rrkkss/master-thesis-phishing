@extends('header')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">
                <img src="https://is.czu.cz/img.pl?unid=18661" alt="" title="Main page of the information system" sysid="base-home">
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            First log in to UIS instructions
        </li>
    </ol>
</nav>

<div id="titulek">
    <h1>First log in to UIS instructions</h1>
    <hr class="uisseparator">
</div>
<div class="small">
    <span class="small">
        The guide gives information about the first login to the students, the employees and the study applicants to CZU.
    </span>
</div>
<br>
    <b>Access to information system</b>
<p></p>

<div class="small">
    <span class="small">
        University information system of the CZU is accessible from any computer connected to the World Wide Web. The computers at all faculties meet this requirement. You may use modem to connect to the WWW from home. However, it is necessary to have a web browser installed, in any operating system (OS). You can use any browser, but our pages are primarily tested for Google Chrome, Mozilla Firefox, and Microsoft Edge.
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        All users can access UIS at:
        <a href="https://isczu.cz/">https://is.czu.cz/</a>
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        A range of services of UIS is only accessible after authentication of the user with his/her login and password.
    </span>
</div>
<br>

<div class="small">
    <span class="small">
        <b>Students and staff</b> log into the
        <a href="https://isczu.cz/auth/">Log in to the Personal administration of UIS</a> application.<br>
        <b>Applicants</b> log into the
        <a href="https://is.czu.cz/prihlaska/">E-application form to study at CZU</a> application.<br>
        <b>Admitted applicants</b> log into the
        <a href="https://is.czu.cz/navratka/">Pre-enrollment confirmation for application to study at CZU</a> application.
    </span>
</div>
<br>

<div class="small">
    <span class="small">The credentials for the Personal Administration (for students and employees) differ from the credentials for the register of e-applications and the system of pre-enrollment confirmations.</span></div><br><big><b>Obtaining credentials</b></big>
<p></p>
<div class="small">
    <span class="small">
        <b>Staff</b> will receive their credentials in a text message on the day they start their employment. If this hasn't happened, please contact IT Helpdesk CZU. If the employee has already been employed at CZU, their credentials from the previous employment at the university remain valid.<br><b>Students</b> learn this information when they log into the <a href="https://is.czu.cz/prihlaska/">E-application form to study at CZU</a> application after their study enrollment. If the applicant has already studied at CZU, his/her login details from previous studies are valid.<br><b>Applicants</b> will receive the credentials for the <a href="https://is.czu.cz/prihlaska/">E-application form to study at CZU</a> application to their contact e-mail address after creating the e-application. The credentials for the <a href="https://is.czu.cz/navratka/">Pre-enrollment confirmation for application to study at CZU</a> application are identical to those for the <a href="https://is.czu.cz/prihlaska/">E-application form to study at CZU</a> application.<br><b>Other</b> will receive them from their contact persons. If this hasn't happened, please contact IT Helpdesk CZU.
    </span>
</div>
<br>
    <b>Secure login into the system</b>
<p></p>

<div class="small">
    <span class="small">
        The login form also contains setting of the login validity period, which is a minimal period of inactivity after which you will be logged out from the system. Implicitly, this period is set to one day.
    </span></div><br>
<div class="small">
    <span class="small">
        When logging in to University Information System, your browser may ask about saving your password. We do not recommend saving your password in browser, especially if you are logging in from a computer shared by several users. Your password may be discriminated this way.
    </span></div><br>
<div class="small">
    <span class="small">
        After login each user can change their password to the system; requirements for safe password are stored in the relevant application.
    </span></div><br>
<div class="small">
    <span class="small">
        To increase the level of protection of any personal data, the security protocol SSL has been selected for communication with the system. SSL is a world-renowned standard for communication on the Internet. Even prominent Czech banks have been using this standard for the service called "homebanking". The SSL protocol operates on the principle of exchanging electronically signed certificates, mutually verified, between the server and your computer; therefore, no data can be inserted in this encoded data-flow. To make the work with certificates easier, the so-called "certification authorities" have been put in operation to facilitate a transparent and almost invisible check of this encoded channel. Thanks to this user-friendly and simplified procedure it only takes to set your browser so that it trusts your certificate authority which is ČZU v Praze CA.
    </span>
</div>
<br>
    <b>What to do if you have problems</b>
<p></p>
<div class="small">
    <span class="small">
        If you are experiencing any troubles logging in to University Information System or using it, you can write to electronic address 
        <a href="mailto:helpdesk@czu.cz">helpdesk@czu.cz</a>.
    </span>
</div>
<br>

<div class="pseudostrap-activated"></div>

@endsection
