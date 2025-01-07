<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- box icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- ajax datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    {{-- web icon --}}
    <link rel="website icon" type="png" href="{{ asset('img/login-logo.png') }}">
</head>
<body>
    <!-- header -->
    @hasSection('custom-header')
        @yield('custom-header')
    @else
        <header>
            <a href="/" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
            <ul class="navlist">
                <li><a href="{{ url('/') }}">Ruang 1</a></li>
                <li><a href="{{ url('/Ruang2') }}">Ruang 2</a></li>
                <li><a href="{{ url('/Ruang3') }}">Ruang 3</a></li>
                <li><a href="{{ url('/Ruang4') }}">Ruang 4</a></li>
            </ul>
            <div class="right-content">
                @if (Auth::check())
                    <span class="username" onclick="toggleLogoutMenu()">{{ Auth::user()->username }}</span>
                    <div class="logout-menu" id="logout-menu">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="nav-btn">Sign In</a>
                @endif
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
    @endif
    

    <!-- Konten utama -->
    <main>
        @yield('content')
    </main>

    <!-- footer -->
    {{-- <footer>
        <div class="footer-container d-flex flex-column align-items-center">
            <div class="footer-about d-flex justify-content-around">
                <div class="footer-about-item-first">
                    <div class="footer-about-item-company">
                        <p class="footer-about-header">PT Teknologi Server Indonesia</p>
                        <p class="footer-about-content">
                            X-code (PT. Teknologi Server Indonesia) adalah perusahaan cyber security dan 
                            server yang berbadan hukum dari kota Yogyakarta, kantor kami ada 3 dengan 
                            kantor pusat di Kotagede Jogja, kantor research & development di minggiran jogja 
                            dan kantor perwakilan di jakarta berada di Kebayoran lama, Jakarta selatan.
                        </p>
                    </div>
                </div>
                <div class="footer-about-item-second">
                    <div class="footer-about-item-socialmedia">
                        <p class="footer-about-header">Media Sosial</p>
                    </div>
                </div>
                <div class="footer-about-item-third">
                    <div class="footer-about-item-company">
                        <p class="footer-about-header">Hubungi Kami</p>
                        <p class="footer-about-body">Whatsapp: +62 8580 3946 032</p>
                        <p class="footer-about-body">Telepon: 0822-6536-2553</p>
                        <p class="footer-about-body">Email: admin@xcodetraining.com</p>
                    </div>
                    <div class="footer-about-item-company">
                        <p class="footer-about-header">Kantor</p>
                        <p class="footer-about-content">Head Office : Jl. Kebun Raya Gg. Terate No. 29 Timur Gembira Loka Zoo (Lantai 2), Yogyakarta, Indonesia.</p>
                        <p class="footer-about-content">Satellite office : Minggiran MJ2 RT 58 RW 16, Suryodiningratan, Mantrijeron, Yogyakarta, Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="footer-copy text-center">
                <p class="mb-0">&copy; Copyright X-code - PT. Teknologi Server Indonesia, Yogyakarta, Indonesia. 2004 - 2024. All Rights Reserved</p>
            </div>
        </div>
    </footer> --}}

    <!-- js link -->
    <script src="{{ asset('js/script.js') }}"></script> 
    <script src="{{ asset('js/header.js') }}"></script>  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
