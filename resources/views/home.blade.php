<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klug - Kuliah di Luar Negeri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .hero-section {
            background-image: url('{{ asset('images/picgedung.png') }}');
            background-size: cover;
            background-position: center;
        }
        .custom-gradient {
            background-image: linear-gradient(to right, #46074E, #197BD0);
        }
        .hero-box {
            width: 622px; 
            height: 120px;
            padding: 1.5rem;
            border-radius: 0.5rem;
            background-image: linear-gradient(to right, rgba(70, 7, 78, 0.8), rgba(25, 123, 208, 0.8));
            box-shadow: 10px 10px 4px 0px rgba(0, 0, 0, 0.2);
        }
        .btn-custom-primary {
            width: 150px;
            height: 40px;
            background-color: #195395;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
            font-size: 13px;
            font-weight: 500;
            line-height: 16px;
            white-space: nowrap;
            transition: all 0.3s;
        }
        .btn-custom-primary:hover {
            filter: brightness(1.1);
            color: white;
        }
        .search-input {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 0;
            color: white;
        }
        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .search-input:focus {
            background-color: transparent;
            box-shadow: none;
            border-bottom-color: white;
            color: white;
        }
        
        /* ===== CSS UNTUK KARTU LAYANAN (SAMA PERSIS DENGAN SCREENSHOT) ===== */
        .service-card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.1);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
        }
        .service-card img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        .service-card .card-img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: linear-gradient(to right, rgba(70, 7, 78, 0.9), rgba(70, 7, 78, 0.1) 40%, rgba(70, 7, 78, 0) 70%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            color: white;
            opacity: 1;
        }
        .service-card .card-img-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 1.5rem;
            left: 1rem;
            width: 2px;
            background-color: white;
            opacity: 0.6;
        }
        .service-card .card-title {
            font-size: 20px;
            line-height: 24px;
            font-weight: 400;
            padding-left: 2rem;
            margin-bottom: 0;
        }
        

        .partner-logo-card {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px; 
            padding: 1.5rem; 
            border: 1px solid #e9ecef;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            transition: box-shadow 0.3s ease-in-out;
        }
        .partner-logo-card:hover {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .partner-logo-card img {
            max-height: 100%; 
            max-width: 100%;  
            height: auto;
            object-fit: contain;
        }
    

        .article-card {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            transition: box-shadow 0.3s ease-in-out;
            background-color: white;
            display: flex; 
            flex-direction: column; 
            height: 100%; 
        }
        .article-card:hover {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .article-card img {
            width: 100%; 
            height: 195px; 
            object-fit: cover; 
            border-bottom: 1px solid #e9ecef; 
        }
        .article-card .card-body {
            padding: 1rem;
            text-align: center; 
            flex-grow: 1; 
            display: flex;
            align-items: center; 
            justify-content: center; 
        }
        .article-card .card-title {
            color: #4A4A4A;
            font-size: 16px;
            line-height: 24px;
            font-weight: 400;
            margin-bottom: 0; 
        }
        

        .btn-artikel-lainnya {
            width: 200px;
            height: 45px;
            border-radius: 22.5px;
            background-color: transparent;
            color: #4A4A4A;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            border: none;
            padding: 0;
            transition: all 0.3s ease;
        }
        .btn-artikel-lainnya::before {
            content: '';
            position: absolute;
            z-index: -2;
            inset: 0;
            border-radius: 22.5px;
            border: 1px solid transparent;
            background: linear-gradient(to right, #46074E, rgba(25, 123, 208, 0.8)) border-box;
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
        .btn-artikel-lainnya:hover {
            color: #197BD0;
            background-color: rgba(25, 123, 208, 0.05);
        }
        
        /* CSS UNTUK TOMBOL "KIRIM PESAN"*/
        .btn-gradient-outline {
            width: 150px;
            height: 40px;
            border-radius: 22.5px;
            background-color: transparent;
            color: #4A4A4A;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            border: none;
            padding: 0;
            transition: all 0.3s ease;
        }
        .btn-gradient-outline::before {
            content: '';
            position: absolute;
            z-index: -2;
            inset: 0;
            border-radius: 22.5px;
            border: 1px solid transparent;
            background: linear-gradient(to right, #46074E, #197BD0) border-box;
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
        .btn-gradient-outline:hover {
            color: #197BD0;
            background-color: rgba(25, 123, 208, 0.05);
        }
        /* ======================================================== */

        .navbar-brand img {
            height: 30px;
            margin-right: 8px;
        }

        /* CSS BARU UNTUK BANNER KONSULTASI */
        .konsultasi-banner {
            background-image: linear-gradient(to right, #46074E, #197BD0 80%);
            border-radius: 6px;
            padding: 2rem 2.5rem;
        }
        .konsultasi-title {
            font-size: 20px;
            font-weight: 500;
            line-height: 34px;
        }
        .konsultasi-subtitle {
            font-size: 16px;
            font-weight: 300; 
            line-height: 24px;
            opacity: 0.9;
        }
        .btn-konsultasi {
            width: 230px;
            height: 45px;
            border-radius: 22.5px;
            border: 1px solid #FFFFFF;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: 400;
            transition: all 0.3s ease;
        }
        .btn-konsultasi:hover {
            background-color: white;
            color: #197BD0;
        }
        

        .navbar-nav .nav-link.active {
            position: relative;
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 6px; 
            left: 0.5rem; 
            right: 0.5rem; 
            height: 2px;
            background-color: white;
        }

        /* ===== CSS RESPONSIVE TAMBAHAN (INI BAGIAN PENTINGNYA) ===== */
        .hero-container-padding {
            /* Nilai padding-left 123px dari inline style Anda */
            padding-left: 123px;
        }
        
        @media (max-width: 991.98px) { /* Breakpoint LG (di bawah 992px) */
            .hero-container-padding {
                /* Reset padding di tablet dan mobile */
                padding-left: var(--bs-gutter-x, 0.75rem); 
            }

            .navbar-collapse .search-input {
                /* Pastikan garis bawah terlihat di menu mobile */
                border-bottom-color: rgba(255, 255, 255, 0.7) !important; 
            }
            .navbar-collapse .search-input:focus {
                border-bottom-color: white !important;
            }
        }

        @media (max-width: 767.98px) { /* Breakpoint MD (di bawah 768px) */
            main.hero-section {
                /* vh-100 bisa terlalu tinggi di mobile, kita ganti ke min-height */
                height: auto;
                min-height: 70vh; 
                padding-bottom: 3rem !important; /* Override inline style 86px */
            }

            .hero-box {
                /* Ganti width & height fixed menjadi auto */
                width: 100%;
                height: auto;
            }

            .hero-box h1 {
                /* Sesuaikan ukuran font untuk mobile */
                font-size: 1.2rem; /* Sedikit lebih kecil */
                line-height: 1.5;
            }

            #tentang-kami-simple p {
                font-size: 16px; /* Kecilkan font paragraf */
                line-height: 28px;
            }
            
            .konsultasi-banner {
                padding: 2rem 1.5rem;
            }
            .konsultasi-title {
                font-size: 18px;
                line-height: 1.5;
            }
            .konsultasi-subtitle {
                font-size: 15px;
            }

            #artikel-terbaru .row {
                --bs-gutter-y: 40px; /* Kurangi gap antar artikel di mobile */
            }
        }
        /* ==================================== */
       
    </style>
</head>
<body class="antialiased">
    <div class="position-relative">
        <header id="header" class="sticky-top shadow-lg">
            <nav class="navbar navbar-expand-lg navbar-dark custom-gradient">
                <div class="container">
                    <a class="navbar-brand fw-bold fs-3 d-flex align-items-center" href="{{ url('/') }}">
                        <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo">
                        <span>Inaklug</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/layanan-kami') }}">Layanan Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="#artikel-terbaru">Artikel</a></li>
                            <li class="nav-item"><a class="nav-link" href="#hubungi-kami">Hubungi Kami</a></li>
                        </ul>
                         <div class="d-lg-flex align-items-lg-center">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0 text-white opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                                </span>
                                <input type="text" class="form-control search-input" placeholder="Ketik pencarian">
                            </div>
                            <a href="#" class="btn btn-custom-primary rounded-pill d-flex align-items-center justify-content-center ms-lg-4 mt-3 mt-lg-0 text-uppercase">DAFTAR ON-LINE</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main id="home" class="hero-section vh-100 d-flex align-items-end" style="padding-bottom: 86px;">
            <div class="container hero-container-padding">
                <div class="hero-box d-flex align-items-center">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-start align-items-md-center w-100">
                        <h1 class="text-white fs-4 fw-medium lh-sm mb-3 mb-md-0">
                            INGIN KULIAH DAN BERKARIR <br> DI LUAR NEGERI?
                        </h1>
                        <button class="btn btn-outline-light rounded-pill d-flex align-items-center text-nowrap py-2 px-4">
                            <span>SELENGKAPNYA</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down ms-2" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708 .708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <section id="tentang-kami-simple" class="bg-white py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h2 class="text-secondary text-uppercase fw-semibold" style="letter-spacing: 0.15em;">
                            Tentang Kami
                        </h2>
                        <p class="mt-4 fw-light" style="color: #4A4A4A; font-size: 18px; line-height: 30px;">
                            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
                        </p>
                        {{-- GARIS BAWAAN DI SINI TELAH DIHAPUS --}}
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-white d-flex justify-content-center">
            <div style="width: 1140px; max-width: 90%; height: 1px; background-color: #EAEAEA; margin: 0 auto;"></div>
        </div>

        <section id="layanan-kami" class="bg-white py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-uppercase fw-semibold" style="color: #4A4A4A; font-size: 24px; line-height: 29px; letter-spacing: 0.15em;">
                        Layanan Kami
                    </h2>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-white service-card">
                            <img src="{{ asset('images/bachelor.png') }}" class="card-img" alt="Studi S1">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Studi S1 - Bachelor</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="card text-white service-card">
                            <img src="{{ asset('images/master.png') }}" class="card-img" alt="Studi S2">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Studi S2 - Master</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="card text-white service-card">
                            <img src="{{ asset('images/phd.jpg') }}" class="card-img" alt="Studi S3">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Studi S3 - Ph.D</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="card text-white service-card">
                            <img src="{{ asset('images/kursus.png') }}" class="card-img" alt="Kursus Bahasa Asing">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Kursus Bahasa Asing</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="card text-white service-card">
                            <img src="{{ asset('images/studytour.png') }}" class="card-img" alt="Study Tour">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Study Tour</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="card text-white service-card">
                            <img src="{{ asset('images/ausbildung.jpg') }}" class="card-img" alt="Ausbildung">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Ausbildung</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-white d-flex justify-content-center">
            <div style="width: 1140px; max-width: 90%; height: 1px; background-color: #EAEAEA; margin: 0 auto;"></div>
        </div>
        
        <section id="mitra-kami" class="bg-white py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-uppercase fw-semibold" style="color: #4A4A4A; font-size: 24px; line-height: 29px; letter-spacing: 0.15em;">
                        Mitra Kami
                    </h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-logo-card">
                            <img src="{{ asset('images/aviation.jpg') }}" class="img-fluid" alt="Logo Mitra 1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-logo-card">
                            <img src="{{ asset('images/adrew.png') }}" class="img-fluid" alt="Logo Mitra 2">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-logo-card">
                            <img src="{{ asset('images/htw.png') }}" class="img-fluid" alt="Logo Mitra 3">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-logo-card">
                            <img src="{{ asset('images/studygroup.png') }}" class="img-fluid" alt="Logo Mitra 4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="konsultasi-" class="bg-white py-5">
            <div class="container" style="max-width: 860px;">
                <div class="konsultasi-banner text-white">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 text-center text-md-start">
                            <h3 class="konsultasi-title text-uppercase">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
                            <p class="konsultasi-subtitle mb-0">Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
                        </div>
                        <div class="col-md-5 text-center text-md-end mt-3 mt-md-0">
                            <a href="#" class="btn btn-konsultasi d-inline-flex align-items-center justify-content-center">
                                MULAI KONSULTASI
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="artikel-terbaru" class="bg-white py-5">
            <div class="container" style="max-width: 750px;">
                <div class="text-center mb-5">
                    <h2 class="text-uppercase fw-semibold" style="color: #4A4A4A; font-size: 24px; line-height: 29px; letter-spacing: 0.15em;">
                        ARTIKEL TERBARU
                    </h2>
                </div>
                <div class="row" style="--bs-gutter-x: 30px; --bs-gutter-y: 70px;">
                    <div class="col-md-6">
                        <div class="card article-card">
                            <img src="{{ asset('images/studijerman.png') }}" class="card-img-top" alt="Artikel 1">
                            <div class="card-body">
                                <h5 class="card-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card article-card">
                            <img src="{{ asset('images/korona.png') }}" class="card-img-top" alt="Artikel 2">
                            <div class="card-body">
                                <h5 class="card-title">Uni Eropa Menghadapi Virus Korona</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card article-card">
                            <img src="{{ asset('images/bahasajerman.png') }}" class="card-img-top" alt="Artikel 3">
                            <div class="card-body">
                                <h5 class="card-title">Belajar Bahasa Jerman Bersama Goethe-Institut</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card article-card">
                            <img src="{{ asset('images/gatescambride.png') }}" class="card-img-top" alt="Artikel 4">
                            <div class="card-body">
                                <h5 class="card-title">Apa Itu Gates Cambridge? Yuk Cari Tahu</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn-artikel-lainnya">LAINNYA</a>
                </div>
            </div>
        </section>

        <div class="bg-white d-flex justify-content-center">
            <div style="width: 1140px; max-width: 90%; height: 1px; background-color: #EAEAEA; margin: 0 auto;"></div>
        </div>
        
        <section id="hubungi-kami" class="bg-white py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-uppercase fw-semibold mb-4" style="color: #4A4A4A; font-size: 24px; line-height: 29px; letter-spacing: 0.15em;">
                        Hubungi Kami
                    </h2>
                    <h4 class="text-uppercase fw-semibold text-secondary" style="font-size: 18px; letter-spacing: 0.1em;">
                        Kantor Pusat
                    </h4>
                    <p class="text-muted mt-3" style="line-height: 1.8;">
                        Gedung ir. H. M. Suseno - JL. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
                        Phone : 085286754052 <br>
                    </p>
                    <div class="mt-4 d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3">
                        <a href="#" class="btn custom-gradient rounded-pill text-white px-4 py-2 d-inline-flex align-items-center justify-content-center" style="width: 150px; height: 40px;">LOKASI KAMI</a>
                        <a href="#" class="btn btn-gradient-outline">KIRIM PESAN</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="custom-gradient text-white text-center d-flex align-items-center justify-content-center" style="height: 80px;">
            <div class="container">
                <small>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</small>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>