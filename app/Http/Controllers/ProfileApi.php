<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileApi extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'achraf assila',
            'email' => 'achrafassila678@gmail.com',
            'specialisation' => 'Full stack developer',
        ];
        return response()->json($profile);
    }
}
