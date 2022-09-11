<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Room</title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#taipei").click(function () {
                    $("#hotel1").toggle("fast");
                });
                $("#tamsui").click(function () {
                    $("#hotel2").toggle("fast");
                });
                $("#lihpao").click(function () {
                    $("#hotel3").toggle("fast");
                });

            });
        </script>
    </head>
    <body bgcolor="black">
        <div id="main"> <br/>
            <div class="center" style="background-color:white">
                <h4 id="myH4"><img src="pics/logo.png" height="80">
                    <p></p>
                    <div id="menu"> <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/">HOME</a> 
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/room.php">ROOM</a> 
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/book.php">BOOK</a>
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/search.php">SEARCH</a> 
                        <a class="home-link" href="http://163.13.175.7/106db/106dba/106dba11/us.html">ABOUT&nbsp;&nbsp;US</a>
                </h4>
            </div>
        </div>
        <div id="main">
            <div class="center" style="background-color:white">
                <div id="menu">
                    <p><br><b>點擊圖片可開啟/隱藏房間資訊</b><br><br>
                        <a><img src="pics/一館-2.jpg" height="250" id="taipei"></a> <a><img src="pics/二館-2.jpg" height="250" id="tamsui"></a> <a><img src="pics/三館-1.jpg" height="250" id="lihpao"></a></p>
                    <div id = "hotel1" style = "display:none">
                        <h2>一館</h2>
                        <?php
                        $link = mysqli_connect("localhost", "106dba11", "dilsdba11", "106dba11");

                        if ($link === false) {
                            echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
                            echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
                            die();
                        }

                        mysqli_query($link, 'set names utf8');
                        echo '<table>';
                        echo '<tr><th>房間編號</th><th>房型</th><th>每晚定價</th><th>坪數</th><th>床型</th></tr>';
                        $sql = "SELECT * FROM 房間 WHERE 分館 = '一館' ORDER BY 房間編號 ASC";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['房間編號'] . '</td>' . '<td>' . $row['房型'] . '</td>' . '<td>' . $row['每晚定價'] . '</td> ' . '<td>' . $row['坪數'] . '</td>' . '<td>' . $row['床型'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                        mysqli_free_result($result);

                        mysqli_close($link);
                        ?>
                        <br>
                        <br>
                    </div>
                    <div id = "hotel2" style = "display:none">
                        <h2>二館</h2>
                        <?php
                        $link = mysqli_connect("localhost", "106dba11", "dilsdba11", "106dba11");

                        if ($link === false) {
                            echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
                            echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
                            die();
                        }

                        mysqli_query($link, 'set names utf8');
                        echo '<table>';
                        echo '<tr><th>房間編號</th><th>房型</th><th>每晚定價</th><th>坪數</th><th>床型</th></tr>';
                        $sql = "SELECT * FROM 房間 WHERE 分館 = '二館' ORDER BY 房間編號 ASC";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['房間編號'] . '</td>' . '<td>' . $row['房型'] . '</td>' . '<td>' . $row['每晚定價'] . '</td> ' . '<td>' . $row['坪數'] . '</td>' . '<td>' . $row['床型'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                        mysqli_free_result($result);

                        mysqli_close($link);
                        ?>
                        <br>
                        <br>
                    </div>
                    <div id = "hotel3" style = "display:none">
                        <h2>三館</h2>
                        <?php
                        $link = mysqli_connect("localhost", "106dba11", "dilsdba11", "106dba11");

                        if ($link === false) {
                            echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
                            echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
                            die();
                        }

                        mysqli_query($link, 'set names utf8');
                        echo '<table>';
                        echo '<tr><th>房間編號</th><th>房型</th><th>每晚定價</th><th>坪數</th><th>床型</th></tr>';
                        $sql = "SELECT * FROM 房間 WHERE 分館 = '三館' ORDER BY 房間編號 ASC";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['房間編號'] . '</td>' . '<td>' . $row['房型'] . '</td>' . '<td>' . $row['每晚定價'] . '</td> ' . '<td>' . $row['坪數'] . '</td>' . '<td>' . $row['床型'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                        mysqli_free_result($result);

                        mysqli_close($link);
                        ?>
                        <br>
                        <br>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="center" style="background-color:white">
                <div id="menu1">
                    <p> <br>
                        <br>
                        <a href="https://www.facebook.com/fullonhotels/"><img src="pics/facebook.png" height="50"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/Fullon_Hotels"><img src="pics/twitter.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.instagram.com/fullonhotels/"><img src="pics/ig.png" height="50"></a> </p>
                    <br>
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
