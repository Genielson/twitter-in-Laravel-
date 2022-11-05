
@extends('account.basic')
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
                  <a class="wrapper-left-active" href="" style="margin-top: 4px"><strong>Settings</strong></a>
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
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a style="color:black !important;" class="nav-link active text-center" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Change Email or Username</a>
                      <a style="color:black !important;" class="nav-link text-center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Change Password</a>

                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <!-- Change EMAIL and USAERNAME Form -->

                        <form method="POST" action="handle/handleAccountSetting.php" class="py-4" >


                                <div  class="alert alert-danger" role="alert">
                                    <p style="font-size: 15px;" class="text-center"> </p>
                                </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" name="username" value="" class="form-control" id="exampleInputPassword1" placeholder="Username">
                          </div>

                          <div class="text-center">

                            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                          </div>

                        </form>

                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


                        <!-- Change Password Form -->

                        <form method="POST" action="handle/handleChangePassword.php" class="py-4" >
                        <script src="assets/js/jquery-3.5.1.min.js"></script>




                          <div class="form-group">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Verify Password</label>
                            <input type="password" name="ver_password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                          </div>

                          <div class="text-center">

                            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                          </div>

                        </form>

                      </div>

                    </div>

                   </div>

              </div>
            </div>
            <div>

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
                          <p class="username">@
                         </p></p>
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
