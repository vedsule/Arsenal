<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cloudShare.com</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="startup.css">
  <script src="startup.js"></script>
</head>
<body onload="logoutalert()">
  <header>
    <h2><a href="#">CloudShare</a></h2>
    <nav>
      <li><a href="signup_login/signup_user/signup_user.php" onclick="user_select()">User Login</li>
      <li><a href="signup_login/signup_admin/signup_admin.php" onclick="admin_select()">Admin</a></li>
      <li><a href="">Contacts</a></li>
    </nav>
  </header>

  <section class="hero">
    <div class="background-image" style="background-image: url('../res/pexels-parado-15440282.jpg');"></div>
    <div class="hero-content-area">
      <h1>CloudShare</h1>
      <h3>teams | shared repos | cloud </h3>
      <a href="#" class="btn"> resilience unparalleled</a>
    </div>
  </section>

  <section class="contact">
    <h3 class="title">Learn more</h3>
    <p>Want to know about our latest plans and pricing offers ? Just sign up for our mailing list.  </p>
    <hr>
    <form>
      <input type="email" name="email" placeholder="Email">
      <a href="#" class="btn">Subscribe now</a>
    </form>
  </section>

  <footer>
    
    <p>Why are you reading this?! There's never anything interesting in the footer!</p>
    <ul>
      <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
    </ul>
  </footer>
</body>
</html>
