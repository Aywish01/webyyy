<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - My Website</title>
  <meta name="description" content="Welcome to My Website Dashboard">
  <meta name="author" content="Your Name">
  <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">
  <link rel="stylesheet" href="myStyle.css?v=<?=time();?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Additional Styles for Menu */
    .menu {
      background-color: #333;
      overflow: hidden;
    }
    .menu a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      font-size: 17px;
    }
    .menu a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>
<body>



  <header class="sticky" style="background-color: #63a192;color:white">
    <a href="/" class="logo" style="color:white">My Website</a>
    <a href="/profile.php" class="button" style="background-color: #63a192;color:white">Profile</a>
    <a href="/gallery.php" class="button" style="background-color: #63a192;color:white">Gallery</a>
    <a href="/contact.php" class="button" style="background-color: #63a192;color:white">Contacts</a>
    <a href="/index.php" class="button" style="background-color: #63a192;color:white">Log Out</a>
  </header>

  <div class="container contentBox centerAlign padding64px" style="max-width:800px">
    <h1 class="wideSpacing">Welcome to My Website Dashboard</h1>
    <p class="opacitySetting"><i>Discover something amazing!</i></p>
    <p class="justifyText">
    Meet Irish Jean Gillona, a vibrant and intelligent individual who is currently in their third year of college, pursuing a degree in computer science. With a name as unique as theirs, Irish shines brightly with their distinctive personality and zest for life.


Irish Jean Gillona is a true embodiment of the phrase "knowledge is power." Their passion for computer science is evident in their unwavering dedication to their studies. Always eager to dive deep into the world of technology, Irish explores the intricacies of programming languages, algorithms, and software development with an insatiable curiosity.
    </p>
  </div>

  <!-- Footer -->
  <footer class="container padding64px centerAlign opacitySetting GrayColor largeFont">
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-snapchat"></i>
    <i class="fa fa-pinterest-p "></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-linkedin"></i>
    <p class="15pxFont">My Website ©2024</p>
  </footer>

</body>
</html>
