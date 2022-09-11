<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Search</title>
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
                /* [disabled]max-width: 560px; */
                /* [disabled]background: #e6e6e6; */
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
            .elegant-aero input[type="search"]{
                color: #888;
                width: 20%;
                padding: 0px 0px 0px 5px;
                border: 1px solid #e6e6e6;
                background: #FBFBFB;
                outline: 1;
                height: 30px;
                line-height:15px;
                margin: 2px 6px 16px 0px;
            }
            select{
                color: #888;
                padding: 0px 0px 0px 5px;
                border: 1px solid #e6e6e6;
                background: #FBFBFB;
                outline: 1;
                height: 29px;
                line-height: 15px;
                margin: 2px 6px 16px 0px;
            }
            input[type="submit"], input[type="reset"], input[type="button"], .button {
                -moz-appearance: none;
                -webkit-appearance: none;
                -ms-appearance: none;
                appearance: none;
                -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                background-color: #8b8b8b;
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="jquery-tablepage-1.0.js"></script>

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
                        <b>訂單搜尋、刪除</b><br><br>
                        <select name="option" size="1" >
                            <option value="關鍵字" <?php if (isset($_POST['option']) && $_POST['option'] == '關鍵字') echo 'selected'; ?>>關鍵字</option>
                            <option value="訂單編號" <?php if (isset($_POST['option']) && $_POST['option'] == '訂單編號') echo 'selected'; ?>>訂單編號</option>
                            <option value="顧客姓名" <?php if (isset($_POST['option']) && $_POST['option'] == '顧客姓名') echo 'selected'; ?>>顧客姓名</option>
                            <option value="房型" <?php if (isset($_POST['option']) && $_POST['option'] == '房型') echo 'selected'; ?>>房型</option>
                            <option value="分館" <?php if (isset($_POST['option']) && $_POST['option'] == '分館') echo 'selected'; ?>>分館</option>
                            <option value="日期" <?php if (isset($_POST['option']) && $_POST['option'] == '日期') echo 'selected'; ?>>日期</option>
                        </select>
                        &nbsp;
                        <input id = "search" type="search" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>"> 
                        &nbsp;
                        <input type="submit" name="submit" value="Search">
                        &nbsp;
                        <input type="submit" name="delete" value="Delete">
                        <br>
                        若需刪除訂單請用訂單編號進行刪除
                        <br>
                        請不要亂刪資料 感恩惜福平安喜樂 謝謝配合
                    </form><br>
                    <?php
                    $link = mysqli_connect("localhost", "106dba11", "dilsdba11", "106dba11");

                    if ($link === false) {
                        echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
                        echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
                        die();
                    }

                    mysqli_query($link, 'set names utf8');
                    if ((isset($_POST['submit']) == null) && (isset($_POST['delete']) == null)) {
                        echo '<table id="tb">';
                        echo '<tr><th>訂單編號</th><th>顧客姓名</th><th>房型</th><th>分館</th><th>日期</th><th>人數</th><th>天數</th><th>總金額</th></tr>';
                        $sql = "select * from 訂單 ORDER BY `訂單編號` ASC";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['訂單編號'] . '</td>' . '<td>' . $row['顧客姓名'] . '</td>' . '<td>' . $row['房型'] . '</td> ' . '<td>' . $row['分館'] . '</td>' . '<td>' . $row['日期'] . '</td>' . '<td>' . $row['人數'] . '</td>' . '<td>' . $row['天數'] . '</td>' . '<td>' . $row['總金額'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        mysqli_free_result($result);
                    }

                    if (isset($_POST['submit'])) {
                        echo '<table id ="tb">';
                        echo '<tr><th>訂單編號</th><th>顧客姓名</th><th>房型</th><th>分館</th><th>日期</th><th>人數</th><th>天數</th><th>總金額</th></tr>';
                        $option = $_POST['option'];
                        $search = $_POST['search'];
                        if ($option == '關鍵字') {
                            $sql = "select * from 訂單 where 訂單編號 like '%$search%' or 顧客姓名 like '%$search%' or 房型 like '%$search%' or 分館 like '%$search%' or 日期 like '%$search%' ORDER BY `訂單編號` ASC";
                        } else if ($option == '訂單編號') {
                            $sql = "select * from 訂單 where $option = '$search' ORDER BY `訂單編號` ASC";
                        } else {
                            $sql = "select * from 訂單 where $option like '%$search%' ORDER BY `訂單編號` ASC";
                        }
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['訂單編號'] . '</td>' . '<td>' . $row['顧客姓名'] . '</td>' . '<td>' . $row['房型'] . '</td> ' . '<td>' . $row['分館'] . '</td>' . '<td>' . $row['日期'] . '</td>' . '<td>' . $row['人數'] . '</td>' . '<td>' . $row['天數'] . '</td>' . '<td>' . $row['總金額'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                        mysqli_free_result($result);
                    }

                    if (isset($_POST['delete'])) {
                        $search = $_POST['search'];
                        $sql = "DELETE FROM `訂單` WHERE `訂單編號`=$search";
                        $result = mysqli_query($link, $sql);
                        if ($result === false) {
                            echo "<script>alert('刪除失敗');</script>";
                        } else {
                            echo "<script>alert('刪除成功');</script>";
                        }
                        mysqli_free_result($result);

                        echo '<table id="tb">';
                        echo '<tr><th>訂單編號</th><th>顧客姓名</th><th>房型</th><th>分館</th><th>日期</th><th>人數</th><th>天數</th><th>總金額</th></tr>';
                        $option = $_POST['option'];
                        $search = $_POST['search'];
                        $sql = "select * from 訂單 ORDER BY `訂單編號` ASC";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['訂單編號'] . '</td>' . '<td>' . $row['顧客姓名'] . '</td>' . '<td>' . $row['房型'] . '</td> ' . '<td>' . $row['分館'] . '</td>' . '<td>' . $row['日期'] . '</td>' . '<td>' . $row['人數'] . '</td>' . '<td>' . $row['天數'] . '</td>' . '<td>' . $row['總金額'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        mysqli_free_result($result);
                    }
                    mysqli_close($link);
                    ?>
                    <br><span id='tp'></span>
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
            window.onload = function () {
                var form = document.getElementById("form");

                form.onsubmit = validate;
            };

            function validate()
            {
                if (document.getElementById("search").value == "")
                {
                    alert("欄位不得空");
                    document.getElementById("search").focus();
                    return false;
                }
                return true;
            }
            $("#tb").tablepage($("#tp"), 10);
        </script>
    </body>

</html>