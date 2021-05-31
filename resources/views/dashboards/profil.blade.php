<!--Menghubungkan dengan file index -->
@extends('dashboards.index')
<!DOCTYPE html>
<html>
<head>
    <title>Profil Perusahaan</title>

</head>
<style type="text/css">
table{
margin="0"; padding="0";
}
</style>
<body>
@section('konten')

<table  border="0" width="100%"  margin="0" padding="0" class="form-container" >
<thead height="400px" >
    <td colspan="3" align = "right"  valign = "top" style="background: #333333; color :white;font-size: 60px; padding:30px ">
    PROFIL KAMI
    </td>
</thead>
<tr>
    <td colspan="3" align="center">
    <br/>
    <div class="col-sm-9 "><img src = "{{url('logo.jpg')}}"  class="img-responsive img-fluid" style="width:600px; height:350px; float: center;"></div>
    </td>
</tr>
<tr height= "200px">
    <td width="30%" colspan="3" >
        <blockquote class="blockquote text-center">
            <p class="mb-0">Produk yang kami pasarkan bertujuan menyehatkan generasi bangsa</p><BR/>
            <footer class="blockquote-footer">Halim Akbar, Direktur <cite title="Source Title">PT. Industri MILK ME</cite></footer>
        </blockquote>
    </td> 
</tr>
<tr height="10px">
    <td colspan="3">
        <hr>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
        <div class="col-sm-12 "><img src = "{{url('profil.jpg')}}" class="img-responsive img-fluid" style = "width : 100%; height : 30%; float: right; "  ></div>
    </td>
</tr>
<tr height="10px">
    <td colspan="3">
        <hr>
    </td>
</tr>
<tr>
    <td colspan="3" width="70%" style="padding:30px; margin:20px; font-size:18px;">

        <Address> 
        <strong> Alamat perusahaan utama, </strong><br/> Situs 007 jalan <br> Jakarta Timur, Negara Indonesia<br/>
        No : (123) 456-7890 
        </address> 
        <Address> 
        <Strong>Situs Email :</strong >
        <A   href = "mailto: #"> MILKME@.com </a> 
        </address> 

        <div class=”well” style="text-align:justify;">
        <p>Hari ini Indonesia memiliki salah satu perusahaan perindustrian susu yang terkenal akan khasiat yang didapat. 
        Penggemar susu MILK ME menjadi motivasi teruntuk perusahaan kami, membuat berbagai produk olahan susu yang dijamin
        berkualitas tinggi. Saat ini perusahaan MILK ME memiliki 102 cabang perusahaan di lingkup nasional, Indonesia. 
        Dan sudah 20 cabang perusahaan MILK ME yang didirikan di lingkup internasional. Sudah menjadi kewajiban kami menyediakan
        produk yang bermanfaat. Kami sangat siap melayani masyarakat Indonesia dan masyarakat dunia. </p>
        </div>
    </td>
<tr height="10px">
    <td colspan="3">
        <hr>
    </td>
</tr>
<tr align = "center">
    <td colspan="3">
    <img src="{{url('instagram.jpg' )}}" style="width:60px; height:60px;">
        @MILKMEINDONESIA
        @MILKMEWORLD
    </td>
</tr>
<tr align = "center">
    <td colspan="3">
    <img src="{{url('twitter.jpg' )}}" style="width:70px; height:70px;padding:10px;">
        @MILKMEINDONESIA
        @MILKMEWORLD
    </td>
</tr>
    
</tr>
</table>

<br/>

@endsection
</body>
</html>