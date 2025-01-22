<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV | Responsive Bootstrap 4 Admin Dashboard Template</title>


    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

</head>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="sign-in-page">
            <div id="container-inside">
                <div id="circle-small"></div>
                <div id="circle-medium"></div>
                <div id="circle-large"></div>
                <div id="circle-xlarge"></div>
                <div id="circle-xxlarge"></div>
            </div>
            <div class="container p-0">ß
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="images/logo-full.png" class="img-fluid" alt="logo"></a>
                            <div class="sign-slider overflow-hidden ">
                                <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                    <li class="swiper-slide">
                                        <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Cộng đồng SGBB SGDD lớn nhất Việt Nam</h4>
                                        <p>Tìm kiếm , gặp gỡ và hẹn hò với các mảnh ghép thú vị </p>
                                    </li>
                                    <li class="swiper-slide">
                                        <img src="images/login/2.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Nơi trao đổi , kết nối đảm bảo an toàn , uy tín </h4>
                                        <p>Cam kết cộng đồng an toàn , bảo mật thông tin cho nguời dùng.</p>
                                    </li>
                                    <!-- <li class="swiper-slide">
                                    <img src="images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white"></h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Đăng nhập</h1>
                            <p>Nhập email và mật khẩu để truy cập trang chủ</p>
                            <form id="loginForm" class="mt-4">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">Địa chỉ email</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">Mật khẩu</label>
                                    <a href="/dashboard/forgot-password.html" class="float-end">Quên mật khẩu?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" name="password" placeholder="Password" required>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="form-check d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck11" name="remember">
                                        <label class="form-check-label" for="customCheck11">Ghi nhớ đăng nhập</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting traditionally.

                // Collect form data
                const formData = {
                    email: $('#exampleInputEmail1').val(),
                    password: $('#exampleInputPassword1').val(),
                    // remember: $('#customCheck11').is(':checked'),
                    // _token: $('input[name="_token"]').val(), // Include CSRF token
                };

                // Make the AJAX request
                $.ajax({
                    url: 'http://localhost:3000/auth/login', // Laravel API endpoint
                    method: 'POST',
                    data: formData,
                    xhrFields: {
                        withCredentials: true, // Enable cookies
                    },
                    success: function(response) {
                        // alert('Login successful: ' + response.message);
                        // console.log(response.user)

                        window.location.href = '/homepage';


                        // Redirect to another page
                        // window.location.href = '/homepage';
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = 'Login failed:\n';
                        for (const [field, messages] of Object.entries(errors)) {
                            errorMessage += `${field}: ${messages.join(', ')}\n`;
                        }
                        alert(errorMessage);
                    },
                });
            });
        });
    </script>


    <script src="js/libs.min.js"></script>
    <!-- slider JavaScript -->
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
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>

</body>

</html>