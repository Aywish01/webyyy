<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - My Website</title>
  <meta name="description" content="Gallery">
  <meta name="author" content="Your Name">
  <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">
  <link rel="stylesheet" href="myStyle.css?v=<?=time();?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header class="sticky" style="background-color: #63a192;color:white">
    <a href="/" class="logo" style="color:white">My Website</a>
    <a href="/profile.php" class="button" style="background-color: #63a192;color:white">Profile</a>
    <a href="/gallery.php" class="button" style="background-color: #63a192;color:white">Gallery</a>
    <a href="/contact.php" class="button" style="background-color: #63a192;color:white">Contacts</a>
    <a href="/index.php" class="button" style="background-color: #63a192;color:white">Log Out</a>
  </header>

  <div class="container centerAlign contentBox padding64px" style="max-width:800px">
    <h2>Gallery</h2>
    <div class="gallery">
    <p>Cats</p>
      <img src="imgs/240_F_266724172_Iy8gdKgMa7XmrhYYxLCxyhx6J7070Pr8.jpg" alt="Image 1">
      <img src="imgs/240_F_303624505_u0bFT1Rnoj8CMUSs8wMCwoKlnWlh5Jiq.jpg" alt="Image 2">
      <img src="imgs/240_F_409262227_YxFl54ykmDRYwPgd2YNLhfwPAF34Iqah.jpg" alt="Image 3">
      <img src="imgs/240_F_409262227_YxFl54ykmDRYwPgd2YNLhfwPAF34Iqah.jpg" alt="Image 4">
      <img src="imgs/240_F_605374009_hEUHatmKPzuHTIacg7rLneAgnLHUgegM.jpg" alt="Image 5">
      <!-- Add more images as needed -->
    </div>
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
