<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Helpers\GuideTranslationData;
use App\Helpers\TranslationHelper;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class GuideController extends BaseController
{
    public function index(Request $request)
    {
        $lang = AppHelper::getLang($request);
        $translation = $this::getTranslationData($lang);

        return view('guide')->with([
            'lang' => $lang,
            'translation' => $translation,
        ]);
    }

    private static function getTranslationData(string $lang) : GuideTranslationData
    {
        switch ($lang) {
            case 'en':
                return TranslationHelper::getEnglishGuide();
                break;
            case 'cs':
                return TranslationHelper::getCzechGuide();
                break;
            case 'sk':
                return TranslationHelper::getSlovakGuide();
                break;
            default:
                return TranslationHelper::getCzechGuide();
                break;
        }
    }
}