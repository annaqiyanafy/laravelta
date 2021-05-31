<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Register Aplikasi Pengolahan Data Karyawan Perusahaan Industri Milk Me</title>
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
          <img src="{{url('registrasi.jpg')}}" style = "width : 100%; height : 100%; " class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 px-5 pt-3" >
        <form action="/postregister"  method="post">
        @csrf
                    <h1 >REGISTER</h1>
                    <h4>Please register to enter the app</h4>

                    <div class="form-row" >
                        <div class="col-lg-7">
                        <input type ="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}} my-3 p-4" placeholder="Username.." required="required autofocus" 
                        value="{{old('name')}}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type ="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}} my-3 p-4" placeholder="Email.." required="required" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type ="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}} my-3 p-4" placeholder="*******" required="required">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                        <div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-12">
                        <input type ="password" name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}} my-3 p-4" placeholder="*******(confirmation)" required="required">
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                {{$errors->first('password_confirmation')}}
                            </div>
                        @endif
                        <div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn1 btn btn-primary" >REGISTER</button>
                    </div>
                    <div class="button">
                        Sudah punya akun?<span class="helper-text"><i class="fa fa-lock"></i><a href="/login"> Login disini</a></span>
                    </div>
        
        </form>
        </div>
    
    </div>
    </div>
   
    </section>
    
    <script src="('js/jquery.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>