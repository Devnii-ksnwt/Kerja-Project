<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }
}
