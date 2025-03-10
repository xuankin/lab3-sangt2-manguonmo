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
        .navbar { 
            background-color: #ffcc00; 
            transition: all 0.3s ease; 
            padding: 10px 0; 
        }
        .navbar-brand { 
            font-weight: bold; 
            font-size: 1.5rem; 
            color: #1a1a1a !important; 
        }
        .nav-link { 
            color: #1a1a1a !important; 
            font-weight: 500; 
        }
        .nav-link:hover { 
            color: #ffffff !important; 
        }
        .banner-img { 
            height: 200px; 
            object-fit: cover; 
            width: 100%; 
            transition: transform 0.3s ease; 
        }
        .banner-img:hover { 
            transform: scale(1.05); 
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
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }
        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .add-product-btn {
            background-color: #28a745;
            color: white;
            border-radius: 20px;
            padding: 5px 15px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .add-product-btn:hover {
            background-color: #218838;
        }
        .category-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 0.9rem;
            color: #1a1a1a;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .category-btn:hover {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #1a1a1a;
        }
        .category-btn i {
            font-size: 1rem;
        }
    </style>
</head>
<body class="bg-gray-100 font-['Roboto']">
    <!-- Header tích hợp Navbar và Filter -->
    <header class="navbar navbar-expand-lg navbar-light shadow-md">
        <div class="container header-container">
            <!-- Navbar Brand và Menu -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/webbanhang/Product/">KingNguyenShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/Product/">Danh sách sản phẩm</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Thanh lọc và Nút Thêm Sản Phẩm -->
            <div class="filter-group">
                <!-- Ô tìm kiếm -->
                <div class="input-group" style="max-width: 250px;">
                    <span class="input-group-text bg-white border-0" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control search-input" placeholder="Tìm kiếm sản phẩm..." aria-label="Search" style="border-left: 0;">
                </div>

                <!-- Danh mục (Button) -->
                <div class="d-flex gap-2" style="flex-wrap: wrap;">
                    <a href="#" class="category-btn" data-category="all">
                        <i class="fas fa-th"></i> Tất cả
                    </a>
                    <a href="#" class="category-btn" data-category="electronics">
                        <i class="fas fa-mobile-alt"></i> Điện thoại
                    </a>
                    <a href="#" class="category-btn" data-category="laptops">
                        <i class="fas fa-laptop"></i> Laptop
                    </a>
                    <a href="#" class="category-btn" data-category="tablets">
                        <i class="fas fa-tablet-alt"></i> Máy tính bảng
                    </a>
                    <a href="#" class="category-btn" data-category="accessories">
                        <i class="fas fa-headphones"></i> Phụ kiện
                    </a>
                </div>

                <!-- Sắp xếp -->
                <div class="input-group" style="max-width: 200px;">
                    <span class="input-group-text bg-white border-0" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <i class="fas fa-sort-amount-down"></i>
                    </span>
                    <select class="form-select filter-select" aria-label="Sắp xếp" style="border-left: 0;">
                        <option selected>Sắp xếp theo</option>
                        <option value="price-asc">Giá: Thấp đến Cao</option>
                        <option value="price-desc">Giá: Cao đến Thấp</option>
                        <option value="newest">Mới nhất</option>
                    </select>
                </div>

                <!-- Nút Thêm Sản Phẩm -->
                <a href="/webbanhang/Product/add" class="add-product-btn">
                    <i class="fas fa-plus"></i> Thêm sản phẩm
                </a>

                <!-- Nút Quản lý Danh mục -->
                <a href="/webbanhang/Category" class="add-product-btn" style="background-color: #007bff;">
                    <i class="fas fa-list"></i> Quản lý danh mục
                </a>
            </div>
        </div>
    </header>

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

    <!-- Nội dung chính -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-3xl font-weight-bold text-dark mb-4" data-aos="fade-down">Danh sách sản phẩm</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4" id="productList">
            <?php foreach ($products as $product): ?>
                <div class="col" data-aos="fade-up" data-aos-duration="600">
                    <div class="card product-card h-100 border-0 shadow-sm overflow-hidden position-relative">
                        <!-- Ảnh sản phẩm -->
                        <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="product-image-wrapper">
                            <div class="product-image-container">
                                <?php if (!empty($product->image)): ?>
                                    <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                         alt="Product Image" class="card-img-top w-100" style="object-fit: contain; height: 250px;">
                                <?php else: ?>
                                    <img src="/webbanhang/images/default-product.jpg" 
                                         alt="No Image" class="card-img-top w-100" style="object-fit: contain; height: 250px;">
                                <?php endif; ?>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">Giá sốc</span>
                            </div>
                        </a>
                        <!-- Thông tin sản phẩm -->
                        <div class="card-body p-3 d-flex flex-column justify-content-between">
                            <div>
                                <h2 class="h6 text-dark font-weight-bold mb-2 line-clamp-2">
                                    <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="text-dark text-decoration-none">
                                        <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </h2>
                                <p class="text-muted small line-clamp-2">
                                    <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="text-danger h5 mb-0 me-2">
                                        <?php echo number_format($product->price, 0, ',', '.'); ?>đ
                                    </span>
                                    <span class="text-decoration-line-through text-muted small me-2">
                                        <?php echo number_format($product->price * 1.2, 0, ',', '.'); ?>đ
                                    </span>
                                    <span class="badge bg-success text-white">
                                        -<?php echo round((1 - $product->price / ($product->price * 1.2)) * 100); ?>%
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-muted small ms-1">(4.5 - 123 đánh giá)</span>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex gap-2">
                                    <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" 
                                       class="btn btn-warning btn-sm w-100 text-white">
                                        <i class="fas fa-edit"></i> Sửa
                                    </a>
                                    <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" 
                                       class="btn btn-danger btn-sm w-100 delete-btn">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                    <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                                       class="btn btn-primary btn-sm w-100">
                                        <i class="fas fa-cart-plus"></i> Giỏ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();

        // Xử lý xóa sản phẩm
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.getAttribute('href');
                Swal.fire({
                    title: 'Bạn có chắc chắn?',
                    text: 'Bạn muốn xóa sản phẩm này?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });
        });

        // Xử lý lọc theo danh mục (cần thêm logic backend hoặc JavaScript để lọc sản phẩm)
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.getAttribute('data-category');
                console.log('Lọc theo danh mục:', category);
                // Thêm logic lọc sản phẩm tại đây (ví dụ: gọi API hoặc reload trang với tham số category)
            });
        });
    </script>

<?php include 'app/views/shares/footer.php';?>
    <!-- CSS tùy chỉnh -->
    <style>
        .product-card {
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .product-image-wrapper {
            display: block;
            position: relative;
            overflow: hidden;
        }
        .product-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            border-bottom: 2px solid #ffd700;
        }
        .card-img-top {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }
        .badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 5px;
        }
        .gap-2 > * {
            margin-right: 0.5rem;
        }
        .gap-2 > *:last-child {
            margin-right: 0;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .text-danger {
            color: #dc3545 !important;
        }
        .text-warning {
            color: #ffc107 !important;
        }
    </style>
</body>
</html>