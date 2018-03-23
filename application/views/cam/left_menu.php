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