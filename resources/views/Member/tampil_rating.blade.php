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
                                Rating
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                
                @include('member.menu_member')  
                
                <div class="col-9">
                    <div class="card card-details">
                        <h4>Rating & Testimoni</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Wisata</th>
                                        <th>Rating</th>
                                        <th>Testimoni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($rating as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->nama_wisata }}</td>
                                        <td>{{ $value->nilai_rating }}</td>
                                        <td>{{ $value->ulasan_rating }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mb-3">
                                <a href="{{ url('/member/rating/create') }}" class="btn btn-sign-up">Mulai Rating</a>
                            </div>
                        </div>                      
                    </div>
                </div>                    
            </div>
        </div>
    </section>
</main>
@endsection


