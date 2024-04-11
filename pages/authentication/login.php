<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .form h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form label {
            display: block;
            margin-bottom: 10px;
        }

        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form input[type="text"]:focus,
        .form input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .form .btn-login {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form .btn-login:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body background="./images/loginback.jpg">

<form action="login_check.php" method="POST" class="form">

    <h2>Login</h2>
    <h6 style ="color:red;">
              <?php
                  
                //   session_start();
                //   error_reporting(0);
                //   session_destroy();

                //   echo $_SESSION['loginMessage'];
                //session_start();
                //echo isset($_SESSION['loginMessage']) ? $_SESSION['loginMessage'] : '';
                //unset($_SESSION['loginMessage']); 

              ?>
          </h6>
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <input type="submit" name="login" value="Login" class="btn btn-login">
    </div>
</form>

</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href=".css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .login-container {
      margin-top: 300px;
    }
    .login-form {
      width: 300px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px #000000;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group input:focus {
      outline: none;
      box-shadow: 0px 0px 5px 0px #007bff;
    }
    .btn-login {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body background="../images/loginback.jpg" class="body_deg">
           
        <center><h1><strong>LOGIN FORM</strong></h1></center>

  <div class="container login-container">
    <div class="login-form">
      <h2 class="text-center mb-4">Login</h2>   
          <h6 style ="color:red;">
              <?php
                  
                  session_start();
                  error_reporting(0);
                  session_destroy();

                  echo $_SESSION['loginMessage'];

              ?>
          </h6>



      <form method="POST" action="login_check.php">

        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" >
        </div>
        <button type="submit" name="submit" class="btn btn-login">Login</button>

      </form>


    </div>
  </div>
</body>
</html>
