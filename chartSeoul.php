<!DOCTYPE html>

<html>
	 <head>
		<meta charset="utf-8">
		<meta name="descriptiopn" content="프로젝트_01"> <!--홈페이지 설명-->
		<meta name="keywords" content="HTML, CSS, JQUERY"> <!--검색 키워드-->
	  
		<title>SimpleShop</title>
		<meta charset="utf-8" />
		<link href="CSS/style.css" rel="stylesheet" />
		<link href="CSS/bannerStyle.css" rel="stylesheet" />
		<link href="CSS/chartStyle.css" rel="stylesheet" />
		<link href="CSS/rankStyle.css" rel="stylesheet" />

		<?php
    $conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");
    session_start();

    $sql = "SELECT A.prodid, A.image, A.tag, A.price,A.prodname,C.area ,count(B.count) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B  
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.area='서울'
			group by A.prodid
			order by count DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        $prodid_array[] = ($row["prodid"]);
        $prodname_array[] = ($row["prodname"]);
        $image_array[] = ($row["image"]);
        $price_array[] = ($row["price"]);
        $sellcount_array[] = ($row["count"]);
    }
		?>


	 </head>
	
<!-- 로고와 로그인메뉴 -->
	<body>
		
	
		<div class="navbar">
			<a class="logo" href="afterLoginMain.php">
                <img src="http://ydoag2003.dothome.co.kr/shop/Images/logo.PNG" height="40px">
            </a>
            <ul>
                <li><a href="#">Cart</a></li>
                <li><a href="mypage.php"><?php echo $_SESSION['userid'], "님"; ?></a></li>
                <li><a href="beforeLoginMain.php">Logout</a></li>
            </ul>
        </div>
            <!--메인메뉴 네비-->
        <nav class="topMenu">
            <ul>
                <li>
                    <a href="afterLoginMain.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="ranking_month_order.php">
                        Rank
                    </a>
                </li>
                <li>
                    <a href="chartRegion.php">
                        Statics
                    </a>
                </li>
                <li>
                    <a href="orders.php">
                        Review
                    </a>
                </li>
            </ul>
        </nav>
		
		<div class="sideMenu">
			<ul>
				<li><a class="job" href="#">차트 목록</a></li>
				<li><a href="chartRegion.php">지역</a></li>
				<li><a href="chartAge.php">나이</a></li>
				<li><a href="chartMajor.php">직업,전공</a></li>
				<li><a href="chartMbti.php">MBTI</a></li>
				<li><a class="job" href="#">MBTI별 목록</a></li>
				<li><a href="chartIntj.php">INTJ</a></li>
				<li><a href="#">INTP</a></li>
				<li><a href="#">ENTJ</a></li>
				<li><a href="#">ENTP</a></li>
				<li><a href="#">INFJ</a></li>
				<li><a href="#">INFP</a></li>
				<li><a href="#">ENFJ</a></li>
				<li><a href="#">ENFP</a></li>
				<li><a href="#">ISTJ</a></li>
				<li><a href="#">ISFP</a></li>
				<li><a href="#">ESTJ</a></li>
				<li><a href="#">ESFJ</a></li>
				<li><a href="#">ISTP</a></li>
				<li><a href="#">ISFP</a></li>
				<li><a href="#">ESTP</a></li>
				<li><a href="#">ESFP</a></li>
				<li><a class="job" href="#">지역별 목록</a></li>
				<li><a href="#">강원도</a></li>
				<li><a href="chartSeoul.php">서울</a></li>
				<li><a href="#">경기도</a></li>
				<li><a href="#">인천</a></li>
				<li><a href="#">충청도</a></li>
				<li><a href="#">경상도</a></li>
				<li><a class="job" href="#">나이대 목록</a></li>
				<li><a href="#">10대</a></li>
				<li><a href="chartTwenty.php">20대</a></li>
				<li><a href="#">30대</a></li>
				<li><a href="#">40대</a></li>
				<li><a href="chartMbti.php">50대이후</a></li>
				<li><a class="job" href="#">직업,전공</a></li>
				<li><a href="chartComputer.php">컴퓨터공학부</a></li>
				<li><a href="#">전지전자제어공학부</a></li>
				<li><a href="#">정보통신공학부</a></li>
				<li><a href="#">기계자동차공학부</a></li>
				<li><a href="#">건축학부</a></li>
				<li><a href="#">화학공학부</a></li>
				<li><a href="#">신소재공학부</a></li>
				<li><a href="#">산업디자인공학부</a></li>
				
			</ul>
			
		</div>
		<div class="div">
			<p class = "p_main"><font class = "font_main">Chart Rangking</font> <br> 
				<font class="font2">K:J의 차트 페이지 입니다.</font> <br> 
				<font>서울의 상품별 구매 순위입니다.</font>
			</p>
			</div> 
		<div class = "div_ran">
            <table class="table_ran">
                <tr>
                    <td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">1위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[0] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[0] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[0]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[0]."원" ?></td></tr>
                        </table>
                    </td>
                    <td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">2위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[1] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[1] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[1]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[1]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">3위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[2] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[2] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[2]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[2]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">4위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[3] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[3] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[3]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[3]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">5위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[4] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[4] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[4]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[4]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">6위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[5] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[5] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[5]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[5]."원" ?></td></tr>
                        </table>
                    </td>
                </td>
                </tr>
                <tr>
                    <td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">7위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[6] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[6] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[6]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[6]."원" ?></td></tr>
                        </table>
                    </td>
                    <td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">8위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[7] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[7] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[7]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[7]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">9위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="<?php echo $image_array[8] ?>" class="img_ran"></a></td></tr>
                            <tr><td class="td"><?php echo $prodname_array[8] ?></td></tr>
                            <tr><td class="td"><?php echo $sellcount_array[8]."주문" ?></td></tr>
                            <tr><td class="td"><?php echo $price_array[8]."원" ?></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">10위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg" class="img_ran"></a></td></tr>
                            <tr><td class="td"><font>재입고 준비중</font></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">11위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg" class="img_ran"></a></td></tr>
                            <tr><td class="td"><font>재입고 준비중</font></td></tr>
                        </table>
                    </td><td class="td_border">
                        <table class="table_pro">
                            <tr><td><font class="font_ran">12위</font></td></tr>
                            <tr><td class="td_img"><a href="#"><img src="https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg" class="img_ran"></a></td></tr>
                            <tr><td class="td"><font>재입고 준비중</font></td></tr>
                        </table>

                        
                    </td>
                </td>
                </tr>
            </table>
        </div>




		<div class="footer">
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/face-book.png"></a>
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/instagram.png"></a>
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/twitter.jpg"></a>
		</div>
	 </body>
</html>