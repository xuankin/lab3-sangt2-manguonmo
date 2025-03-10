<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục - KingNguyenShop</title>
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
        .table-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .table-container:hover {
            transform: translateY(-5px);
        }
        .btn-action {
            border-radius: 5px;
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            transition: transform 0.3s ease;
        }
        .btn-action:hover {
            transform: scale(1.05);
        }
        .add-category-btn {
            background-color: #28a745;
            color: white;
            border-radius: 20px;
            padding: 8px 15px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .add-category-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
            color: white;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-dark {
            background-color: #1a1a1a;
            --bs-table-bg: #1a1a1a;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
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
    </style>
</head>
<body class="bg-gray-100 font-['Roboto']">
    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-light shadow-md">
        <div class="container">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhang/Category">Quản lý danh mục</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Nội dung chính -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-3xl font-weight-bold text-dark mb-4" data-aos="fade-down">Quản lý danh mục</h1>
            </div>
        </div>
        <div class="table-container" data-aos="fade-up">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <h2 class="h4 mb-0 text-dark font-weight-bold">Danh sách danh mục</h2>
                <div class="d-flex align-items-center gap-3">
                    <div class="input-group" style="max-width: 250px;">
                        <span class="input-group-text bg-white border-0" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control search-input" placeholder="Tìm kiếm danh mục..." id="searchCategory">
                    </div>
                    <a href="#" class="add-category-btn" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="resetModal('add')">
                        <i class="fas fa-plus"></i> Thêm danh mục mới
                    </a>
                </div>
            </div>

            <?php if (!empty($categories)): ?>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="categoryTableBody">
                        <?php foreach ($categories as $category): ?>
                            <tr class="category-row">
                                <td><?php echo htmlspecialchars($category->id); ?></td>
                                <td><?php echo htmlspecialchars($category->name); ?></td>
                                <td><?php echo htmlspecialchars($category->description); ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="/webbanhang/Category/show/<?php echo $category->id; ?>" 
                                           class="btn btn-info btn-action text-white">
                                            <i class="fas fa-eye"></i> Xem
                                        </a>
                                        <button class="btn btn-warning btn-action text-white" 
                                                data-bs-toggle="modal" data-bs-target="#categoryModal"
                                                onclick="loadCategory(<?php echo $category->id; ?>, '<?php echo htmlspecialchars($category->name); ?>', '<?php echo htmlspecialchars($category->description); ?>')">
                                            <i class="fas fa-edit"></i> Sửa
                                        </button>
                                        <a href="/webbanhang/Category/delete/<?php echo $category->id; ?>" 
                                           class="btn btn-danger btn-action delete-btn">
                                            <i class="fas fa-trash"></i> Xóa
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center rounded-lg shadow-sm">
                    Chưa có danh mục nào được thêm.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Modal thêm/sửa danh mục -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
                <div class="modal-header" style="background-color: #ffcc00; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h5 class="modal-title text-dark font-weight-bold" id="categoryModalLabel">Thêm danh mục mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm">
                        <input type="hidden" id="categoryId" name="id">
                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">Tên danh mục</label>
                            <input type="text" class="form-control search-input" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-dark">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="3" style="border-radius: 10px;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary rounded-pill" id="saveCategory">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();

        // Reset modal cho thêm mới
        function resetModal(action) {
            document.getElementById('categoryForm').reset();
            document.getElementById('categoryId').value = '';
            document.getElementById('categoryModalLabel').textContent = 
                action === 'add' ? 'Thêm danh mục mới' : 'Sửa danh mục';
        }

        // Load thông tin danh mục để sửa
        function loadCategory(id, name, description) {
            resetModal('edit');
            document.getElementById('categoryId').value = id;
            document.getElementById('name').value = name;
            document.getElementById('description').value = description;
            document.getElementById('categoryModalLabel').textContent = 'Sửa danh mục';
        }

        // Xử lý lưu danh mục
        document.getElementById('saveCategory').addEventListener('click', function() {
            const form = document.getElementById('categoryForm');
            const formData = new FormData(form);
            const id = document.getElementById('categoryId').value;
            const url = id ? '/webbanhang/Category/edit/' + id : '/webbanhang/Category/add';

            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Thành công!', 'Danh mục đã được lưu.', 'success')
                        .then(() => location.reload());
                } else {
                    Swal.fire('Lỗi!', data.message || 'Có lỗi xảy ra.', 'error');
                }
            })
            .catch(error => {
                Swal.fire('Lỗi!', 'Không thể kết nối đến server.', 'error');
            });
        });

        // Xử lý xóa danh mục
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.getAttribute('href');
                Swal.fire({
                    title: 'Bạn có chắc chắn?',
                    text: 'Bạn muốn xóa danh mục này? Nếu có sản phẩm liên quan, bạn không thể xóa!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(url, { method: 'POST' })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire('Đã xóa!', 'Danh mục đã được xóa.', 'success')
                                        .then(() => location.reload());
                                } else {
                                    Swal.fire('Lỗi!', data.message || 'Không thể xóa danh mục.', 'error');
                                }
                            });
                    }
                });
            });
        });

        // Xử lý tìm kiếm danh mục
        document.getElementById('searchCategory').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('.category-row');
            rows.forEach(row => {
                const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                if (name.includes(searchValue) || description.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

<?php include 'app/views/shares/footer.php'; ?>
</body>
</html>