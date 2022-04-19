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
                                Profil
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                
                @include('member.menu_member')  
                
                <div class="col-9">
                    <div class="card card-details">
                        <h4>Profile</h4>
                        
                        <form action="/member/profil/{{session()->get('id_member')}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama </label>
                                <input type="text" class="form-control" name="nama_member" value="{{session()->get('nama_member')}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email </label>
                                <input type="text" class="form-control" name="email_member" value="{{session()->get('email_member')}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Profile Picture </label>
                                <input type="file" class="form-control" name="file_foto">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-sign-up">Ubah Profil</button>
                                <a href="" class="btn btn-sign-up">Ubah Password</a>
                            </div>
                        </form>                      
                    </div>
                </div>
            </div>                    
        </div>
</section>
</main>
@endsection


