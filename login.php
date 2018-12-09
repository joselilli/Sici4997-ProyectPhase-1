<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
    color:orange;
    
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
    background-image: url(https://mir-s3-cdn-cf.behance.net/project_modules/max_3840/05ecd052927015.5924aab22d01e.png)
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.setaswall.com/wp-content/uploads/2018/02/Gaming-Wallpaper-11-1920x1080.jpg" type="image/gif" sizes="16x16">

    <title>GamerNews-SignIn  </title>
</head>
<body>

<?php
    
    if(isset($_GET['e']) && $_GET['e']==1) {
        echo 'Su usuario y/o contraseña estan incorrectos.';
    }
    ?>
    <form action= "doLogin.php" method="post">
  <div class="container">
    <h1>Sign In</h1>
    <p>Please Enter Your Username and Password.</p>
    <hr>
    
    <label for="UserName"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <hr>
    <p><a href="">Forgot Your Password?</a>.</p>

    <button type="submit" class="registerbtn">Log In</button>
  </div>
  
</form>

</body>
</html>
