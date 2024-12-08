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
        $client = new Client([
            'base_uri' => 'https://api.bing.microsoft.com/v7.0/',
            'verify' => false,
        ]);
        $apiKey = "ab1e06567fc1440b837be7cc675235b9";
        $query = $request->query('q');
        $data['webPages']['value'] = array();
        try {
            // Requête GET avec l'URL complète
            $response = $client->request('GET', 'search', [
                'headers' => [
                    'Ocp-Apim-Subscription-Key' => $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'query' => [
                    'q' => $query,
                    'count' => 20,
                    'offset' => 0,
                    'mkt' => 'fr-FR',
                    'safeSearch' => 'Strict',
                    'textDecorations' => 'false',
                    'textFormat' => 'Raw',
                    'responseFilter' => 'WebPages',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Affichage des résultats pour déboguer
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        return view('searchglobal', [
            'slimHeader' => true,
            'query' => $query,
            'results' => $data['webPages']['value']
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
