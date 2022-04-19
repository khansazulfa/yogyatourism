<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
       public function index()
    {
        $data ['rating'] = Rating::join('member','member.id_member', 'rating.id_member')->join('wisata','wisata.id_wisata','rating.id_wisata')->get();
        return view ('admin.tampil_rating',$data);
    }
}
