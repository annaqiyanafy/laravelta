<!--Menghubungkan dengan file index -->
@extends('dashboards.index')
<!DOCTYPE html>
<head>
<title>Setting Account</title>
<style type="text/css">
    .btn1{
     border:none;
     outline:none;
     height:50px;
     width:100%;
     border-radius:5px;
    }
</style>
</head>
<body background="{{url('bgakun.jpg')}}">
@section('konten')
<br/><br/><br/><br/><br/>

    <div class="container">
        <form action="/editakun"  method="post">
        @csrf
                    <h1 >EDIT ACCOUNT</h1>
                    <h4>If you want to</h4>

                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <div class="form-row" >
                        <div class="col-lg-7">
                        <input type ="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}} my-3 p-4" placeholder="Username.." required="required autofocus" 
                        value="{{Auth::user()->name}}" style="border: none;border-bottom: 2px solid red;">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type ="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}} my-3 p-4" placeholder="Email.." required="required" 
                        value="{{Auth::user()->email}}" style="border: none;border-bottom: 2px solid red;">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-7">
                        <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}} my-3 p-4" placeholder="*******" required="required" 
                        style="border: none;border-bottom: 2px solid red;">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                        <div>
                    </div>

                    <div class= "form-row">
                        <div class="col-lg-12">
                        <input type ="password" name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}} my-3 p-4" placeholder="*******(confirmation)" required="required"
                        style="border: none;border-bottom: 2px solid red;">
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                {{$errors->first('password_confirmation')}}
                            </div>
                        @endif
                        <div>
                    </div>
                    @if(session('message'))
                        <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                            <span>x</span>
                            </button>
                            {{session('message')}}
                        </div>
                        </div>
                    @endif
                    <div class="form-row">
                        <button type="submit" class="btn1 btn btn-primary" ><p style="font-size:18px;">EDIT</p></button>
                    </div>   
                    
                        
        </form>
    </div>
@endsection
</body>
</html>