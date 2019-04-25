<?php
//Code By Võ Hữu Nhân
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
define("DATABASE", "anira565_animek");
define("USERNAME", "anira565_animek");
define("PASSWORD", "anira565_animek");
define("LOCALHOST", "mysql06.dotvndns.vn");
$trangchu = "https://aniraw.net";
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
mysqli_set_charset($ketnoi,"utf8");
$conn=mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
$conn->set_charset("utf8");
$conn->query('UPDATE thongtin SET luotxem = luotxem + 1');
$link = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
?>