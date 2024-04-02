<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::all(); // Recupera tutti gli utenti dal database
        return response()->json($users);
    }
}
