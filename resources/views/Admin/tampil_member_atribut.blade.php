@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Member Atribut</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Member</th>
                <th>Atribut</th>
                <th>Detail Atribut</th>
                <th>Keterangan Detail Atribut</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($member_atribut as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_member}}</td>
                <td>{{$value->nama_atribut}}</td>
                <td>{{$value->nama_detail_atribut}}</td>
                <td>{{$value->keterangan_detail_atribut}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection