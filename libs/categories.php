<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (categories)
function list_all_category()
{
    return listAll('categories');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_category($id, $value)
{
    return listOne('categories', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_category($name, $image)
{
    $created_at = date("Y-m-d");
    $data = [
        'name' => $name,
        'image' => $image,
        'created_at' => $created_at,
    ];
    return insert('categories', $data);
}
//Cập nhật dữ liệu vào bảng
function update_category($name, $image, $id)
{
    $update_at = date("Y-m-d");
    $data = [
        'name' => $name,
        'image' => $image,
    ];
    return update('categories', $data, $id);

}

//Xóa dữ liệu trong bảng
function delete_category($id)
{
    delete('categories','id',$id);
}
