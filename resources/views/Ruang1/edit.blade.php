@extends('layouts.app')

@section('title', 'Edit Asset Ruang 1')

@section('content')
<section class="asset-section">
    <nav class="breadcrumb">
        <a href="/" class="breadcrumb-item home">
            <span class="home-icon"><i class='bx bx-home-alt'></i></span>
        </a>
        <span class="breadcrumb-separator">></span>
        <a href="/" class="breadcrumb-item">Ruang 2</a>
        <span class="breadcrumb-separator">></span>
        <a href="{{ url('/Ruang2/asset') }}" class="breadcrumb-item">Asset Data</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-item active">Edit</span>
    </nav>
    <div class="container">
        <form method="POST" id="editForm" action="{{ url('/Ruang1/edit/'.$asset->id) }}">
            @csrf
            @method('PUT')
            <div class="form-data">
                <div class="left-column" style="flex: 1;">
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" id="ruangan" class="form-control" placeholder="Masukkan Ruangan" value="{{ $ruangan->nama_ruangan }}" readonly>
                    </div>                         
                    <div class="form-group">
                        <label for="nama-pc">Nama PC</label>
                        <input type="text" id="nama-pc" class="form-control" placeholder="Masukkan Nama PC" value="{{ $asset->nama_pc }}" name="nama_pc" required>
                    </div>
                    <div class="form-group">
                        <label for="processor">Processor</label>
                        <input type="text" id="processor" class="form-control" placeholder="Masukkan Processor" value="{{ $asset->processor }}" name="processor" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM</label>
                        <select id="ram" class="form-control" name="ram" required>
                            <option value="2GB" {{ $asset->ram == '2GB' ? 'selected' : '' }}>2GB</option>
                            <option value="4GB" {{ $asset->ram == '4GB' ? 'selected' : '' }}>4GB</option>
                            <option value="8GB" {{ $asset->ram == '8GB' ? 'selected' : '' }}>8GB</option>
                            <option value="16GB" {{ $asset->ram == '16GB' ? 'selected' : '' }}>16GB</option>
                            <option value="32GB" {{ $asset->ram == '32GB' ? 'selected' : '' }}>32GB</option>
                        </select>
                    </div>
                </div>
                <div class="right-column" style="flex: 1;">
                    <div class="form-group">
                        <label for="vga">VGA</label>
                        <input type="text" id="vga" class="form-control" placeholder="Masukkan VGA" value="{{ $asset->vga }}" name="vga" required>
                    </div>
                    <div class="form-group">
                        <label for="storage">Storage</label>
                        <input type="text" id="storage" class="form-control" placeholder="Masukkan Storage" value="{{ $asset->kapasitas_penyimpanan }}" name="kapasitas_penyimpanan" required>
                    </div>
                    <div class="form-group">
                        <label for="storage-type">Storage Type</label>
                        <select id="storage-type" class="form-control" name="tipe_penyimpanan" required>
                            <option value="hdd" {{ $asset->tipe_penyimpanan == 'hdd' ? 'selected' : '' }}>HDD</option>
                            <option value="ssd" {{ $asset->tipe_penyimpanan == 'ssd' ? 'selected' : '' }}>SSD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="monitor">Monitor</label>
                        <input type="text" id="monitor" class="form-control" placeholder="Masukkan Monitor" value="{{ $asset->monitor }}" name="monitor" required>
                    </div>
                </div>
            </div>
            <div class="action-btn">
                <a class="cancel-btn" href="{{ url('/Ruang1/asset') }}">Cancel</a>
                <button type="submit" class="add-btn">Edit</button>
            </div>
        </form>            
    </div>
</section>

<script src="{{ asset('js/edit.js') }}"></script> 
@endsection