<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (products)
function list_all_products()
{
    return manyToOne('products', 'categories');
}

//Hàm lấy toàn bộ dữ liệu của 1 bảng $table
function manyToOne($productTable, $categoryTable)
{
    $conn = connection();
    try {
        $sql = "SELECT $productTable.id,$categoryTable.name as categoryName,$productTable.name,description,$productTable.image,detail,price,sale,status,$productTable.created_at FROM $productTable inner join $categoryTable on $productTable.cate_id = $categoryTable.id ORDER BY id ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi xử lý dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_products($id, $value)
{
    return listOne('products', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_products($name,$description,$image,$detail,$price,$sale,$status,$cate_id)
{
    $created_at = date("Y-m-d");
    $data = [
        'name' => $name,
        'description' => $description,
        'image' => $image,
        'detail' => $detail,
        'price' => $price,
        'sale' => $sale,
        'status' => $status,
        'cate_id' => $cate_id,
        'created_at' => $created_at,
    ];
    return insert('products', $data);
}

//Xóa dữ liệu trong bảng
function delete_products($id)
{
    delete('products','id',$id);
}
?>
