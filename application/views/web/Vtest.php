<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/web/css/style2.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            // $("#a").click(function () {
            //     alert("hello");
            //     $("#th1").text("C");
            //     $("#th2").text("Da lam");
            // })
            $('input:radio[name=radio1]').click(function () {
                var radio1 = $('input:radio[name=radio1]:checked').val();
                if (radio1 == 1){
                    $("#lc1").text("A");
                }
                else if (radio1 == 2){
                    $("#lc1").text("B");
                }

                $("#tt1").text("Da lam");
            })
        })
        $('input:radio[name=cau1]').click(function () {
            //var radio1 = $('input:radio[name=cau1]:checked').val();
            // if (radio1 == 1){
            //     $("#lc1").text("A");
            // }
            // else if (radio1 == 2){
            //     $("#lc1").text("B");
            // }
            //
            // $("#tt1").text("Da lam");
            alert("hello");
        })
    </script>
</head>
<body>
    <div class="left_menu">
        <ul>
            <li id="test1">
                test 1
            </li>
            <li>
                test 2
            </li>
            <li>
                test 3
            </li>
            <li>
                test 4
            </li>
        </ul>
    </div>
    <div class="content">
        <form method="post" action="test">
        <?php
//            $i = 0;
//            foreach ($content as $key => $value)
//            {
//                $i++;
//                echo "<p>Câu ".$i.": ".$value->contentQ."</p>";
//                $name = "radio".$i;
//                echo "<ul>";
//                $dt = json_decode($value->contentAns, true);
//                $j = 0;
//                foreach ($dt as $k => $v)
//                {
//                    $j++;
//                    foreach ($v as $item)
//                    {
//                        echo "<li><input type='radio' value=$j name=$name>$item</li>";
//                    }
//                }
//                echo "</ul>";
//            }


        ?>
            <input type="submit" name="btn1" value="back">
            <input type="submit" name="btn2" value="next">
        </form>
    </div>
    <div class="right_content">
<!--        <table>-->
<!--            <tr>-->
<!--                <th>Câu</th>-->
<!--                <th>Lựa chọn</th>-->
<!--                <th>Trạng thái</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>1</th>-->
<!--                <th id="lc1"></th>-->
<!--                <th id="tt1">Chua lam</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>2</th>-->
<!--                <th id="lc2"></th>-->
<!--                <th id="tt2">Chua lam</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>3</th>-->
<!--                <th id="lc3"></th>-->
<!--                <th id="tt3">Chua lam</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>4</th>-->
<!--                <th id="lc4"></th>-->
<!--                <th id="tt4">Chua lam</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>5</th>-->
<!--                <th id="lc5"></th>-->
<!--                <th id="tt5">Chua lam</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>6</th>-->
<!--                <th id="lc6"></th>-->
<!--                <th id="tt6">Chua lam</th>-->
<!--            </tr>-->
<!--        </table>-->
        <?php
            foreach ($listid as $key=>$value)
            {
                echo "<input type='radio' id=$key name=$key value=$value>$key"."<br>";
            }
        ?>
    </div>
</body>
</html>