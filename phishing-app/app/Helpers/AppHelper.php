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

    public static function getCurrentDate() : string
    {
        return Carbon::parse(now())->format('M d, Y g:i a');
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
}
