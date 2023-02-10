<?php

namespace App\Http\Livewire\Admin\Pages;

use File;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Api extends Component
{
    public $form = [
        'username' => 'kalamsarker',
        'password' => 'crown@uk',
        'client_id' => '5',
        'client_secret' => 'YnNrQ4QhdvFeDdhYQscIzIaU48uDGF1R5qWAPAiQ',
        'grant_type' => 'password',
        'uri' => 'https://pos.retrievalit.xyz/oauth/token',
        'host' => 'https://pos.retrievalit.xyz/connector/api/',
    ];
    public $token;

    public function render()
    {
//        $request = Http::asForm()->post($this->form['uri'], $this->form);
//        $token = json_decode($request);
//        $product = Http::withHeaders(['Authorization' => 'Bearer ' . $token->access_token,])
//            ->get($this->host . 'product/25');

        return view('livewire.admin.pages.api')
            ->layout('layouts.dash');
    }

    public function createAccessToken()
    {
        $this->token=[
            'access_token'=> session('access_token'),
            'refresh_token'=> session('refresh_token'),
            'expires_in'=> session('expires_in'),
            'token_type'=> "Bearer",
        ];
//        $request = Http::asForm()->post($this->form['uri'], $this->form);
//
//        if ($request->successful()) {
//            $this->token = collect(json_decode($request));
//            $this->setEnvironment($this->token);
//
//
//        } else {
//            $this->reset('token');
//        }

    }

    private function setEnvironment($environment)
    {

        $envContent = File::get(base_path('bootstrap/crown/.env'));
        $a = $environment['token_type'] . " " . $environment['access_token'];
        $r = $environment['token_type'] . " " . $environment['refresh_token'];

        $envContent = str_replace('POS_ACCESS_TOKEN=', 'POS_ACCESS_TOKEN= '.$a, $envContent);
        File::put(base_path('bootstrap/crown/.env'), $envContent);
    }


}
