<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class AppHelper
{
    private const NAMEDAYS = [
        '10' => 'Viktorie',
        '11' => 'Anděla, Angelika',
        '12' => 'Řehoř',
        '13' => 'Růžena',
        '14' => 'Růt, Matylda',
        '15' => 'Ida',
        '16' => 'Elena, Herbert',
        '17' => 'Vlastimil, Vlastimila',
        '18' => 'Eduard',
        '19' => 'Josef, Josefa',
        '20' => 'Světlana',
        '21' => 'Radek',
        '22' => 'Leona, Lea',
        '23' => 'Ivona',
        '24' => 'Gabriel',
        '25' => 'Marián',
        '26' => 'Emanuel',
        '27' => 'Dita',
        '28' => 'Soňa',
        '29' => 'Taťána',
        '30' => 'Arnošt, Ernest',
        '31' => 'Kvído',
    ];

    public static function getCurrentDate(?string $lang) : string
    {
        if (!$lang) {
            $lang = app()->getlocale();
        }

        if ($lang === 'en') {
            return Carbon::parse(now())->format('M d, Y g:i a');
        }

        return now()->format('d. m. Y H:i');
    }

    public static function getWeekInfo(?string $lang) : string
    {
        if (!$lang) {
            $lang = app()->getlocale();
        }

        switch ($lang) {
            case 'en':
                return '4. (even) week with classes (SS 2023/2024)';
                break;
            case 'cs':
                return '4. (sudý) výukový týden (LS 2023/2024)';
                break;
            case 'sk':
                return '4. (párny) výučbový týždeň (LS 2023/2024)';
                break;
            default:
                return '4. (sudý) výukový týden (LS 2023/2024)';
                break;
        }
    }

    public static function getSiteName(?string $lang) : string
    {
        if (!$lang) {
            $lang = app()->getlocale();
        }

        switch ($lang) {
            case 'en':
                return 'University information system';
                break;
            case 'sk':
                return 'Univerzitný informačný systém';
                break;
            case 'cs':
                return 'Univerzitní informační systém';
                break;
            default:
                return 'Univerzitní informační systém';
                break;
        }
    }

    public static function getLang(Request $request) : string
    {
        $lang = app()->getLocale();
        $langfp = $request->input('lang');

        return $langfp ? $langfp : $lang;
    }

    public static function getNamedayPerson() : string
    {
        $day = Carbon::now()->day;

        if (isset(self::NAMEDAYS[$day])) {
            return self::NAMEDAYS[$day];
        }

        return 'Ruprecht';
    }
    
    public static function canShowCzech(?string $lang) : bool
    {
        if ($lang === 'en' || $lang == 'sk') {
            return true;
        }

        if ((app()->getLocale() === 'en' || app()->getLocale() === 'sk') && !$lang) {
            return true;
        }

        return false;
    }

    public static function canShowSlovakian(?string $lang) : bool
    {
        if ($lang === 'en' || $lang == 'cs') {
            return true;
        }

        if ((app()->getLocale() === 'en' || app()->getLocale() === 'cs') && !$lang) {
            return true;
        }

        return false;
    }

    public static function canShowEnglish(?string $lang) : bool
    {
        if ($lang === 'cs' || $lang == 'sk') {
            return true;
        }

        if ((app()->getLocale() === 'cs' || app()->getLocale() === 'sk') && !$lang) {
            return true;
        }

        return false;
    }

    public static function setParameters(string $lang = null, string $reset = null) : string
    {
        $lang ??= request()->get('lang');
        $reset ??= request()->get('reset');

        if ($lang && !$reset) {
            return "?lang={$lang}";
        } elseif (!$lang && $reset) {
            return "?reset={$reset}";
        } elseif ($lang && $reset) {
            return "?lang={$lang}&reset={$reset}";
        }

        return "";
    }
}
