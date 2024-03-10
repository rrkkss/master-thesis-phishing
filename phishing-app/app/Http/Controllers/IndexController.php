<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Helpers\IndexTranslationData as HelpersIndexTranslationData;
use App\Helpers\TranslationHelper;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index(Request $request)
    {
        $lang = AppHelper::getLang($request);
        $translation = $this::getTranslationData($lang);

        return view('index')->with([
            'lang' => $lang,
            'translation' => $translation,
        ]);
    }

    public function store(Request $request)
    {
        
    }

    private static function getTranslationData(string $lang) : HelpersIndexTranslationData
    {
        switch ($lang) {
            case 'en':
                return TranslationHelper::getEnglishIndex();
                break;
            case 'cs':
                return TranslationHelper::getCzechIndex();
                break;
            case 'sk':
                return TranslationHelper::getSlovakianIndex();
                break;
            default:
                return TranslationHelper::getCzechIndex();
                break;
        }
    }
}
