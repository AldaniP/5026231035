<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aldani Prasetyo : 5026231035</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        xintegrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google Fonts - Poppins (untuk tampilan teks yang lebih modern) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Gaya Kustom */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .custom-jumbotron {
            background: linear-gradient(to right, #007bff, #6f42c1);
            color: white;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .custom-jumbotron h1 {
            font-size: 2.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .custom-jumbotron p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .custom-navbar {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        .custom-navbar .nav-link {
            color: #495057;
            padding: 0.75rem 1.25rem;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }

        .custom-navbar .nav-link:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .custom-navbar .nav-link .fas {
            margin-right: 0.5rem;
        }

        .custom-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }

        /* Responsiveness untuk navbar */
        @media (max-width: 575.98px) {
            .custom-navbar .navbar-nav {
                flex-direction: column;
                width: 100%;
            }
            .custom-navbar .nav-item {
                margin-bottom: 0.5rem;
                width: 100%;
            }
            .custom-navbar .nav-link {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="custom-jumbotron">
        <h1>5026231035 : Aldani Prasetyo</h1>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm custom-navbar container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend"></i> All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai"></i> Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penggaris"></i> Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></i> EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan"></i> Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></i> Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></i> Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container custom-container">
        @yield('content')
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (diperlukan untuk fitur Bootstrap seperti navbar-toggler) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
