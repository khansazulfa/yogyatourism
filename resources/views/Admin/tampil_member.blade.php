@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Member</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Member</th>
                <th>Email Member</th>
                <th>Password Member</th>
                <th>Foto Member</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($member as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_member}}</td>
                <td>{{$value->email_member}}</td>
                <td>{{$value->password_member}}</td>
                <td><a href="/assets/member/{{$value->foto_member}}" target="_blank">Download Foto</a></td>
                <td>
                    <a href="/admin/member/{{$value->id_member}}/show" class="btn btn-info">Atribut</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection