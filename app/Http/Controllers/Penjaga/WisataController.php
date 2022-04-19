<?php

namespace App\Http\Controllers\Penjaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
   public function index()
   {
       $data ['wisata'] = Wisata::where('id_wisata', session()->get('id_wisata'))->first();
       return view('penjaga.wisata', $data);
   }
}
