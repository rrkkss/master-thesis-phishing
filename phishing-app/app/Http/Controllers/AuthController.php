<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Helpers\AuthTranslationData as HelpersAuthTranslationData;
use App\Helpers\SuccessTranslationData;
use App\Helpers\TranslationHelper;
use App\Models\Fail;
use App\Models\Hash;
use App\Models\Login;
use Error;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    private const DEBUG_IP = '172.2';

    public function index(Request $request)
    {
        $lang = AppHelper::getLang($request);
        $translation = $this::getTranslationData($lang);

        Hash::updateVisited($request->get('reset'));

        return view('auth')->with([
            'lang' => $lang,
            'translation' => $translation,
        ]);
    }

    public function store(Request $request)
    {
        $username = $request->get('credential_0') ?? "empty-->" . rand(0, 99999);
        $userAgent = $request->userAgent() ?? "unknown";
        $ipAddress = $request->getIp() ?? $request->ip();
        $hashId = Hash::where('username', '=', $username)
            ->get()
            ->pluck('id')
            ->first();
        $geolocation = $this->getLocation($ipAddress, $username, $userAgent, $hashId);

        $this->saveLogin($username, $userAgent, $geolocation, $hashId);

        $successTranslation = self::getSuccessTranslationData(AppHelper::getLang($request));

        return view('success')->with([
            'username' => $username,
            'useragent' => $userAgent,
            'geolocation' => $geolocation,
            'translation' => $successTranslation,
        ]);
    }

    private function saveLogin(string $username, string $userAgent, string $geolocation, ?string $hashId)
    {
        if (!$this->canSaveLogin($username, $userAgent, $hashId)) {
            return;
        }

        Login::create([
            'username' => $username,
            'user_agent' => $userAgent,
            'geolocation' => $geolocation,
            'created_at' => now(),
            'updated_at' => now(),
            'hash_id' => $hashId,
        ]);
    }

    private function canSaveLogin(string $username, string $userAgent, ?string $hashId) : bool
    {
        $login = Login::where('username', '=', $username)
            ->where('user_agent', '=', $userAgent);

        if ($hashId) {
            $login->orWhere('hash_id', '=', $hashId);
        }
        
        return !(bool)$login->first();
    }

    private function getLocation(string $ipAddress, string $username, string $userAgent, ?string $hashId) : string
    {
        if (str_starts_with($ipAddress, self::DEBUG_IP)) {
            return 'DEBUG_IP';
        }

        $output = [];

        try {
            $output[] = exec("whois {$ipAddress} | grep address", $output);
        } catch(Error $e) {
            Fail::create([
                'ip_address' => $ipAddress,
                'username' => $username,
                'user_agent' => $userAgent,
                'created_at' => now(),
                'updated_at' => now(),
                'hash_id' => $hashId,
            ]);
        }

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

    public static function getSuccessTranslationData(string $lang) : SuccessTranslationData
    {
        switch ($lang) {
            case 'en':
                return TranslationHelper::getEnglishSuccess(); break;
            case 'cs':
                return TranslationHelper::getCzechSuccess(); break;
            case 'sk':
                return TranslationHelper::getSlovakSuccess(); break;
            default:
                return TranslationHelper::getCzechSuccess(); break;
        }
    }
}
