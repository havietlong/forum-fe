<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/libs.min.css">
<link rel="stylesheet" href="css/socialv.css?v=4.0.0">
<link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
<link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
<!-- <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css"> -->
<link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<body>
   @include('partials.header')

   <div id="content-page" class="content-page">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">


               <div class="profile-wrapper">
                  <!-- Ảnh bìa -->
                  <div id="profile-cover" class="profile-cover">
                     <button id="cover-edit-btn" class="profile-cover__edit-btn">Chỉnh sửa ảnh bìa</button>
                     <input type="file" id="cover-input" accept="image/*" style="display: none;">
                     <img id="cover-image" src="" alt="Cover Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;" />
                  </div>


                  <!-- Phần thông tin cá nhân -->
                  <div class="profile-info">
                     <div class="avatar-section-container">
                        <div class="profile-avatar" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="  images/user/long.jpg" alt="Ảnh đại diện" id="profile-avatar">
                        </div>
                        <div id="avatar-menu" class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: fit-content; z-index:10">
                           <a class="dropdown-item" id="uploadProfileButton">Tải ảnh đại diện</a>
                           <a class="dropdown-item" href="#">Xem ảnh đại diện</a>
                        </div>
                     </div>
                     <input style="display:none" type="file" id="media" name="media" multiple>

                     <div class="profile-details d-flex justify-content-between">
                        <div class="info" style="padding-left: 180px;">
                           <h1 class="profile-name" id="profile-name">Hà Việt Long</h1>
                           <p class="profile-followers" id="profile-followers">1K người bạn</p>
                        </div>
                        <div class="profile-actions">

                           <button class="profile-actions__btn profile-actions__btn--secondary">Chỉnh sửa trang cá
                              nhân</button>
                        </div>
                     </div>
                  </div>
                  <!-- Thanh menu -->
                  <div class="profile-menu">
                     <button class="profile-menu__item">Bài viết</button>

                     <button class="profile-menu__item">Ảnh</button>

                     <button class="profile-menu__item">Xem thêm</button>
                  </div>
               </div>



               <!-- Overlay cho ảnh đại diện -->
               <div class="overlay" id="avatar-overlay">
                  <div class="overlay-content">
                     <img src="  images/user/long.jpg" alt="Ảnh đại diện phóng to" id="overlay-avatar">
                  </div>
               </div>
               <br>
               <!-- Input file cho ảnh đại diện -->
               <input type="file" id="avatar-input" accept="image/*" style="display: none;">

               <div class="col-sm-12">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                        <div class="card-body p-0">
                           <div class="row">
                              <div class="col-lg-4">
                                 <!-- <div class="card">
                                          <div class="card-body">
                                             <a href="#"><span
                                                   class="badge badge-pill bg-primary font-weight-normal ms-auto me-1"><i
                                                      class="ri-star-line"></i></span> 27 Items for yoou</a>
                                          </div>
                                       </div> -->
                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Tổng quan</h4>
                                       </div>
                                       <div class="card-header-toolbar d-flex align-items-center">
                                          <p class="m-0"><a href="javacsript:void();"> Share Profile </a></p>
                                       </div>
                                    </div>

                                    <div class="profile-card">
                                       <div class="header">
                                          <div class="profile-pic"></div>
                                       </div>
                                       <div class="content">
                                          <h2 id="profile-card-name">LongCuto</h2>
                                          <button class="share-btn">Share</button>
                                          <div class="stats">
                                             <div>
                                                <span>1</span>
                                                <p>Post karma</p>
                                             </div>
                                             <div>
                                                <span>0</span>
                                                <p>Comment karma</p>
                                             </div>
                                          </div>

                                          <div class="settings">
                                             <div>
                                                <p>Profile</p>

                                                <button>Edit Profile</button>
                                             </div>
                                             <div>
                                                <p>Avatar</p>

                                                <button>Style Avatar</button>
                                             </div>
                                             <div>
                                                <p>Moderation</p>

                                                <button>Mod Settings</button>
                                             </div>
                                          </div>
                                          <hr>
                                          <div class="links">
                                             <button>Add Social Link</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                              <div class="col-lg-8">
                                 <div id="post-modal-data" class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Tạo bài viết</h4>
                                       </div>
                                    </div>
                                    <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="user-img">
                           <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                        </div>
                        <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal"
                           action="javascript:void();">
                           <div
                                          contenteditable="true"
                                          placeholder="Bạn đang nghĩ gì..."
                                          class="form-control mb-3 rounded"
                                          id="postContent"
                                          style="border: none; resize: none; overflow-wrap: break-word; word-break: break-word; width: 100%; padding: 8px; line-height: 1.5; min-height: 48px; overflow-y: auto;"
                                          oninput="adjustContentHeight(this);">
                                          Bạn đang nghĩ gì...
                                       </div>
                        </form>
                     </div>
                     <hr>
                     <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                        <li class="me-3 mb-md-0 mb-2">
                           <a href="#" class="btn btn-soft-primary">
                              <img src="images/small/07.png" alt="icon" class="img-fluid me-2">
                              Ảnh/Video
                           </a>
                        </li>
                        <!-- <li class="me-3 mb-md-0 mb-2">
                           <a href="#" class="btn btn-soft-primary">
                              <img src="images/small/08.png" alt="icon" class="img-fluid me-2"> Tag Bạn
                              bè
                           </a>
                        </li> -->
                        <li class="me-3">
                           <a href="#" class="btn btn-soft-primary">
                              <img src="images/small/09.png" alt="icon" class="img-fluid me-2"> Cộng Đồng
                           </a>
                        </li>
                        <!-- <li>
                           <button class="btn btn-soft-primary">
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <div class="dropdown-toggle" id="post-option" data-bs-toggle="dropdown">
                                       <i class="ri-more-fill"></i>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option"
                                       style="">
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                          data-bs-target="#post-modal">Check in</a>
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                          data-bs-target="#post-modal">Live Video</a>
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                          data-bs-target="#post-modal">Gif</a>
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                          data-bs-target="#post-modal">Watch Party</a>
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                          data-bs-target="#post-modal">Play with Friend</a>
                                    </div>
                                 </div>
                              </div>
                           </button>
                        </li> -->
                     </ul>
                  </div>
                                   
                                 </div>

                                 <div class="notification-body">
                                    <p class="notification-message">Bạn chưa tạo bài viết nào</p>
                                 </div>
                                 <div class="col-sm-12 text-center">
                                    <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                                 </div>
                                 <div id="posts-container" style=" display: flex; flex-direction:column"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>

   <!-- Button trigger modal -->
   <button type="button" id="modalButton" style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
   </button>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Image</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div>
                  <img id="imagePreview" src="" alt="Uploaded Image" style="max-width: 100%; display: none;">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" id="saveImage">Save changes</button>
            </div>
         </div>
      </div>
   </div>


   <!-- <div class=" col-sm-12 text-center">
                                    <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                                 </div> -->

   <script>
      // Phóng to và chỉnh sửa ảnh đại diện

      // const avatarMenu = document.getElementById('avatar-menu');
      const overlay = document.getElementById('avatar-overlay');
      const overlayAvatar = document.getElementById('overlay-avatar');
      const viewAvatarBtn = document.getElementById('view-avatar');
      const changeAvatarBtn = document.getElementById('change-avatar');
      const avatarInput = document.getElementById('avatar-input');
      const coverEditButton = document.getElementById('view-avatar');
      // Khi click vào ảnh đại diện
      // avatar.addEventListener('click', (event) => {
      //    // Hiển thị menu
      //    const avatarRect = avatar.getBoundingClientRect(); // Lấy vị trí ảnh đại diện
      //    avatarMenu.style.top = `${avatarRect.bottom + window.scrollY}px`; // Đặt vị trí menu ngay dưới ảnh
      //    avatarMenu.style.left = `${avatarRect.left + avatarRect.width / 2}px`; // Căn giữa menu so với ảnh
      //    avatarMenu.style.transform = 'translateX(-50%)';
      //    avatarMenu.style.display = 'block';
      //    event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
      // });

      // Đóng menu nếu click bên ngoài
      // document.addEventListener('click', () => {
      //    avatarMenu.style.display = 'none'; // Ẩn menu
      // });

      // Xem ảnh đại diện
      // viewAvatarBtn.addEventListener('click', (event) => {
      //    avatarMenu.style.display = 'none'; // Ẩn menu
      //    overlay.classList.add('active'); // Hiển thị overlay
      //    event.stopPropagation();
      // });

      // Đóng overlay khi click ra ngoài
      // overlay.addEventListener('click', () => {
      //    overlay.classList.remove('active'); // Ẩn overlay
      // });

      // Chọn ảnh đại diện mới
      // changeAvatarBtn.addEventListener('click', (event) => {
      //    avatarMenu.style.display = 'none'; // Ẩn menu
      //    avatarInput.click(); // Hiển thị hộp thoại chọn tệp
      //    event.stopPropagation();
      // });

      // Thay đổi ảnh đại diện và đồng bộ overlay
      // avatarInput.addEventListener('change', (event) => {
      //    const file = event.target.files[0];
      //    if (file) {
      //       const reader = new FileReader();
      //       reader.onload = (e) => {
      //          avatar.src = e.target.result; // Cập nhật ảnh đại diện
      //          overlayAvatar.src = e.target.result; // Cập nhật ảnh trong overlay
      //       };
      //       reader.readAsDataURL(file);
      //    }
      // });


      // Chỉnh sửa ảnh bìa      
      const coverEditBtn = document.getElementById('cover-edit-btn');
      const coverInput = document.getElementById('cover-input');
      // Khi click vào nút "Chỉnh sửa ảnh bìa"
      coverEditBtn.addEventListener('click', () => {
         coverInput.click(); // Hiển thị hộp thoại chọn tệp
         modalButton.click()
      });

      coverInput.addEventListener('change', function() {
         const file = event.target.files[0];
         if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
               // Set the image source for preview
               const image = document.getElementById('imagePreview');
               image.src = e.target.result;
               image.style.display = 'block'; // Show the image preview
               image.onload = function() {

                  // Destroy any existing cropper instance if present
                  if (cropper) {
                     cropper.destroy();
                     cropper = null; // Reset cropper variable
                  }

                  // Initialize the cropper on the uploaded image
                  cropper = new Cropper(image, {
                     aspectRatio: 16 / 9, // Optional: Set aspect ratio, can be removed or modified
                     movable: true,
                     zoomable: true,
                     scalable: true,
                     rotatable: true,
                     ready() {
                        console.log('Cropper ready!');
                     }
                  });
               };
            };
            reader.readAsDataURL(file);
         }

         // Handle Save changes button click
         document.getElementById('saveImage').addEventListener('click', function() {
            if (cropper) {
               // Get the cropped image data
               const canvas = cropper.getCroppedCanvas();

               // Convert the canvas to a Base64 string
               const croppedImageUrl = canvas.toDataURL('image/png'); // You can adjust the image format here

               // Convert Base64 to Blob
               function base64ToBlob(base64, mimeType) {
                  const byteString = atob(base64.split(',')[1]);
                  const arrayBuffer = new ArrayBuffer(byteString.length);
                  const uint8Array = new Uint8Array(arrayBuffer);
                  for (let i = 0; i < byteString.length; i++) {
                     uint8Array[i] = byteString.charCodeAt(i);
                  }
                  return new Blob([arrayBuffer], {
                     type: mimeType
                  });
               }

               const croppedImageBlob = base64ToBlob(croppedImageUrl, 'image/png');

               // Append the blob to FormData
               const formData = new FormData();
               formData.append('file', croppedImageBlob, 'cover-picture.png'); // Adjust filename as needed
               formData.append('useCase', 2);
               // Send the FormData to the server
               fetch('http://localhost:3000/user-images', {
                     method: 'POST',
                     body: formData,
                     credentials: 'include',
                  })
                  .then((response) => response.json())
                  .then((data) => {
                     console.log('Image uploaded:', data);
                     formChangeCover = {
                        "coverPic": data.path,
                     }
                     // Optionally close the modal and update the profile picture
                     modalButton.click();
                     // ==================================
                     fetch('http://localhost:3000/users', {
                           method: 'PATCH',
                           headers: {
                              'Content-Type': 'application/json',
                           },
                           body: JSON.stringify(formChangeCover),
                           credentials: 'include',
                        })
                        .then((response) => response.json())
                        .then((data) => {
                           console.log('Setted image successfully: ', data);
                           const coverImage = document.getElementById('profile-cover');
                           // Set the background image using the path from the server response (data.path)
                           coverImage.style.backgroundImage = `url(http://localhost:3000${data.coverPic})`;

                           // // Optionally, you can add other background properties if needed
                           coverImage.style.backgroundSize = 'cover'; // Ensures the image covers the entire element
                           coverImage.style.backgroundPosition = 'center'; // Centers the image
                           coverImage.style.backgroundRepeat = 'no-repeat'; // Prevents repetition of the background
                        })
                        .catch((error) => {
                           console.error('Error setting image:', error);
                        });
                  })
                  .catch((error) => {
                     console.error('Error uploading image:', error);
                  });
            } else {
               console.log('No image cropped yet.');
            }
         });

      });
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
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const avatar = document.getElementById('profile-avatar');
         const avatarMenu = document.getElementById('avatar-menu');
         const coverImage = document.getElementById('cover-image');



         avatar.addEventListener('click', () => {
            console.log("click");
            avatarMenu.style.display = avatarMenu.style.display === 'block' ? 'none' : 'block';
         });

         fetchAndRenderPosts();

         // Fetch both user posts and user details
         function fetchAndRenderPosts() {
            Promise.all([
                  fetch('http://localhost:3000/posts/user', {
                     method: 'GET',
                     credentials: 'include',
                  }),
                  fetch('http://localhost:3000/users/details', {
                     method: 'GET',
                     credentials: 'include',
                  })
               ])
               .then(responses => Promise.all(responses.map(response => {
                  if (!response.ok) {
                     throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.json();
               })))
               .then(([postsData, userDetailsData]) => {
                  console.log('User post response:', postsData);
                  console.log('User details response:', userDetailsData);

                  avatar.src = "http://localhost:3000" + userDetailsData.profilePic;
                  const userName = document.getElementById('profile-name');
                  const coverImage = document.getElementById('profile-cover');
                  const cardUserName = document.getElementById('profile-card-name');
                  userName.innerHTML = userDetailsData.username;
                  cardUserName.innerHTML = userDetailsData.username;

                  // Set the background image using the path from the server response (data.path)
                  coverImage.style.backgroundImage = `url(http://localhost:3000${userDetailsData.coverPic})`;
                  // // Optionally, you can add other background properties if needed
                  coverImage.style.backgroundSize = 'cover'; // Ensures the image covers the entire element
                  coverImage.style.backgroundPosition = 'center'; // Centers the image
                  coverImage.style.backgroundRepeat = 'no-repeat'; // Prevents repetition of the background
                  const combinedData = {
                     posts: postsData,
                     userDetails: userDetailsData
                  };

                  renderPosts(combinedData);
               })
               .catch(error => {
                  console.error('Error in fetching posts or user details:', error);
               });
         }

         function renderPosts(combinedData) {
            const container = document.getElementById('posts-container');
            container.innerHTML = '';
            const {
               posts,
               userDetails
            } = combinedData;

            if (!Array.isArray(posts.posts) || posts.posts.length === 0) return;

            posts.posts.forEach(post => {
               const images = post.media || [];
               let postHTML = `
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" alt="User avatar">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div>
                                 <h5 class="mb-0 d-inline-block">${userDetails.username}</h5>
                                 <span class="mb-0 d-inline-block">đã thêm bài viết mới</span>
                                 <p class="mb-0" style="font-weight: 600;color: coral;">BOB</p>
                              </div>
                              <div class="container-right d-flex">
                                 <p class="mb-0 text-primary" style="margin-right: 10px">${new Date(post.createdAt).toLocaleDateString()}</p>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                        <p>${post.content}</p>
                    </div>
                    <div class="user-post">
                        <div id="carouselExampleControls${post.postID}" class="carousel slide" data-ride="carousel"  data-interval="false" data-wrap="false">
                        <div class="carousel-inner">
                        `;

               images.forEach((image, index) => {
                  // Check if it's the first image and add the 'active' class only for the first one
                  const activeClass = index === 0 ? 'active' : '';

                  postHTML += `
        <div class="carousel-item ${activeClass}">
        <a href="#" class="open-lightbox" data-image="http://localhost:3000${image}">
            <img class="d-block w-100" src="http://localhost:3000${image}" alt="Post image">
        </div>
        </a>
    `;
               });


               postHTML += `
                        </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls${post.postID}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls${post.postID}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                     </a>
                <div class="carousel-indicators">               
               `;

               images.forEach((_, index) => {
                  const activeClass = index === 0 ? 'active' : '';
                  postHTML += `
            <button type="button" data-bs-target="#carouselExampleControls${post.postID}" data-bs-slide-to="${index}" class="${activeClass}" aria-current="${activeClass ? 'true' : 'false'}"></button>
         `;
               });

               postHTML += `
         </div> <!-- End of indicators -->
      </div>
      </div>
      <hr>
      <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="like-block position-relative d-flex align-items-center justify-content-between">
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
                                       <div class="vote-container" style="padding:3px; border-radius: 15px; width: 80px">
                                          <!-- Nút Upvote -->
                                          <button class="vote-button upvote" id="upvoteButton">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M12 4l-8 8h16z"></path>
                                             </svg>
                                          </button>

                                          <!-- Số vote -->
                                          <span class="vote-count" id="voteCount">0</span>

                                          <!-- Nút Downvote -->
                                          <!-- <button class="vote-button downvote" id="downvoteButton">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M12 20l8-8H4z"></path>
                                             </svg>
                                          </button> -->
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

                           </div>
                           <!-- <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                  <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                  <span class="ms-1">99 Chia sẻ</span></a>                           
                               </div> -->
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    20 Bình Luận
                                 </span>
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
      </div>
      </div>
      
      </div>
      `;

               container.innerHTML += postHTML;
            });

            // Add zoom functionality
            const lightboxLinks = document.querySelectorAll('.open-lightbox');
            const modalImage = document.getElementById('modalImage');
            const mediaModal = document.getElementById('mediaModal');
            const closeModal = document.getElementById('closeModal');

            lightboxLinks.forEach(link => {
               link.addEventListener('click', function(event) {
                  event.preventDefault();
                  const imageSrc = this.getAttribute('data-image');
                  modalImage.src = imageSrc;
                  mediaModal.style.display = 'flex';
               });
            });

            // Close modal
            closeModal.addEventListener('click', function() {
               mediaModal.style.display = 'none';
               modalImage.src = '';
            });

            // Close modal when clicking outside modal content
            mediaModal.addEventListener('click', function(event) {
               if (event.target === mediaModal) {
                  mediaModal.style.display = 'none';
                  modalImage.src = '';
               }
            });
         }
      });

      const mediaInput = document.getElementById('media');
      const modalButton = document.getElementById('modalButton');
      document.getElementById('uploadProfileButton').addEventListener('click', function() {
         mediaInput.click();
         modalButton.click()
      });
      let cropper;
      mediaInput.addEventListener('change', function() {
         const file = event.target.files[0];
         if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
               // Set the image source for preview
               const image = document.getElementById('imagePreview');
               image.src = e.target.result;
               image.style.display = 'block'; // Show the image preview
               image.onload = function() {

                  // Destroy any existing cropper instance if present
                  if (cropper) {
                     cropper.destroy();
                     cropper = null; // Reset cropper variable
                  }

                  // Initialize the cropper on the uploaded image
                  cropper = new Cropper(image, {
                     aspectRatio: 1, // Optional: Set aspect ratio, can be removed or modified
                     movable: true,
                     zoomable: true,
                     scalable: true,
                     rotatable: true,
                     ready() {
                        console.log('Cropper ready!');
                     }
                  });
               };
            };
            reader.readAsDataURL(file);
         }

         // Handle Save changes button click
         document.getElementById('saveImage').addEventListener('click', function() {
            if (cropper) {
               // Get the cropped image data
               const canvas = cropper.getCroppedCanvas();

               // Convert the canvas to a Base64 string
               const croppedImageUrl = canvas.toDataURL('image/png'); // You can adjust the image format here

               // Convert Base64 to Blob
               function base64ToBlob(base64, mimeType) {
                  const byteString = atob(base64.split(',')[1]);
                  const arrayBuffer = new ArrayBuffer(byteString.length);
                  const uint8Array = new Uint8Array(arrayBuffer);
                  for (let i = 0; i < byteString.length; i++) {
                     uint8Array[i] = byteString.charCodeAt(i);
                  }
                  return new Blob([arrayBuffer], {
                     type: mimeType
                  });
               }

               const croppedImageBlob = base64ToBlob(croppedImageUrl, 'image/png');

               // Append the blob to FormData
               const formData = new FormData();
               formData.append('file', croppedImageBlob, 'profile-picture.png'); // Adjust filename as needed
               formData.append('useCase', 1);
               // Send the FormData to the server
               fetch('http://localhost:3000/user-images', {
                     method: 'POST',
                     body: formData,
                     credentials: 'include',
                  })
                  .then((response) => response.json())
                  .then((data) => {
                     console.log('Image uploaded:', data);
                     formChangeProfile = {
                        "profilePic": data.path,
                     }
                     // Optionally close the modal and update the profile picture
                     modalButton.click();
                     // ==================================
                     fetch('http://localhost:3000/users', {
                           method: 'PATCH',
                           headers: {
                              'Content-Type': 'application/json',
                           },
                           body: JSON.stringify(formChangeProfile),
                           credentials: 'include',
                        })
                        .then((response) => response.json())
                        .then((data) => {
                           console.log('Setted image successfully: ', data);
                           const avatar = document.getElementById('profile-avatar');
                           avatar.src = "http://localhost:3000" + data.profilePic;
                        })
                        .catch((error) => {
                           console.error('Error setting image:', error);
                        });
                  })
                  .catch((error) => {
                     console.error('Error uploading image:', error);
                  });
            } else {
               console.log('No image cropped yet.');
            }
         });

      });
   </script>


   <!-- Modal Structure -->
   <div id="mediaModal" class="modal">
      <span id="closeModal" class="close-button">&times;</span>
      <img id="modalImage" class="modal-content" />
      <div class="modal-backdrop"></div>
   </div>

   <style>
      .cropper-container {
         width: 458px;
         height: 400px;
      }

      .carousel-indicators-custom {
         display: flex;
         justify-content: center;
         margin-top: 10px;
      }

      .carousel-item img {
         height: 650px;
         /* Set a fixed height */
         width: auto;
         /* Let the width adjust automatically */
         object-fit: cover;
         /* Ensures the image fills the area while maintaining aspect ratio */
         border-radius: 10px;
         /* Optional: for rounded corners */
      }


      .carousel-indicators-custom button {
         width: 12px;
         height: 12px;
         border-radius: 50%;
         background-color: #ccc;
         border: none;
         margin: 0 5px;
         outline: none;
         transition: background-color 0.3s ease;
      }

      .carousel-indicators-custom button.active {
         background-color: #007bff;
      }

      .carousel-indicators-custom button:hover {
         background-color: #0056b3;
      }


      .close-button {
         position: absolute;
         z-index: 1;
         right: 20px;
         font-size: 40px;
         color: white;
      }

      .carousel-item {
         transition: transform 0.2s ease-in-out;
         /* Change 0.5s to your desired duration */
      }


      .close-button:hover {
         cursor: pointer;
      }

      /* Image grid container */
      .image-grid {
         display: grid;
         grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
         /* Ensures up to 5 items per row */
         gap: 15px;
         /* Space between images */
         padding: 10px;
         justify-content: center;
         /* Center images in grid */
      }

      /* Individual image items */
      .image-item {
         position: relative;
         width: 100%;
      }

      /* Image styling */
      .post-image {
         width: 100%;
         /* Ensures images fill the container */
         height: auto;
         /* Maintains aspect ratio */
         object-fit: cover;
         /* Ensures proper image cropping */
         border-radius: 8px;
         /* Optional: adds rounded corners */
         transition: transform 0.3s ease-in-out;
         /* Optional: adds smooth hover effect */
      }



      /* .profile-avatar:hover .dropdown-menu {
         display: block;
      } */


      /* Hover effect for images (optional) */
      .image-item:hover .post-image {
         transform: scale(1.05);
         /* Slight zoom effect on hover */
      }


      /* Style for the modal content */
      #mediaModal .modal-dialog {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
      }

      /* Dark overlay background when zooming in */
      #mediaModal .modal-backdrop {
         background-color: rgba(0, 0, 0, 0.7);
         /* Adjust opacity for darkness */
         z-index: -1;
         /* Make sure the backdrop stays behind the modal */
      }

      /* Modal image adjustments */
      #modalImage {
         width: 100%;
         /* Fill the width */
         height: 100%;
         /* Fill the height */
         object-fit: contain;
         /* Preserve aspect ratio and scale to fit within the modal */
         transition: transform 0.3s ease;
         /* Smooth zoom transition */
      }

      /* Close button (X) position */


      /* Optional: Zoom effect on hover */
      #mediaModal .modal-content:hover #modalImage {
         transform: scale(1.1);
         /* Slight zoom effect on hover */
      }

      /* Ensure modal content is centered */
      #mediaModal .modal-content {
         position: relative;
         padding: 0;
         overflow: hidden;
         background-color: transparent;
         /* No background color, just image */
         border: none;
      }

      /* Make sure modal dialog doesn't expand too much */
      #mediaModal .modal-dialog {
         max-width: 90%;
         /* Ensure modal doesn't overflow */
         max-height: 90vh;
         /* Limit the height to 90% of the viewport height */
         overflow: hidden;
      }

      @media (max-width: 630px) {
         #closeModal {
            top: 15px;
            right: 15px;
         }
      }
   </style>

   <!-- Cropper.js CSS -->

   <!-- Cropper.js JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>


   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>