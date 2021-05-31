<!--Menghubungkan dengan file index -->
@extends('dashboards.index')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    <script src="('js/jquery.js"></script>
    <script src="{{ secure_asset('js/bootstrap.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <title>
        Daftar Data Karyawan
    </title>

</head>
<body background="{{url('bgdatakaryawan.jpg')}}" > 

@section('konten')

<br/>
<br/>

@include('dashboards.banyakkaryawan')

<br/>
<br/>

<div class="container">
<div class="table-responsive">
    <table>
    <tr  style="background:none;">
        <td colspan="8">
        <a href="/olahdatakaryawan" type="button"  class="btn btn-info " style="float:right; color:black;"  >Olah Data Karyawan</a>
        </td>
    </tr>
    </table>
    <br/>
<table class="table table-bordered table-hover"  style="background: white; " >
    
    <tr class="text-center" style="background:#d3d3d3;">
        <th >Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
        <th>Agama</th>
        <th>Status Perkawinan</th>
    </tr>
    @foreach($karyawan as $k)
    <tr>
        <td>{{$k->nama}}</td>
        <td>{{$k->tempatlahir}}</td>
        <td>{{$k->tanggallahir}}</td>
        <td class="text-center">{{$k->jeniskelamin}}</td>
        <td>{{$k->alamat}}</td>
        <td>{{$k->nomorhp}}</td>
        <td class="text-center">{{$k->agama}}</td>
        <td class="text-center">{{$k->statusperkawinan}}</td>
    </tr>
    @endforeach
</table>
</div>
</div>

               

@endsection

</body>
</html>