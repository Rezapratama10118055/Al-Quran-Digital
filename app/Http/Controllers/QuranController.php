<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuranController extends Controller
{
     public function index()
    {
     $client = new \GuzzleHttp\Client([
    'verify' => false
     ]);

    $response = $client->request('GET', 'https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');

    $quran = json_decode($response->getBody()->getContents(), true);

    return view('home', compact('quran'));

    }

    public function surah1()
{
    $client = new \GuzzleHttp\Client([
        'verify' => false
    ]);

    $response = $client->request('GET', 'https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/');

    $surah1 = json_decode($response->getBody()->getContents(), true);

    return view('surah1', compact('surah1'));
}

}
