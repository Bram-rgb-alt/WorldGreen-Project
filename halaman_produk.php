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
        --primary-color: #2E8B57;
        --secondary-color: #3CB371;
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 400px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <!-- Logo EcoGreen dengan ikon -->
            <a class="navbar-brand" href="#">
                <i class="fas fa-leaf logo-icon"></i>EcoGreen
            </a>

            <!-- Tombol toggle untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?page=landing_page">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php?page=halaman_produk">Semua Produk</a></li>
                </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                </ul>

                <div class="d-flex">
                    <a href="index.php?page=landing_page" class="btn btn-outline-success me-2">
                        </i>Logout
                    </a>
                </div>
            </div>
        </div>

        </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Ramah Lingkungan</h1>
            <p class="lead">Temukan berbagai produk eco-friendly yang mendukung gaya hidup berkelanjutan</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="fw-bold">Produk Kami</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown">
                            Kategori Produk
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Semua Produk</a></li>
                            <li><a class="dropdown-item" href="#">Produk Organik</a></li>
                            <li><a class="dropdown-item" href="#">Produk Daur Ulang</a></li>
                            <li><a class="dropdown-item" href="#">Perawatan Rumah</a></li>
                            <li><a class="dropdown-item" href="#">Perawatan Diri</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product-img" alt="Sabun Organik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Sabun Mandi Organik</h5>
                            <p class="card-text">Sabun alami tanpa bahan kimia, cocok untuk semua jenis kulit.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 45.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://asset-2.tstatic.net/tribunnews/foto/bank/images/sikat-gigi-bambu.jpg"
                            class="card-img-top product-img" alt="Sikat Bambu">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Sikat Gigi Bambu</h5>
                            <p class="card-text">Sikat gigi ramah lingkungan dengan bulu nilon berkualitas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 35.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://id.baixiangjubag.com/uploads/202236307/plain-shopping-bags-cotton42076203034.jpg"
                            class="card-img-top product-img" alt="Tas Belanja">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Tas Belanja Katun</h5>
                            <p class="card-text">Tas belanja reusable yang kuat dan ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 65.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://down-id.img.susercontent.com/file/cb47538271b4032d795506f706067459"
                            class="card-img-top product-img" alt="Botol Minum">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Stainless Steel</span>
                            <h5 class="card-title">Botol Minum Stainless</h5>
                            <p class="card-text">Botol minum bebas BPA, menjaga suhu minuman hingga 12 jam.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 120.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYOHzXqd7idtH0CNjw_gpopw4a04HB2OEmmw&s"
                            class="card-img-top product-img" alt="Peralatan Makan">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Bambu</span>
                            <h5 class="card-title">Peralatan Makan Bambu</h5>
                            <p class="card-text">Set peralatan makan portable dari bahan bambu alami.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 85.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://asset-2.tstatic.net/pontianak/foto/bank/images/lebih-hemat-cara-membuat-cairan-pembersih-lantai-sendiri-di-rumah-dengan-bahan-alami-mudah-didapat.jpg"
                            class="card-img-top product-img" alt="Pembersih Rumah">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Pembersih Rumah Alami</h5>
                            <p class="card-text">Cairan pembersih rumah tanpa bahan kimia berbahaya.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 55.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.tokopedia.net/img/cache/700/product-1/2020/5/14/4699739/4699739_31c994d3-5f0d-41bd-895b-b8816c012f14_1500_1500"
                            class="card-img-top product-img" alt="Straw Stainless">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Stainless Steel</span>
                            <h5 class="card-title">Sedotan Stainless Steel</h5>
                            <p class="card-text">Set sedotan reusable dengan sikat pembersih.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 75.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://img-cdn.medkomtek.com/yHQ6K9pRcB020WbI-tIx4xMAwzo=/0x0/smart/filters:quality(100):format(webp)/article/G7kBSYlAty_hKq3Z69HO4/original/047467300_1566795421-Lilin-Aromaterapi-Baik-atau-Buruk-untuk-Kesehatan-By-Africa-Studio-Shutterstock.jpg"
                            class="card-img-top product-img" alt="Lilin Aromaterapi">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Lilin Aromaterapi Soy</h5>
                            <p class="card-text">Lilin aromaterapi dari lilin kedelai dengan essential oil.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 95.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include 'footer.php'; ?>