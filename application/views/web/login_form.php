<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/style.css">
</head>
<body>
    <form class="modal-content animate" action="<?php echo base_url(); ?>index.php/login/check" method = "POST">
        <div><h1>-----------------Login-----------------</h1></div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" >

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" >

            <input type="submit" name="ok" value="Login" style="background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">
            <label>
                <input type="checkbox" checked="checked"> Remember me
            </label>
            <label>
                <span class="psw">Forgot <a href="<?php echo base_url(); ?>index.php/login/email">password?</a></span>
            </label>
        </div>

</form>
</body>
</html>