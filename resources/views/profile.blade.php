<base href="{{ url('/') }}/">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
<link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/socialv.css?v=4.0.0') }}">
<link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/remixicon/fonts/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ asset('vendor/font-awesome-line-awesome/css/all.min.css') }}"> -->
<link rel="stylesheet" href="{{ asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
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
                              <div class="col-lg-8" id="multiplePosts">
                                 <div id="yourThoughtsSection" class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Tạo bài viết</h4>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img id="user-image" src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                                          </div>


                                          <form class="post-text ms-3 w-100 " data-bs-toggle="modal" id="createPost" data-bs-target="#post-modal"
                                             action="javascript:void();">
                                             <div id="communityList" class="community-list" style="display: none;">
                                                <ul>
                                                   <li class="community-item" data-topic-id="1">
                                                      <i class='bx bxs-group' style="font-size: 30px;"></i>
                                                      Community 1
                                                   </li>
                                                   <li class="community-item" data-topic-id="2">
                                                      <img src="avatar2.jpg" alt="Community 2 Avatar" class="community-avatar">
                                                      Community 2
                                                   </li>
                                                   <li class="community-item" data-topic-id="3">
                                                      <img src="avatar3.jpg" alt="Community 3 Avatar" class="community-avatar">
                                                      Community 3
                                                   </li>
                                                   <!-- Create Topic Option -->
                                                   <li id="createTopicOption" class="community-item create-topic-option">
                                                      <img src="create-icon.png" alt="Create Topic Icon" class="community-avatar">
                                                      Create a New Topic
                                                   </li>
                                                </ul>
                                             </div>
                                             <!-- Hidden Input for topicID -->
                                             <input type="hidden" id="topicID" name="topicID" value="">
                                             <div
                                                contenteditable="true"
                                                placeholder="Bạn đang nghĩ gì..."
                                                class="form-control mb-3 rounded"
                                                id="postContent"
                                                style="    box-shadow: none;border: none; resize: none; overflow-wrap: break-word; word-break: break-word; width: 100%; padding: 8px; line-height: 1.5; min-height: 48px; overflow-y: auto;"
                                                oninput="adjustContentHeight(this);">
                                                Bạn đang nghĩ gì...
                                             </div>
                                             <button id="realProfilePostSubmitButton" style="display: none;" type="submit">Submit</button>
                                          </form>
                                       </div>
                                       <style>
                                          .community-button {
                                             position: relative;
                                             width: 250px;
                                             padding: 10px;
                                             border: 1px solid #ddd;
                                             border-radius: 5px;
                                             background-color: white;
                                             cursor: pointer;
                                             text-align: center;
                                             font-weight: bold;
                                          }

                                          .community-list {
                                             position: absolute;
                                             top: 100%;
                                             /* Position just below the button */
                                             left: 0;
                                             width: 250px;
                                             max-height: 200px;
                                             /* Make it scrollable if the content is too long */
                                             overflow-y: auto;
                                             background-color: white;
                                             border: 1px solid #ddd;
                                             border-radius: 5px;
                                             z-index: 1000;
                                             /* Ensure it stays above other content */
                                             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                          }

                                          .community-list ul {
                                             padding: 0;
                                             margin: 0;
                                             list-style: none;
                                          }

                                          .community-list li {
                                             display: flex;
                                             align-items: center;
                                             /* padding: 8px 10px; */
                                             border-bottom: 1px solid #ddd;
                                             cursor: pointer;
                                          }

                                          .community-item {
                                             display: flex;
                                             align-items: center;
                                             justify-content: space-between;
                                             background-color: #ffffff;
                                             border-radius: 0px;
                                             padding: 6px;
                                             margin-bottom: 0px;
                                             box-shadow: none;
                                          }

                                          .community-list li:last-child {
                                             border-bottom: none;
                                          }

                                          .community-list li:hover {
                                             background-color: #f5f5f5;
                                          }

                                          .community-avatar {
                                             width: 30px;
                                             height: 30px;
                                             border-radius: 50%;
                                             margin-right: 10px;
                                             object-fit: cover;
                                          }

                                          .create-topic-option {
                                             font-weight: bold;
                                             color: #007bff;
                                          }

                                          .create-topic-option:hover {
                                             background-color: #e8f5ff;
                                          }
                                       </style>
                                       <!-- Image Preview Section -->
                                       <div id="imagePreviewProfilePost" class="d-grid mt-3" style="grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));"></div>
                                       <hr>
                                       <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap justify-content-between">
                                          <div class="profile-thoughts-left d-flex">
                                             <li class="me-3 mb-md-0 mb-2" id="uploadImageProfilePage">
                                                <a class="btn btn-soft-primary">
                                                   <img src="images/small/07.png" alt="icon" class="img-fluid me-2">
                                                   Ảnh/Video
                                                </a>
                                             </li>

                                             <input style="display:none" type="file" id="mediaUploadImagePostProfilePage" name="media" multiple>

                                             <li class="me-3" id="communityButton">
                                                <a class="btn btn-soft-primary">
                                                   <img src="images/small/09.png" alt="icon" class="img-fluid me-2"> Cộng Đồng
                                                </a>
                                             </li>
                                          </div>
                                          <div class="profile-thoughts-right">
                                             <li class="me-3" id="submitProfilePost" style="
                                                   display: flex;
                                                   align-items: center;
                                                ">
                                                <a href="#" class="btn">
                                                   Đăng
                                                </a>
                                                <i style="font-size: 30px;" class='bx bx-send'></i>
                                             </li>
                                          </div>
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

                                 <!-- <div class="notification-body">
                                    <p class="notification-message">Bạn chưa tạo bài viết nào</p>
                                 </div> -->
                                 <!-- <div class="col-sm-12 text-center">
                                    <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                                 </div> -->
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

   <!-- Modal Structure -->
   <div id="mediaModal" class="modal">
      <span id="closeModal" class="close-button">&times;</span>
      <div id="modalContent" class="modal-content"></div> <!-- Dynamic content here -->
      <div id="mediaThumbnails" class="thumbnail-container"></div>
      <div class="modal-backdrop"></div>
   </div>

   <style>
      .thumbnail-container {
         flex-direction: column;
         display: flex;
         justify-content: center;
         align-items: center;
         gap: 10px;
         margin-top: 20px;
         padding: 10px;
         overflow-x: auto;
      }

      .thumbnail-container img,
      .thumbnail-container video {
         width: 80px;
         height: 80px;
         object-fit: cover;
         cursor: pointer;
         border: 2px solid transparent;
         border-radius: 5px;
         transition: border-color 0.2s ease-in-out;
      }

      .thumbnail-container img:hover,
      .thumbnail-container video:hover {
         border-color: #007bff;
         /* Highlighted border */
      }
   </style>


   <div id="mediaModalProfilePost" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; z-index: 9999;">
      <div id="modalContentProfilePost" style="position: relative; max-width: 90%; max-height: 90%;">
         <span id="closeModalProfilePost" style="position: absolute; top: 10px; right: 10px; font-size: 24px; color: white; cursor: pointer;">&times;</span>
         <img id="modalImageProfilePost" style="width: 100%; height: auto; display: none;" />
         <video id="modalVideoProfilePost" controls style="width: 100%; height: auto; display: none;" autoplay></video>
      </div>
   </div>

   <!-- Create Topic Modal -->
   <div id="createTopicModal" class="modal">
      <div class="modal-content" style="text-align:left;width: 70%;height:auto">
         <span class="close-button">&times;</span>
         <h2>Tạo diễn đàn mới</h2>
         <hr>
         <div class="">
            <i class='bx bx-info-circle'></i> Khi bạn tạo nên diễn đàn mới. Bạn sẽ trở thành admin của diễn đàn đó và quản trị nó.
         </div>
         <br>
         <form id="createTopicForm">
            <div class="d-flex">
               <div class="label-left d-flex justifiy-content-center flex-column " style="width: 120px;float:right">
                  <label for="topicName" style="padding-bottom: 10px;">Tên diễn đàn</label>

               </div>
               <div class="label-right">
                  <input class="form-control" type="text" id="topicName" name="topicName" required />

               </div>
            </div>
            <div class="d-flex">
               <div class="label-left d-flex justifiy-content-center flex-column " style="width: 120px;float:right">
                  <label for="topicDes">Mô tả diễn đàn</label>

               </div>
               <div class="label-right">
                  <textarea class="form-control" id="topicDes" rows="3"></textarea>

               </div>
            </div>

            <style>
               .label-left {
                  margin-right: 20px;
               }

               .label-right {
                  width: calc(100% - 128px);
               }
            </style>

            <button type="submit" class="submit-button">Create</button>
         </form>
      </div>
   </div>

   <style>
      /* Modal container (hidden by default) */
      .modal {
         display: none;
         position: fixed;
         z-index: 1000;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.5);
         justify-content: center;
         align-items: center;
      }

      /* Modal content */
      .modal-content {
         background-color: white;
         padding: 20px;
         border-radius: 8px;
         width: 400px;
         max-width: 90%;
         text-align: center;
         position: relative;
      }

      /* Close button */
      .close-button {
         position: absolute;
         top: 10px;
         right: 10px;
         font-size: 18px;
         cursor: pointer;
      }

      /* Submit button */
      .submit-button {
         margin-top: 10px;
         padding: 10px 20px;
         background-color: coral;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      .submit-button:hover {
         background-color: darkorange;
      }
   </style>

   <!-- <div class=" col-sm-12 text-center">
                                    <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                                 </div> -->
   <script src="{{ asset('js/slider.js') }}"></script>
   <!-- masonry JavaScript -->
   <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
   <!-- SweetAlert JavaScript -->
   <script src="{{ asset('js/enchanter.js') }}"></script>
   <!-- SweetAlert JavaScript -->
   <script src="{{ asset('js/sweetalert.js') }}"></script>
   <!-- app JavaScript -->
   <script src="{{ asset('js/charts/weather-chart.js') }}"></script>
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
   <script src="{{ asset('js/lottie.js') }}"></script>
   <script src="{{ asset('js/cookie-check.js') }}"></script>

   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const path = window.location.pathname; // Get the current path
         const segments = path.split('/').filter(segment => segment !== '');
         const multiplePosts = document.getElementById('multiplePosts'); // Target the element
         const yourThoughtsSection = document.getElementById('yourThoughtsSection')

         function seperatePage() {

            if (path.startsWith("/user/")) {
               if (yourThoughtsSection) {
                  yourThoughtsSection.style.display = 'none';
                  fetchAndRenderPosts({
                     apiUrl: 'http://localhost:3000/posts/' + segments[3], // Replace with the actual post ID
                  });
               }
            } else if (path.startsWith("/topic/")) {

               if (multiplePosts) {
                  multiplePosts.style.display = 'none'; // Hide the element
               }

            } else {
               fetchAndRenderPosts();
            }
         }

         seperatePage();

         // Get modal elements
         const createTopicModal = document.getElementById('createTopicModal');
         const closeButton = document.querySelector('.close-button');
         const createTopicForm = document.getElementById('createTopicForm');

         // Function to open the modal
         function openModal() {
            createTopicModal.style.display = 'flex';
         }

         // Function to close the modal
         function closeModal() {
            createTopicModal.style.display = 'none';
         }

         // Event listener for close button
         closeButton.addEventListener('click', closeModal);

         // Event listener for form submission
         createTopicForm.addEventListener('submit', (e) => {
            e.preventDefault();


            const topicName = document.getElementById('topicName').value;
            const topicDes = document.getElementById('topicDes').value;
            console.log(topicDes);


            const newTopic = {
               name: topicName,
               topicDes: topicDes,
            };



            // Add logic to create a new topic (e.g., API call)
            fetch('http://localhost:3000/topics', {
                  method: 'POST',
                  headers: {
                     'Content-Type': 'application/json',
                  },
                  body: JSON.stringify(newTopic),
                  credentials: 'include',
               })
               .then((response) => response.json())
               .then((data) => {
                  console.log('Created Topic successfully: ', data);
                  window.location.href = ""
                  closeModal();
               })
               .catch((error) => {
                  console.error('Error setting image:', error);
               });
            // Close the modal after submission

         });

         // Add logic to open modal when the "Create Topic" button is clicked
         document.addEventListener('click', (e) => {
            if (e.target.id === 'createTopicOption') {
               console.log('Create Topic button clicked!');
               openModal();
            }
         });

         // Optional: Close modal when clicking outside the modal content
         window.addEventListener('click', (e) => {
            if (e.target === createTopicModal) {
               closeModal();
            }
         });



         // Add a placeholder effect
         const contentDiv = document.getElementById('postContent');


         contentDiv.addEventListener('focus', function() {
            const trimmedText = this.textContent.trim();
            if (this.getAttribute('placeholder') === trimmedText) {
               this.textContent = '';
            }
            // Change color on focus
         });

         contentDiv.addEventListener('blur', function() {
            if (this.textContent.trim() === '') {
               this.textContent = this.getAttribute('placeholder');
               this.style.color = '#aaa'; // Placeholder color
            }
         });


         const changeAvatarBtn = document.getElementById('change-avatar');
         const avatarInput = document.getElementById('avatar-input');
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

         const fakeInput = document.getElementById('mediaUploadImagePostProfilePage')
         const uploadImageProfilePageBtn = document.getElementById('uploadImageProfilePage');
         const imagePreviewContainer = document.getElementById('imagePreviewProfilePost');
         const avatar = document.getElementById('profile-avatar');
         const avatarMenu = document.getElementById('avatar-menu');
         const coverImage = document.getElementById('cover-image');
         const mediaModalProfilePost = document.getElementById('mediaModalProfilePost');
         const modalImageProfilePost = document.getElementById('modalImageProfilePost');
         const modalVideoProfilePost = document.getElementById('modalVideoProfilePost');
         const realsubmitProfilePostBtn = document.getElementById('realProfilePostSubmitButton')
         const submitProfilePostBtn = document.getElementById('submitProfilePost')
         const communityButton = document.getElementById('communityButton');
         const communityList = document.getElementById('communityList');
         const topicIDInput = document.getElementById('topicID');


         submitProfilePostBtn.addEventListener('click', function() {
            document.getElementById('realProfilePostSubmitButton').click();
            console.log("hello");

         });

         $('#createPost').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission                                                  

            // Create a FormData object
            const formData = new FormData();
            formData.append('content', $('#postContent').text());
            // alert($('#postContent').val());            

            // Check topicID and append only if it has a valid value
            const topicID = $('#topicID').val(); // Assuming #topicID is the dropdown/select element
            if (topicID && topicID.trim() !== '') {
               formData.append('topicID', topicID); // Append only valid topicID
            }

            // Append selected files to FormData
            const files = document.getElementById('mediaUploadImagePostProfilePage').files;
            for (let i = 0; i < files.length; i++) {
               formData.append('media', files[i]); // 'media' matches the backend interceptor
            }

            // Debugging: Check FormData
            for (let [key, value] of formData.entries()) {
               console.log(`${key}:`, value);
            }




            // Submit the form data using AJAX
            fetch('http://localhost:3000/posts', {
                  method: 'POST',
                  body: formData, // Automatically handles multipart/form-data
                  credentials: 'include', // Includes cookies for cross-origin requests
               })
               .then((response) => {
                  if (!response.ok) {
                     throw new Error(`HTTP error! status: ${response.status}`);
                  }
                  fetchAndRenderPosts();
                  return response.json(); // Parse JSON response
               })
               .then((data) => {
                  console.log('Post created successfully:', data);
               })
               .catch((error) => {
                  console.error('Error creating post:', error);
               });
         });

         // const createTopicButton = document.getElementById('createTopicId');
         // createTopicButton.addEventListener('click', () => {
         //    console.log('Create Topic button clicked!');
         //    // Add logic to open a modal or navigate to the topic creation page
         // });

         // Toggle community list display
         communityButton.addEventListener('click', () => {
            if (communityList.style.display === 'none' || communityList.style.display === '') {
               communityList.style.display = 'block';
            } else {
               communityList.style.display = 'none';
            }
         });

         // Handle selection from the community list
         communityList.addEventListener('click', (event) => {
            const item = event.target.closest('.community-item');
            if (!item) return;

            // Handle "Create Topic" click
            if (item.id === 'createTopicOption') {
               console.log('Create Topic button clicked!');
               // Add logic for creating a new topic (e.g., open a modal)
               return;
            }

            // Handle regular community selection
            const selectedCommunity = item.textContent.trim();
            const selectedTopicID = item.getAttribute('data-topic-id');

            // Update the hidden input
            topicIDInput.value = selectedTopicID;

            // Update button text to show the selected community
            const buttonDiv = communityButton.querySelector('div');
            buttonDiv.textContent = selectedCommunity;

            // Hide the community list
            communityList.style.display = 'none';
         });

         // Optional: Hide list when clicking outside
         document.addEventListener('click', (event) => {
            if (!communityList.contains(event.target) && !communityButton.contains(event.target)) {
               communityList.style.display = 'none';
            }
         });


         function adjustContentHeight(div) {
            if (div.textContent === '') {
               div.style.height = '48px'; // Default height if empty
            } else {
               div.style.height = 'auto'; // Reset height
               div.style.height = div.scrollHeight + 'px'; // Adjust to content
            }
         }


         uploadImageProfilePageBtn.addEventListener('click', () => {
            console.log("click");
            fakeInput.click()
         });


         fakeInput.addEventListener('change', function() {
            Array.from(fakeInput.files).forEach((file) => {
               const reader = new FileReader();
               reader.onload = function(event) {
                  // Create preview card with your style
                  const previewCard = document.createElement('div');
                  previewCard.style.position = 'relative';
                  previewCard.style.border = '1px solid #ddd';
                  previewCard.style.borderRadius = '8px';
                  previewCard.style.overflow = 'hidden';
                  previewCard.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
                  previewCard.style.marginRight = '5px';
                  previewCard.style.marginBottom = '5px';
                  previewCard.style.width = '150px';
                  previewCard.style.height = '100px';
                  previewCard.style.cursor = 'pointer';

                  // Add image or video preview
                  if (file.type.startsWith('image/')) {
                     const imgElement = document.createElement('img');
                     imgElement.src = event.target.result;
                     imgElement.style.width = '100%';
                     imgElement.style.height = '100px';
                     imgElement.style.objectFit = 'cover';
                     previewCard.appendChild(imgElement);

                     previewCard.addEventListener('click', function() {
                        console.log('clickedddd');

                        modalImageProfilePost.style.display = 'block';
                        modalVideoProfilePost.style.display = 'none';
                        modalImageProfilePost.src = event.target.result;
                        mediaModalProfilePost.style.display = 'flex';
                     });
                  } else if (file.type.startsWith('video/')) {
                     const videoElement = document.createElement('video');
                     videoElement.src = event.target.result;
                     videoElement.style.width = '100%';
                     videoElement.style.height = '100px';
                     videoElement.style.objectFit = 'cover';
                     videoElement.controls = true;
                     previewCard.appendChild(videoElement);

                     previewCard.addEventListener('click', function() {
                        modalVideoProfilePost.style.display = 'block';
                        modalImageProfilePost.style.display = 'none';
                        modalVideoProfilePost.src = event.target.result;
                        mediaModalProfilePost.style.display = 'flex';
                     });
                  }

                  // Add "X" remove button
                  const removeButton = document.createElement('button');
                  removeButton.textContent = '✖';
                  removeButton.style.position = 'absolute';
                  removeButton.style.top = '5px';
                  removeButton.style.right = '5px';
                  removeButton.style.background = 'rgba(255, 255, 255, 0.8)';
                  removeButton.style.border = 'none';
                  removeButton.style.borderRadius = '50%';
                  removeButton.style.cursor = 'pointer';
                  removeButton.style.padding = '5px';
                  removeButton.addEventListener('click', function(e) {
                     e.stopPropagation(); // Prevent modal opening on click
                     previewCard.remove();
                  });

                  previewCard.appendChild(removeButton);
                  imagePreviewContainer.appendChild(previewCard);
               };
               reader.readAsDataURL(file);
            });
         });


         // Close modal
         closeModalProfilePost.addEventListener('click', function() {
            mediaModalProfilePost.style.display = 'none';
            modalImageProfilePost.src = '';
            modalVideoProfilePost.src = '';
         });

         // Close modal when clicking outside modal content
         mediaModalProfilePost.addEventListener('click', function(event) {
            if (event.target === mediaModalProfilePost) {
               mediaModalProfilePost.style.display = 'none';
               modalImageProfilePost.src = '';
               modalVideoProfilePost.src = '';
            }
         });




         avatar.addEventListener('click', () => {
            console.log("click");
            avatarMenu.style.display = avatarMenu.style.display === 'block' ? 'none' : 'block';
         });



         // Fetch both user posts and user details
         function fetchAndRenderPosts({
            apiUrl = 'http://localhost:3000/posts/user',
            detailsUrl = 'http://localhost:3000/users/details'
         } = {}) {
            Promise.all([
                  fetch(apiUrl, {
                     method: 'GET',
                     credentials: 'include',
                  }),
                  fetch(detailsUrl, {
                     method: 'GET',
                     credentials: 'include',
                  })
               ])
               .then(responses => Promise.all(responses.map(response => {
                  if (!response.ok) {
                     return response.json().then(errorData => {
                        if (errorData.error === "Session ID not found in cookies") {
                           window.location.href = "/login";
                        }
                     });
                  }
                  return response.json();
               })))
               .then(([postsData, userDetailsData]) => {
                  console.log('Post response:', postsData);
                  console.log('User details response:', userDetailsData);

                  // Update the user interface
                  const avatar = document.getElementById('profile-avatar');
                  avatar.src = `http://localhost:3000${userDetailsData.profilePic}`;
                  const userName = document.getElementById('profile-name');
                  const coverImage = document.getElementById('profile-cover');
                  const userImage = document.getElementById('user-image');
                  const cardUserName = document.getElementById('profile-card-name');
                  userName.innerHTML = userDetailsData.username;
                  cardUserName.innerHTML = userDetailsData.username;
                  userImage.src = `http://localhost:3000${userDetailsData.profilePic}`;
                  coverImage.style.backgroundImage = `url(http://localhost:3000${userDetailsData.coverPic})`;
                  coverImage.style.backgroundSize = 'cover';
                  coverImage.style.backgroundPosition = 'center';
                  coverImage.style.backgroundRepeat = 'no-repeat';

                  const combinedData = {
                     posts: postsData,
                     userDetails: userDetailsData
                  };

                  if (path.startsWith("/user/")) {
                     renderSinglePost(postsData, userDetailsData)
                  } else if (path.startsWith("/topic/")) {
                     renderSinglePost(postsData, userDetailsData)

                  } else {
                     renderPosts(combinedData);
                  }


               })
               .catch(error => {
                  console.error('Error in fetching posts or user details:', error);
               });
         }

         function renderSinglePost(post, userDetails) {
            const container = document.getElementById('posts-container');
            container.innerHTML = ''; // Clear the container before adding new content

            // Safely access post properties
            const images = post.media || [];
            const content = post.content || '';
            const createdAt = post.createdAt || '';
            const topic = post.topic || {};
            const topicName = topic.name || '';
            const postID = post.postID || '';

            let postHTML = `
        <div class="card card-block card-stretch card-height">
            <div class="card-body">
                <div class="user-post-data">
                    <div class="d-flex justify-content-between">
                        <div class="me-2">
                            <img class="rounded-circle" style="width: 60px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="http://localhost:3000${userDetails.profilePic}" alt="User avatar">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-0 d-inline-block">${userDetails.username}</h5>
                                    <span class="mb-0 d-inline-block">đã thêm bài viết mới</span>`;

            // Add topic if available
            if (topicName) {
               postHTML += `<p class="mb-0" style="font-weight: 600; color: coral;">${topicName}</p>`;
            }

            postHTML += `
                                </div>
                                <div class="container-right d-flex">
                                    <p class="mb-0 text-primary" style="margin-right: 10px">${new Date(createdAt).toLocaleDateString()}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <p>${content}</p>
                </div>
                <div class="user-post">
                    <div id="carouselExampleControls${postID}" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
                        <div class="carousel-inner">`;

            // Render post images if available
            images.forEach((image, index) => {
               const activeClass = index === 0 ? 'active' : '';
               postHTML += `
                            <div class="carousel-item ${activeClass}">
                                <a href="#" class="open-lightbox" data-image="http://localhost:3000${image}">
                                    <img class="d-block w-100" src="http://localhost:3000${image}" alt="Post image">
                                </a>
                            </div>`;
            });

            postHTML += `
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls${postID}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls${postID}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>`;

            container.innerHTML = postHTML; // Insert the post HTML into the container
         }


         function renderPosts(combinedData) {
            const container = document.getElementById('posts-container');
            container.innerHTML = '';
            const {
               posts,
               userDetails
            } = combinedData;

            if (!Array.isArray(posts.posts) || posts.posts.length === 0) {
               let postHTML = `
                     <div class="notification-body">
                        <p class="notification-message">Bạn chưa tạo bài viết nào</p>
                     </div>`;
               container.innerHTML += postHTML;
            }

            posts.posts.forEach(post => {
               const media = post.media || [];
               let postHTML = `
               <div class="card card-block card-stretch card-height">
               <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex justify-content-between">
                           <div class="me-2">
                                 <img class="rounded-circle" style="width: 60px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" img-fluid" src="http://localhost:3000${userDetails.profilePic}" alt="User avatar">
                           </div>
                           <div class="w-100">
                                 <div class="d-flex justify-content-between">
                                    <div>
                                       <h5 class="mb-0 d-inline-block">${userDetails.username}</h5>
                                       <span class="mb-0 d-inline-block">đã thêm bài viết mới</span>`;

               if (post.topicID) {
                  postHTML += `
                                       <p class="mb-0" style="font-weight: 600; color: coral;">${post.topic.name}</p>
                                    `;
               }

               postHTML += `
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
               `;

               // Check if the post contains only image files
               const hasOnlyImages = media.every(file => {
                  const fileExtension = file.split('.').pop().toLowerCase();
                  return ['jpg', 'jpeg', 'png', 'gif', 'bmp'].includes(fileExtension);
               });

               if (hasOnlyImages) {
                  // Carousel for posts with only images
                  postHTML += `<div id="carouselExampleControls${post.postID}" class="carousel slide" data-bs-ride="carousel" data-interval="false" data-wrap="false">
                                    <div class="carousel-inner">`;

                  media.forEach((file, index) => {
                     const activeClass = index === 0 ? 'active' : '';
                     postHTML += `
                           <div class="carousel-item ${activeClass}">
                                 <a href="#" class="open-lightbox" data-image="http://localhost:3000${file}">
                                    <img class="d-block w-100" src="http://localhost:3000${file}" alt="Post media">
                                 </a>
                           </div>
                        `;
                  });

                  postHTML += `
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls${post.postID}" role="button" data-bs-slide="prev">
                                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                       <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls${post.postID}" role="button" data-bs-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                       <span class="sr-only">Next</span>
                                    </a>
                                    <div class="carousel-indicators">`;

                  media.forEach((_, index) => {
                     const activeClass = index === 0 ? 'active' : '';
                     postHTML += `
                           <button type="button" data-bs-target="#carouselExampleControls${post.postID}" data-bs-slide-to="${index}" class="${activeClass}" aria-current="${activeClass ? 'true' : 'false'}"></button>
                        `;
                  });

                  postHTML += `</div><!-- End of indicators --> </div>`;
               } else {
                  // Grid layout for posts with videos and images
                  postHTML += `
                        <div class="media-grid">
                           <div class="media-left">
                     `;

                  const largeMedia = media[0]; // Use the first media as the large one
                  const remainingMedia = media.slice(1); // The rest as smaller ones

                  // Render the large media (left)
                  const largeMediaExtension = largeMedia.split('.').pop().toLowerCase();
                  if (['mp4', 'webm', 'ogg'].includes(largeMediaExtension)) {
                     postHTML += `
                           <div class="large-media">
                                 <a href="#" class="open-lightbox" data-video="http://localhost:3000${largeMedia}">
                                    <video class="d-block w-100" controls>
                                       <source src="http://localhost:3000${largeMedia}" type="video/${largeMediaExtension}">
                                       Your browser does not support the video tag.
                                    </video>
                                 </a>
                           </div>
                        `;
                  } else {
                     postHTML += `
                           <div class="large-media">
                                 <a href="#" class="open-lightbox" data-image="http://localhost:3000${largeMedia}">
                                    <img class="d-block w-100" src="http://localhost:3000${largeMedia}" alt="Post media">
                                 </a>
                           </div>
                        `;
                  }

                  postHTML += `</div>`; // End of the large media container

                  postHTML += `
                           <div class="media-right">
                     `;

                  // Render the remaining smaller media (right-side grid)
                  postHTML += `<div class="media-right">`;

                  remainingMedia.forEach((file, index) => {
                     const fileExtension = file.split('.').pop().toLowerCase();
                     postHTML += `
                        <div class="small-media">
                              <a href="#" class="open-lightbox" ${
                                 ['mp4', 'webm', 'ogg'].includes(fileExtension)
                                    ? `data-video="http://localhost:3000${file}"`
                                    : `data-image="http://localhost:3000${file}"`
                              }>
                                 ${
                                    ['mp4', 'webm', 'ogg'].includes(fileExtension)
                                          ? `<video class="d-block w-100" controls>
                                                <source src="http://localhost:3000${file}" type="video/${fileExtension}">
                                                Your browser does not support the video tag.
                                             </video>`
                                          : `<img class="d-block w-100" src="http://localhost:3000${file}" alt="Post media">`
                                 }
                              </a>
                              ${
                                 index === 1 && remainingMedia.length > 2
                                    ? `<div class="overlay-text">+${remainingMedia.length - 2}</div>`
                                    : ''
                              }
                        </div>
                     `;
                  });

                  postHTML += `</div></div>`; // End of media-right
                  // End of media-right and media-grid

               }

               postHTML += `
                     </div>
                     <hr>
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center justify-content-between">
                           <div class="d-flex align-items-center">
                                 <div class="like-data">
                                    <div class="dropdown">
                                       <div class="vote-container" style="padding:3px; border-radius: 15px; width: 80px">
                                             <button class="vote-button upvote" id="upvoteButton">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                   <path d="M12 4l-8 8h16z"></path>
                                                </svg>
                                             </button>
                                             <span class="vote-count" id="voteCount">0</span>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="total-comment-block">
                           <div class="dropdown">
                                 <span class="dropdown-toggle">
                                 ${post.topicID ?              
                                    `<a href="topic/${post.topicID}/post/${post.postID}">${post.commentsCount} Bình Luận</a>`:
                                    `<a href="user/${post.userID}/post/${post.postID}">${post.commentsCount} Bình Luận</a>`}
                                 </span>
                           </div>
                        </div>
                     </div>
               </div>
            </div>`;

               container.innerHTML += postHTML;
            });

            // Add zoom functionality for images
            const lightboxLinks = document.querySelectorAll('.open-lightbox');
            const modalContent = document.getElementById('modalContent');
            const mediaModal = document.getElementById('mediaModal');
            const closeModal = document.getElementById('closeModal');
            const mediaThumbnails = document.getElementById('mediaThumbnails');

            let currentMediaIndex = 0;
            let allMedia = []; // Will hold all media URLs for navigation

            // Open lightbox and populate thumbnails
            lightboxLinks.forEach((link, index) => {
               link.addEventListener('click', function(event) {
                  event.preventDefault();

                  const mediaGroup = link.closest('.media-grid'); // Find all media in this post
                  const mediaLinks = mediaGroup.querySelectorAll('.open-lightbox');

                  // Gather all media for this post
                  allMedia = Array.from(mediaLinks).map((media) => ({
                     type: media.dataset.image ? 'image' : 'video',
                     src: media.dataset.image || media.dataset.video,
                  }));

                  currentMediaIndex = index; // Set the current media index
                  showLightboxMedia(allMedia[currentMediaIndex]);

                  // Generate thumbnails
                  populateThumbnails();

                  mediaModal.style.display = 'flex';
               });
            });

            // Function to show a specific media in the lightbox
            function showLightboxMedia(media) {
               if (media.type === 'image') {
                  modalContent.innerHTML = `<img class="d-block w-100" src="${media.src}" alt="Lightbox image">`;
               } else if (media.type === 'video') {
                  modalContent.innerHTML = `
         <video class="d-block w-100" controls autoplay>
            <source src="${media.src}" type="video/${media.src.split('.').pop()}">
            Your browser does not support the video tag.
         </video>`;
               }
            }

            // Populate thumbnails
            function populateThumbnails() {
               mediaThumbnails.innerHTML = ''; // Clear existing thumbnails
               allMedia.forEach((media, index) => {
                  const thumbnail = document.createElement(media.type === 'image' ? 'img' : 'video');
                  thumbnail.src = media.src;
                  thumbnail.alt = `Media ${index + 1}`;
                  thumbnail.className = index === currentMediaIndex ? 'active-thumbnail' : '';
                  thumbnail.addEventListener('click', () => {
                     currentMediaIndex = index; // Update current index
                     showLightboxMedia(allMedia[currentMediaIndex]);
                     highlightActiveThumbnail();
                  });
                  mediaThumbnails.appendChild(thumbnail);
               });
            }

            // Highlight the active thumbnail
            function highlightActiveThumbnail() {
               const thumbnails = mediaThumbnails.querySelectorAll('img, video');
               thumbnails.forEach((thumbnail, index) => {
                  if (index === currentMediaIndex) {
                     thumbnail.classList.add('active-thumbnail');
                  } else {
                     thumbnail.classList.remove('active-thumbnail');
                  }
               });
            }

            // Close modal
            closeModal.addEventListener('click', function() {
               mediaModal.style.display = 'none';
               modalContent.innerHTML = '';
               mediaThumbnails.innerHTML = '';
               allMedia = [];
            });

            // Close modal when clicking outside modal content
            mediaModal.addEventListener('click', function(event) {
               if (event.target === mediaModal) {
                  mediaModal.style.display = 'none';
                  modalContent.innerHTML = '';
                  mediaThumbnails.innerHTML = '';
                  allMedia = [];
               }
            });
         }




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


      });
   </script>




   <style>
      .small-media {
         position: relative;
         display: inline-block;
         margin: 5px;
      }

      /* .media-content {
    position: relative;
} */

      .overlay-text {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         color: white;
         font-size: 24px;
         background: rgba(0, 0, 0, 0.5);
         /* Transparent black background */
         padding: 10px;
         border-radius: 5px;
         text-align: center;
      }

      .overlay-remain-media .media-content {
         position: relative;
      }

      .overlay-remain-media .overlay-text {
         display: block;
      }

      /* Container for media grid */
      .media-grid {
         display: grid;
         grid-template-columns: 2fr 1fr;
         /* 2 parts for large media, 1 part for small media */
         gap: 5px;
         /* Gap between left and right sections */
         margin-bottom: 20px;
         height: auto;
      }

      /* Large media section */
      .media-left {
         width: 100%;
         position: relative;
         max-height: 500px;
         /* Limit max height */
         overflow: hidden;
         display: flex;
         align-items: stretch;
         /* Ensures the large media stays stretched */
      }

      .media-left img,
      .media-left video {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      /* Right section for small media */
      .media-right {
         display: grid;
         grid-template-columns: 1fr;
         /* Single column layout */
         gap: 10px;
         /* Add gap between stacked media items */
         height: 100%;
         grid-auto-rows: 1fr;
         position: relative;
      }

      /* Small media styling - Square layout */
      .small-media {
         position: relative;
         width: 100%;
         height: 0;
         padding-bottom: 100%;
         /* This makes the height equal to the width */
         overflow: hidden;
         max-height: 150px;
         /* Limit height of small media */
      }

      .small-media img,
      .small-media video {
         position: absolute;
         width: 100%;
         height: 100%;
         object-fit: cover;
         border-radius: 8px;
      }

      /* Overlay for remaining media */
      .overlay-remain-media {
         position: absolute;
         top: 0;
         right: 0;
         background-color: rgba(0, 0, 0, 0.5);
         color: white;
         padding: 5px;
         font-size: 14px;
         font-weight: bold;
         border-radius: 5px;
      }

      /* The "remaining media" count overlay */
      .overlay-text {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }

      /* Hide the 3rd media and beyond, and show overlay on the second visible media */
      .media-right .small-media:nth-child(n+3) {
         display: none;
      }

      .media-right .small-media:nth-child(2) {
         position: relative;
      }

      .media-right .small-media:nth-child(2) .overlay-text {
         display: block;
         /* Show overlay text on the second item */
      }

      /* Ensure all elements fit correctly on small screens */
      @media (max-width: 768px) {
         .media-grid {
            grid-template-columns: 1fr;
            /* Stack all media vertically on smaller screens */
         }

         .media-left {
            margin-bottom: 10px;
         }
      }





      .dropdown-toggle:hover {
         color: #50b5ff;
         cursor: pointer;
         text-decoration: underline;
      }

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