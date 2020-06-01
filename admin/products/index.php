<?php
require_once '../libs/products.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_products($id);

    header('location:' . ROOT . 'admin/?page=product');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_products){
        delete_products($id_products);
    }
    header('location:' . ROOT . 'admin/?page=product');
    die;
}
$pro = list_all_products();
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h4 class="h5 mb-2 text-gray-800">Trang chủ / Danh mục sản phẩm</h4>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục
                    <a href="<?= ROOT ?>/admin?page=product&action=add" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="checkall" id="checkall">
                                </th>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Detail</th>
                                <th>Price</th>
                                <th>Sale</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>
                                </th>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Detail</th>
                                <th>Price</th>
                                <th>Sale</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($pro as $p) : ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id[]" id="" value="<?= $p['id'] ?>">
                                    </td>
                                    <td><?= $p['id']?></td>
                                    <td><?= $p['categoryName']?></td>
                                    <td><?= $p['name']?></td>
                                    <td><?= $p['description']?></td>
                                    <td>
                                        <img src="../images/<?= $p['image'] ?>" width="150" alt="">
                                    </td>
                                    <td><?= $p['detail']?></td>
                                    <td><?= $p['price']?></td>
                                    <td><?= $p['sale']?></td>
                                    <td><?= $p['status']?></td>
                                    <td><?= $p['created_at']?></td>
                                    <td>
                                        <a href="<?= ROOT ?>admin/?page=product&action=edit&id=<?= $p['id'] ?>"  class="btn btn-success"><i class="far fa-edit"></i> Sửa</a>
                                        <a href="<?= ROOT ?>admin/?page=product&id=<?= $p['id'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-danger" id="btndel-category" name="btn-del"><i class="fas fa-trash-alt"></i> Xóa mục đánh dấu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

