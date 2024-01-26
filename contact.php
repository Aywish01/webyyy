<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - My Website</title>
  <meta name="description" content="Contact Page">
  <meta name="author" content="Your Name">
  <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">
  <link rel="stylesheet" href="myStyle.css?v=<?=time();?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Add your map API link here if you're using Google Maps -->
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
    <h2>Contact Me</h2>
    <div class="contact-info">
      <p><strong>Name:</strong> Irish Jean Gillona</p>
      <p><strong>Email:</strong> irishjean@gmail.com</p>
      <p><strong>Location:</strong> Palawan, Philippines</p>
      <p><strong>Phone:</strong> +1234567890</p>
    </div>
    
    <h2>Send Feedback</h2>
    <form action="submit_feedback.php" method="post">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="4" required></textarea><br><br>
      <button type="submit">Submit</button>
    </form>
    
    <!-- Add your map embed code here -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62905.64973207005!2d118.6713428666218!3d9.799610046891727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33b562ddc7845283%3A0x6d57130a30d70af1!2sSicsican%2C%20Puerto%20Princesa%2C%20Palawan!5e0!3m2!1sen!2sph!4v1706280811762!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>

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
