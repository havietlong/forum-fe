<div id="content-page" class="content-page">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 row m-0 p-0">
            <div class="col-sm-12">
               <div id="post-modal-data" class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Tạo bài viết mới</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="user-img">
                           <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                        </div>
                        <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal"
                           action="javascript:void();">
                           <input type="text" class="form-control rounded" placeholder="Bạn đang nghĩ gì....."
                              style="border:none;">
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
                  <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog   modal-fullscreen-sm-down">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class="ri-close-fill"></i></button>
                           </div>
                           <div class="modal-body">
                              <div class=" d-flex flex-column">
                                 <div class="d-flex align-items-center">
                                    <div class="user-img">
                                       <img src="images/user/1.jpg" alt="userimg"
                                          class="avatar-60 rounded-circle img-fluid avatar-full">
                                    </div>
                                    <form class="post-text ms-3 w-100" id="createPost">
                                       <div id="communityList" style="display: none; position: absolute; background: white; border: 1px solid #ccc; z-index: 1000;">
                                          <div class="community-item" data-topic-id="1">Community 1</div>
                                          <div class="community-item" data-topic-id="2">Community 2</div>
                                          <div class="community-item" data-topic-id="3">Community 3</div>
                                       </div>

                                       <!-- Hidden Input for topicID -->
                                       <input type="hidden" id="topicID" name="topicID" value="">

                                       <div
                                          contenteditable="true"
                                          placeholder="Bạn đang nghĩ gì..."
                                          class="form-control mb-3 rounded"
                                          id="postContent"
                                          style="border: none; resize: none; overflow-wrap: break-word; word-break: break-word; width: 100%; padding: 8px; line-height: 1.5; min-height: 48px; overflow-y: auto;"
                                          oninput="adjustContentHeight(this);">
                                          Bạn đang nghĩ gì...
                                       </div>

                                       <!-- Image Preview Section -->
                                       <div id="imagePreview" class="d-grid mt-3" style="grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));"></div>

                                       <style>
                                          #communityList {
                                             width: 50%;
                                             max-height: 200px;
                                             overflow-y: auto;
                                             background-color: #fff;

                                          }

                                          .community-item {
                                             display: flex;
                                             align-items: center;
                                             justify-content: space-between;
                                             background-color: #ffffff;
                                             padding: 10px;
                                             box-shadow: none;
                                             border-radius: 0px;
                                             margin-bottom: 0px;
                                          }

                                          .community-item:hover {
                                             background-color: #f0f0f0;
                                          }


                                          #imagePreview div {
                                             transition: transform 0.2s;
                                          }

                                          #imagePreview div:hover {
                                             transform: scale(1.05);
                                             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
                                          }

                                          #imagePreview button:hover {
                                             background: rgba(255, 0, 0, 0.8);
                                             color: white;
                                          }
                                       </style>


                                       <button type="submit" id="realSubmitButton" style="display: none;">Submit</button>
                                    </form>

                                    <div id="mediaModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; z-index: 9999;">
                                       <div id="modalContent" style="position: relative; max-width: 90%; max-height: 90%;">
                                          <span id="closeModal" style="position: absolute; top: 10px; right: 10px; font-size: 24px; color: white; cursor: pointer;">&times;</span>
                                          <img id="modalImage" style="width: 100%; height: auto; display: none;" />
                                          <video id="modalVideo" controls style="width: 100%; height: auto; display: none;" autoplay></video>
                                       </div>
                                    </div>

                                 </div>
                                 <input style="display:none" type="file" id="media" name="media" multiple>
                              </div>
                              <hr>
                              <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                 <li class="col-md-6 mb-3" id="addImageButton">
                                    <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                          src="images/small/07.png" alt="icon" class="img-fluid">
                                       Photo/Video</div>
                                 </li>
                                 <!-- <li class="col-md-6 mb-3">
                                    <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                          src="images/small/08.png" alt="icon" class="img-fluid"> Tag
                                       Friend</div>
                                 </li> -->
                                 <li class="col-md-6 mb-3" id="communityButton">
                                    <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                          src="images/small/09.png" alt="icon" class="img-fluid">
                                       Cộng đồng</div>
                                 </li>

                                 <style>
                                    #communityButton:hover {
                                       cursor: pointer;
                                    }
                                 </style>
                                 <!-- <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="images/small/10.png" alt="icon" class="img-fluid"> Check
                                             in</div>
                                       </li> -->
                                 <!-- <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="images/small/11.png" alt="icon" class="img-fluid"> Live
                                             Video</div>
                                       </li> -->
                                 <!-- <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="images/small/12.png" alt="icon" class="img-fluid"> Gif
                                          </div>
                                       </li> -->
                                 <!-- <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="images/small/13.png" alt="icon" class="img-fluid"> Watch
                                             Party</div>
                                       </li>
                                       <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="images/small/14.png" alt="icon" class="img-fluid"> Play
                                             with Friends</div>
                                       </li> -->
                              </ul>
                              <!-- <hr> -->
                              <!-- <div class="other-option">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="user-img me-3">
                                                <img src="images/user/1.jpg" alt="userimg"
                                                   class="avatar-60 rounded-circle img-fluid">
                                             </div>
                                             <h6>Your Story</h6>
                                          </div>
                                          <div class="card-post-toolbar">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false" role="button">
                                                   <span class="btn btn-primary">Friend</span>
                                                </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                   <a class="dropdown-item p-3" href="#">
                                                      <div class="d-flex align-items-top">
                                                         <i class="ri-save-line h4"></i>
                                                         <div class="data ms-2">
                                                            <h6>Public</h6>
                                                            <p class="mb-0">Anyone on or off Facebook</p>
                                                         </div>
                                                      </div>
                                                   </a>
                                                   <a class="dropdown-item p-3" href="#">
                                                      <div class="d-flex align-items-top">
                                                         <i class="ri-close-circle-line h4"></i>
                                                         <div class="data ms-2">
                                                            <h6>Friends</h6>
                                                            <p class="mb-0">Your Friend on facebook</p>
                                                         </div>
                                                      </div>
                                                   </a>
                                                   <a class="dropdown-item p-3" href="#">
                                                      <div class="d-flex align-items-top">
                                                         <i class="ri-user-unfollow-line h4"></i>
                                                         <div class="data ms-2">
                                                            <h6>Friends except</h6>
                                                            <p class="mb-0">Don't show to some friends</p>
                                                         </div>
                                                      </div>
                                                   </a>
                                                   <a class="dropdown-item p-3" href="#">
                                                      <div class="d-flex align-items-top">
                                                         <i class="ri-notification-line h4"></i>
                                                         <div class="data ms-2">
                                                            <h6>Only Me</h6>
                                                            <p class="mb-0">Only me</p>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                              <button type="submit" id="externalSubmitButton" data-bs-dismiss="modal" class="btn btn-primary d-block w-100 mt-3">Post</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> >
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
                                    <p class="mb-0" style="font-weight: 600;
                                    color: coral;">Gái Gọi Hà Nội Cao Cấp</p>
                                 </div>
                                 <div class="container-right d-flex">
                                    <p class="mb-0 text-primary" style="margin-right: 10px">Vừa xong</p>
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
                              <a href="/details" target="_blank" rel="noopener noreferrer">
                                 <img src="images/page-img/a1.jpg" alt="post-image"
                                    class="img-fluid rounded w-100">
                              </a>
                           </div>

                           <div class="row-span-1">
                              <a href="/details" target="_blank" rel="noopener noreferrer">
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
                     <!-- <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Thích
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Chia sẻ</span></a>                           
                        </div>
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
                  </div> -->
                     <div class="comment-area mt-3">
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
            <!-- 
            <div class="horizontal-bar">
               <span class="text">GÁI GỌI HÀ NỘI GIÁ RẺ</span>
            </div>
            <div class="col-sm-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex justify-content-between">
                           <div class="me-3">
                              <img class="rounded-circle img-fluid" src="images/user/03.jpg" alt="">
                           </div>
                           <div class="w-100">
                              <div class="d-flex  justify-content-between">
                                 <div class="">
                                    <h5 class="mb-0 d-inline-block">Mỹ Linh </h5>
                                    <span class="mb-0 d-inline-block">Đã thêm bài viết mới</span>
                                    <p class="mb-0 text-primary">1 giờ trước</p>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                       </span>
                                       <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-save-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Save Post</h6>
                                                   <p class="mb-0">Add this to your saved items</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-close-circle-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Hide Post</h6>
                                                   <p class="mb-0">See fewer posts like this.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-user-unfollow-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Unfollow User</h6>
                                                   <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-notification-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Notifications</h6>
                                                   <p class="mb-0">Turn on notifications for this post</p>
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
                        <p>Đánh giá chung: Trẻ teen 2k5 rất xinh xắn, gương mặt là điểm nhấn không thể bỏ qua của
                           em, anh em thích gái xinh thì gặp em là chuẩn gu rồi, da trắng hồng hào cảm giác mến em
                           từ lần gặp đầu tiên
                           <br>
                           Vòng 1: ngực real, tròn trịa, mềm mại, đầu ti nhỏ hồng hào, em mặc rất sexy nên chỉ mới
                           gặp đã chào cờ rồi
                           <br>
                           Vòng 2: eo nhỏ, dáng đẹp, bụng phẳng lỳ vô cùng chuẩn mực
                           <br>
                           Vòng 3: mông cong mịn và đẹp, gợi cảm, doggy hay cưỡi ngựa thì chỉ có 1 từ là Tuyệt
                           <br>
                           Vòng 4: luôn được chăm chút sạch sẽ, nước nôi ổn, thơm tho, co bóp đàn hồi tốt, fan
                           tevet sẽ rất khoái món này
                        </p>
                     </div>
                     <div class="user-post">
                        <a href="javascript:void();"><img src="images/page-img/b1.jpg" alt="post-image"
                              class="img-fluid rounded w-100"></a>
                     </div> -->
            <!-- <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Gặp em mọi thứ ưng ý, màn sevice nóng bỏng, em hôn rất nhiệt tình.</p>
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
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Trông ngon lành quá, nhìn như mẫu luôn. Hàng củ quá đẳng cấp</p>
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
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                        </div>
                     </form>
                  </div> -->
            <!-- </div>
               </div>
            </div> -->

         </div>
         <div class="col-lg-4">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <div class="communities-title">Bài Viết Gần Đây</div>
                  </div>
               </div>
               <div class="card-body">
                  <ul class="media-story list-inline m-0 p-0">
                     <!-- <li class="d-flex mb-3 align-items-center">
                     <i class="ri-add-line"></i>
                     <div class="stories-data ms-3">
                        <h5>Tạo bài viết của bạn</h5>
                   
                     </div>
                  </li> -->
                     <div class="communities-container">


                        <!-- Mỗi ô cộng đồng -->
                        <div class="community-item">
                           <div class="community-avatar"></div>
                           <div class="community-info">
                              <div class="community-topic">Olboiyo</div>
                              <div class="community-name">r/Olboiyo</div>
                           </div>
                           <div class="vote-container">
                              <button class="vote-button upvote" id="upvoteButton1">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 4l-8 8h16z"></path>
                                 </svg>
                              </button>
                              <span class="vote-count" id="voteCount1">0</span>
                              <button class="vote-button downvote" id="downvoteButton1">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 20l8-8H4z"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>

                        <div class="community-item">
                           <div class="community-avatar"></div>
                           <div class="community-info">
                              <div class="community-topic">Long</div>
                              <div class="community-name">r/Long</div>
                           </div>
                           <div class="vote-container">
                              <button class="vote-button upvote" id="upvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 4l-8 8h16z"></path>
                                 </svg>
                              </button>
                              <span class="vote-count" id="voteCount2">0</span>
                              <button class="vote-button downvote" id="downvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 20l8-8H4z"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="community-item">
                           <div class="community-avatar"></div>
                           <div class="community-info">
                              <div class="community-topic">Andree</div>
                              <div class="community-name">r/Andree</div>
                           </div>
                           <div class="vote-container">
                              <button class="vote-button upvote" id="upvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 4l-8 8h16z"></path>
                                 </svg>
                              </button>
                              <span class="vote-count" id="voteCount2">0</span>
                              <button class="vote-button downvote" id="downvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 20l8-8H4z"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="community-item">
                           <div class="community-avatar"></div>
                           <div class="community-info">
                              <div class="community-topic">Huệ</div>
                              <div class="community-name">r/Huệ</div>
                           </div>
                           <div class="vote-container">
                              <button class="vote-button upvote" id="upvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 4l-8 8h16z"></path>
                                 </svg>
                              </button>
                              <span class="vote-count" id="voteCount2">0</span>
                              <button class="vote-button downvote" id="downvoteButton2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 20l8-8H4z"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                  </ul>
                  <a href="#" class="btn btn-primary d-block mt-3">Xem tất cả</a>
               </div>
            </div>
            <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

            <script>
               document.addEventListener('DOMContentLoaded', function() {

                  $.ajax({
                     url: 'http://localhost:3000/posts/feed', // Endpoint for fetching feed
                     method: 'GET', // Use GET to retrieve data
                     xhrFields: {
                        withCredentials: true, // Enable cookies
                     },
                     success: function(response) {

                        console.log(response);

                     },
                     error: function(xhr, status, error) {
                        console.error('Error fetching feed:', error);
                     },
                  });

                  // $.ajax({
                  //    url: 'http://localhost:3000/status', // Endpoint for fetching feed
                  //    method: 'GET', // Use GET to retrieve data
                  //    success: function(response) {

                  //       console.log(response);

                  //    },
                  //    error: function(xhr, status, error) {
                  //       console.error('Error fetching feed:', error);
                  //    },
                  // });

                  const communityButton = document.getElementById('communityButton');
                  const communityList = document.getElementById('communityList');
                  const topicIDInput = document.getElementById('topicID');

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
                     if (event.target.classList.contains('community-item')) {
                        const selectedCommunity = event.target.textContent;
                        const selectedTopicID = event.target.getAttribute('data-topic-id');

                        // Update the hidden input
                        topicIDInput.value = selectedTopicID;

                        // Update button text to show the selected community
                        const buttonDiv = communityButton.querySelector('div');
                        buttonDiv.textContent = selectedCommunity;

                        buttonDiv.classList.remove('bg-soft-primary');

                        // Style the button to indicate selection
                        buttonDiv.style.border = "2px solid #d6d6d5"; // Example: Bootstrap primary color
                        buttonDiv.style.color = 'black'; // Make text white for contrast


                        // Hide the community list
                        communityList.style.display = 'none';
                     }
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


                  document.getElementById('externalSubmitButton').addEventListener('click', function() {
                     // Trigger the click on the real submit button
                     document.getElementById('realSubmitButton').click();
                  });
                  var userID = "";

                  function isUserLoggedIn() {
                     // Retrieve the user data from session storage
                     const userData = sessionStorage.getItem('user');
                     console.log(userData);


                     // Check if user data exists and is not null
                     if (userData) {
                        try {
                           // Parse the user data to JSON
                           const user = JSON.parse(userData);
                           // Access the userID property
                           userID = user.userID;
                           // console.log(userID);

                           return true;
                        } catch (error) {
                           console.error('Error parsing user data:', error);
                        }
                     }

                     return false;
                  }

                  // if (!isUserLoggedIn()) {
                  //    window.location.href = "/login";
                  // }


                  const mediaInput = document.getElementById('media');
                  const imagePreviewContainer = document.getElementById('imagePreview');
                  const mediaModal = document.getElementById('mediaModal');
                  const modalImage = document.getElementById('modalImage');
                  const modalVideo = document.getElementById('modalVideo');
                  const closeModal = document.getElementById('closeModal');

                  document.getElementById('addImageButton').addEventListener('click', function() {
                     mediaInput.click();
                  });

                  mediaInput.addEventListener('change', function() {
                     Array.from(mediaInput.files).forEach((file) => {
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
                                 modalImage.style.display = 'block';
                                 modalVideo.style.display = 'none';
                                 modalImage.src = event.target.result;
                                 mediaModal.style.display = 'flex';
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
                                 modalVideo.style.display = 'block';
                                 modalImage.style.display = 'none';
                                 modalVideo.src = event.target.result;
                                 mediaModal.style.display = 'flex';
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
                  closeModal.addEventListener('click', function() {
                     mediaModal.style.display = 'none';
                     modalImage.src = '';
                     modalVideo.src = '';
                  });

                  // Close modal when clicking outside modal content
                  mediaModal.addEventListener('click', function(event) {
                     if (event.target === mediaModal) {
                        mediaModal.style.display = 'none';
                        modalImage.src = '';
                        modalVideo.src = '';
                     }
                  });

                  $('#createPost').on('submit', function(e) {
                     e.preventDefault(); // Prevent default form submission                                      

                     if (!userID) {
                        isUserLoggedIn();
                     }

                     // Create a FormData object
                     const formData = new FormData();
                     formData.append('content', $('#postContent').text());
                     // alert($('#postContent').val());
                     formData.append('userID', userID);

                     // Check topicID and append only if it has a valid value
                     const topicID = $('#topicID').val(); // Assuming #topicID is the dropdown/select element
                     if (topicID && topicID.trim() !== '') {
                        formData.append('topicID', topicID); // Append only valid topicID
                     }

                     // Append selected files to FormData
                     const files = document.getElementById('media').files;
                     for (let i = 0; i < files.length; i++) {
                        formData.append('media', files[i]); // 'media' matches the backend interceptor
                     }

                     // Debugging: Check FormData
                     for (let [key, value] of formData.entries()) {
                        console.log(`${key}:`, value);
                     }




                     // Submit the form data using AJAX
                     $.ajax({
                        url: 'http://localhost:3000/posts',
                        method: 'POST',
                        data: formData,
                        processData: false, // Prevent jQuery from processing data
                        contentType: false, // Use multipart/form-data
                        success: function(response) {
                           console.log('Post created successfully:', response);
                        },
                        error: function(xhr, status, error) {
                           console.error('Error creating post:', error);
                        },
                     });
                  });
               });
            </script>