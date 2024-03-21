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
use Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    private const DOCKER_IP = '172.2';
    private const LOCAL_IP = '192.168';

    public function index(Request $request)
    {
        $lang = AppHelper::getLang($request);
        $translation = $this::getTranslationData($lang);

        Hash::updateVisited(substr($request->get('reset'), 0, 99));

        return view('auth')->with([
            'lang' => $lang,
            'translation' => $translation,
        ]);
    }

    public function store(Request $request)
    {
        if (!$request->get('credential_0') 
            || !$request->get('credential_1')
        ) {
            $lang = AppHelper::getLang($request);
            $translation = $this::getTranslationData($lang);

            if (!$request->get('credential_0')) {
                return view('auth')->with([
                    'lang' => $lang,
                    'translation' => $translation,
                    'empty' => self::getEmptyUsernameInfo($lang)
                ]);
            } else if (!$request->get('credential_1')) {
                return view('auth')->with([
                    'lang' => $lang,
                    'translation' => $translation,
                    'empty' => self::getEmptyPasswordInfo($lang)
                ]);
            }
        }

        $username = strtolower(substr($request->get('credential_0'), 0, 99));
        $userAgent = $request->userAgent() ?? "unknown";
        $ipAddress = $request->getIp() ?? $request->ip();
        $hashId = Hash::where('username', '=', $username)
            ->orWhere('hash', '=', $request->get('reset'))
            ->get()
            ->pluck('id')
            ->first();
        
        $geolocation = $this->getLocation($ipAddress, $username, $userAgent, $hashId);
        $this->saveLogin($username, $userAgent, $ipAddress, $geolocation, $hashId);
        $successTranslation = self::getSuccessTranslationData(AppHelper::getLang($request));

        return view('success')->with([
            'username' => $username,
            'useragent' => $userAgent,
            'geolocation' => $geolocation,
            'translation' => $successTranslation,
        ]);
    }

    private static function getEmptyUsernameInfo($lang) : string
    {
        switch ($lang) {
            case 'en':
                return 'Login needs to be entered.'; break;
            case 'sk':
                return 'Je nutné zadať prihlasovacie meno.'; break;
            default:
                return 'Je nutné zadat přihlašovací jméno.'; break;
        }
    }

    private static function getEmptyPasswordInfo($lang) : string
    {
        switch ($lang) {
            case 'en':
                return 'Password is required.'; break;
            case 'sk':
                return 'Je nutné zadať heslo.'; break;
            default:
                return 'Je nutné zadat heslo.'; break;
        }
    }

    private function saveLogin(string $username, string $userAgent, string $ipAddress, string $geolocation, ?string $hashId)
    {
        if (!$this->canSaveLogin($username, $userAgent, $hashId)) {
            return;
        }

        try {
            Login::create([
                'username' => $username,
                'user_agent' => $userAgent,
                'geolocation' => $geolocation,
                'created_at' => now(),
                'updated_at' => now(),
                'hash_id' => $hashId,
            ]);
        } catch (QueryException $e) {
            Fail::create([
                'ip_address' => $ipAddress,
                'username' => $username,
                'user_agent' => $userAgent,
                'created_at' => now(),
                'updated_at' => now(),
                'hash_id' => $hashId,
                'type' => 'login'
            ]);
        }
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
        if (str_starts_with($ipAddress, self::DOCKER_IP)
            ||str_starts_with($ipAddress, self::LOCAL_IP)
        ) {
            return 'DEBUG_IP';
        }

        return $ipAddress;
    }

    private static function getTranslationData(string $lang) : HelpersAuthTranslationData
    {
        switch ($lang) {
            case 'en':
                return TranslationHelper::getEnglishAuth(); break;
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
            case 'sk':
                return TranslationHelper::getSlovakSuccess(); break;
            default:
                return TranslationHelper::getCzechSuccess(); break;
        }
    }
}
