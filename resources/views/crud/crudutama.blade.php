<!--Menghubungkan dengan file index -->
@extends('dashboards.index')

<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    body{
        ;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="('js/jquery.js"></script>
    <script src="{{ secure_asset('js/bootstrap.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    
    <title>Olah Data Karyawan</title>
</head>
<body background="{{url('bgdatakaryawan.jpg')}}">


@section('konten')
<br/>
<br/>
<a type="button" data-target="#munculmodaltambah" class="btn btn-primary " data-toggle="modal" >Tambah</a>
@include('crud.modaltambah')
<br></br>
<div class="container">
<div class="table-responsive">
<table class="table table-bordered table-hover  " style="background:white;" >
    <tr class="text-center" style="background:#d3d3d3;">
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
        <th>Agama</th>
        <th>Status Perkawinan</th>
        <th>Aksi</th>
    </tr>
    @foreach($karyawan as $k)
    <tr>
        <td>{{$k->nama}}</td>
        <td>{{$k->tempatlahir}}</td>
        <td>{{$k->tanggallahir}}</td>
        <td class="text-center"> {{$k->jeniskelamin}}</td>
        <td>{{$k->alamat}}</td>
        <td>{{$k->nomorhp}}</td>
        <td class="text-center">{{$k->agama}}</td>
        <td class="text-center">{{$k->statusperkawinan}}</td>
        <td>
            
            
            <a href="/olahdatakaryawan/edit/{{$k->id}}" type="button" data-target="#munculmodaledit{{$k->id}}" class="btn btn-info " data-toggle="modal" >Edit</a>
            @include('crud.modaledit')
            <a href="/olahdatakaryawan/hapus/{{$k->id}}" type="button"  onclick="return confirm('Yakin hapus data karyawan bernama {{$k->nama}} ?')" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection


                @if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif

</body>
</html>