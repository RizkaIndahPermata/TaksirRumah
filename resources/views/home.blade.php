@extends('layouts.app')

@section('title', 'Home | TaksirRumah')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <img src="{{ asset('images/homeimages.png') }}" alt="Hero Image">
    <div class="hero-text">MULAI TAKSIR HARGA UNTUK RUMAH IMPIANMU</div>
</div>

<!-- Form Prediksi -->
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3 class="text-center">Prediksi Harga Rumah</h3>
        <form>
            <div class="mb-3">
                <label>Luas Rumah (m²)</label>
                <input type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label>Jumlah Kamar Tidur</label>
                <input type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label>Jumlah Kamar Mandi</label>
                <input type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label>Pilih Wilayah</label>
                <select class="form-control">
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Predict Price</button>
        </form>
    </div>
</div>

<!-- Hasil Prediksi -->
<div class="container mt-4">
    <div class="alert alert-primary text-center">
        <h4>Hasil Prediksi</h4>
        <p>Perkiraan Harga: Rpxxx.xxx.xxx</p>
    </div>
</div>

<!-- Grafik -->
<div class="container text-center">
    <h5>Grafik</h5>
    <img src="{{ asset('images/graph-placeholder.png') }}" width="300">
</div>
@endsection
