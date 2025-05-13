<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SearchPageController extends Controller
{   
    public function search_global(Request $request)
    {   
        // Utilisation de 'base_uri' au lieu de 'base_url'
        $ch = curl_init(env("URL_API").'?'.http_build_query([
            'q' => $request->query('q')
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Pour récupérer le contenu
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);          // Timeout de 10 secondes
        try {
            $reponse = curl_exec($ch);
            if (curl_errno($ch)) {
                echo "Erreur cURL : " . curl_error($ch);
            } else {
                $data = json_decode($reponse, true);
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
        curl_close($ch);
        return view('searchglobal', [
            'slimHeader' => true,
            'query' => $request->query('q'),
            'results' => $data
        ]);
    }

    public function search_finance(Request $request)
    {   
        $data = [
            "result" => [],
            "primaryChart" => [], // Graphique principal de la recherche
            "similarChart" => [], // Graphique similaire a la recherhce ( comme de d'autre marque ou entreprise )
            "similarSearch" => []
        ];
        return response()->json($data);
    }
}
