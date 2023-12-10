<div class="col-md-12">
    <div class="row">
        <div class="col-xl mt-2">
            <div class="text-center w-100 border-1 border-radius bg-info p-1">
                <h2 class="p-3">Khách hàng</h2>
                <p class="count p-3">SL: <?php echo user_count_all(); ?></p>
            </div>
        </div>
        <div class="col-xl mt-2">
            <div class="text-center w-100 border-1 border-radius bg-info p-1">
                <h2 class="p-3">Nhân Viên</h2>
                <p class="count p-3">SL: <?php echo nhanvien_count_all(); ?></p>
            </div>
        </div>
        <div class="col-xl mt-2">
            <div class="text-center w-100 border-1 border-radius bg-info p-1">
                <h2 class="p-3">Amin</h2>
                <p class="count p-3">SL: <?php echo admin_count_all(); ?></p>
            </div>
        </div>
        <div class="col-xl mt-2">
            <div class="text-center w-100 border-1 border-radius bg-info p-1">
                <h2 class="p-3">Phòng</h2>
                <p class="count p-3">SL: <?php echo room_count_all(); ?></p>
            </div>
        </div>
        <div class="col-xl mt-2">
            <div class="text-center w-100 border-1 border-radius bg-info p-1">
                <h2 class="p-3">Đơn hàng</h2>
                <p class="count p-3">SL: <?php echo donhang_count_all(); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="chuthich col-xl-3 text-center p-5">
            <h3>Chú Thích: </h3>
        </div>
        <div class="col-xl-9 p-5">
            <canvas id="myChart" style="width:100%;"></canvas>
        </div>
    </div>
    <script>
        const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
    </script>
</div>
<div class="col-md-12">
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Danh Sách Booking</span></h2>
        </div>
        <!-- <div class="container-fluid">
        <h3 class="bg-info p-3 text-center"><a href="/admin/index.php?controller=user-nhanvien&action=new-nhanvien">Thêm tài khoản Nhân Viên +</a></h3>
    </div> -->
        <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $getmanhanvien = $_POST['manhanvien'];
        //     nhanvien_delete($getmanhanvien);
        // }
        ?>
        <div class="container-fluid table-responsive-lg">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 50px;">STT</th>
                        <th scope="col">ID</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">email</th>
                        <th scope="col">Ngày nhận phòng</th>
                        <th scope="col">Ngày trả phòng</th>
                        <th scope="col">Tổng thanh toán</th>
                        <th scope="col">Trạng thái thanh toán</th>
                        <th scope="col">Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = "1";
                    // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM donhang";
                    $result = getData($sql);
                    rsort($result);
                    foreach ($result as $row) {

                        if ($row['pttt'] === '1') $pttt = "Chưa thanh toán";
                        else $pttt = "Đã thanh toán";
                        echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['madh'] . '</td>
                                <td>' . $row['hoten'] . '</td>
                                <td>' . $row['tel'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['checkin'] . '</td>
                                <td>' . $row['checkout'] . '</td>
                                <td>' . $row['tongdonhang'] . ' vnd</td>
                                <td class="pttt">' . $pttt . '</td>
                                <td style="width: 100px;"><a class="sua" href="/admin/index.php?controller=quanlyBooking&action=xemchitiet&madonhang=' . $row['madh'] . '">xem</a></td>  
                            </tr>';
                        if ($i == "10") break;
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let pttt = document.querySelectorAll('.pttt');
        for (const item of pttt) {
            if (item.innerText === "Chưa thanh toán") {
                item.style.color = "red";
            } else item.style.color = "green";
        }
    </script>
</div>