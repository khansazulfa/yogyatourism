<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function logout (Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect ('/login');
    }
}
