 @extends('login.basic')
 @section('content')


 <main class="twt-main">
    <section class="twt-login">

        <form action="./handle/handlelogin.php" class="login-box" method="POST">
            <input class="input-box" name="email" type="email"  placeholder="Email">
            <input class="input-box" name="password" type="password" placeholder="Password">
            <a class="login-link" data-toggle="modal" data-target="#exampleModalCenterForgot">Forgot password?</a>
            <input type="submit" name="login" class="login-btn" value="Log in">

            </div>
        </form>


            <div class="slow-login">
                <img class="login-bird" src="https://image.ibb.co/d0hbJ9/twt_icon.png" alt="bird">
                <button class="login-small-display signin-btn pri-btn">Log in</button>
                <span class="front-para">See what’s happening in the world right now</span>
                <span class="join">Join Twitter today.</span>
                <button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                    Sign Up</button>



 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="">

                    <div class="form-group">
                       <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                    </div>

        </form>


      </div>

    </div>
  </div>
</div>
</div>


<div class="modal fade" id="exampleModalCenterForgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Forgot Password ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="">

                      <div class="form-group">
                         <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                      </div>

                      <div class="text-center">
                          <button type="submit" name="signup" class="btn btn-primary">Recovery Password </button>
                      </div>

          </form>


        </div>

      </div>
    </div>
  </div>
  </div>



            </section>
            <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                    <p>Follow your interests.</p>
                    <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                    <p>Hear what people are talking about.</p>
                    <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                    <p>Join the conversation.</p>
                </div>
            </section>

@endsection
