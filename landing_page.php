<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌏WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color: #28a745;
        --secondary-color: #218838;
        --dark-color: #343a40;
        --light-color: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        scroll-behavior: smooth;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white !important;
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
        font-size: 1.5rem;
    }

    .hero-section {
        background-color: #218838;
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .btn-worldgreen {
        background-color: var(--primary-color);
        color: white;
        padding: 10px 25px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn-worldgreen:hover {
        background-color: var(--secondary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        position: relative;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--dark-color);
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--primary-color);
    }

    .about-section {
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .company-carousel {
        padding: 80px 0;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .testimonial-section {
        padding: 100px 0;
        background-color: var(--dark-color);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .testimonial-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 30px;
        color: var(--dark-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        height: 100%;
    }

    .testimonial-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--primary-color);
        margin-bottom: 15px;
    }

    .rating {
        color: #ffc107;
        margin-bottom: 15px;
    }

    .feature-box {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 70px 0 0;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .copyright {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Membangun Masa Depan yang Lebih Hijau</h1>
            <p class="lead mb-5">WorldGreen memberikan solusi berkelanjutan untuk bisnis dan masyarakat dalam mencapai
                tujuan lingkungan</p>
            <a href="#about" class="btn btn-worldgreen btn-lg me-3">Pelajari Lebih Lanjut</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Kontak Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">Tentang WorldGreen</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Tentang WorldGreen" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Misi Kami untuk Lingkungan yang Lebih Baik</h3>
                    <p>WorldGreen didirikan pada tahun 2010 dengan visi untuk menciptakan solusi ramah lingkungan yang
                        praktis dan terjangkau bagi bisnis dan individu. Kami percaya bahwa setiap langkah kecil menuju
                        keberlanjutan dapat membuat perbedaan besar bagi planet kita.</p>
                    <p>Dengan tim ahli yang berdedikasi, kami telah membantu lebih dari 500 perusahaan mengurangi jejak
                        karbon mereka dan mengadopsi praktik bisnis yang lebih berkelanjutan. Produk dan layanan kami
                        telah diakui secara internasional untuk inovasi dan efektivitasnya.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4>Berkelanjutan</h4>
                                <p>Solusi yang mendukung kelestarian lingkungan untuk generasi mendatang</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4>Inovatif</h4>
                                <p>Teknologi terbaru untuk efisiensi energi dan pengelolaan sumber daya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Carousel -->
    <section class="company-carousel" id="company">
        <div class="container">
            <h2 class="text-center section-title">Galeri Perusahaan</h2>
            <div id="companyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="d-block w-100" alt="Fasilitas WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Fasilitas Produksi Ramah Lingkungan</h5>
                            <p>Pabrik kami menggunakan 100% energi terbarukan dengan sistem daur ulang air terintegrasi
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="d-block w-100" alt="Tim WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Tim Profesional yang Berdedikasi</h5>
                            <p>Lebih dari 200 ahli lingkungan bekerja untuk menciptakan solusi berkelanjutan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="d-block w-100" alt="Proyek WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Proyek Penghijauan Global</h5>
                            <p>Kami telah menanam lebih dari 1 juta pohon di 15 negara berbeda</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <h2 class="text-center section-title text-white">Apa Kata Klien Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimoni 1"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"WorldGreen membantu perusahaan kami mengurangi limbah hingga 40% dalam
                            waktu 6 bulan. Solusi mereka praktis dan hasilnya melebihi ekspektasi."</p>
                        <h5 class="text-center mt-3">Sarah Johnson</h5>
                        <p class="text-muted text-center">CEO GreenTech Solutions</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Testimoni 2"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Layanan konsultasi WorldGreen sangat profesional. Mereka tidak hanya
                            memberikan solusi tetapi juga pelatihan untuk tim kami. Sangat direkomendasikan!"</p>
                        <h5 class="text-center mt-3">Michael Chen</h5>
                        <p class="text-muted text-center">Direktur EcoBuild</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Testimoni 3"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-center">"Produk daur ulang WorldGreen berkualitas tinggi. Kami telah
                            menggunakannya di seluruh kantor kami dan mendapat banyak pujian dari klien."</p>
                        <h5 class="text-center mt-3">Lisa Rodriguez</h5>
                        <p class="text-muted text-center">Manajer SustainCorp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>