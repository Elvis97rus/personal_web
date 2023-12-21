<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switchLanguage(string $locale, Request $request)
    {
        if (! in_array($locale, ['en', 'es', 'ru'])) {
            abort(400);
        }

        session()->put('locale', $locale);
        App::setLocale($locale);

        return redirect()->back();
    }
}
