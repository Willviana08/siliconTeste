<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('https://randomuser.me/api/?results=100');
        $users = $response->json()['results'];

        return view('users.index', compact('users'));
    }
}
