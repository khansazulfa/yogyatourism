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
                        <h4>Isi Rating & Testimoni</h4>
                        <form action="{{ url('/member/rating') }}" method="post">
                            @method('post')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <select name="id_wisata" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ($wisata as $key => $value)
                                    <option value="{{$value->id_wisata}}">{{$value->nama_wisata}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="form-label">Nilai Rating</label>
                            <div class="container mb-3">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="nilai_rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="nilai_rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="nilai_rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="nilai_rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="nilai_rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="nilai_rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="nilai_rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="nilai_rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="nilai_rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="nilai_rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                            <br><br>
                            <div class="mb-3">
                                <label for="" class="form-label">Ulasan Tempat Wisata</label>
                                <textarea name="ulasan_rating" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-sign-up">Simpan</button>
                            </div>
                        </form>                      
                    </div>
                </div>                    
            </div>
        </div>
    </section>
</main>
@endsection


