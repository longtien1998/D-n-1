<?php
require_once 'pdo.php';
function room_insert($LoaiPhong)
{
    $sql = "INSERT INTO room VALUES(?)";
    pdo_execute($sql, $LoaiPhong);
}
function room_update($maPhong, $LoaiPhong) //cập nhật thông tin loại hh đã có trong csdl
{
    $sql = "UPDATE room SET LoaiPhong=? WHERE maPhong=?";
    pdo_execute($sql, $LoaiPhong, $maPhong);
}
function room_delete($maPhong)
{
    $sql = "DELETE FROM room WHERE maPhong=?";
    if (is_array($maPhong)) {
        foreach ($maPhong as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $maPhong);
    }
}
function room2_delete($getmaphong)
{
    $sql = "DELETE FROM room WHERE maPhong=?";
    pdo_execute($sql, $getmaphong);
}
function room_count_all()//truy vấn và trả về sl kh từ csdl
{
    $sql = "SELECT * FROM room";
    return executeCount($sql);
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function room_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM room ORDER BY maPhong $order";
    return pdo_query($sql);
}
function room_select_by_id($maPhong) //truy vấn và trả về thông tin của 1 loại hh dựa trên maPhong
{
    $sql = "SELECT * FROM room WHERE maPhong=?";
    return pdo_query_one($sql, $maPhong);
}
function room_exist($maPhong) //kt loại hh có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM room WHERE maPhong=?";
    return pdo_query_value($sql, $maPhong) > 0;
}

function room_exist_LoaiPhong_add($LoaiPhong)
{
    $sql = "SELECT count(*) FROM room WHERE LoaiPhong=?";
    return pdo_query_value($sql, $LoaiPhong) > 0;
}
function room_exist_LoaiPhong_update($maPhong, $LoaiPhong)
{
    $sql = "SELECT count(*) FROM room WHERE  maPhong!=? and LoaiPhong=?";
    return pdo_query_value($sql, $maPhong, $LoaiPhong) > 0;
}

//vidu
