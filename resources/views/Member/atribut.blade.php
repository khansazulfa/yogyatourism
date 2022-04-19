@extends('template')

@section('konten')
<main>
    <section class="section-details-header" id="header-profile"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <!-- breadcrumb pada bagiat "paket travel" -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                Home
                            </li>
                            <li class="breadcrumb-item">
                                Member
                            </li>
                            <li class="breadcrumb-item active">
                                Atribut
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                
                @include('member.menu_member')  
                
                <div class="col-9">
                    <div class="card card-details">
                        <h4>Preferensi</h4>
                        <p>Jika ingin mendpatkan rekomendasi tempat wisata yang kemungkinan anda sukai, silahkan isi data dibawah ini:</p>
                        
                        <form action="/member/atribut" method="post">
                            @method('patch')
                            @csrf
                            @foreach ($atribut as $key => $value )
                            <div class="mb-5">
                                <label class="form-label">{{ $value['nama_atribut'] }} </label>
                                @foreach ($value['detail'] as $key => $value2)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="id_detail_atribut[{{ $value['id_atribut'] }}]" value="{{ $value2['id_detail_atribut'] }}" @if($detail[$value['id_atribut']]==$value2['id_detail_atribut']) checked="" @endif>
                                    <label class="form-check-label">{{ $value2['nama_detail_atribut'] }}:{{$value2['keterangan_detail_atribut']  }}</label>
                                </div>
                                @endforeach
                            </div> 
                            @endforeach
                            <div class="mb-3">
                                <button class="btn btn-sign-up">Ubah Data</button>
                            </div>
                        </form>                      
                    </div>
                </div>
            </div>                    
        </div>
    </section>
</main>
@endsection


