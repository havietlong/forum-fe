<link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/libs.min.css">
      <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <body>

      @include('partials.header') 

      <div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile row nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                        Thông tin cá nhân
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#emailandsms">
                                        Email and SMS
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                       Quản lí liên hệ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Thông tin cá nhân</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname" class="form-label">Họ và tên đệm:</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Bni">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname" class="form-label">Tên:</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Jhon">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="uname" class="form-label">Tên người dùng:</label>
                                                <input type="text" class="form-control" id="uname" placeholder="Bni@01">
                                            </div>
                                       
                                            <div class="form-group col-sm-6">
                                                <label class="form-label d-block">Giới tính:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option1">
                                                    <label class="form-check-label" for="inlineRadio10">Nam</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio11" value="option1">
                                                    <label class="form-check-label" for="inlineRadio11">Nữ</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Ngày sinh:</label>
                                                <input class="form-control" id="dob" placeholder="1984-01-24">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Tình trạng hôn nhân:</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Độc thân</option>
                                                    <option>Đã kết hôn</option>
                                                    <option>Goá</option>
                                                    <option>Ly hôn</option>
                                                    <option>Ly thân</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Age:</label>
                                                <input type="text" class="form-control" id="age" placeholder="" oninput="validateAge(this)"/>
                                                <small class="form-text text-danger d-none" id="ageError">Vui lòng nhập đúng tuổi</small>
                                            </div>
                                        
                                       
                                          
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Gửi</button>
                                        <button type="reset" class="btn bg-soft-danger">Hủy</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Đổi mật khẩu</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cpass" class="form-label">Mật khẩu hiện tại:</label>
                                            <a href="#" class="float-end">Quên mật khẩu</a>
                                            <input type="Password" class="form-control" id="cpass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass" class="form-label">Mật khẩu mới:</label>
                                            <input type="Password" class="form-control" id="npass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass" class="form-label">Xác nhận mật khẩu:</label>
                                            <input type="Password" class="form-control" id="vpass" value="">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Gửi</button>
                                        <button type="reset" class="btn bg-soft-danger">Hủy</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Email và SMS</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="emailnotification">Thông báo qua Email:</label>
                                            <div class="col-md-9 form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked11" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked11">Đã chọn</label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="smsnotification">Thông báo qua SMS:</label>
                                            <div class="col-md-9 form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked12" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked12">Đã chọn</label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">Khi nào gửi email</label>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                        Bạn có thông báo mới.
                                                    </label>
                                                </div>
                                                <div class="form-check d-block">
                                                    <input class="form-check-input" type="checkbox" value="" id="email02">
                                                    <label class="form-check-label" for="email02">Bạn nhận được tin nhắn trực tiếp</label>
                                                </div>
                                                <div class="form-check d-block">
                                                    <input type="checkbox" class="form-check-input" id="email03" checked="">
                                                    <label class="form-check-label" for="email03">Ai đó thêm bạn vào kết nối</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">Khi nào cần gửi email nâng cao</label>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="email04">
                                                    <label class="form-check-label" for="email04">
                                                        Khi có đơn hàng mới.
                                                    </label>
                                                </div>
                                                <div class="form-check d-block">
                                                    <input class="form-check-input" type="checkbox" value="" id="email05">
                                                    <label class="form-check-label" for="email05">Duyệt thành viên mới</label>
                                                </div>
                                                <div class="form-check d-block">
                                                    <input type="checkbox" class="form-check-input" id="email06" checked="">
                                                    <label class="form-check-label" for="email06">Đăng ký thành viên mới</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Gửi</button>
                                        <button type="reset" class="btn bg-soft-danger">Hủy</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Quản lý liên hệ</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cno" class="form-label">Số điện thoại:</label>
                                            <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="url" class="form-label">URL:</label>
                                            <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Gửi</button>
                                        <button type="reset" class="btn bg-soft-danger">Hủy</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      </div>
      <script>
        function validateAge(input) {
            const age = input.value;
            if (!/^\d{1,3}$/.test(age) || age < 0 || age > 100) {
                document.getElementById('ageError').classList.remove('d-none');
                input.classList.add('is-invalid');
            } else {
                document.getElementById('ageError').classList.add('d-none');
                input.classList.remove('is-invalid');
            }
        }
        </script>
            <script src="js/slider.js"></script>
    <!-- masonry JavaScript --> 
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="js/charts/weather-chart.js"></script>
    <script src="js/app.js"></script>
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>
      </body>