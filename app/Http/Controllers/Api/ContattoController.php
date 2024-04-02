<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contatto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContattoController extends Controller
{
    public function create(Request $request)
    {
        try {
            // Crea una nuova istanza del modello Contatto con i dati dalla richiesta
            $contatto = new Contatto();
            $contatto->name = $request->input('name');
            $contatto->email = $request->input('email');
            $contatto->message = $request->input('message');
            $contatto->user_id = $request->input('user_id'); // Assicurati di aggiungere user_id
            $contatto->save();

            // Restituisci una risposta JSON di successo
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            // Log dell'errore per debug
            Log::error('Errore durante il salvataggio del contatto: ' . $e->getMessage());

            // Restituisci una risposta JSON di errore
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}

// commento per nuovo commit
