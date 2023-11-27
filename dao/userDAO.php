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

function getUserByName($username) {
    $sql = "SELECT * FROM useradmin WHERE username=:username";
    $data = getDataWidthParams($sql, ["username"=>$username]);
    return $data;
}
function getUseradimByName($username) {
    $sql = "SELECT * FROM useradmin WHERE username=:username";
    $data =  pdo_query_one($sql, ["username"=>$username]);
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
    
        $data = pdo_execute($sql, $id);
        if($data>0){
            var_dump($data);
        }
    
}
function adduseradmin($fullname, $username, $phone, $email, $password)
{
    $sql = "INSERT INTO useradmin(fullname,username,phone,email,password) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($fullname, $username, $phone, $email, $password);
}
?>