<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body id="bdy">
    
<form class="form" action="login.php" method="POST">
       <p class="form-title">Sign in to your account</p>
        <div class="input-container">
          <input type="Text" placeholder="Username" name="username" id="username">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="Enter password" name="password" id="password">
        </div>
         <button type="submit" class="submit">
        Sign in
      </button>

      <p class="signup-link">
        No account?
        <a href="">Sign up</a>
      </p>

 
   </form>

</body>
</html>