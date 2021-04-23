<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index() {
        return json_encode(['toma' => 'toma de novo']);
    }
}
