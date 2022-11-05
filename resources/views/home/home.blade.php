
@extends('home.basic')
@section('content')
      <!-- Modal -->
      <div class="modal fade" id="welcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="">
              <div class="text-center">
               <span  class="modal-title font-weight-bold text-center" id="exampleModalLongTitle">
                <span style="font-size: 20px;">Welcome <span style="color:#207ce5"></span>  </span>
               </span>
              </div>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <div class="text-center">

              <h4 style="font-weight: 600; " >You Signup Successfuly!</h4>

              </div>

          </div>
        </div>
      </div>



            <!-- End welcome -->

          <div id="mine">

          <div class="wrapper-left">
              <div class="sidebar-left">
                <div class="grid-sidebar" style="margin-top: 12px">
                  <div class="icon-sidebar-align">
                    <img src="https://i.ibb.co/86d7x4Z/twitter.png" alt="" height="30px" width="30px" />
                  </div>
                </div>

                <a href="home.php">
                <div class="grid-sidebar bg-active" style="margin-top: 12px">
                  <div class="icon-sidebar-align">
                    <img src="https://i.ibb.co/6tKFLWG/home.png" alt="" height="26.25px" width="26.25px" />
                  </div>
                  <div class="wrapper-left-elements">
                    <a class="wrapper-left-active" href="home.php" style="margin-top: 4px;"><strong>Home</strong></a>
                  </div>
                </div>
                </a>

                 <a href="notification.php">
                <div class="grid-sidebar">
                  <div class="icon-sidebar-align position-relative">

                    <img
                      src="https://i.ibb.co/Gsr7qyX/notification.png"
                      alt=""
                      height="26.25px"
                      width="26.25px"
                    />
                  </div>

                  <div class="wrapper-left-elements">
                    <a href="notification.php" style="margin-top: 4px"><strong>Notification</strong></a>
                  </div>
                </div>
                </a>

                  <a href="">
                <div class="grid-sidebar">
                  <div class="icon-sidebar-align">
                    <img src="https://i.ibb.co/znTXjv6/perfil.png" alt="" height="26.25px" width="26.25px" />
                  </div>

                  <div class="wrapper-left-elements">
                    <!-- <a href="/twitter/"  style="margin-top: 4px"><strong>Profile</strong></a> -->
                    <a  href=""  style="margin-top: 4px"><strong>Profile</strong></a>

                  </div>
                </div>
                </a>
                <a href="">
                <div class="grid-sidebar ">
                  <div class="icon-sidebar-align">
                    <img src="https://i.ibb.co/znTXjv6/perfil.png" alt="" height="26.25px" width="26.25px" />
                  </div>

                  <div class="wrapper-left-elements">
                    <a href="<?php echo BASE_URL . "account.php"; ?>" style="margin-top: 4px"><strong>Settings</strong></a>
                  </div>


                </div>
                </a>
                <a href="includes/logout.php">
                <div class="grid-sidebar">
                  <div class="icon-sidebar-align">
                  <i style="font-size: 26px; color:red" class="fas fa-sign-out-alt"></i>
                  </div>

                  <div class="wrapper-left-elements">
                    <a style="color:red" href="includes/logout.php" style="margin-top: 4px"><strong>Logout</strong></a>
                  </div>
                </div>
                </a>
                <button class="button-twittear">
                  <strong>Tweet</strong>
                </button>

                <div class="box-user">
                  <div class="grid-user">
                    <div>
                      <img
                        src="assets/images/users/"
                        alt="user"
                        class="img-user"
                      />
                    </div>
                    <div>
                      <p class="name"><strong></strong></p>
                      <p class="username">@</p>
                    </div>
                    <div class="mt-arrow">
                      <img
                        src="https://i.ibb.co/mRLLwdW/arrow-down.png"
                        alt=""
                        height="18.75px"
                        width="18.75px"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="grid-posts">
              <div class="border-right">
                <div class="grid-toolbar-center">
                  <div class="center-input-search">
                    <div class="input-group-login" id="whathappen">

                      <div class="container">
                        <div class="part-1">
                          <div class="header">
                            <div class="home">
                              <h2>Home</h2>
                            </div>
                            <!-- <div class="icon">
                              <button type="button" name="button">+</button>
                            </div> -->
                          </div>

                          <div class="text">
                            <form class="" action="handle/handleTweet.php" method="post" enctype="multipart/form-data">
                              <div class="inner">

                                  <img src="assets/images/users/" alt="profile photo">

                                <label>

                                  <textarea class="text-whathappen" name="status" rows="8" cols="80" placeholder="What's happening?"></textarea>

                              </label>
                              </div>

                               <!-- tmp image upload place -->
                              <div class="position-relative upload-photo">
                                <img class="img-upload-tmp" src="assets/images/tweets/tweet-60666d6b426a1.jpg" alt="">
                                <div class="icon-bg">
                                <i id="#upload-delete-tmp" class="fas fa-times position-absolute upload-delete"></i>

                                </div>
                              </div>


                              <div class="bottom">

                                <div class="bottom-container">




                                  <label for="tweet_img" class="ml-3 mb-2 uni">

                                    <i class="fa fa-image item1-pair"></i>
                                  </label>
                                  <input class="tweet_img" id="tweet_img" type="file" name="tweet_img">

                                </div>
                                <div class="hash-box">

                                    <ul style="margin-bottom: 0;">


                                    </ul>

                                </div>
                                <?php if (isset($_SESSION['errors_tweet'])) {

                                  foreach($_SESSION['errors_tweet'] as $t) {?>

                                <div class="alert alert-danger">
                                <span class="item2-pair">  </span>
                                </div>

                               <?php } } unset($_SESSION['errors_tweet']); ?>
                                <div>

                                  <span class="bioCount" id="count">140</span>
                                  <input id="tweet-input" type="submit" name="tweet" value="Tweet" class="submit"
                                  >
                                </div>
                            </div>
                            </form>
                          </div>
                        </div>
                        <div class="part-2">

                        </div>

                      </div>


                    </div>
                  </div>
                  <!-- <div class="mt-icon-settings">
                    <img src="https://i.ibb.co/W5T9ycN/settings.png" alt="" />
                  </div> -->
                </div>
                <div class="box-fixed" id="box-fixed"></div>


              </div>


              <div class="wrapper-right">
                  <div style="width: 90%;" class="container">

                <div class="input-group py-2 m-auto pr-5 position-relative">

                <i id="icon-search" class="fas fa-search tryy"></i>
                <input type="text" class="form-control search-input"  placeholder="Search Twitter">
                <div class="search-result">


                </div>
                </div>
                </div>





                <div class="box-share">
                  <p class="txt-share"><strong>Who to follow</strong></p>

                <div class="grid-share">
                <a style="position: relative; z-index:5; color:black" href="#">
                            <img
                              src="assets/images/users/"
                              alt=""
                              class="img-share"
                            />
                          </a>
                          <div>
                            <p>
                            <a style="position: relative; z-index:5; color:black" href="">
                            <strong></strong>
                            </a>
                          </p>
                            <p class="username">@
                            </p>
                          </div>
                          <div>
                            <button class="follow-btn follow-btn-m"
                            data-follow=""
                            data-user=""
                            data-profile=""
                            style="font-weight: 700;">

                            </button>
                          </div>
                        </div>




                </div>


              </div>
            </div>
            </div>

            @endsection
