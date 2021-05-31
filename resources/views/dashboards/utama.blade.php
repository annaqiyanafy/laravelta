<!--Menghubungkan dengan file index -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Home</title>
<style type="text/css">
 .a{font-size : 60px;
 }
</style>
</head>
<body style="background-image:url({{url('pabriksusu.jpg')}});">
@extends('dashboards.index')


@section('konten')
<div class="table-responsive">
<table  border="0" style="padding: 20px; height: 90%; width: 100%;  color: white; margin-bottom : 5px" class="form-container">
    <tr>
    <td style="font-size : 25px;  "><img src="{{url('akun.jpg')}}" style="margin-right: 20px; margin: 10px; width :50px ;height:50px; ">
    Hai, {{Auth::user()->name}}
    </td>
    </tr>
</table>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="table-responsive">
<table style="color: white; width:100%;">
    <tr>
        <td class="align-middle">
        <h1>Selamat datang</h1> <br/>
        <h1>di Aplikasi</h1>  <br/>
        <h1 class="a">Perusahaan MILK ME! </h1>
        </td>
    </tr>
</table>
</div>



@endsection
</body>
</html>