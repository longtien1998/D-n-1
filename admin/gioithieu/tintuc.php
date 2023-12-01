
<?php


    $sql = "SELECT * FROM baiViet ORDER BY idBaiViet DESC";
    
?>
<div class="container">
    <h2 class="py-2 text-center h4">QUẢN LÝ BÀI VIẾT</h2>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Danh sách các bài viết</th>
                <th style='width:200px'>Thông tin</th>
                <th style='width:60px'>
                    <a class="btn btn-warning px-3 py-1" href="./tin_them.php">Thêm</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['tintuc'] as $item) {
                echo
                "<tr>
                    <td> 
                        <img src='$item[urlHinh]' width='200' height='150' align='left' class='mr-3'>
                        <h4>$item[tieuDe]</h4>
                        <div>$item[noiDung]</div>
                        <span class='text-success'>
                            Ngày đăng: $item[ngay]
                        </span>
                    </td>
                    <td>
                        <!-- Các thông tin khác có thể hiển thị tại đây -->
                    </td>
                    <td>
                        <div> 
                            <a href='./bai_viet_sua.php?idBaiViet=$item[idBaiViet]'><button class='btn btn-warning'><i class='bx bx-edit-alt'></i></button></a>
                        </div>
                        <div class='mt-1'>
                            <button class='btn btn-danger' onclick='deleteBaiViet($item[idBaiViet])'><i class='bx bx-trash'></i></button>
                        </div>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
    }

    .container {
        margin-top: 20px;
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        border: 1px solid #D69C52;
    }

    th, td {
        padding: 10px;
        border: 1px solid #D69C52;
        text-align: left;
    }

    th {
        background-color: #D69C52;
        color: #fff;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .btn {
        padding: 5px 10px;
        cursor: pointer;
    }

    .btn-warning {
        background-color: #D69C52;
        color: #fff;
        border: none;
    }

    .btn-danger {
        background-color: #D69C52;
        color: #fff;
        border: none;
    }
</style>

<script>
     deleteTin=(id)=>{
         let check=confirm("Bạn có chắc chắn xóa không ??")
         console.log(id)
       if(check){
         $.post("tin_xoa.php",{'idTin':id},
         (data)=>{ 
             console.log(data);
             if(data== 0) location.reload(); else alert(data); 
        })
       }
     }
 </script>
