<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    <title>Login Aplikasi Pengolahan Data Karyawan Perusahaan Industri Milk Me</title>
 <style type="text/css">
 *{
     margin:0;
     padding:0;
     box-sizing:border-box;
 }

 body{
     background :  #d3d3d3;
 }

 .row{

     background:white;
     border-top-left-radius:30px;
     border-bottom-left-radius:30px;
     border-bottom-right-radius:30px;
     border-top-right-radius:30px;
 }

 img{
     border-top-left-radius:30px;
     border-bottom-left-radius:30px;
 }

 .btn1{
     border:none;
     outline:none;
     height:50px;
     width:100%;
     border-radius:5px;

 }
 </style>

</head>
<body>
       
    <br/><br/><br/><br/><br/>
    <section class="form my-4 mx-5 align-center " >
    <div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="row no-gutters ">
        <div class="col-lg-5">
          <img src="{{url('milkme.jpg')}}" style = "width : 100%; height : 100%; " class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 px-5 pt-3" >
        <form action="/postlogin"  method="post">
        @csrf
                    <h1 >LOGIN</h1>
                    <h4>Sign into your account</h4>
                    <div class="form-row" >
                        <div class="col-lg-7">
                        <input type ="text" name="name" class="form-control my-3 p-4" placeholder="Username.." required="required" 
                        value="{{old('name')}}">
                        </div>
                    </div>
                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type ="email" name="email" class="form-control  my-3 p-4" placeholder="Email.." required="required" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type ="password" name="password" class="form-control my-3 p-4" placeholder="*******" required="required">
                        <div>
                    </div>
                    @if (\Session::has('msg'))
                        <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                            <span>x</span>
                            </button>
                            {!! \Session::get('msg') !!}
                        </div>
                        </div>
                    @endif
                    <div class="form-row">
                        <button type="submit" class="btn1 btn btn-primary">LOGIN</button>
                    </div>
                    <div class="button">
                        Belum punya akun?<span class="helper-text"><i class="fa fa-lock"></i><a href="/register"> Daftar disini</a></span>
                    </div>
        
        </form>
        </div>
    
    </div>
    </div>
   
    </section>
    
    <script src="('js/jquery.js"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
</body>
</html>