<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KingNguyenShop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome cho icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .navbar { background-color: #ffcc00; transition: all 0.3s ease; }
        .navbar-brand { font-weight: bold; font-size: 1.5rem; color: #1a1a1a !important; }
        .nav-link { color: #1a1a1a !important; font-weight: 500; }
        .nav-link:hover { color: #ffffff !important; }
        .banner-img { height: 200px; object-fit: cover; width: 100%; transition: transform 0.3s ease; }
        .banner-img:hover { transform: scale(1.05); }
        .filter-section { 
            background-color: #fff; 
            padding: 10px 0; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
            margin-top: 10px; 
        }
        .search-input { 
            border-radius: 20px; 
            border: 1px solid #ccc; 
            padding-left: 15px; 
            transition: border-color 0.3s ease; 
        }
        .search-input:focus { 
            border-color: #ffcc00; 
            box-shadow: 0 0 5px rgba(255, 204, 0, 0.5); 
        }
        .filter-select { 
            border-radius: 20px; 
            padding: 5px 10px; 
            border: 1px solid #ccc; 
            transition: border-color 0.3s ease; 
        }
        .filter-select:focus { 
            border-color: #ffcc00; 
            box-shadow: 0 0 5px rgba(255, 204, 0, 0.5); 
        }
    </style>
</head>
<body class="bg-gray-100 font-['Roboto']">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-md">
        <div class="container">
            <a class="navbar-brand" href="/webbanhang/Product/">Quản lý sản phẩm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhang/Product/">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhang/Product/add">Thêm sản phẩm</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Thanh lọc -->
    <div class="filter-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Ô tìm kiếm -->
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Danh mục -->
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                    <select class="form-select filter-select" aria-label="Chọn danh mục">
                        <option selected>Lọc theo danh mục</option>
                        <option value="electronics">Điện thoại</option>
                        <option value="laptops">Laptop</option>
                        <option value="tablets">Máy tính bảng</option>
                        <option value="accessories">Phụ kiện</option>
                    </select>
                </div>

                <!-- Sắp xếp -->
                <div class="col-12 col-md-4">
                    <select class="form-select filter-select" aria-label="Sắp xếp">
                        <option selected>Sắp xếp theo</option>
                        <option value="price-asc">Giá: Thấp đến Cao</option>
                        <option value="price-desc">Giá: Cao đến Thấp</option>
                        <option value="newest">Mới nhất</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Hai banner nhỏ 2 bên -->
    <div class="container mt-4">
        <div class="row g-4" data-aos="fade-down">
            <!-- Banner 1 -->
            <div class="col-12 col-md-6">
                <a href="#" class="d-block">
                    <img src="/webbanhang/images/banner1.png" 
                         class="banner-img rounded-lg shadow-md" 
                         alt="Banner 1">
                </a>
            </div>
            <!-- Banner 2 -->
            <div class="col-12 col-md-6">
                <a href="#" class="d-block">
                    <img src="/webbanhang/images/banner2.png" 
                         class="banner-img rounded-lg shadow-md" 
                         alt="Banner 2">
                </a>
            </div>
        </div>
    </div>

    <!-- Nội dung chính bắt đầu từ đây -->
    <div class="container mt-4">