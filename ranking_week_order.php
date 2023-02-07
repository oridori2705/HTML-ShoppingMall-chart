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
		<link href="CSS/rankStyle.css" rel="stylesheet" />

		<?php
    $conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");
    session_start();

    $sql = "SELECT orders.prodid, product.prodname, product.image, product.price, COUNT(*) AS 'SELLCOUNT' 
            FROM product, orders
            WHERE product.prodid = orders.prodid AND orders.orderDT >= DATE_ADD(CURDATE(), INTERVAL -7 DAY) AND orders.orderDT <= CURDATE()
            GROUP BY prodid 
            ORDER BY COUNT(*) DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        $prodid_array[] = ($row["prodid"]);
        $prodname_array[] = ($row["prodname"]);
        $image_array[] = ($row["image"]);
        $price_array[] = ($row["price"]);
        $sellcount_array[] = ($row["SELLCOUNT"]);
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
		
		<div class="div">
			<p class = "p_main"><font class = "font_main">Ranking Shop</font> <br> 
				<font class="font2">K:J의 랭킹 페이지 입니다.</font> <br> 
				<font>랭킹은 데이터베이스에 의해 평점수, 주문 많은수를 반영하여 분류됩니다.</font>
			</p>

			<p class="p_main">
				<font class = "font_clf">기간</font>
				<a href="ranking_daily_order.php"><font>일간</font></a>
				<a href="ranking_week_order.php"><font class="font_sel" style="color:black; font-weight: bold;">주간</font></a>
				<a href="ranking_month_order.php"><font>월간</font></a>
			</p>
			<p class="p_main">
				<font class = "font_clf">분류</font>
				<a href="ranking_week_order.php"><font class="font_sel" style="color:black; font-weight: bold;">주문 많은수</font></a>   
                <a href="ranking_week_sale.php"><font>판매량</font></a>	
				<a href="ranking_week_point.php"><font>평점순</font></a>
			</p>
			
		</div> 
		
		<div class = "div_ran">
			<table class="table_ran">
				<tr>
					<td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">1위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[0])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[0];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[0] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[0])
											echo "주문";
										else
											echo $sellcount_array[0]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[0])
											echo "데이터 없음";
										else
											echo $price_array[0]."원";
										?></td></tr>
						</table>
					</td>
					<td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">2위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[1])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[1];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[1] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[1])
											echo "주문";
										else
											echo $sellcount_array[1]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[1])
											echo "데이터 없음";
										else
											echo $price_array[1]."원";
										?></td></tr>
						</table>
					</td><td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">3위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[2])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[2];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[2] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[2])
											echo "주문";
										else
											echo $sellcount_array[2]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[2])
											echo "데이터 없음";
										else
											echo $price_array[2]."원";
										?></td></tr>
						</table>
					</td><td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">4위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[3])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[3];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[3] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[3])
											echo "주문";
										else
											echo $sellcount_array[3]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[3])
											echo "데이터 없음";
										else
											echo $price_array[3]."원";
										?></td></tr>
						</table>
					</td><td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">5위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[4])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[4];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[4] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[4])
											echo "주문";
										else
											echo $sellcount_array[4]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[4])
											echo "데이터 없음";
										else
											echo $price_array[4]."원";
										?></td></tr>
						</table>
					</td><td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">6위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[5])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[5];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[5] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[5])
											echo "주문";
										else
											echo $sellcount_array[5]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[5])
											echo "데이터 없음";
										else
											echo $price_array[5]."원";
										?></td></tr>
						</table>
					</td>
				</td>
				</tr>
				<tr>
					<td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">7위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[6])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[6];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[6] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[6])
											echo "주문";
										else
											echo $sellcount_array[6]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[6])
											echo "데이터 없음";
										else
											echo $price_array[6]."원";
										?></td></tr>
						</table>
					</td>
					<td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">8위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[7])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[7];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[7] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[7])
											echo "주문";
										else
											echo $sellcount_array[7]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[7])
											echo "데이터 없음";
										else
											echo $price_array[7]."원";
										?></td></tr>
						</table>
					</td><td class="td_border">
						<table class="table_pro">
							<tr><td><font class="font_ran">9위</font></td></tr>
							<tr><td class="td_img"><a href="#"><img src="<?php 
										if(!$image_array[8])
											echo "https://m.secretmall.net/web/product/big/20200312/e9ae396fda792191f08794b55e35da59.jpg";
										else
											echo $image_array[8];
										?>" class="img_ran"></a></td></tr>
							<tr><td class="td"><?php echo $prodname_array[8] ?></td></tr>
							<tr><td class="td"><?php 
										if(!$image_array[8])
											echo "주문";
										else
											echo $sellcount_array[8]."주문"
										?></td></tr>
							<tr><td class="td"><?php 
										if(!$price_array[8])
											echo "데이터 없음";
										else
											echo $price_array[8]."원";
										?></td></tr>
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