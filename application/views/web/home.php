<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>asset/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/style1.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>User profile</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>/asset/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>/asset/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../asset/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                    MYTEST
                   
                </a>
            </div>
            <form method="post" action="<?php base_url(); ?>dieuhuong">
            <div class="sidebar-wrapper">
                <ul class="nav">
<!--                    --><?php
//                        foreach ($roles as $key => $value)
//                        {
//                            if(strcmp($value, "category/java") == 0)
//                            {
//                                echo "<h3>java</h3>";
//                            }
//                        }
//                    ?>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/user">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/tablelist">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/typography">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/icons">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/maps">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/test/notification">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
            </form>
        </div>
