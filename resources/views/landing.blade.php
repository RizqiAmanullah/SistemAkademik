<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kuisioner - Universitas Maritim Raja Ali Haji</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 6rem 2rem;
            text-align: center;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: #667eea;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #667eea;
        }

        .features {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h3 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .feature-card h4 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
        }

        .about {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about h3 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #333;
        }

        .about p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .roles {
            background: white;
            padding: 4rem 2rem;
        }

        .roles-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .roles h3 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #333;
        }

        .roles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .role-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
        }

        .role-card h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .role-card p {
            opacity: 0.9;
        }

        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .features h3,
            .about h3,
            .roles h3 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <h1>🎓 Kuisioner UMRAH</h1>
        <div>
            @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Sistem Kuisioner Universitas Maritim Raja Ali Haji</h2>
        <p>Platform untuk mengumpulkan feedback dan evaluasi pembelajaran dari mahasiswa</p>
        <div class="cta-buttons">
            <a href="{{ route('login') }}" class="btn btn-primary">Mulai Login</a>
            <a href="#features" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h3>Fitur Utama</h3>
        <div class="feature-grid">
            <div class="feature-card">
                <h4>📋 Kelola Kuisioner</h4>
                <p>Admin dapat membuat periode kuisioner baru, mengatur pertanyaan, dan mengelola semua aspek survey dengan mudah.</p>
            </div>
            <div class="feature-card">
                <h4>📊 Analisis Data</h4>
                <p>Dapatkan insight mendalam tentang feedback mahasiswa dengan dashboard analytics yang komprehensif dan laporan detail.</p>
            </div>
            <div class="feature-card">
                <h4>👥 Multi-Role Access</h4>
                <p>Sistem mendukung berbagai peran: Admin, Kaprodi, Pimpinan, dan Mahasiswa dengan permission yang terstruktur.</p>
            </div>
            <div class="feature-card">
                <h4>📱 Responsive Design</h4>
                <p>Interface yang user-friendly dan responsive, dapat diakses dari berbagai perangkat (desktop, tablet, mobile).</p>
            </div>
            <div class="feature-card">
                <h4>🔒 Keamanan Data</h4>
                <p>Proteksi data dengan enkripsi password yang aman, authentication, dan authorization yang ketat.</p>
            </div>
            <div class="feature-card">
                <h4>📈 Pelaporan</h4>
                <p>Generate laporan komprehensif tentang hasil kuisioner per prodi, fakultas, atau periode tertentu.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <h3>Tentang Aplikasi</h3>
            <p>
                Aplikasi Kuisioner merupakan sistem terintegrasi untuk mengelola feedback dan evaluasi pembelajaran 
                di Universitas Maritim Raja Ali Haji. Platform ini dirancang untuk memfasilitasi pengumpulan data 
                dari mahasiswa secara terstruktur dan efisien.
            </p>
            <p>
                Dengan aplikasi ini, berbagai stakeholder mulai dari admin, kaprodi, hingga mahasiswa dapat berpartisipasi 
                aktif dalam proses evaluasi pembelajaran untuk meningkatkan kualitas pendidikan.
            </p>
        </div>
    </section>

    <!-- Roles Section -->
    <section class="roles">
        <div class="roles-content">
            <h3>Peran Pengguna</h3>
            <div class="roles-grid">
                <div class="role-card">
                    <h4>Admin</h4>
                    <p>Mengelola semua data master seperti fakultas, jurusan, prodi, mahasiswa, dan user</p>
                </div>
                <div class="role-card">
                    <h4>Kaprodi</h4>
                    <p>Mengelola periode kuisioner, pertanyaan, dan melihat hasil jawaban mahasiswa</p>
                </div>
                <div class="role-card">
                    <h4>Pimpinan</h4>
                    <p>Melihat summary dan laporan hasil kuisioner dari semua prodi di fakultas</p>
                </div>
                <div class="role-card">
                    <h4>Mahasiswa</h4>
                    <p>Mengisi kuisioner yang tersedia sesuai dengan periode dan program studi mereka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Universitas Maritim Raja Ali Haji. Aplikasi Kuisioner v1.0</p>
    </footer>
</body>
</html>
