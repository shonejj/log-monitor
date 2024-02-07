<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <style>
    /* Custom CSS with unique class names */
    body {
      background: linear-gradient(135deg, #1c1e26 0%, #2a2d3e 100%);
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .tech-login-card123 {
      background-color: #222;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); /* Cool box shadow */
      padding: 20px;
      width: 400px;
    }
    
    .tech-login-card123 h2 {
      color: #fff;
    }
    
    .tech-login-card123 .form-control {
      background-color: #333;
      border: none;
      border-bottom: 2px solid #4CAF50;
      border-radius: 0;
      color: #fff;
      margin-bottom: 20px;
    }
    
    .tech-login-card123 .btn-primary {
      background-color: #4CAF50;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      width: 100%;
    }
    
    .tech-login-card123 .btn-primary:hover {
      background-color: #45a049;
    }
    .flash-message {
      color: #ff3d00;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="tech-login-card123">
        <h2 class="text-center mb-4">Login</h2>
        
        <?php
        // Display flash message if error occurred
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
            if ($error == 1) {
                echo '<div class="flash-message">Invalid username or password</div>';
            } elseif ($error == 2) {
                echo '<div class="flash-message">Please provide username and password</div>';
            }
        }
        ?>
        
        <form method="POST" action="assets/php/login.php">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>