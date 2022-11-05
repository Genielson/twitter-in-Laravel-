
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title> <?php echo $profileData->name; ?> (@<?php echo $profileData->username; ?>) | Twitter</title>
           <link rel="stylesheet" href="assets/css/bootstrap.min.css">
           <link rel="stylesheet" href="assets/css/all.min.css">
           <link rel="stylesheet" href="assets/css/profile_style.css?v=<?php echo time(); ?>">

           <link rel="shortcut icon" type="image/png" href="assets/images/twitter.svg">

       </head>
       <body>

           @yield('content')


           <script src="assets/js/search.js"></script>
           <script src="assets/js/photo.js"></script>
           <script src="assets/js/follow.js?v=<?php echo time(); ?>"></script>
           <script src="assets/js/users.js?v=<?php echo time(); ?>"></script>
           <script type="text/javascript" src="assets/js/hashtag.js"></script>
         <script type="text/javascript" src="assets/js/like.js"></script>
         <script type="text/javascript" src="assets/js/comment.js?v=<?php echo time(); ?>"></script>
         <script type="text/javascript" src="assets/js/retweet.js?v=<?php echo time(); ?>"></script>
     <script src="https://kit.fontawesome.com/38e12cc51b.js" crossorigin="anonymous"></script>
     <!-- <script src="assets/js/jquery-3.4.1.slim.min.js"></script> -->
     <script src="assets/js/jquery-3.5.1.min.js"></script>
       <script src="assets/js/popper.min.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
