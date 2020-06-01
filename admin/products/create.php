
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục
                <a href="<?= ROOT ?>/admin?page=products&action=add" class="btn btn-primary">Thêm mới</a>
            </h6>
        </div>
        <div class="card-body">
            <form action="products/create-save.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" id="name" class="form-control" placeholder="Nhập mô tả sản phẩm" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-input-file border" id="">
                </div>
                <div class="form-group">
                    <label for="name">Detail</label>
                    <input type="text" name="detail" id="name" class="form-control" placeholder="Nhập chi tiết sản phẩm" required>
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="number" name="price" id="name" class="form-control" placeholder="Nhập giá sản phẩm" required>
                </div>
                <div class="form-group">
                    <label for="name">Sale</label>
                    <input type="number" name="sale" id="name" class="form-control" placeholder="Nhập giá Sale" required>
                </div>
                <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" name="status" id="name" class="form-control" placeholder="Trạng thái" required>
                </div>

                <div class="form-group">
                    <label for="name">Cate_ID</label>
                    <input type="number" name="cate_id" id="name" class="form-control" placeholder="Loại sản phảm" required>
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary">Ghi lại</button>
            </form>
        </div>
    </div>
</div>