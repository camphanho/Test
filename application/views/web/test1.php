<!DOCTYPE html>
<html>
    <head>
        <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
    </head>
    <body>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#country1').change(function() {
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
    <select id="country1" name="typeofQ">
        <option value="1">Trac nghiem</option>
        <option value="0">Tu luan</option>
    </select>
    <div id="a">aaaa</div>
    </body>
</html>