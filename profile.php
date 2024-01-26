<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - My Website</title>
  <meta name="description" content="User Profile">
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
    <div class="profile-container">
    <img src="imgs/irish jean gillona 2x2.png" alt="Profile Picture" class="profile-picture" style="width: 30%;">
      <h2>User Profile</h2>
      <p><strong>Name:</strong> Irish Jean Gillona</p>
      <p><strong>Email:</strong> irishjean@gmail.com</p>
      <p><strong>Location:</strong> Palawan, Philippines</p>
      <p><strong>Phone:</strong> +1234567890</p>
      <p><strong>Skills:</strong> HTML, CSS, JavaScript, PHP</p>
      <p><strong>Experience:</strong> Web Developer (5 years)</p>
      <p><strong>Education:</strong> Bachelor's Degree in Computer Science</p>
      <p><strong>Interests:</strong> Reading, Traveling, Photography</p>
    </div>
  </div>
</body>
</html>
