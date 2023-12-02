<?php 
function getAllUser() {
    $sql = "SELECT * FROM user";
    $data = getData($sql);
    return $data;
}

function getUserById($id) {
    $sql = "SELECT * FROM user WHERE id=:id";
    $data = getDataWidthParams($sql, ["id"=>$id]);
    return $data;
}
function admin_select_by_id($id) //truy vấn và trả về thông tin của 1 kh dựa trên maNhanVien
{
    $sql = "SELECT * FROM useradmin WHERE id=?";
    return pdo_query_one($sql, $id);
}
function getUserByName($username) {
    $sql = "SELECT * FROM useradmin WHERE username=:username";
    $data = getDataWidthParams($sql, ["username"=>$username]);
    return $data;
}
function getUseradimByName($username) {
    $sql = "SELECT * FROM useradmin WHERE username=?";
    $data =  pdo_query_one($sql,$username);
    return $data;
}

function deleteUser($id) {
    $sql = "DELETE FROM useradmin WHERE id=:id";
    $data = pdo_execute($sql, ["id"=>$id]);
    var_dump($data);
}
function user_delete($id)
{
    $sql = "DELETE FROM useradmin WHERE id=?";
    
    pdo_execute($sql, $id);
    
}
function adduseradmin($fullname, $username, $phone, $email, $password)
{
    $sql = "INSERT INTO useradmin(fullname,username,phone,email,password) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($fullname, $username, $phone, $email, $password);
}
?>