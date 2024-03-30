<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContattoController extends Controller
{
    public function create(Request $request)
    {
        DB::table('contattos')->insert($request->all());

        // Restituisci una risposta JSON di successo
        return response()->json(['status' => 'success'], 200);
    }
}

// commento per nuovo commit
