<?php
/**
 * Created by PhpStorm.
 * User: namtu
 * Date: 3/14/2018
 * Time: 10:45 AM
 */?>
<!DOCTYPE html>
<html>
<?php
    if(isset($this->session->userdata['logged_in']))
    {
        $username = ($this->session->userdata['logged_in']['username']);
        $email = ($this->session->userdata['logged_in']['email']);
    }
    else
    {
        header("location: login");
    }
?>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/style3.css"/>
</head>
<body>
    <div id="profile">
        <?php
            echo "Hello <b id='welcome'><i>".$username."</i> !</b>";
            echo "<br/>";
            echo "<br/>";
            echo "welcome to admin page";
            echo "<br/>";
            echo "<br/>";
            echo "your username is ".$username;
            echo "<br/>";
            echo "your email is ".$email;
            echo "<br/>";
        ?>
        <b id="logout"><a href="logout">Logout</a></b>
    </div>
<br/>
</body>
</html>
