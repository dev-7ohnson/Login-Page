<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="wrapper">
      
      <div class="logo">
        <h1>Master<span>Class</span></h1>
      </div>
      <div class="form-container">
        <h1>Create a New Account</h1>
        <form>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <input
            type="password"
            name="password"
            id="pass"
            placeholder="Password"
            required
          />
          <input
            type="password"
            name="confirm_password"
            id="confirm_pass"
            placeholder="Confirm Password"
            required
          />
          <input type="submit" value="Sign Up" />
        </form>
        <p id="alt-way">--Or Sign In with--</p>
        <div class="social-icon">
          <a
            href="https://www.facebook.com"
          ><img src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/></a>
          <a href="https://www.google.com"><img  src="https://img.icons8.com/papercut/120/google-logo.png" alt="google-logo"/></a>
          <a
            href="https://www.twitter.com"
          ><img src="https://img.icons8.com/fluency/48/twitter.png" alt="twitter"/></a>
        </div>
        <p id="swap-link">
          Already have an account?
          <a href="/index.php">Sign In</a>
        </p>
      </div>
    </div>
  </body>
</html>
