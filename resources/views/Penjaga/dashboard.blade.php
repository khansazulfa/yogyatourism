@extends('penjaga.template')

@section('content')

<!-- Main konten utama Website  -->
<main>
    <!-- Begin Page Content -->
    <div class="container">
        <div class="container-fluid">
            
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
                <h5 class=" mb-0 text-gray-800 font-weight-bold">Home</h5>
            </div>
            
            <form action="/penjaga/profil/{{session()->get('id_penjaga')}}" method="post">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Wisata</label>
                    <input readonly="" class="form-control" value="{{$detail_wisata->nama_wisata}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Penjaga</label>
                    <input type="text" class="form-control" name="nama_penjaga" value="{{session()->get('nama_penjaga')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Penjaga</label>
                    <input type="text" class="form-control" name="email_penjaga" value="{{session()->get('email_penjaga')}}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-sign-up">Ubah Profil</button>
                    <a href="/penjaga/profil/ubah_password" class="btn btn-sign-up">Ubah Password</a>
                </div>
                @if (session()->has('sukses_profil'))
                <div class="alert alert-success">{{session()->get('sukses_profil')}}</div>                                  
                @endif
            </form>
        </div>
    </div>
</main>
@endsection