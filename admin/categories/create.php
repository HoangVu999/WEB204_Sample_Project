<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục
                <a href="<?= ROOT ?>/admin?page=category&action=add" class="btn btn-primary">Thêm mới</a>
            </h6>
        </div>
        <div class="card-body">
            <form action="categories/create-save.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-input-file border" id="">
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary">Ghi lại</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
