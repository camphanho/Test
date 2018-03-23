<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

<script type="text/javascript">

    $(document).ready(function(){
        $('#country1').change(function() {
            alert("aaa");
            var index = $('#country1').val();
            if(index==0) {
                var div = '<h3>tu luan</h3>';
                $('div#a').html(div);
            } else {
                var div = '<h3>trac nghiem</h3>';
                $('div#a').html(div);
            }


        });
    });
</script>
<div class="container">
    <form action="<?php echo base_url(); ?>index.php/question/add" method="post">
        <div class="row">
            <div class="col-25">
                <label>CategoryId</label>
            </div>
            <div class="col-75">
                <select id="categoryid" name="categoryid">
                    <?php
                    foreach ($cid as $key ){
                        echo "<option value=".$key->id.">".$key->id."</option>";
                    } ?>
                </select>
            </div>
        </div>
        <div>
            <div class="col-25">
                <label>Kieu cau hoi</label>
            </div>
            <div class="col-75">
                <select id="typeofq" name="typeofQ">
                                        <option value="1">Trac nghiem</option>
                                        <option value="0">Tu luan</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>So dap an</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="numans" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Noi dung cau hoi</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="contentq" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row" id="country1">
            <div class="col-25">
                <label for="subject">Noi dung dap an</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="contenta" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">level</label>
            </div>
            <div class="col-75">
                <select id="country" name="level">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">tac gia</label>
            </div>
            <div class="col-75">
                <select id="country" name="author">
                    <?php
                    foreach ($eid as $key ){
                        echo "<option value=".$key->id.">".$key->id."</option>";
                    } ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">active</label>
            </div>
            <div class="col-75">
                <select id="country" name="active">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
