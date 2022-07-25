<?php

namespace App\Http\Controllers;

use Session;
use Hash;

class LanguageController extends Controller

{
    /**
     * @param $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function swap($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
