@extends('layouts.app')

@section('title', 'Home | TaksirRumah')

@section('content')

    <!-- Hero Section -->
    <div class="container text-center hero-section">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 id="typingText" class="fw-bold"></h1>
            </div>
        </div>
    </div>


    <!-- Form Prediksi -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card p-4 shadow">
                <h3 class="text-center">Prediksi Harga Rumah</h3>
                <form>
                    <div class="mb-3">
                        <label>Luas Tanah (m²)</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Luas Bangunan (m²)</label>
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
                        <label>Jumlah Lantai</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Pilih Wilayah</label>
                        <select class="form-control">
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Yogyakarta</option>
                            <option>Surabaya</option>
                            <option>Bali</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Predict Price</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Hasil Prediksi -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-6">
                <div class="alert alert-primary text-center">
                    <h4>Hasil Prediksi</h4>
                    <p>Perkiraan Harga: Rpxxx.xxx.xxx</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Menampilkan Grafik -->
    <div class="container text-center">
        <h5>Grafik</h5>
        <img src="{{ asset('images/graph-placeholder.png') }}" class="img-fluid" width="300">
    </div>

    <style>
        #typingText {
            font-size: 2rem;
            white-space: nowrap;
            overflow: hidden;
            border-right: .15em solid orange;
            width: fit-content;
            margin: 0 auto;
        }

        .hero-section {
            padding-top: 100px;
        }

        @media (max-width: 910px) {
            #typingText {
                font-size: 1.5rem;
                white-space: normal;
                word-break: break-word;
                border-right: none;
                animation: none;
            }
        }
    </style>

    <script>
        const text = "MULAI TAKSIR HARGA UNTUK RUMAH IMPIANMU";
        const typingElement = document.getElementById("typingText");
        let index = 0;
        let isDeleting = false;

        function type() {
            if (isDeleting) {
                typingElement.textContent = text.substring(0, index--);
            } else {
                typingElement.textContent = text.substring(0, index++);
            }

            if (!isDeleting && index === text.length) {
                setTimeout(() => isDeleting = true, 1000);
            } else if (isDeleting && index === 0) {
                isDeleting = false;
            }

            const speed = isDeleting ? 60 : 100;
            setTimeout(type, speed);
        }

        document.addEventListener("DOMContentLoaded", type);
    </script>

@endsection
