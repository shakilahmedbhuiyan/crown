<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class EulaServiceController extends Controller
{
    /**
     * Show the terms of service for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        $eulaFile = Jetstream::localizedMarkdownPath('eula.md');

        return view('eula', [
            'eula' => Str::markdown(file_get_contents($eulaFile)),
        ]);
    }
}
