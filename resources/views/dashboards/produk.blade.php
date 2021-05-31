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
    <title>Produk Perusahaan</title>
</head>
<body background="{{url('bgproduk.jpg')}}">


@section('konten')
<br/>

<div class="container shadow shadow p-3 mb-3 bg-white rounded">
<div class="row">

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('kentalmanis.jpg')}}"  class="img-responsive " style="height:200px; margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Kental Manis MILKME (370 G)</h5>
                <p class="card-text m-1 text-center">Rasa Coklat</p>
                <br/>
                <br/>
                <a href="#" class="btn btn-primary align-center" disabled>Rp.11.500</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('kentalmanisv.jpg')}}"  class="img-responsive " style="height:200px;margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Kental Manis MILKME (370 G)</h5>
                <p class="card-text m-1 text-center">Rasa Vanila </p>
                <br/>
                <br/>
                <a href="#" class="btn btn-primary text-center">Rp.11.500</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('susububukv.jpg')}}"  class="img-responsive " style="height:200px;margin-top:10px;">
            <div class="card-body"> 
                <h5 class="card-title m-1 text-center">Susu Bubuk<br/>MILKME (250 G)</h5>
                <p class="card-text m-1 text-center">Rasa Vanila</p>
                <br/>
                <br/>
                <a href="#" class="btn btn-primary text-center">Rp.38.500</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('susububukc.jpg')}}"  class="img-responsive " style=" height:200px;margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Bubuk<br/> MILKME (250 G)</h5>
                <p class="card-text m-1 text-center">Rasa Coklat</p>
                <br/>
                <br/>
                <a href="#" class="btn btn-primary text-center">Rp.38.500</a>
            </div>
        </div>
    </div>

    </div>
</div>



<br/>
<div class="container ">
<div class="row" style="height:150px;">
    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('susukotakc.jpg')}}"  class="img-responsive " style="height:200px; margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Kotak MILKME (115 Ml)</h5>
                <p class="card-text m-1">Rasa Coklat</p>
                <br/>
                <a href="#" class="btn btn-primary " disabled>Rp.2.300</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('susukotakv.jpg')}}"  class="img-responsive " style="height:200px;margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Kotak MILKME (115 Ml)</h5>
                <p class="card-text m-1">Rasa Vanila</p>
                <br/>
                <a href="#" class="btn btn-primary">Rp.2.300</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('kotakbesarv.jpg')}}"  class="img-responsive " style="height:200px;margin-top:10px;">
            <div class="card-body"> 
                <h5 class="card-title m-1 text-center">Susu Kotak<br/> MILKME (1000 Ml)</h5>
                <p class="card-text m-1">Rasa Vanila</p>
                <br/>
                <a href="#" class="btn btn-primary">Rp.17.200</a>
            </div>
        </div>
    </div>

    <div  class="col md-3">
        <div class="card ">
                <img src="{{url('kotakbesarc.jpg')}}"  class="img-responsive " style=" height:200px;margin-top:10px;">
            <div class="card-body">
                <h5 class="card-title m-1 text-center">Susu Kotak<br/> MILKME (1000 Ml)</h5>
                <p class="card-text m-1">Rasa Coklat</p>
                <br/>
                <a href="#" class="btn btn-primary">Rp.17.200</a>
            </div>
        </div>
    </div>

</div>
</div>



</div>
</div>



@endsection
</body>
</html>