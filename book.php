<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Book</title>
        <style>
            #main {
                max-width: 1250px;
                margin: auto;
            }

            #myH1 {
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }

            .center {
                margin: auto;
                width: 100%;
                border-style: solid;
                border-left-width: px;
            }

            #myh1 {
                text-align: center;
                font-size: 40px;
                letter-spacing: 5px;
            }

            #myH4 {
                text-align: center;
            }

            a:link {
                text-decoration: none;
                color: darkblue
            }

            a:visited {
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }

            #menu {
                background-color: white;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }

            #menu1 {
                background-color: black;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }

            #menu a {
                color: #8F8F8F;
                display: inline-block;
                padding: .5em 1em;
                text-shadow: 0 1px 0 #EDEDED;
                text-decoration: none;
            }

            #menu a:hover {
                background: rgb(220, 220, 220);
            }

            #menu .home-link {
                margin-right: 2em;
            }

            th {
                height: 50px;
            }

            td {
                text-align: center;
                padding: 10px;
                border: #ccc 1px solid;
                height: 50px;
            }

            table {
                border-collapse: collapse;
                margin-left: auto;
                margin-right: auto;
                border: 1px;
                width: 70%;
            }

            .elegant-aero {
                margin-left: auto;
                margin-right: auto;
                max-width: 560px;
                background: #e6e6e6;
                padding: 20px 20px 20px 20px;
                color: #666;
            }

            .elegant-aero h1>span {
                display: block;
                font-size: 11px;
            }

            .elegant-aero label>span {
                float: left;
                margin-top: 10px;
                color: #5E5E5E;
            }

            .elegant-aero label {
                display: block;
                margin: 0px 0px 5px;
            }

            .elegant-aero label>span {
                float: left;
                width: 20%;
                text-align: right;
                padding-right: 15px;
                margin-top: 10px;
                font-weight: bold;
            }

            .elegant-aero input[type="text"],
            .elegant-aero textarea {
                color: #888;
                width: 70%;
                padding: 0px 0px 0px 5px;
                border: 1px solid #e6e6e6;
                background: #FBFBFB;
                outline: 0;
                height: 30px;
                line-height: 15px;
                margin: 2px 6px 16px 0px;
            }

            .elegant-aero textarea {
                height: 100px;
                padding: 5px 0px 0px 5px;
            }

            input[type="submit"],
            input[type="reset"],
            input[type="button"] .button {
                -moz-appearance: none;
                -webkit-appearance: none;
                -ms-appearance: none;
                appearance: none;
                -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                background-color: rgba(0, 0, 0, 0.15);
                border-radius: 0;
                border: 0;
                color: #ffffff !important;
                cursor: pointer;
                display: inline-block;
                font-weight: 600;
                height: 2.85em;
                line-height: 2.95em;
                padding: 0 1.5em;
                text-align: center;
                text-decoration: none;
                white-space: nowrap;
            }

            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                border: none;
                outline: none;
                background-color: red;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 10px;
            }

            #myBtn:hover {
                background-color: #555;
            }
        </style>

    </head>

    <body bgcolor="black">
        <div id="main">
            <br/>
            <div class="center" style="background-color:white">
                <h4 id="myH4"><img src="pics/logo.png" height="80">
                    <p></p>
                    <div id="menu">
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/">HOME</a> 
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/room.php">ROOM</a> 
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/book.php">BOOK</a>
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/search.php">SEARCH</a>  
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/us.html">ABOUT&nbsp;&nbsp;US</a>
                    </div></h4>
            </div>
        </div>
        <div id="main">
            <div class="center" style="background-color:white" ;>
                <div id="menu">
                    <p>
                    <form id="form" class="elegant-aero" action="" method="post">
                        <b>訂單新增、修改</b><br><br>
                        <input type="text" name="no" id="no" placeholder="訂單編號（新增訂單不需填寫）" value="<?php if (isset($_POST['no'])) echo $_POST['no']; ?>">
                        <input type="text" name="nickname" id="nickname" placeholder="姓名" value="<?php if (isset($_POST['nickname'])) echo $_POST['nickname']; ?>">
                        <input type="text" name="room" id="room" placeholder="房型" value="<?php if (isset($_POST['room'])) echo $_POST['room']; ?>">
                        <input type="text" name="branch" id="branch" placeholder="分館" value="<?php if (isset($_POST['branch'])) echo $_POST['branch']; ?>">
                        <input type="text" name="date" id="date" placeholder="日期" value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>">
                        <input type="text" name="number" id="number" placeholder="人數" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>">
                        <input type="text" name="days" id="days" placeholder="天數" value="<?php if (isset($_POST['days'])) echo $_POST['days']; ?>">
                        <input type="text" name="amount" id="amount" placeholder="總金額" value="<?php if (isset($_POST['amount'])) echo $_POST['amount']; ?>"><br>
                        <input type="submit" name="submit" value="Book">&nbsp;
                        <input type="submit" name="edit" value="Edit">
                    </form>
                    <?php
                    $link = mysqli_connect("localhost", "106dba11", "dilsdba11", "106dba11");

                    if ($link === false) {
                        echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
                        echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
                        die();
                    }

                    mysqli_query($link, 'set names utf8');

                    if (isset($_POST['submit'])) {
                        if ($_POST['nickname'] == "" || $_POST['room'] == "" || $_POST['branch'] == "" || $_POST['date'] == "" || $_POST['number'] == "" || $_POST['days'] == "" || $_POST['amount'] == "") {
                            echo "<script>alert('請輸入完整資訊');</script>";
                        } else {
                            $sql = "insert into 訂單 (顧客姓名, 房型, 分館, 日期, 人數, 天數, 總金額) value ('{$_POST['nickname']}', '{$_POST['room']}', '{$_POST['branch']}', '{$_POST['date']}', '{$_POST['number']}', '{$_POST['days']}', '{$_POST['amount']}' )";
                            $result = mysqli_query($link, $sql);
                            if ($result === false) {
                                echo "<script>alert('預定失敗');</script>";
                            } else {
                                echo "<script>alert('預定成功');</script>";
                            }
                        }
                    }
                    if (isset($_POST['edit'])) {
                        if ($_POST['no'] == "" || $_POST['nickname'] == "" || $_POST['room'] == "" || $_POST['branch'] == "" || $_POST['date'] == "" || $_POST['number'] == "" || $_POST['days'] == "" || $_POST['amount'] == "") {
                            echo "<script>alert('請輸入完整資訊');</script>";
                        } else {
                            $sql = "UPDATE 訂單 SET 顧客姓名 = '{$_POST['nickname']}',房型 = '{$_POST['room']}',分館 = '{$_POST['branch']}',日期 = '{$_POST['date']}',人數 = '{$_POST['number']}',天數 = '{$_POST['days']}',總金額 = '{$_POST['amount']}' WHERE 訂單編號 = '{$_POST['no']}'";
                            $result = mysqli_query($link, $sql);
                            if ($result === false) {
                                echo "<script>alert('修改失敗');</script>";
                            } else {
                                echo "<script>alert('修改成功');</script>";
                            }
                        }
                    }
                    mysqli_free_result($result);

                    mysqli_close($link);
                    ?><br>
                    </p>
                </div>
                <div class="center" style="background-color:white">
                    <div id="menu1">
                        <br><br>
                        <a href="https://www.facebook.com/fullonhotels/"><img src="pics/facebook.png" height="50"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/Fullon_Hotels"><img src="pics/twitter.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.instagram.com/fullonhotels/"><img src="pics/ig.png" height="50"></a>
                        <br><br>
                    </div>
                </div>

            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>

</html>