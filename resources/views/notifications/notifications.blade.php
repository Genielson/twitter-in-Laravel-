@extends('notifications.basic')
@section('content')
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
              <a href="home.php" style="margin-top: 4px;"><strong>Home</strong></a>
            </div>
          </div>
          </a>

           <a href="notification.php">
          <div class="grid-sidebar">
            <div class="icon-sidebar-align position-relative">

              <i class="notify-count"></i>

              <img
                src="https://i.ibb.co/Gsr7qyX/notification.png"
                alt=""
                height="26.25px"
                width="26.25px"
              />
            </div>

            <div class="wrapper-left-elements">
              <a class="wrapper-left-active" href="notification.php" style="margin-top: 4px"><strong>Notification</strong></a>
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
          <a href="<?php echo BASE_URL . "account.php"; ?>">
          <div class="grid-sidebar ">
            <div class="icon-sidebar-align">
              <img src="https://i.ibb.co/znTXjv6/perfil.png" alt="" height="26.25px" width="26.25px" />
            </div>

            <div class="wrapper-left-elements">
              <a href="" style="margin-top: 4px"><strong>Settings</strong></a>
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

            </div>

          </div>

          <div class="box-fixed" id="box-fixed"></div>

          <div class="box-home feed">
               <div class="container">
                 <div style="border-bottom: 1px solid #F5F8FA;"  class="row position-fixed box-name">
                       <div class="col-xs-2">
                       <a href="javascript: history.go(-1);"> <i style="font-size:20px;" class="fas fa-arrow-left arrow-style"></i> </a>
                       </div>
                       <div class="col-xs-10">
                           <p style="margin-top: 12px;" class="home-name"> Notifications</p>
                      </div>
                 </div>

                 </div>
                 <div class="container mt-5">

                     <div style="position: relative; border-bottom:4px solid #F5F8FA;" class="box-tweet py-3 ">
                        <a href=" ">
                        <span style="position:absolute; width:100%; height:100%; top:0;left: 0; z-index: 1;"></span>
                        </a>
                            <div class="grid-tweet">
                                <div class="icon mt-2">

                                </div>
                                <div class="notify-user">
                                    <p>
                                    <a style="position: relative; z-index:1000;">
                                        <img class="img-user" src="assets/images/users/" alt="">
                                    </a>

                                    </p>
                                    <p> <a style="font-weight: 700;
                                    font-size:18px;
                                    position: relative; z-index:1000;" href="">
                                     </a>
                                    <span style="font-weight: 500;" class="ml-3">

                                    </span>
                                  </p>
                                </div>
                            </div>
                        </div>
                     <?php  } ?>
                 </div>



        </div>
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
          <a style="position: relative; z-index:5; color:black" href="">
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
                      <p class="username">@</p></p>
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
      </div> </div>

      @endsection
