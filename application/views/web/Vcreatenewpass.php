<?php
/**
 * Created by PhpStorm.
 * User: PHC
 * Date: 3/19/2018
 * Time: 4:02 PM
 **/
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create new password</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/style4.css">
</head>
<body>
<?php
if (isset($message)) {
    echo "<div class='message'>";
    echo "<p>$message</p>";
    echo "</div>";
}
?>
<div class="auth-form">
    <?php echo form_open('Change_pass/updatepsw?id=' . $id) ?>
    <div class="auth-form-header"><h1>Change password</h1></div>
    <div class="auth-form-body">
        <label>New password:</label>
        <input type="text" class="form-control input-block" name="new_pass" placeholder="New password"><br/>
        <label>Repeat password:</label>
        <input type="text" class="form-control input-block" name="re_new_pass" placeholder="Repeat password"><br/>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Change">
    </div>
    <?php echo form_close(); ?>
</div>
</body>
</html>
