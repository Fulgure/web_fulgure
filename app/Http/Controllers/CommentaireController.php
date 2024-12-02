<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Exception;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function comment_post(Request $request) {
        $commentaireManager = new Commentaire();

        $commentaireManager['type'] = "home";
        $commentaireManager['commentaire'] = $request->get('comment');

        try {
            $commentaireManager->push();

            return ['status' => "success", "message" => "Commentaire enregistre avec succès"];
        } catch(Exception $e) {
            return ['status' => "error", "message" => $e];
        }
        var_dump('tesr');
    }
}
