<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            ul li input{
                height: 30px;
                width: 200px;
                background-color: #00b8d4;
                -moz-border-radius-topleft:10px;
                -webkit-border-top-left-radius:10px;
                /*tren trai*/
                -moz-border-radius-bottomleft:10px;
                -webkit-border-bottom-left-radius:10px;
                /*duoi trai*/
                -moz-border-radius-topright:10px;
                -webkit-border-top-right-radius:10px;
                /*trenphai*/
                -moz-border-radius-bottomright:10px;
                -webkit-border-bottom-right-radius:10px;

            }
            ul li{
                padding-bottom: 10px;
                list-style: none;
            }
        </style>
    </head>
    <body>
        <form action="check" method="post">
            <ul>
                <li>
                   <input type="submit" name="btn1" value="JAVA">
                </li>
                <li>
                    <input type="submit" name="btn2" value="php">
                </li>
                <li>
                    <input type="submit" name="btn3" value="android">
                </li>
            </ul>



        </form>
    </body>
</html>