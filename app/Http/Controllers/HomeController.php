<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
     $client = new \GuzzleHttp\Client([
    'verify' => false
     ]);

    $response = $client->request('GET', 'https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');

    $quran = json_decode($response->getBody()->getContents(), true);

    return view('home', compact('quran'));

    
    }


}
