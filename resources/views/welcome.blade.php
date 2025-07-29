<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SMK Pesat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd 0%, #0099ff 100%);
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .sidebar a {
            color: #ffffffee;
            text-decoration: none;
            display: block;
            padding: 15px 25px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.1);
            border-left: 3px solid #fff;
            transform: translateX(5px);
        }
        .content {
            margin-left: 250px;
            padding: 2rem;
        }
        .navbar-custom {
            margin-left: 250px;
            background-color: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(222,226,230,0.5);
        }
        .card-custom {
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }
        .card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(255,255,255,0));
            z-index: 1;
        }
        .icon-large {
            font-size: 2.5rem;
            opacity: 0.9;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: 600;
            margin: 0;
        }
        .stats-label {
            font-size: 1rem;
            opacity: 0.9;
            margin: 0;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar position-fixed animate__animated animate__slideInLeft">
        <h4 class="text-center mb-4 fw-bold">SMK PESAT</h4>
        <div class="px-4 mb-4">
            <div class="d-flex align-items-center">
                <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="rounded-circle me-2" width="40">
                <div>
                    <small class="d-block">Welcome back,</small>
                    <strong>Administrator</strong>
                </div>
            </div>
        </div>
        <a href="#" class="active"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        <a href="#"><i class="fas fa-users me-2"></i> Data Guru</a>
        <a href="#"><i class="fas fa-building me-2"></i> Jurusan</a>
        <a href="#"><i class="fas fa-newspaper me-2"></i> Berita</a>
        <a href="#"><i class="fas fa-image me-2"></i> Galeri</a>
        <a href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand ms-3 fw-bold">
                <i class="fas fa-chart-line me-2 text-primary"></i>
                Dashboard Overview
            </span>
            <div class="ms-auto">
                <button class="btn btn-light rounded-circle">
                    <i class="fas fa-bell"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content mt-5 pt-4">
        <div class="container-fluid">
            <div class="row g-4 mb-4">
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="card card-custom bg-gradient" style="background: linear-gradient(45deg, #4e54c8, #8f94fb);">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="stats-label text-white">Total Guru</p>
                                    <h2 class="stats-number text-white">35</h2>
                                </div>
                                <div class="floating-icon">
                                    <i class="fas fa-user-tie icon-large text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                    <div class="card card-custom bg-gradient" style="background: linear-gradient(45deg, #11998e, #38ef7d);">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="stats-label text-white">Data Nilai</p>
                                    <h2 class="stats-number text-white">128</h2>
                                </div>
                                <div class="floating-icon">
                                    <i class="fas fa-file-alt icon-large text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                    <div class="card card-custom bg-gradient" style="background: linear-gradient(45deg, #FF8008, #FFC837);">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="stats-label text-white">Laporan Bulanan</p>
                                    <h2 class="stats-number text-white">12</h2>
                                </div>
                                <div class="floating-icon">
                                    <i class="fas fa-chart-bar icon-large text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="row g-4">
                <div class="col-12 animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <i class="fas fa-clock me-2 text-primary"></i>
                                Aktivitas Terkini
                            </h5>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                        <i class="fas fa-user-plus text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Guru Baru Ditambahkan</h6>
                                        <small class="text-muted">2 menit yang lalu</small>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                        <i class="fas fa-file-upload text-success"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Nilai Siswa Diperbarui</h6>
                                        <small class="text-muted">1 jam yang lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">
            <p class="text-muted text-center">© 2025 SMK Pesat - All rights reserved</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>