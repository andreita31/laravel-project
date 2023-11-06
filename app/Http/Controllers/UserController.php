<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $name, ?string $lastname = null)
    {
        return view('greeting', ['name' => $name, 'lastname' => $lastname]);
    }
}
