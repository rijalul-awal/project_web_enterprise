<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Klug</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Ubuntu', sans-serif; }
        .custom-gradient { background-image: linear-gradient(to right, #46074E, #197BD0); }

        /* ===== CSS UNTUK TOMBOL DAFTAR ON-LINE (DITAMBAHKAN) ===== */
        .btn-custom-primary { 
            width: 150px; 
            height: 40px; 
            background-color: #195395; 
            color: white; 
            border: 1px solid rgba(255, 255, 255, 0.2); 
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
        /* ======================================================= */

        .search-input { background-color: transparent; border: none; border-bottom: 1px solid rgba(255, 255, 255, 0.4); border-radius: 0; color: white; }
        .search-input::placeholder { color: rgba(255, 255, 255, 0.7); }
        .search-input:focus { background-color: transparent; box-shadow: none; border-bottom-color: white; color: white; }

        .btn-layanan-kami {
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
        .btn-layanan-kami::before {
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
        .btn-layanan-kami:hover {
            color: #197BD0;
            background-color: rgba(25, 123, 208, 0.05);
        }
        /* ===== CSS BARU UNTUK LOGO HEADER ===== */
        .navbar-brand img {
            height: 30px;
            margin-right: 8px;
        }

        /* ===== CSS UNTUK TOMBOL KIRIM PESAN ===== */
        .btn-gradient-outline {
            width: 150px;
            height: 40px;
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
        .btn-gradient-outline::before {
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
        .btn-gradient-outline:hover {
            color: #197BD0;
            background-color: rgba(25, 123, 208, 0.05);
        }
        /* ======================================================== */

        /* ===== CSS BARU UNTUK GARIS BAWAH NAVIGASI AKTIF ===== */
        .navbar-nav .nav-link.active {
            position: relative;
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 6px; /* Jarak garis dari teks */
            left: 0.5rem; /* Menyesuaikan padding default nav-link */
            right: 0.5rem; /* Menyesuaikan padding default nav-link */
            height: 2px;
            background-color: white;
        }
        /* =================================================== */
    </style>
</head>
<body class="antiasaed">
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
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/layanan-kami') }}">Layanan Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#hubungi-kami">Hubungi Kami</a></li>
                        </ul>
                         
                        <div class="d-flex align-items-center">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0 text-white opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                                </span>
                                <input type="text" class="form-control search-input" placeholder="Ketik pencarian">
                            </div>
                            <a href="#" class="btn btn-custom-primary rounded-pill d-flex align-items-center justify-content-center ms-4 text-uppercase">DAFTAR ON-LINE</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <div class="position-relative" style="height: 500px; background-image: url('{{ asset('images/studytour.png') }}'); background-size: cover; background-position: center;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: linear-gradient(to right, rgba(70, 7, 78, 0.9) 0%, rgba(70, 7, 78, 0.7) 30%, transparent 60%);"></div>
                
                <div class="position-relative h-100 d-flex align-items-end">
                    <div class="container pb-4">
                        <h1 class="text-white text-uppercase fw-medium" style="font-size: 36px; letter-spacing: 0.1em;">Tentang Kami</h1>
                    </div>
                </div>
            </div>

            <div class="bg-white">
                <div class="container py-5" style="max-width: 960px;">
                    <div>
                        <h2 class="fw-semibold text-uppercase mb-4" style="color: #4A4A4A; font-size: 24px; letter-spacing: 0.15em;">Profil</h2>
                        <p class="fw-light" style="color: #4A4A4A; font-size: 16px; line-height: 28px; max-width: 896px;">
                            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
                        </p>
                    </div>

                    <div class="row mt-5 g-5">
                        <div class="col-md-6 text-start">
                            <img src="{{ asset('images/visi.png') }}" alt="Visi INAKLUG" class="img-fluid rounded" style="border-radius: 6px !important; box-shadow: 0 .25rem .75rem rgba(0,0,0,.08);">
                            <h3 class="fs-4 fw-semibold text-uppercase mt-4" style="letter-spacing: 0.1em;">VISI</h3>
                            <p class="fw-light" style="color: #4A4A4A; font-size: 16px; line-height: 28px;">
                                Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional
                            </p>
                        </div>
                        <div class="col-md-6 text-start">
                            <img src="{{ asset('images/misi.png') }}" alt="Misi INAKLUG" class="img-fluid rounded" style="border-radius: 6px !important; box-shadow: 0 .25rem .75rem rgba(0,0,0,.08);">
                            <h3 class="fs-4 fw-semibold text-uppercase mt-4" style="letter-spacing: 0.1em;">MISI</h3>
                            <p class="fw-light" style="color: #4A4A4A; font-size: 16px; line-height: 28px;">
                                Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi di lebih dari 25 negara maju di dunia dengan layanan yang profesional.
                            </p>
                             <p class="fw-light mt-3" style="color: #4A4A4A; font-size: 16px; line-height: 28px;">
                                Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari berbagai aspek, baik aspek sosial, budaya, maupun pendidikan.
                            </p>
                        </div>
                    </div>

                    <div class="text-center mt-5 pt-4">
                        <a href="{{ url('/') }}#layanan-kami" class="btn-layanan-kami">Layanan Kami</a>
                    </div>
                </div>
            </div>
        </section>

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
                    <div class="mt-4 d-flex justify-content-center gap-3">
                        <a href="#" class="btn custom-gradient rounded-pill text-white px-4 py-2 d-inline-flex align-items-center justify-content-center" style="width: 150px; height: 40px;">LOKASI KAMI</a>
                        <a href="#" class="btn btn-gradient-outline">KIRIM PESAN</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="custom-gradient text-white text-center py-4">
            <div class="container">
                <small>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</small>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>