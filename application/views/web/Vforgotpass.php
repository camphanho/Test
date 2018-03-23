<?php
/**
 * Created by PhpStorm.
 * User: namtu
 * Date: 3/19/2018
 * Time: 11:38 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/style4.css">
</head>
<body>
<div class="main-content">
    <form action="sendmailresetpsw" method="post">
        <div class="auth-form-header">
            <h1>Reset your password</h1>
        </div>
        <div class="auth-form-body">
            <?php
            echo $message;
            ?>
            <label>Enter your email address and we will send you a link to reset your password.</label>
            <input type="text" name="emailfp" class="form-control input-block" placeholder="Enter your email address"/>
            <input type="submit" name="send" class="btn btn-primary btn-block" value="Send password reset email">
        </div>
    </form>
</div>
</body>
</html>
