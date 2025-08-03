<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin - SMK Pesat</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
  <style>
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
<body class="bg-[#f0f2f5] font-[Poppins]">

  <!-- Sidebar -->
  <div class="w-[250px] min-h-screen bg-gradient-to-br from-blue-600 to-sky-500 text-white fixed top-0 left-0 pt-[60px] shadow-lg z-[1000] animate__animated animate__slideInLeft">
    <h4 class="text-center mb-4 font-bold text-lg">SMK PESAT</h4>
    <div class="px-6 mb-4">
      <div class="flex items-center">
        <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="rounded-full mr-3 w-10 h-10" />
        <div>
          <small class="block">Welcome back,</small>
          <strong>Administrator</strong>
        </div>
      </div>
    </div>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
    </a>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-users mr-2"></i> Data Guru
    </a>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-building mr-2"></i> Jurusan
    </a>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-newspaper mr-2"></i> Berita
    </a>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-image mr-2"></i> Galeri
    </a>
    <a href="#" class="block px-6 py-3 border-l-4 border-transparent hover:bg-white/10 hover:border-white transition-all duration-300 hover:translate-x-1 text-white/90">
      <i class="fas fa-sign-out-alt mr-2"></i> Logout
    </a>
  </div>

  <!-- Navbar -->
  <nav class="fixed top-0 left-[250px] right-0 bg-white/90 backdrop-blur border-b border-gray-200 z-50">
    <div class="flex items-center justify-between px-6 py-4">
      <span class="font-bold text-lg text-gray-800">
        <i class="fas fa-chart-line text-blue-600 mr-2"></i>
        Dashboard Overview
      </span>
      <button class="btn bg-gray-100 rounded-full w-10 h-10 flex items-center justify-center">
        <i class="fas fa-bell"></i>
      </button>
    </div>
  </nav>

  <!-- Content -->
  <div class="ml-[250px] mt-[80px] p-8">
    <div class="grid md:grid-cols-3 gap-6 mb-8">
      <div class="animate__animated animate__fadeInUp">
        <div class="relative rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl p-6 text-white" style="background: linear-gradient(45deg, #4e54c8, #8f94fb);">
          <div class="flex justify-between items-center relative z-10">
            <div>
              <p class="text-sm opacity-90">Total Guru</p>
              <h2 class="text-4xl font-semibold">35</h2>
            </div>
            <div class="floating-icon">
              <i class="fas fa-user-tie text-4xl opacity-90"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="animate__animated animate__fadeInUp animate__delay-1s">
        <div class="relative rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl p-6 text-white" style="background: linear-gradient(45deg, #11998e, #38ef7d);">
          <div class="flex justify-between items-center relative z-10">
            <div>
              <p class="text-sm opacity-90">Data Nilai</p>
              <h2 class="text-4xl font-semibold">128</h2>
            </div>
            <div class="floating-icon">
              <i class="fas fa-file-alt text-4xl opacity-90"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="animate__animated animate__fadeInUp animate__delay-2s">
        <div class="relative rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl p-6 text-white" style="background: linear-gradient(45deg, #FF8008, #FFC837);">
          <div class="flex justify-between items-center relative z-10">
            <div>
              <p class="text-sm opacity-90">Laporan Bulanan</p>
              <h2 class="text-4xl font-semibold">12</h2>
            </div>
            <div class="floating-icon">
              <i class="fas fa-chart-bar text-4xl opacity-90"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="animate__animated animate__fadeInUp animate__delay-3s">
      <div class="bg-white rounded-xl shadow-lg p-6">
        <h5 class="text-lg font-semibold mb-4 text-gray-700">
          <i class="fas fa-clock mr-2 text-blue-600"></i>
          Aktivitas Terkini
        </h5>
        <div class="divide-y divide-gray-100">
          <div class="flex items-center py-4">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
              <i class="fas fa-user-plus text-blue-600"></i>
            </div>
            <div>
              <h6 class="font-medium">Guru Baru Ditambahkan</h6>
              <small class="text-gray-500">2 menit yang lalu</small>
            </div>
          </div>
          <div class="flex items-center py-4">
            <div class="bg-green-100 p-3 rounded-full mr-4">
              <i class="fas fa-file-upload text-green-600"></i>
            </div>
            <div>
              <h6 class="font-medium">Nilai Siswa Diperbarui</h6>
              <small class="text-gray-500">1 jam yang lalu</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-8 border-gray-200">
    <p class="text-center text-sm text-gray-500">© 2025 SMK Pesat - All rights reserved</p>
  </div>

</body>
</html>
