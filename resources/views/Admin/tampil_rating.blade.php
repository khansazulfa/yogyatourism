@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ulasan & Rating </h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Member</th>
                <th>Nama Wisata</th>
                <th>Nilai Rating</th>
                <th>Ulasan Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rating as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_member}}</td>
                <td>{{$value->nama_wisata}}</td>
                <td>{{$value->nilai_rating}}</td>
                <td>{{$value->ulasan_rating}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection