

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
  <body>
  @include('partials.header') 
  <div class="sweet-container">
             
             <!-- <div class="cover-photo">
               <img src="images/page-img/cover-photo.jpg" alt="Cover Photo" class="cover-image">
             </div>
            -->
             <!-- Profile Section -->
             <div class="profile-header">
                 <div class="profile-image-wrapper">
                   <img src="images/page-img/ex3.jpg" alt="Thảo Lê" class="profile-image">
                   <div class="status-dot"></div>
                 </div>
                 <div class="profile-name">
                   <h1>Thảo Lê <span class="age">(20)</span></h1>
                   <p class="friends-info">633 bạn chung - 51 bạn chung</p>
                   <button class="follow-button" id="followButton">Theo dõi</button>
                 </div>
               </div>
           
             <!-- Navigation Tabs -->
             <div class="profile-tabs">
                 <div class="profile-tabs">
                     <button class="tab-button active" data-tab="posts" onclick="showTab('posts')">Bài viết</button>
                     <button class="tab-button" data-tab="photos" onclick="showTab('photos')">Media</button>
                     <button class="tab-button" data-tab="videos" onclick="showTab('videos')">Thông tin</button>
                   </div>
                   
           
             </div>
             <div class="tabs-content">
                 <div id="posts" class="tab active">
                     <div class="col-sm-12">
                         <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                               <div class="user-post-data">
                                  <div class="d-flex justify-content-between">
                                     <div class="me-3">
                                        <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                                     </div>
                                     <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                           <div class="">
                                              <h5 class="mb-0 d-inline-block">Hồng Đào</h5>
                                              <span class="mb-0 d-inline-block">đã thêm bài viết mới</span>
                                              <p class="mb-0 text-primary">Vừa xong</p>
                                           </div>
                                           <div class="card-post-toolbar">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                 </span>
                                                 <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                       <div class="d-flex align-items-top">
                                                          <div class="h4">
                                                             <i class="ri-save-line"></i>
                                                          </div>
                                                          <div class="data ms-2">
                                                             <h6>Lưu bài viết</h6>
                                                             <p class="mb-0">Thêm vào bộ sưu tập đã lưu</p>
                                                          </div>
                                                       </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                       <div class="d-flex align-items-top">
                                                          <i class="ri-close-circle-line h4"></i>
                                                          <div class="data ms-2">
                                                             <h6>Ẩn bài viết</h6>
                                                             <p class="mb-0">Ẩn bớt các bài viết tương tự</p>
                                                          </div>
                                                       </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                       <div class="d-flex align-items-top">
                                                          <i class="ri-user-unfollow-line h4"></i>
                                                          <div class="data ms-2">
                                                             <h6>Bỏ theo dõi</h6>
                                                             <p class="mb-0">Không hiển thị bài viết nhưng vẫn là bạn bè</p>
                                                          </div>
                                                       </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                       <div class="d-flex align-items-top">
                                                          <i class="ri-notification-line h4"></i>
                                                          <div class="data ms-2">
                                                             <h6>Thông báo</h6>
                                                             <p class="mb-0">Bật thông báo cho bài viết này</p>
                                                          </div>
                                                       </div>
                                                    </a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="mt-3">
                                  <p>Gởi bé Linh Nhi đến các anh, bé sở hữu face xinh body tuyệt mỹ, sức sống căng tràn.
                                     Linh Nhi được đánh giá quá sắc xảo so với dàn sao ngữ và hoa ngữ, nhờ nụ cười ngọt ngào
                                     thân thiện và rạng rỡ mà tổng thể khuôn mặt Linh Nhi hài hòa và dễ gần hơn, Linh Nhi là
                                     cô gái giản dị hướng ngoại và biết cách sử dụng ưa điểm nụ cười của mình để kết bạn và
                                     mọi người xung quanh.</p>
                               </div>
                               <div class="user-post">
                                  <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                                     <div class="row-span-2 row-span-md-1">
                                        <a href="/dashboard/detail.html" target="_blank" rel="noopener noreferrer">
                                           <img src="images/page-img/a1.jpg" alt="post-image"
                                              class="img-fluid rounded w-100">
                                        </a>
                                     </div>
    
                                     <div class="row-span-1">
                                        <a href="/dashboard/detail.html" target="_blank" rel="noopener noreferrer">
                                           <img src="images/page-img/b1.jpeg" alt="post-image"
                                              class="img-fluid rounded w-100">
                                        </a>
                                     </div>
    
                                     <div class="row-span-1 ">
                                        <img src="images/page-img/c1.jpg" alt="post-image"
                                           class="img-fluid rounded w-100">
                                     </div>
                                  </div>
                               </div>
                               <div class="comment-area mt-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                   <div class="like-block position-relative d-flex align-items-center">
                                      <div class="d-flex align-items-center">
                                         <div class="like-data">
                                            <div class="dropdown">
                                               <!-- <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                               <img src="images/icon/01.png" class="img-fluid" alt="">
                                               </span>
                                               <div class="dropdown-menu py-2">
                                                  <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt=""></a>
                                                  <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>
                                               </div> -->
                                               <div class="vote-container">
                                                 <!-- Nút Upvote -->
                                                 <button class="vote-button upvote" id="upvoteButton">
                                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                         <path d="M12 4l-8 8h16z"></path>
                                                     </svg>
                                                 </button>
                                         
                                                 <!-- Số vote -->
                                                 <span class="vote-count" id="voteCount">0</span>
                                         
                                                 <!-- Nút Downvote -->
                                                 <button class="vote-button downvote" id="downvoteButton">
                                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                         <path d="M12 20l8-8H4z"></path>
                                                     </svg>
                                                 </button>
                                             </div>
                                         
                                          
                                            </div>
                                         </div>
                                         <div class="total-like-block ms-2 me-3">
                                            <div class="dropdown">
                                               <!-- <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                               140 Thích
                                               </span> -->
                                               <!-- <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Max Emum</a>
                                                  <a class="dropdown-item" href="#">Bill Yerds</a>
                                                  <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                  <a class="dropdown-item" href="#">Tara Misu</a>
                                                  <a class="dropdown-item" href="#">Midge Itz</a>
                                                  <a class="dropdown-item" href="#">Sal Vidge</a>
                                                  <a class="dropdown-item" href="#">Other</a>
                                               </div> -->
                                            </div>
                                         </div>
                                      </div>
                                      <div class="total-comment-block">
                                         <div class="dropdown">
                                            <!-- <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                            20 Bình Luận
                                            </span>
                                            <div class="dropdown-menu">
                                               <a class="dropdown-item" href="#">Max Emum</a>
                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                               <a class="dropdown-item" href="#">Other</a>
                                            </div> -->
                                         </div>
                                      </div>
                                   </div>
                                   <!-- <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                      <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                      <span class="ms-1">99 Chia sẻ</span></a>                           
                                   </div> -->
                                </div>
                                <hr>
                                <ul class="post-comments list-inline p-0 m-0">
                                   <li class="mb-2">
                                      <div class="d-flex">
                                         <div class="user-img">
                                            <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                         </div>
                                         <div class="comment-data-block ms-3">
                                            <h6>Monty Carlo</h6>
                                            <p class="mb-0">Thời tiết dạo này se lạnh qua ôm em mà thấy phấn khởi quá làm luôn 2 nháy</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                               <a href="javascript:void();">like</a>
                                               <a href="javascript:void();">reply</a>
                                               <a href="javascript:void();">translate</a>
                                               <span> 5 min </span>
                                            </div>
                                         </div>
                                      </div>
                                   </li>
                                   <li>
                                      <div class="d-flex">
                                         <div class="user-img">
                                            <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                         </div>
                                         <div class="comment-data-block ms-3">
                                            <h6>Paul Molive</h6>
                                            <p class="mb-0">Nhìn em nóng quá nên anh thấy là, anh phải đưa em ra khỏi đây không là cháy nhà</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                               <a href="javascript:void();">like</a>
                                               <a href="javascript:void();">reply</a>
                                               <a href="javascript:void();">translate</a>
                                               <span> 5 min </span>
                                            </div>
                                         </div>
                                      </div>
                                   </li>
                                </ul>
                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                   <input type="text" class="form-control rounded" placeholder="Bình luận của bạn">
                                   <div class="comment-attagement d-flex">
                                      <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                      <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                      <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                   </div>
                                </form>
                             </div>
                            </div>
                         </div>
                      </div>
                 </div>
                 <div id="photos" class="tab">
                   <div class="sugar-gallery">
                 <p>Ảnh Về Thảo Lê</p>
                 <div class="photo-cube">
                   <img src="images/page-img/ex3.jpg" alt="Photo 1" class="photo-slice">
                   <img src="images/page-img/ex.jpg" alt="Photo 2" class="photo-slice">
                   <img src="images/page-img/ex2.jpg" alt="Photo 3" class="photo-slice">
                 </div>
               </div>
                 </div>
                 <div id="videos" class="tab">
                            <div class="info-section">
                      <h2>Thông Tin Cá Nhân</h2>
                      <br>
                      <p><strong>Chiều cao:</strong> 1m58</p>
                      <p><strong>Cân nặng:</strong> 46kg</p>
                      <p><strong>Hôn Nhân:</strong> Độc Thân</p>
                      <p><strong>Nghề Nghiệp:</strong> Sinh Viên</p>
                      <p><strong>Có thể làm gì cho đối phương:</strong> Yêu thương, chia sẻ, lắng nghe.</p>
                      <p><strong>Mong muốn từ đối phương:</strong> Em cần tài chính ổn định và sự quan tâm chân thành.</p>
                      <p><strong>Vị trí VIP hiện tại:</strong> <span class="sugar-vip">VIP 2</span></p>
                    </div> 
                  
                 </div>
               </div>
          
             </div>
           </div>
    
     </div>
 </div>
</div>
</div>
      <!-- <script src="js/libs.min.js"></script> -->
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
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>
    
  </body>
  <script>
    const followButton = document.getElementById("followButton");

followButton.addEventListener("click", () => {
  if (followButton.classList.contains("following")) {
    followButton.classList.remove("following");
    followButton.textContent = "Theo dõi";
  } else {
    followButton.classList.add("following");
    followButton.textContent = "Đã theo dõi";
  }
});
const tabButtons = document.querySelectorAll(".tab-button");

tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Xóa class active khỏi tất cả các nút
    tabButtons.forEach((btn) => btn.classList.remove("active"));
    // Thêm class active vào nút vừa được click
    button.classList.add("active");
  });
});
function showTab(tabId) {
  // Tắt tất cả tab
  const tabs = document.querySelectorAll('.tab');
  tabs.forEach(tab => tab.classList.remove('active'));

  // Tắt trạng thái active của các nút
  const buttons = document.querySelectorAll('.tab-button');
  buttons.forEach(button => button.classList.remove('active'));

  // Hiển thị tab được chọn
  document.getElementById(tabId).classList.add('active');

  // Bật trạng thái active cho nút được chọn
  event.target.classList.add('active');
}
  </script>
</html>