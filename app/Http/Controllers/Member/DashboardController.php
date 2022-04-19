<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Pemesanan;
use App\Models\Detail_atribut;
use App\Models\Rating;
use App\Models\Member_atribut;
use App\Models\Wisata;

class DashboardController extends Controller
{
  public function index()
  {
    return view('member.dashboard');
  }
  public function profil()
  {
    $data ['detail_member'] = Member::where('id_member', session()->get('id_member'))->first();
    return view('member.profil', $data);
  }
  public function pemesanan()
  {
    $data ['pemesanan'] = Pemesanan::join('wisata', 'wisata.id_wisata', 'pemesanan.id_wisata')->where('id_member', session()->get('id_member'))->get();
    return view('member.pemesanan' , $data);
  }
  public function rating()
  {
    $data ['rating'] = Rating::join('wisata','wisata.id_wisata','rating.id_wisata')->where('id_member', session()->get('id_member'))->get();
    return view('member.tampil_rating' , $data);
  }
 
  public function atribut()
  {
    $da = Detail_atribut::join('atribut','atribut.id_atribut','detail_atribut.id_atribut')->get();
    foreach ($da as $key => $value) {
      $data['atribut'][$value->id_atribut]['id_atribut'] = $value->id_atribut;
      $data['atribut'][$value->id_atribut]['nama_atribut'] = $value->nama_atribut;
      $data['atribut'][$value->id_atribut]['detail'][]= $value;

      $id_member = session()->get('id_member');
      $id_atribut = $value->id_atribut;
      $cek = Member_atribut::join('detail_atribut','detail_atribut.id_detail_atribut','member_atribut.id_detail_atribut')->where('id_member', $id_member)->where('detail_atribut.id_atribut', $id_atribut)->first();
      if(!empty($cek)){
        $data['detail'][$id_atribut] = $cek->id_detail_atribut;
      }else {
        $data['detail'][$id_atribut]='';
      }
    }
    return view('member.atribut', $data);
  }

  public function update_atribut(Request $request)
  {
    foreach ($request['id_detail_atribut'] as $id_atribut => $id_detail_atribut){
      $inputan ['id_member'] = session()->get('id_member');
      $inputan ['id_detail_atribut'] = $id_detail_atribut;
      // cek apakah datanya sudah ada di database. jika belum, maka diambil, jika ada maka di ubah
       $cek = Member_atribut::join('detail_atribut','detail_atribut.id_detail_atribut','member_atribut.id_detail_atribut')->where('id_member', $inputan['id_member'])->where('detail_atribut.id_atribut', $id_atribut)->first();
       if(empty($cek)){
        Member_atribut::insert($inputan);
      }else {
        $cek = Member_atribut::where('id_member_atribut', $cek -> id_member_atribut)->update($inputan);
      }
    }
    return redirect ('member/atribut');
  }
  public function create()
 {
  $data['wisata'] = Wisata::all();
  return view ('member/isi_rating', $data);
  } 
   public function store_rating(Request $request)
 {
   $input['id_member'] = $request->session()->get('id_member');
   $input['id_wisata'] = $request->id_wisata;
   $input['nilai_rating'] = $request->nilai_rating;
   $input['ulasan_rating'] = $request->ulasan_rating;
   Rating::insert($input);
  return redirect ('member/rating');
  } 
    public function testi()
 {
   
  return view ('/testimonial');
  } 
}
