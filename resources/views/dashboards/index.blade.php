<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('sidebar.css')}}">
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <title>Home</title>
    <style type="text/css">
        ul li a:hover { color: black !important; }
        div ul li a:hover{ color: black !important;}
    </style>
</head>
<body>
    <header>
    @include('dashboards.header')
    </header>
    <!-- Start Sidebar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right active" type="button"  data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" >
            <span class="menu-collapsed">PT. INDUSTRI MILK ME</span>
        </a>
        <ul class="nav">
            <li class="nav-item " ><a href="/dashboard" class="nav-link" style="color:white;">Home</a></li>
        </ul>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item dropdown d-sm-block d-md-none">
            <a class="nav-link dropdown-toggle" href="#menu1" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
            Dashboards
            </a>
            <div class="dropdown-menu" id="menu1" aria-labelledby="smallerscreenmenu" style="background:#007BFF;">
                <a class="dropdown-item" href="/datakaryawan">Data Karyawan</a>
                <a class="dropdown-item" href="/profilperusahaan">Profil Perusahaan</a>
                <a class="dropdown-item" href="/produk">Produk</a>
            </div>
            <a class="nav-link dropdown-toggle" href="#menu2" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
            Settings
            </a>
            <div class="dropdown-menu" id="menu2" aria-labelledby="smallerscreenmenu" style="background:#007BFF;">
                <a class="dropdown-item" href="/olahdatakaryawan">Olah Data Karyawan</a>
                <a class="dropdown-item" href="/akun">Account</a>
                <a class="dropdown-item" href="/logout">Logout</a>
            </div>
        </li>
        </ul>
       </div>
</nav>



<div class="row" id="body-row" >
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            
        
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small id="MyLinks">MENU UTAMA</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <img src="{{url('dashboard.jpg')}}" width="20px" height="20px"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span class="menu-collapsed">Dashboard</span>
                   
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="/datakaryawan" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Data Karyawan</span>
                </a>
                <a href="/profilperusahaan" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Profil Perusahaan</span>
                </a>
                <a href="/produk" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Produk</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                <img src="{{url('setting.jpg')}}" width="20px" height="20px"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span class="menu-collapsed">Settings</span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="/olahdatakaryawan" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Olah Data Karyawan</span>
                </a>
                <a href="/akun" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Account</span>
                </a>
                <a href="/login" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Log Out</span>
                </a>
            </div>            
        </ul>
    </div> 

<!-- End Sidebar -->
<!-- MAIN -->
    <div class="col">
        <!--judul -->
        <div class="text-center">
            <h3>@yield('judulhalaman')</h3>
        </div>
        <!--konten -->
        @yield('konten')
    </div>
</div>

</body>
</html>