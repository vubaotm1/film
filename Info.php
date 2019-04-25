<?php
require("vhn_config.php");
header('Content-Type: text/html;charset=utf-8');  
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$url_phim = $_GET['url_phim'];
$type = $_GET['type'];
?>
<!DOCTYPE html>
<html lang="vi">
<?php
$sql = "SELECT * FROM vhn_film WHERE linkphim = '$url_phim'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
?>
<?php

    //PHP thuần
    $sessionKey = 'luotxem' . $postId;
    $sessionView = $_SESSION[$sessionKey];
    if (!$sessionView) { // nếu chưa có session
        $_SESSION[$sessionKey] = 1; //set giá trị cho session
        $conn->query("UPDATE vhn_film SET luotxem = luotxem + 1 WHERE linkphim = '$url_phim'");
    }


?>
<?php $tap = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `vhn_tap` WHERE `linkphim` = '$url_phim' "));  ?>
<head>
      <base href="<?php echo $trangchu ?>/">
<title><?php echo "".$row["tenphim"].""; ?></title>
<meta name="description" content="<?php echo "".$row["noidung"].""; ?>" />
<link rel="canonical" href="https://aniraw.net/Info/<?php echo $url_phim ?>"/>
<link rel="icon" href="http://i.imgur.com/SQ5D74B.png" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8">
<meta property="og:type" content="website" />
<meta property="og:title" content="Phim <?php echo "".$row["tenphim"].""; ?>" />
<meta property="og:description" content="<?php echo "".$row["noidung"].""; ?>" />
<meta property="og:image" content="<?php echo "".$row["thumbnail"].""; ?>" />
<meta property="og:site_name" content="aniraw.net" />
<meta property="og:url" content="https://aniraw.net/Info/<?php echo $url_phim ?>" />
<meta property="og:locale" content="vi_VN" />
<meta property="fb:app_id" content="2192074074245587" />
<meta property="fb:admins" content="113150126504227" />
<meta name="robots" content="index, follow">
<link href="https://fonts.googleapis.com/css?family=Pridi|Roboto" rel="stylesheet">
<link href="./themes/AH_1-2/all/css/styleweb.css?v=4.9.5" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<script src="./themes/AH_1-2/all/js/init.js?v=1.8.2"></script>
</head>
<body>
    <div id="ah-wrapper">
<?php include ("./vhn_themes/AnimeHay/header.html"); ?>
<div id="ah-container" class="ah-clear-both"><div id="ah-pif" itemscope="" itemtype="http://schema.org/Product">
    <div class="ah-pif-head">
        <div class="ah-pif-fname">
            <h1><a title="<?php echo "".$row["tenphim"].""; ?>"><span itemprop="name"><?php echo "".$row["tenphim"].""; ?></span></a></h1>
        </div>
        <div class="ah-clear-both relative cth">
            <div class="ah-pif-fthumbnail ah-bg-bd">
                <img src="<?php echo "".$row["thumbnail"].""; ?>" alt="<?php echo "".$row["tenphim"].""; ?>">
            </div>
            <div class="ah-pif-fcover ah-bg-bd">
                <img src="<?php echo "".$row["anhbia"].""; ?>" alt="<?php echo "".$row["tenphim"].""; ?>">
            </div>
        </div>
        <div class="ah-pif-ftool ah-bg-bd ah-clear-both">
            <div class="ah-float-left">
                            <span><a href="https://aniraw.net/Xem/<?php echo $row["linkphim"] ?>/1" class="button-one"><i class="fa fa-play-circle"></i> Xem Phim</a></span>
                <span>
                                            
                                    </span>
            </div>
       
    
    </div>
     </div>
          <div class="ah-rate-film">
           
				<span class="rate-film"><select id="rate-film"> <!-- now hidden -->
            <option value="0">Đánh Giá</option>
            <option value="1">1* - Siêu Tệ</option>
            <option value="2">2* - Tệ</option>
            <option value="3">3* - Dở</option>
            <option value="4">4* - Chán</option>
            <option value="5">5* - Bình Thường</option>
            <option value="6">6* - Tạm Được</option>
            <option value="7">7* - Được</option>
            <option value="8">8* - Hay</option>
            <option value="9">9* - Rất Hay</option>
            <option value="10">10* - Siêu Phẩm</option>
          </select>
		  <i class="fa fa-arrow-circle-down"></i>
		  </span>
          
        </div>
    <div class="ah-pif-body ah-clear-both">
                
        <div class="ah-pif-fdetails ah-bg-bd mg-5">
            <div class="ah-pif-title">Thông tin</div>
                <ul>
                	                <li class="ah-pif-ne">
	                	<strong>Tập mới :</strong>
		                		                		                		                	<a title="<?php echo "".$row["tenphim"].""; ?> Tập <?php echo $tap ?>"><?php echo $tap ?></a>
		            		            	</li>
           		                                                <li> 
                <strong>Tên khác :</strong>
                <?php echo "".$row["tenphim"].""; ?>               </li>
                                <li>
                <strong>Năm phát hành :</strong>
                <?php echo "".$row["namphim"].""; ?> 
                </li>
                <li>
                <strong>Thể loại :</strong>
                                                                <span><a title="<?php echo "".$row["theloai"].""; ?>"><?php echo "".$row["theloai"].""; ?></a></span>
                                                                                
                                                </li>
                <li>
                                <strong>Thời lượng :</strong>
                <?php echo "".$row["tongsotap"].""; ?> Tập                </li>
               <li class="ah-pif-ne">
	                	<strong>Lượt xem :</strong>
		                		                		                		                	<a title="<?php echo "".$row["luotxem"].""; ?>"><?php echo "".$row["luotxem"].""; ?></a>
		            		            	</li>
                </ul>
        </div>
        <div class="ah-pif-fcontent ah-bg-bd mg-5">
            <div class="ah-pif-title">Nội Dung</div>
<p><?php echo "".$row["noidung"].""; ?>
        </div>
    </div>
</div>
</div>
 <?php include ("./vhn_themes/AnimeHay/footer.html"); ?>
        </div>
       
</body>
<?php }} ?>