<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Access products near you">
	  <meta name="keywords" content="Upload products, Buy products near you, At a convenient price">
    <meta name="author" content="Brad Traversy">
    <title>SBR Marketplace | SIGN UP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
  </head>
<header>
  <div class="container">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li class="current"><a href="good.php">Login</a></li>
      </ul>
    </nav>
  </div>
</header>
<body>
  <div class="login-container" style="margin-top: 40px; margin-left: 400px;">
    <h1>Welcome To SBR!</h1>
    <p>Create new account</p>
    <form class="login-form" action="register.php" method="POST">
      <input type="text" name="username"  placeholder="Username" required>
      <input type="text" name="email" placeholder="Email" id="my-email" onkeyup="myemail()" required><br>
      <span id="error-email"></span><br>
      <input type="password" name="password" placeholder="Create Password" required>
      <input type="password" placeholder="Type Password Again" required>
      <input type="text" name="province" placeholder="Province" required>
      <input type="text" name="district" placeholder="District" required>
      <button name="submit" type="submit">Register</button>
    </form>
    <p class="no-account">Have an account? <a href="good.html">Login</a></p>
  </div>
  <script src="script.js"></script>
  <p>
    <div class="down">
      <footer>
        <p>&copy; 2023 SBR Marketplace. All rights reserved.</p>
    </footer>
    </div>
  </p>
</body>
</html>
