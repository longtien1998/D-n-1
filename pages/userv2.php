<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="room.css">
    <script src="https://kit.fontawesome.com/7250252e91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-gray-100">
    <div class="tong7"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-8">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class="text-center">
                        <div class="profile-picture">
                            <img class="rounded-full border border-gray-100 shadow-sm" src="./anh/face.png"
                                alt="Profile picture of Sara Tancredi wearing sunglasses and a teal top" width="100"
                                height="100">
                        </div>
                        <h1 class="text-black-700 font-semibold mt-4">Tôn Long Tiến</h1>
                        <p class="text-gray-500">Quảng Ngãi, Việt Nam</p>
                    </div>
                    <div class="mt-4">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="name" placeholder="admin">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="full-name">Họ Và Tên</label>
                                    <input type="text" class="form-control" id="full-name" placeholder="Tôn Long Tiến">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="longtien1996@gmail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="84+ 7777888868">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="location">Địa chỉ</label>
                                    <input type="text" class="form-control" id="location"
                                        placeholder="Quảng Ngãi">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="postal-code">Mã code</label>
                                    <input type="text" class="form-control" id="postal-code" placeholder="23728167">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-orange">Thoát</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
