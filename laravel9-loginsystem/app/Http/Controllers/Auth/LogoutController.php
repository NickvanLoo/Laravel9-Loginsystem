<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('auth.login');
    }
}