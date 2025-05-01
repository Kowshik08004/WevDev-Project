<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container auth-switch" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <!-- <i class="fas fa-user"></i> -->
        <input type="text" name="fName" id="fName" placeholder="" required>
        <label for="fname">First Name</label>
      </div>
      <div class="input-group">
        <!-- <i class="fas fa-user"></i> -->
        <input type="text" name="lName" id="lName" placeholder="" required>
        <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
        <!-- <i class="fas fa-envelope"></i> -->
        <input type="email" name="email" id="register_email" placeholder="" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <!-- <i class="fas fa-lock"></i> -->
        <input type="password" name="password" id="register_password" placeholder="" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <div class="divider">or continue with</div>
    <div class="social-buttons">
      <button class="social-btn">
        <!-- Google logo (SVG would be better in production) -->
        <img src="google.svg" alt="Google">
      </button>
      <button class="social-btn">
        <!-- Apple logo (SVG would be better in production) -->
        <img src="apple.svg" alt="Apple">
      </button>
      <button class="social-btn">
        <!-- Facebook logo (SVG would be better in production) -->
        <img src="facebook.svg" alt="Facebook">
      </button>
    </div>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <div class="container auth-switch" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <!-- <i class="fas fa-envelope"></i> -->
        <input type="email" name="email" id="login_email" placeholder="" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <!-- <i class="fas fa-lock"></i> -->
        <input type="password" name="password" id="login_password" placeholder="" required>
        <label for="password">Password</label>
      </div>
      <div class="remember-forgot">
        <div class="remember-me">
          <input type="checkbox" id="remember">
          <label for="remember">Remember me</label>
        </div>
        <div class="forgot-password">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <!-- <p class="recover">
        <a href="#">Forgot Password?</a>
      </p> -->
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="divider">or continue with</div>
    <div class="social-buttons">
      <button class="social-btn">
        <!-- Google logo (SVG would be better in production) -->
        <img src="google.svg" alt="Google">
      </button>
      <button class="social-btn">
        <!-- Apple logo (SVG would be better in production) -->
        <img src="apple.svg" alt="Apple">
      </button>
      <button class="social-btn">
        <!-- Facebook logo (SVG would be better in production) -->
        <img src="facebook.svg" alt="Facebook">
      </button>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <button id="signUpButton">Create an account</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>