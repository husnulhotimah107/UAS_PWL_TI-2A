<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class ObatController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function getobat()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/obat');
        $response = $request->getBody();

        $obat = json_decode($response, true);
        return view('obat', ['obat' => $obat]);
    }

    public function detailobat($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/obat?id_obat=' . $id);
        $response = $request->getBody();
        $obat['obat'] = json_decode($response, true);

        return view('detailobat', ['obat' => $obat]);
    }
}