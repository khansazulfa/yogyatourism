<?php

namespace App\Http\Controllers\Penjaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;

class DashboardController extends Controller
{
    public function index()
    {
        $data ['detail_wisata'] = Wisata::where('id_wisata', session()->get('id_wisata'))->first();
        return view('penjaga.dashboard', $data);
    }
}
