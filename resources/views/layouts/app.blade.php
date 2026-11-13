<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StokCerdas')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f3f6fa;
            font-family: Arial, sans-serif;
            color: #1f2937;
        }

        .navbar {
            background-color: #193d59;
            padding: 15px 25px;
        }

        .navbar-brand {
            color: white !important;
            font-size: 26px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 17px;
            margin-left: 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #a9d6ff !important;
        }

        main {
            padding-top: 35px;
            padding-bottom: 40px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        footer {
            background-color: #193d59;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('beranda') }}">
                StokCerdas
            </a>

            <button class="navbar-toggler bg-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#menuNavbar"
                aria-controls="menuNavbar" aria-expanded="false"
                aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}">Data Barang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('analisis.index') }}">Analisis Stok</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rekomendasi.index') }}">Rekomendasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panduan') }}">Panduan</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p class="mb-0">
            © 2026 StokCerdas - Sistem Informasi Analisis Persediaan Barang
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
