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
        string $footerTipTwo
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
            'to view more details about log in.'
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
            '.'
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
            '.'
        );
    }

    public static function getEnglishSuccess() : SuccessTranslationData
    {
        return new SuccessTranslationData(
            'You have been the victim of (fake) phishing!',
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
            'If you have entered nonsensical data, you have also done the wrong thing - the page may be running javascript files that can exploit (unknown) vulnerabilities to obtain sensitive data by other means',
            'If you have 2-factor authentication, your data would probably be fine, but it can exploit weaknesses in the system and is therefore not a catch-all tool - caution is needed with it as well',
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
}
