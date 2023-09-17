<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Access products near you">
	  <meta name="keywords" content="Upload products, Buy products near you, At a convenient price">
    <meta name="author" content="Brad Traversy">
    <title>SBR Marketplace | LOGIN</title>
    <link rel="stylesheet" href="style.css">
    
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
<body class="login-body">
  <div class="login-container" style="margin-top: 40px; margin-left: 400px;">
    <h1>Welcome Back!</h1>
    <p>Login to your account</p>
    <form action="login.php" method="POST" class="login-form">
      <input name="email" type="text" placeholder="Email or Username" required>
      <input name="password" type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p class="no-account">Don't have an account? <a href="registration.php">Sign up</a></p>
  </div>
  <p>
    <div class="down">
      <footer>
        <p>&copy; 2023 SBR Marketplace. All rights reserved.</p>
      </footer>
    </div>
  </p>
  
</body>
</html>
