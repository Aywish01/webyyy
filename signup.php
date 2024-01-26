<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - My Website</title>
  <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">
  <link rel="stylesheet" href="myStyle.css?v=<?=time();?>">
</head>
<body>

<header class="sticky" style="background-color: #63a192;color:white">
  <a href="/index.php" class="logo" style="color:white">My Website</a>
  <a href="/loginPage.php" class="button" style="background-color: #63a192;color:white">Login</a>
</header>

<div class="container centerAlign contentBox padding64px" style="max-width:800px">
  <form action="signup_process.php" method="POST">
    <div class="imgcontainer">
      <img src="imgs/dc0e38f4b51bc964d08ebdc8f50f433e.PNG" style="max-width:150px" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" required name="username" style="max-width:280px">

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" required name="email" style="max-width:280px">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" required name="password" style="max-width:280px">

      <button type="submit">Sign Up</button>
    </div>
  </form>
</div>

</body>
</html>
