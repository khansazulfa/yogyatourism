<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Wisata;

class FotoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $data ['foto'] = Foto::all();
        return view ('admin.tampil_foto',$data);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create($id)
    {
        $data['id_wisata'] = $id;
        $data['wisata'] = Wisata::all();
        return view ('admin.tambah_foto', $data);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //Mengupload foto dulu
        //$request->validate([
            //'file_foto' => 'required|file_foto|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
            $foto = $request->file('file_foto');
            $input['file_foto'] = date('ymdhis')."_".$foto->getClientOriginalName();
            $foto->move(public_path('assets/foto'), $input['file_foto']);
            $input['id_wisata'] = $request->id_wisata;
            $input['caption_foto'] = $request->caption_foto;
            Foto::insert($input);
            return redirect('admin/foto/' . $input['id_wisata'] . '/show');
        }
        
        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            $data['id_wisata'] = $id;
            $data['foto'] = Foto::join('wisata','wisata.id_wisata','foto.id_wisata')->where('foto.id_wisata', $id)->get();
            return view ('admin.tampil_foto', $data);
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit ($id)
        {
            $data['wisata'] = Wisata::all();
            $data['foto'] = Foto::where('id_foto','=',$id)->first();
            return view('admin.ubah_foto', $data);
        }
        
        
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
            $foto = $request->file('file_foto');
            if ($foto){
                //Hpus foto lama
                $data_lama = Foto::where('id_foto','=', $id)->first();
                if (file_exists("/assets/foto/".$data_lama->file_foto))
                {
                    unlink("/assets/foto/",$data_lama->file_foto);
                }
                $inputan['file_foto'] = date('ymdhis')."_". $foto->getClientOriginalName();
                $foto->move(public_path('assets/foto'), $inputan['file_foto']);
            }
            $inputan['id_wisata'] = $request->id_wisata;
            $inputan['caption_foto'] = $request->caption_foto;
            Foto::where('id_foto','=', $id)->update($inputan);
            return redirect('admin/foto/' . $inputan['id_wisata'].'/show');
        }
        
        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy ($id, $id_wisata)
        {
            $data_lama = Foto::where('id_foto','=', $id)->first();
                if(file_exists("/assets/foto/".$data_lama->file_foto)){
                    unlink("/assets/foto/".$data_lama->file_foto);
                }
            Foto::where('id_foto','=', $id)->delete();
            return redirect('admin/foto/' . $id_wisata . '/show');
        }
        
    }