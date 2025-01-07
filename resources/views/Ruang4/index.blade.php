@extends('layouts.app')

@section('title', 'Ruang 4')

@section('content')
<section class="hero">
    <div class="hero-text">
        <h5 data-aos="fade-right" data-aos-duration="1400">Selamat Datang!!!</h5>
        <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Ruang 4</h1>
        <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Ruangan ini dipakai oleh pemagang/PKL untuk melakukan pekerjaan</p>

        <div class="main-hero" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">
            <a href="{{ url('/Ruang4/asset') }}" class="btn">View Assets</a>
        </div>
    </div>
    <div class="hero-img" data-aos="zoom-in" data-aos-duration="1400">
        <img src="{{ asset('img/ruang1.png') }}" alt="">
    </div>
</section>
@endsection