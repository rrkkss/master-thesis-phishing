<?php

namespace App\Helpers;

class IndexTranslationData
{
    public string $title = '';
    public string $administration = '';
    public string $administrationLogin = '';
    public string $administrationFirstLogin = '';
    public string $administrationIntegrators = '';
    
    public string $admission = '';
    public string $admissionApplication = '';
    public string $admissionResults = '';
    public string $admissionEnrollment = '';
    
    public string $czu = '';
    public string $czuDepartments = '';
    public string $czuDocuments = '';

    public string $study = '';
    public string $studySchedule = '';
    public string $studyPlans = '';
    public string $studyCourses = '';
    public string $studyAgreements = '';
    public string $studyTheses = '';
    public string $studyTimetables = '';
    public string $studyFinancing = '';
    
    public string $jobs = '';
    public string $jobsRegistration = '';
    
    public string $system = '';
    public string $systemUis = '';
    public string $systemStatistics = '';
    public string $systemImplementation = '';

    public function __construct(
        string $title,
        string $administration,
        string $administrationLogin,
        string $administrationFirstLogin,
        string $administrationIntegrators,
        
        string $admission,
        string $admissionApplication,
        string $admissionResults,
        string $admissionEnrollment,
        
        string $czu,
        string $czuDepartments,
        string $czuDocuments,

        string $study,
        string $studySchedule,
        string $studyPlans,
        string $studyCourses,
        string $studyAgreements,
        string $studyTheses,
        string $studyTimetables,
        string $studyFinancing,
        
        string $jobs,
        string $jobsRegistration,
        
        string $system,
        string $systemUis,
        string $systemStatistics,
        string $systemImplementation
    ) {
        $this->title = $title;
        $this->administration = $administration;
        $this->administrationLogin = $administrationLogin;
        $this->administrationFirstLogin = $administrationFirstLogin;
        $this->administrationIntegrators = $administrationIntegrators;
        
        $this->admission = $admission;
        $this->admissionApplication = $admissionApplication;
        $this->admissionResults = $admissionResults;
        $this->admissionEnrollment = $admissionEnrollment;
        
        $this->czu = $czu;
        $this->czuDepartments = $czuDepartments;
        $this->czuDocuments = $czuDocuments;

        $this->study = $study;
        $this->studySchedule = $studySchedule;
        $this->studyPlans = $studyPlans;
        $this->studyCourses = $studyCourses;
        $this->studyAgreements = $studyAgreements;
        $this->studyTheses = $studyTheses;
        $this->studyTimetables = $studyTimetables;
        $this->studyFinancing = $studyFinancing;
        
        $this->jobs = $jobs;
        $this->jobsRegistration = $jobsRegistration;
        
        $this->system = $system;
        $this->systemUis = $systemUis;
        $this->systemStatistics = $systemStatistics;
        $this->systemImplementation = $systemImplementation;
    }
}

class AuthTranslationData
{
    public string $title = '';
    public string $infoText = '';
    public string $infoOne = '';
    public string $infoOneLink = '';
    public string $infoTwo = '';
    public string $infoTwoLink = '';
    public string $infoThree = '';
    
    public string $userName = '';
    public string $password = '';
    public string $login = '';
    public string $logoutInfo = '';
    public string $logoutInfoChange = '';
    
    public string $tip = '';
    public string $footerTip = '';
    public string $footerLink = '';
    public string $footerTipTwo = '';
    public string $cookie = '';

    public function __construct(
        string $title,
        string $infoText,
        string $infoOne,
        string $infoOneLink,
        string $infoTwo,
        string $infoTwoLink,
        string $infoThree,
        
        string $userName,
        string $password,
        string $login,
        string $logoutInfo,
        string $logoutInfoChange,
        
        string $tip,
        string $footerTip,
        string $footerLink,
        string $footerTipTwo,
        string $cookie
    ) {
        $this->title = $title;
        $this->infoText = $infoText;
        $this->infoOne = $infoOne;
        $this->infoOneLink = $infoOneLink;
        $this->infoTwo = $infoTwo;
        $this->infoTwoLink = $infoTwoLink;
        $this->infoThree = $infoThree;
        
        $this->userName = $userName;
        $this->password = $password;
        $this->login = $login;
        $this->logoutInfo = $logoutInfo;
        $this->logoutInfoChange = $logoutInfoChange;
        
        $this->tip = $tip;
        $this->footerTip = $footerTip;
        $this->footerLink = $footerLink;
        $this->footerTipTwo = $footerTipTwo;
        $this->cookie = $cookie;
    }
}

class SuccessTranslationData
{
    public string $title = '';
    public string $thesis = '';
    public string $contact = '';
    public string $source = '';
    public string $nopwd = '';
    public string $login = '';
    public string $geo = '';

    public string $tip = '';
    public string $tip1Fake = '';
    public string $tip2Real = '';
    public string $tip2 = '';
    public string $tip3 = '';
    public string $tip4 = '';
    public string $tip5 = '';

    public function __construct(
        string $title,
        string $thesis,
        string $contact,
        string $source,
        string $nopwd,
        string $login,
        string $geo,

        string $tip,
        string $tip1Fake,
        string $tip2Real,
        string $tip2,
        string $tip3,
        string $tip4,
        string $tip5
    ) {
        $this->title = $title;
        $this->thesis = $thesis;
        $this->contact = $contact;
        $this->source = $source;
        $this->nopwd = $nopwd;
        $this->login = $login;
        $this->geo = $geo;

        $this->tip = $tip;
        $this->tip1Fake = $tip1Fake;
        $this->tip2Real = $tip2Real;
        $this->tip2 = $tip2;
        $this->tip3 = $tip3;
        $this->tip4 = $tip4;
        $this->tip5 = $tip5;
    }
}

class GuideTranslationData
{
    public string $title = '';
    public string $desc = '';
    public string $heading1 = '';
    public string $browserInfo = '';
    public string $allUsers = '';
    public string $password = '';
    public string $students = '';
    public string $studentsNext = '';
    public string $studentsLink = '';
    public string $studentsLast = '';
    public string $applicants = '';
    public string $applicantsNext = '';
    public string $applicantsLink = '';
    public string $applicantsLast = '';
    public string $admitted = '';
    public string $admittedNext = '';
    public string $admittedLink = '';
    public string $admittedLast = '';
    public string $descLast = '';
    
    public string $heading2 = '';
    public string $staff = '';
    public string $staffNext = '';
    public string $students2 = '';
    public string $students2Next = '';
    public string $students2Link = '';
    public string $students2Last = '';
    public string $applicants2 = '';
    public string $applicants2Next1 = '';
    public string $applicants2Link1 = '';
    public string $applicants2Next2 = '';
    public string $applicants2Link2 = '';
    public string $applicants2Next3 = '';
    public string $applicants2Link3 = '';
    public string $applicants2Last = '';
    public string $other = '';
    public string $otherNext = '';
    
    public string $heading3 = '';
    public string $info1 = '';
    public string $info2 = '';
    public string $info3 = '';
    public string $info4 = '';
    
    public string $heading4 = '';
    public string $problems = '';
    public string $login = '';

    public function __construct(
        string $title,
        string $desc,
        string $heading1,
        string $browserInfo,
        string $allUsers,
        string $password,
        string $students,
        string $studentsNext,
        string $studentsLink,
        string $studentsLast,
        string $applicants,
        string $applicantsNext,
        string $applicantsLink,
        string $applicantsLast,
        string $admitted,
        string $admittedNext,
        string $admittedLink,
        string $admittedLast,
        string $descLast,

        string $heading2,
        string $staff,
        string $staffNext,
        string $students2,
        string $students2Next,
        string $students2Link,
        string $students2Last,
        string $applicants2,
        string $applicants2Next1,
        string $applicants2Link1,
        string $applicants2Next2,
        string $applicants2Link2,
        string $applicants2Next3,
        string $applicants2Link3,
        string $applicants2Last,
        string $other,
        string $otherNext,
        
        string $heading3,
        string $info1,
        string $info2,
        string $info3,
        string $info4,

        string $heading4,
        string $problems,
        string $login
    ) {
        $this->title = $title;
        $this->desc = $desc;
        $this->heading1 = $heading1;
        $this->browserInfo = $browserInfo;
        $this->allUsers = $allUsers;
        $this->password = $password;
        $this->students = $students;
        $this->studentsNext = $studentsNext;
        $this->studentsLink = $studentsLink;
        $this->studentsLast = $studentsLast;
        $this->applicants = $applicants;
        $this->applicantsNext = $applicantsNext;
        $this->applicantsLink = $applicantsLink;
        $this->applicantsLast = $applicantsLast;
        $this->admitted = $admitted;
        $this->admittedNext = $admittedNext;
        $this->admittedLink = $admittedLink;
        $this->admittedLast = $admittedLast;
        $this->descLast = $descLast;

        $this->heading2 = $heading2;
        $this->staff = $staff;
        $this->staffNext = $staffNext;
        $this->students2 = $students2;
        $this->students2Next = $students2Next;
        $this->students2Link = $students2Link;
        $this->students2Last = $students2Last;
        $this->applicants2 = $applicants2;
        $this->applicants2Next1 = $applicants2Next1;
        $this->applicants2Link1 = $applicants2Link1;
        $this->applicants2Next2 = $applicants2Next2;
        $this->applicants2Link2 = $applicants2Link2;
        $this->applicants2Next3 = $applicants2Next3;
        $this->applicants2Link3 = $applicants2Link3;
        $this->applicants2Last = $applicants2Last;
        $this->other = $other;
        $this->otherNext = $otherNext;
        
        $this->heading3 = $heading3;
        $this->info1 = $info1;
        $this->info2 = $info2;
        $this->info3 = $info3;
        $this->info4 = $info4;
        
        $this->heading4 = $heading4;
        $this->problems = $problems;
        $this->login = $login;
    }
}

class TranslationHelper
{
    private const OFFICE = 'Přihlásit účtem ČZU (Microsoft 365).';

    public static function getEnglishIndex() : IndexTranslationData
    {
        return new IndexTranslationData(
            'University information system',
            'Personal administration',
            'Log in to the Personal administration of UIS',
            'First log in to UIS instructions',
            'System integrators',

            'Admission procedure',
            'E-application form to study at CZU',
            'Admission procedure results',
            'Pre-enrollment confirmation for application to study at CZU',

            'Information about CZU',
            'Departments',
            'Public document server',

            'Study information',
            'Academic year schedule',
            'Study plans',
            'Course catalogue',
            'Agreements with foreign partners',
            'Final theses at CZU',
            'Timetables',
            'Study financing',

            'Jobs portal',
            'Registration of a company to Internship Portal',

            'About the information system',
            'UIS documentation',
            'Statistics of using UIS',
            'Are you thinking of implementing a study information system at your university?'
        );
    }

    public static function getCzechIndex() : IndexTranslationData
    {
        return new IndexTranslationData(
            'Univerzitní informační systém',
            'Osobní administrativa',
            'Přihlášení do osobní administrativy UIS',
            'Návod k prvnímu přihlášení do UIS',
            'Systémoví integrátoři',

            'Přijímací řízení',
            'Elektronická přihláška ke studiu na ČZU',
            'Výsledky přijímacích zkoušek ',
            'Návratka k přihlášce ke studiu na ČZU',

            'Informace o ČZU',
            'Pracoviště ',
            'Veřejný dokumentový server',

            'Studijní informace',
            'Harmonogram akademického roku',
            'Studijní plány ',
            'Katalog předmětů',
            'Zahraniční dohody',
            'Závěrečné práce na ČZU',
            'Rozvrhy',
            'Financování studia',

            'Portál pracovních příležitostí',
            'Registrace společnosti do portálu pracovních příležitostí',

            'O informačním systému',
            'Dokumentace UIS',
            'Statistiky využití UIS ',
            'Uvažujete o zavedení studijního informačního systému na Vaší univerzitě?'
        );
    }

    public static function getSlovakianIndex() : IndexTranslationData
    {
        return new IndexTranslationData(
            'Univerzitný informačný systém',
            'Osobná administratíva',
            'Prihlásenie do osobnej administratívy UIS',
            'Návod na prvé prihlásenie do UIS',
            'Systémoví integrátori ',

            'Prijímacie konanie',
            'Elektronická prihláška na štúdium na ČPU',
            'Výsledky prijímacích skúšok',
            'Návratka k prihláške na štúdium na ČPU',

            'Informácie o ČPU',
            'Pracoviská',
            'Verejný dokumentový server',

            'Študijné informácie',
            'Harmonogram akademického roka',
            'Študijné plány',
            'Katalóg predmetov',
            'Zahraničné dohody',
            'Záverečné práce na ČPU',
            'Rozvrhy',
            'Financovanie štúdia',

            'Portál pracovných príležitostí',
            'Registrácia spoločnosti do portálu pracovných príležitostí',

            'O informačnom systéme',
            'Dokumentácia UIS',
            'Štatistiky využitia UIS',
            'Uvažujete o zavedení študijného informačného systému na Vašej univerzite?'
        );
    }

    public static function getEnglishAuth() : AuthTranslationData
    {
        return new AuthTranslationData(
            'Log in to system',
            'On this page you can log in University Information System. You use an assigned user name and a password. The password distinguishes upper case and low case letters. At the same time you can select after which period of inactivity the system logs you out.',
            'If you fail to log in or do not know the above mentioned information, please contact the',
            'IT Helpdesk CZU',
            'If you are an applicant, use the application:',
            'Log in to study applications system',
            self::OFFICE,
            'User name',
            'Password',
            'Log in',
            'Log out after 1 day of inactivity',
            'change',
            'A common problem is the Caps Lock key switched on/off or the keyboard set to a different language.',
            'See application',
            'First log in to UIS instructions',
            'to view more details about log in.',
            'Check of permitted cookies and JavaScript is in progress in browser...'
        );
    }

    public static function getCzechAuth() : AuthTranslationData
    {
        return new AuthTranslationData(
            'Přihlášení do systému',
            'Na této stránce se můžete přihlásit do Univerzitního informačního systému. Hlásíte se pomocí přiděleného uživatelského jména a hesla. V hesle se rozlišují velká a malá písmena. Současně můžete zvolit, po jaké době neaktivity Vás má systém automaticky odhlásit.',
            'Pokud se Vám nedaří přihlásit či neznáte uvedené údaje, kontaktujte prosím',
            'IT Helpdesk ČZU',
            'Pokud jste uchazeč/ka, použijte aplikaci:',
            'Přihlášení do systému přihlášek',
            self::OFFICE,
            'Přihlašovací jméno',
            'Heslo',
            'Přihlásit se',
            'Odhlásit po 1 dni neaktivity',
            'změnit',
            'Častým problémem je špatně přepnutá klávesa Caps Lock nebo nastavené jiné jazykové rozložení klávesnice.',
            'Více podrobností k přihlašování naleznete v aplikaci',
            'Návod k prvnímu přihlášení do UIS',
            '.',
            'Probíhá kontrola povolených cookies a JavaScriptu v prohlížeči...'
        );
    }

    public static function getSlovakianAuth() : AuthTranslationData
    {
        return new AuthTranslationData(
            'Prihlásenie do systému',
            'Na tejto stránke sa môžete prihlásiť do Univerzitného informačného systému. Hlásite sa pomocou prideleného používateľského mena a hesla. V hesle sa rozlišujú veľké a malé písmená. Súčasne môžete zvoliť, po akej dobe nečinnosti Vás má systém automaticky odhlásiť.',
            'Ak sa Vám nepodarí prihlásiť alebo ak nepoznáte uvedené údaje, kontaktujte, prosím,',
            'IT Helpdesk ČPU',
            'Ak ste uchádzač/ka, použite aplikáciu:',
            'Prihlásenie do systému prihlášok',
            self::OFFICE,
            'Prihlasovacie meno',
            'Heslo',
            'Log in',
            'Odhlásiť po 1 dni nečinnosti',
            'zmeniť',
            'Častým problémom je zle prepnutá klávesa Caps Lock alebo nastavené iné jazykové rozloženie klávesnice.',
            'Viac podrobností k prihlasovaniu nájdete v aplikácii',
            'Návod na prvé prihlásenie do UIS',
            '.',
            'Prebieha kontrola povolených cookies a JavaScriptu v prehliadači...'
        );
    }

    public static function getEnglishSuccess() : SuccessTranslationData
    {
        return new SuccessTranslationData(
            'You have been a victim of (fake) phishing!',
            'This is a diploma thesis at the faculty of FEM',
            'Contact: xholm073',
            'Source code:',
            'Your password has not been accessed, the following 3 entries have been saved:',
            'login name -',
            'and approximate location using ISP data (whois service) -',
            'What you should have noticed',
            'The address of this site is',
            ', but the real one is',
            'The password is stored in the browser, it cannot be removed by the website itself',
            'HTTPS protocol is not issued by GEANT Vereniging',
            'If you have entered nonsensical data, you have also done wrong - the page may be running javascript files that can exploit (unknown) vulnerabilities to obtain sensitive data by other means',
            'If you have 2-factor authentication, your data would probably be fine, but a weaknesses in the system can be exploited and is therefore not a catch-all tool - caution is still needed',
        );
    }

    public static function getCzechSuccess() : SuccessTranslationData
    {
        return new SuccessTranslationData(
            'Stali jste se obětí (falešného) phishingu!',
            'Jedná o diplomovou práci na fakultě PEF',
            'Kontakt: xholm073',
            'Zdrojový kód:',
            'S vaším heslem nebylo nijak nakládáno, byly uloženy následující 3 údaje:',
            'přihlašovací jméno -',
            'a přibližná lokace pomocí ISP dat (služba whois) -',
            'Čeho jste si měli všimnout',
            'Adresa tohoto webu je',
            ', skutečná je však',
            'Heslo je uložené v prohlížeči, nelze jej odstranit ze strany stránky',
            'HTTPS protokol není vystavený od GEANT Vereniging',
            'Pokud jste vložili nesmyslné údaje, učinili jste také špatně - na stránce mohou být spuštěny javascript soubory, které mohou využívat (ne)známých zranitelností a získat tak citlivé údaje jinou cestou',
            'Pokud máte 2fázové ověřování, vaše data by byla pravděpodobně v pořádku, ale může se využít slabiny v systému a není proto všespásným nástrojem -  i s ním je potřeba opatrnosti'
        );
    }

    public static function getSlovakSuccess() : SuccessTranslationData
    {
        return new SuccessTranslationData(
            'Stali ste sa obeťou (falošného) phishingu!',
            'Ide o diplomovú prácu na fakulte PEF',
            'Kontakt: xholm073',
            'Zdrojový kód:',
            'Vaše heslo nebolo nijako spracované, boli uložené tieto 3 údaje:',
            'přihlašovací jméno -',
            'a približnú polohu pomocou údajov poskytovateľa internetových služieb (služba whois) -',
            'Čo ste si mali všimnúť',
            'Adresa tejto webovej stránky je',
            'ale skutočný je',
            'Heslo je uložené v prehliadači, nie je možné ho zo stránky odstrániť',
            'Protokol HTTPS nie je vydaný spoločnosťou GEANT Vereniging',
            'Pokud jste vložili nesmyslné údaje, učinili jste také špatně - na stránce mohou být spuštěny javascript soubory, které mohou využívat (ne)známých zranitelností a získat tak citlivé údaje jinou cestou',
            'Ak máte dvojfázové overovanie, vaše údaje budú pravdepodobne v poriadku, ale môže zneužívať slabiny systému, a preto nie je všeliekom - aj pri ňom je potrebná opatrnosť.',
        );
    }

    public static function getEnglishGuide() : GuideTranslationData
    {
        return new GuideTranslationData(
            'First log in to UIS instructions',
            'The guide gives information about the first login to the students, the employees and the study applicants to CZU.',
            'Access to information system',
            'University information system of the CZU is accessible from any computer connected to the World Wide Web. The computers at all faculties meet this requirement. You may use modem to connect to the WWW from home. However, it is necessary to have a web browser installed, in any operating system (OS). You can use any browser, but our pages are primarily tested for Google Chrome, Mozilla Firefox, and Microsoft Edge.',
            'All users can access UIS at:',
            'A range of services of UIS is only accessible after authentication of the user with his/her login and password.',
            'Students and staff',
            'log into the',
            'Log in to the Personal administration of UIS',
            'application.',
            'Applicants',
            'log into the',
            'E-application form to study at CZU',
            'application.',
            'Admitted applicants',
            'log into the',
            'Pre-enrollment confirmation for application to study at CZU',
            'application.',
            'The credentials for the Personal Administration (for students and employees) differ from the credentials for the register of e-applications and the system of pre-enrollment confirmations.',
            'Obtaining credentials',
            'Staff',
            'will receive their credentials in a text message on the day they start their employment. If this hasn\'t happened, please contact IT Helpdesk CZU. If the employee has already been employed at CZU, their credentials from the previous employment at the university remain valid.',
            'Students',
            'learn this information when they log into the',
            'E-application form to study at CZU',
            'application after their study enrollment. If the applicant has already studied at CZU, his/her login details from previous studies are valid.',
            'Applicants',
            'will receive the credentials for the',
            'E-application form to study at CZU',
            'application to their contact e-mail address after creating the e-application. The credentials for the',
            'Pre-enrollment confirmation for application to study at CZU',
            'application are identical to those for the',
            'E-application form to study at CZU',
            'application.',
            'Other',
            'will receive them from their contact persons. If this hasn\'t happened, please contact IT Helpdesk CZU.',
            'Secure login into the system',
            'The login form also contains setting of the login validity period, which is a minimal period of inactivity after which you will be logged out from the system. Implicitly, this period is set to one day.',
            'When logging in to University Information System, your browser may ask about saving your password. We do not recommend saving your password in browser, especially if you are logging in from a computer shared by several users. Your password may be discriminated this way.',
            'After login each user can change their password to the system; requirements for safe password are stored in the relevant application.',
            'To increase the level of protection of any personal data, the security protocol SSL has been selected for communication with the system. SSL is a world-renowned standard for communication on the Internet. Even prominent Czech banks have been using this standard for the service called "homebanking". The SSL protocol operates on the principle of exchanging electronically signed certificates, mutually verified, between the server and your computer; therefore, no data can be inserted in this encoded data-flow. To make the work with certificates easier, the so-called "certification authorities" have been put in operation to facilitate a transparent and almost invisible check of this encoded channel. Thanks to this user-friendly and simplified procedure it only takes to set your browser so that it trusts your certificate authority which is ČZU v Praze CA.',
            'What to do if you have problems',
            'If you are experiencing any troubles logging in to University Information System or using it, you can write to electronic address',
            'Log in to the information system',
        );
    }

    public static function getCzechGuide() : GuideTranslationData
    {
        return new GuideTranslationData(
            'Návod k prvnímu přihlášení do UIS',
            'Návod obsahuje informace pro první přihlášení studentů, zaměstnanců i uchazečů o studium na ČZU.',
            'Přístup k informačnímu systému',
            'Univerzitní informační systém ČZU je přístupný z libovolného počítače připojeného do celosvětové sítě Internet (počítače všech fakult toto splňují, k Internetu se můžete připojit i z domova pomocí modemu). Je však nutné mít nainstalován webový prohlížeč (v libovolném operačním systému). I když lze prakticky použít libovolný prohlížeč, primárně jsou naše stránky testovány s prohlížeči Google Chrome, Mozilla Firefox a Microsoft Edge.',
            'Pro všechny uživatele je UIS dostupný na adrese:',
            'Řada služeb UIS je dostupná pouze po autentizaci uživatele svým uživatelským jménem (login) a heslem (password).',
            'Studenti a zaměstnanci',
            'se přihlašují do aplikace',
            'Přihlášení do osobní administrativy UIS',
            '.',
            'Uchazeči',
            'se přihlašují do aplikace',
            'Elektronická přihláška ke studiu na ČZU',
            '.',
            'Přijatí uchazeči',
            'se přihlašují do aplikace',
            'Návratka k přihlášce ke studiu na ČZU',
            '.',
            'Přihlašovací údaje do osobní administrativy (pro studenty a zaměstnance) jsou odlišné od přihlašovacích údajů do evidence e-přihlášek a do systému návratek.',
            'Získání přihlašovacích údajů',
            'Zaměstnanci',
            'obdrží přihlašovací údaje SMS zprávou v den začátku pracovního poměru. Pokud se tak nestalo, kontaktujte IT Helpdesk ČZU. V případě, že daný zaměstnanec již na ČZU pracoval, platí jeho přihlašovací údaje z předchozího pracovního poměru na univerzitě.',
            'Studenti',
            'zpravidla zjistí tyto informace po přihlášení do aplikace',
            'Elektronická přihláška ke studiu na ČZU',
            ', kde se jim po zápisu do studia zobrazí. Pokud daný uchazeč již na ČZU studoval, platí jeho přihlašovací údaje z předchozího studia.',
            'Uchazeči',
            'dostanou přihlašovací údaje do aplikace',
            'Elektronická přihláška ke studiu na ČZU',
            'na kontaktní e-mail ihned po založení e-přihlášky. Přihlašovací údaje do aplikace',
            'Návratka k přihlášce ke studiu na ČZU',
            'jsou shodné jako do aplikace',
            'Elektronická přihláška ke studiu na ČZU',
            '.',
            'Ostatní',
            'je získají od svých kontaktních osob. Pokud se tak nestalo, kontaktujte IT Helpdesk ČZU.',
            'Bezpečné přihlašování do systému',
            'Součástí přihlašovacího formuláře je nastavení doby platnosti přihlášení, což je minimální doba neaktivity, po kterou budete v systému přihlášeni. Implicitně je nastavena na jeden den.',
            'Při přihlašování do Univerzitního informačního systému se Vás může prohlížeč dotázat na uložení hesla. Uložení hesla do prohlížeče nedoporučujeme zejména v případě, přihlašujete-li se z počítače, který používá více uživatelů. Vaše heslo pak může být zneužito.',
            'Po přihlášení si každý uživatel může heslo do informačního systému změnit, požadavky na bezpečné heslo jsou uvedeny v příslušné aplikaci.',
            'Pro zvýšení bezpečnosti Vašich osobních dat jsme pro komunikaci se systémem zvolili zabezpečovací protokol SSL, což je celosvětově uznávaný standard pro bezpečnou komunikaci na Internetu. Používají ho i velké české banky pro tzv. homebanking. Základní princip SSL spočívá v tom, že mezi serverem a Vaším počítačem jsou vyměňovány elektronicky podepsané certifikáty, kterými se jednotlivé strany ověřují (tudíž nelze do šifrovaného toku dat podstrčit žádné údaje). Aby bylo možné práci s certifikáty usnadnit, zavádí se tzv. certifikační autority, které umožňují transparentní a téměř neviditelnou kontrolu tohoto šifrovaného kanálu. Díky tomuto pro uživatele nesmírně zjednodušujícímu postupu je třeba pouze nastavit Váš prohlížeč tak, aby důvěřoval naší certifikační autoritě, kterou je ČZU v Praze CA.',
            'Kam se obrátit v případě potíží',
            'Pokud budete mít nějaké potíže s přihlášením do Univerzitního informačního systému nebo jeho používáním, můžete se s důvěrou obrátit na elektronickou adresu',
            'Přihlásit se do informačního systému',
        );
    }

    public static function getSlovakGuide() : GuideTranslationData
    {
        return new GuideTranslationData(
            'Návod na prvé prihlásenie do UIS',
            'Návod obsahuje informácie pre prvé prihlásenie študentov, zamestnancov i uchádzačov o štúdium na ČPU.',
            'Prístup k informačnému systému',
            'Univerzitný informačný systém ČPU je prístupný z ľubovoľného počítača pripojeného do celosvetovej siete Internet (počítače všetkých fakúlt toto spĺňajú, k Internetu sa môžete pripojiť aj z domu pomocou modemu). Je však potrebné mať nainštalovaný webový prehliadač (v ľubovoľnom operačnom systéme). Aj keď je možné použiť akýkoľvek prehliadač, primárne sú naše stránky testované s prehliadačom Google Chrome, Mozilla Firefox a Microsoft Edge.',
            'Pre všetkých používateľov je UIS dostupný na adrese:',
            'Rad služieb UIS je dostupný iba po autentizácii používateľa svojím používateľským menom (login) a heslom (password).',
            'Študenti a zamestnanci',
            'sa prihlasujú do aplikácie',
            'Prihlásenie do osobnej administratívy UIS',
            '.',
            'Uchádzači',
            'sa prihlasujú do aplikácie',
            'Elektronická prihláška na štúdium na ČPU',
            '.',
            'Prijatí uchádzači',
            'sa prihlasujú do aplikácie',
            'Návratka k prihláške na štúdium na ČPU',
            '.',
            'Prihlasovacie údaje do osobnej administratívy (pre študentov a zamestnancov) sú odlišné od prihlasovacích údajov do evidencie e-prihlášok a do systému návratiek.',
            'Získanie prihlasovacích údajov',
            'Zamestnanci',
            'dostanú prihlasovacie údaje SMS správou v deň začiatku pracovného pomeru. Pokiaľ sa tak nestalo, kontaktujte IT Helpdesk ČPU. V prípade, že daný zamestnanec už na ČPU pracoval, platia jeho prihlasovacie údaje z predchádzajúceho pracovného pomeru na univerzite.',
            'Študenti',
            'spravidla zistí tieto informácie po prihlásení do aplikácie',
            'Elektronická prihláška na štúdium na ČPU',
            ', kde sa im po zápise na štúdium zobrazí. Pokiaľ daný uchádzač už na ČPU študoval, platia jeho prihlasovacie údaje z predchádzajúceho štúdia.',
            'Uchádzači',
            'dostanú prihlasovacie údaje do aplikácie',
            'Elektronická prihláška na štúdium na ČPU',
            'na kontaktný e-mail ihneď po založení e-prihlášky. Prihlasovacie údaje do aplikácie',
            'Návratka k prihláške na štúdium na ČPU',
            'sú zhodné ako do aplikácie',
            'Elektronická prihláška na štúdium na ČPU',
            '.',
            'Ostatné',
            'ich získajú od svojich kontaktných osôb. Pokiaľ sa tak nestalo, kontaktujte IT Helpdesk ČPU.',
            'Bezpečné prihlasovanie do systému',
            'Súčasťou prihlasovacieho formulára je nastavenie doby platnosti prihlásenia, čo je minimálna doba nečinnosti, po ktorú budete v systéme prihlásení. Implicitne je nastavená na jeden deň.',
            'Pri prihlasovaní do Univerzitného informačného systému sa Vás môže prehliadač spýtať na uloženie hesla. Uloženie hesla do prehliadača neodporúčame najmä v prípade, ak sa prihlasujete z počítača, ktorý používa viac používateľov. Vaše heslo potom môže byť zneužité.',
            'Po prihlásení si každý používateľ môže heslo do informačného systému zmeniť, požiadavky na bezpečné heslo sú uvedené v príslušnej aplikácii.',
            'Na zvýšenie bezpečnosti Vašich osobných údajov sme na komunikáciu so systémom zvolili zabezpečovací protokol SSL, čo je celosvetovo uznávaný štandard pre bezpečnú komunikáciu na Internete. Používajú ho aj veľké české banky pre tzv. homebanking. Základný princíp SSL je v tom, že sa medzi serverom a Vaším počítačom vymieňajú elektronicky podpísané certifikáty, ktoré si jednotlivé strany overujú (z čoho vyplýva, že do šifrovaného toku dát nie je možné podstrčiť žiadne údaje). Aby bolo možné prácu s certifikátmi uľahčiť, zavádzajú sa tzv. certifikačné autority, ktoré umožňujú transparentnú a takmer neviditeľnú kontrolu tohto šifrovaného kanála. Vďaka tomuto pre používateľa veľmi zjednodušenému postupu je potrebné iba nastaviť Váš prehliadač tak, aby dôveroval našej certifikačnej autorite, ktorou je ČZU v Praze CA.',
            'Kam sa obrátiť v prípade problémov',
            'Pokiaľ budete mať nejaké problémy s prihlásením do Univerzitného informačného systému alebo jeho používaním, môžete sa s dôverou obrátiť na elektronickú adresu',
            'Prihlásiť sa do informačného systému',
        );
    }
}
