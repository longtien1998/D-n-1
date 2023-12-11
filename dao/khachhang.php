<?php
require_once 'pdo.php';
function user_insert($maKhachHang, $tenKhachHang, $matKhau, $Email, $hoTen, $SĐT)
{
    $sql = "INSERT INTO user(maKhachHang,tenKhachHang,matKhau,Email,hoTen,SĐT) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $maKhachHang, $tenKhachHang, $matKhau, $Email, $hoTen, $SĐT == 1);
}
function user_update($maKhachHang, $tenKhachHang, $matKhau, $Email, $hoTen, $SĐT)
{
    $sql = "UPDATE user SET tenKhachHang=?,matKhau=?,Email=?,hoTen=?,SĐT=?,vai_tro=? WHERE maKhachHang=?";
    pdo_execute($sql, $tenKhachHang, $matKhau, $Email, $hoTen, $SĐT == 1, $maKhachHang);
}
// function user_delete($maKhachHang)
// {
//     $sql = "DELETE FROM user WHERE maKhachHang=?";
//     if (is_array($maKhachHang)) {
//         foreach ($maKhachHang as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     } else {
//         pdo_execute($sql, $maKhachHang);
//     }
// }
function user_select_all()//truy vấn và trả về all kh từ csdl
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function user_count_all()//truy vấn và trả về all kh từ csdl
{
    $sql = "SELECT * FROM user";
    return executeCount($sql);
}
function user_select_by_id($maKhachHang) //truy vấn và trả về thông tin của 1 kh dựa trên maKhachHang
{
    $sql = "SELECT * FROM user WHERE tenKhachHang=?";
    return pdo_query_one($sql, $maKhachHang);
}
function user_exist($maKhachHang)//kt kh có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM user WHERE maKhachHang=?";
    return pdo_query_value($sql, $maKhachHang) > 0;
}

function user_exist_Email($Email)//kt Email kh có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM user WHERE Email=?";
    return pdo_query_value($sql, $Email) > 0;
}

function user_change_password($maKhachHang, $tenKhachHang_moi)//kt mk có trong csdl hay ch
{

    $sql = "UPDATE user SET tenKhachHang=? WHERE maKhachHang=?";
    pdo_execute($sql, $tenKhachHang_moi, $maKhachHang);
}