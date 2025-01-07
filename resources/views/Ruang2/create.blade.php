@extends('layouts.app')

@section('title', 'Create Asset Ruang 2')

@section('content')
<section class="asset-section">
    <nav class="breadcrumb">
        <a href="/" class="breadcrumb-item home">
            <span class="home-icon"><i class='bx bx-home-alt'></i></span>
        </a>
        <span class="breadcrumb-separator">></span>
        <a href="{{ url('/Ruang2') }}" class="breadcrumb-item">Ruang 2</a>
        <span class="breadcrumb-separator">></span>
        <a href="{{ url('/Ruang2/asset') }}" class="breadcrumb-item">Asset Data</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-item active">Create Data</span>
    </nav>
    <div class="container">
        <form id="createForm" action="{{ url('/Ruang2/store') }}" method="POST">
            @csrf
            <div class="form-data">
                <div class="left-column" style="flex: 1;">
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" id="ruangan" class="form-control" placeholder="Masukkan Ruangan" value="Ruang 2" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama-pc">Nama PC</label>
                        <input type="text" id="nama-pc" class="form-control" placeholder="Masukkan Nama PC" name="nama_pc" required>
                    </div>
                    <div class="form-group">
                        <label for="processor">Processor</label>
                        <input type="text" id="processor" class="form-control" placeholder="Masukkan Processor" name="processor" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM</label>
                        <select id="ram" class="form-control" name="ram" required>
                            <option value="">Pilih kapasitas RAM</option>
                            <option value="2GB">2GB</option>
                            <option value="4GB">4GB</option>
                            <option value="8GB">8GB</option>
                            <option value="16GB">16GB</option>
                            <option value="32GB">32GB</option>
                        </select>
                    </div>
                </div>
        
                <!-- Kolom Kanan -->
                <div class="right-column" style="flex: 1;">
                    <div class="form-group">
                        <label for="vga">VGA</label>
                        <input type="text" id="vga" class="form-control" placeholder="Masukkan VGA" name="vga" required>
                    </div>
                    <div class="form-group">
                        <label for="storage">Storage</label>
                        <input type="text" id="storage" class="form-control" placeholder="Masukkan Storage" name="kapasitas_penyimpanan" required>
                    </div>
                    <div class="form-group">
                        <label for="storage-type">Storage Type</label>
                        <select id="storage-type" class="form-control" name="tipe_penyimpanan" required>
                            <option value="">Pilih Tipe Penyimpanan</option>
                            <option value="hdd">HDD</option>
                            <option value="ssd">SSD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="monitor">Monitor</label>
                        <input type="text" id="monitor" class="form-control" placeholder="Masukkan Monitor" name="monitor" required>
                    </div>
                </div>
            </div>
        
            <div class="action-btn">
                <a class="cancel-btn" href="{{ url('/Ruang2/asset') }}">Cancel</a>        
                <button type="submit" class="add-btn" id="submitButton">Create</button>
            </div>
        </form>
    </div>
</section>

<script src="{{ asset('js/create.js') }}"></script> 
@endsection
