<!DOCTYPE html>
    <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="register.php">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="Enter Password" placeholder="Enter Password" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
      <href="register.php">
      </div>
    </form>
  </div>
</body>
</html>