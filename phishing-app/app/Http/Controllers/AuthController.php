<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Helpers\AuthTranslationData as HelpersAuthTranslationData;
use App\Helpers\TranslationHelper;
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
        return view('success')->with(['username' => $username]);
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
