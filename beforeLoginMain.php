<!DOCTYPE html>
<?php
    session_start();
    session_destroy();
?>

<html>
	 <head>
	 
		<meta charset="utf-8">
		<meta name="descriptiopn" content="프로젝트_01"> <!--홈페이지 설명-->
		<meta name="keywords" content="HTML, CSS, JQUERY"> <!--검색 키워드-->
	  
		<title>SimpleShop</title>
		<meta charset="utf-8" />
		<link href="CSS/style.css" rel="stylesheet" />
		<link href="CSS/bannerStyle.css" rel="stylesheet" />
	 </head>
	
<!-- 로고와 로그인메뉴 -->
	<body>
		<div class="navbar">
			<a class="logo" href="#">
				
				<img src="http://ydoag2003.dothome.co.kr/shop/Images/logo.PNG" height="40px">
			</a>	
			<ul>
				<li><a href="#">Cart</a></li>
				<li><a href="login2.php">Login</a></li>
			</ul>
		</div>
			<!--메인메뉴 네비-->
		<nav class="topMenu">
			<ul>
				<li>
					<a href="beforeLoginMain.php">
						Home
					</a>
				</li>
				<li>
					<a href="ranking_month_order.php">
						Rank
					</a>
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
		
		
		<!--롤링배너-->
		</div>
			<div class="section">
			<input type="radio" name="slide" id="slide01" checked>
			<input type="radio" name="slide" id="slide02">
			<input type="radio" name="slide" id="slide03">
			<div class="slidewrap">
				
				<ul class="slidelist">
					<!-- 슬라이드 영역 -->
					<li class="slideitem">
						<a>
							<div class="textbox">
								<h3>K : J</h3>
								
							</div>
							<!--CORB오류 보안상 정책으로 이미지를 상대주소로하면 막힌다. 
							고로 http://아이디.dothome.co.kr
							하고 html은 지우고 그 다음 폴더부터 진행하면된다
							닷홈 서버 파일질라는 이렇게 해야한다-->
							<img src="http://ydoag2003.dothome.co.kr/shop/Images/banner1.jpg"> 
						</a>
					</li>
					<li class="slideitem">
						<a>
							
							<div class="textbox">
								<h3>K : J 는 다르다는 것을 보여드리겠습니다.</h3>
								<p>모든 고객님들의 니즈에 맞는 제품을 보여드리겠습니다.</p>
							</div>
							<img src="http://ydoag2003.dothome.co.kr/shop/Images/header.jpg" >
						</a>
					</li>
					<li class="slideitem">
						<a>
							
							<div class="textbox">
								<h3>K : J 는 혁신적으로 다가갑니다</h3>
								<p>특별한 통계를 보여드립니다.</p>
							</div>
							<img src="http://ydoag2003.dothome.co.kr/shop/Images/banner3.jpg">
						</a>
					</li class="slideitem">

					<!-- 좌,우 슬라이드 버튼 -->
					<div class="slide-control">
						<div>
							<label for="slide03" class="left"></label>
							<label for="slide02" class="right"></label>
						</div>
						<div>
							<label for="slide01" class="left"></label>
							<label for="slide03" class="right"></label>
						</div>
						<div>
							<label for="slide02" class="left"></label>
							<label for="slide01" class="right"></label>
						</div>
					</div>

				</ul>
				<!-- 페이징 -->
				<ul class="slide-pagelist">
					<li><label for="slide01"></label></li>
					<li><label for="slide02"></label></li>
					<li><label for="slide03"></label></li>
				</ul>
			</div>

			
		</div>
		<div class="mainBox">
			<div>
				<h1>Our new Products</h1>
			</div>
			<div class="products">
				 <a href="goods_info_Blazer.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/up1.JPG">
					<p>Blazer</p>
					<p class="price">49,000원</p>
				 </a>
				 <a href="goods_info_BlueNeat.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/up2.PNG">
					<p>Blue neat</p>
					<p class="price">89,000원</p>
				  </a>
				 <a href="goods_info_SweatShirts.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/up3.PNG">
					<p>Sweat shirts</p>
					<p class="price">69,000원</p>
				  </a>
				 <a href="goods_info_OverNeat.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/up4.PNG">
					<p>Over neat</p>
					<p class="price">79,000원</p>
				  </a>
				 <a href="goods_info_YaleHoodie.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/YaleHoodie.PNG">
					<p>Yale Hoodie</p>
					<p class="price">39,000원</p>
				  </a>
				 <a href="goods_info_BalmakanCoat.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/balmakancoat.PNG">
					<p>balmakan coat</p>
					<p class="price">199,000원</p>
				  </a>
				 <a href="goods_info_GrayTrainingPants.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/graytrainingpants.PNG">
					<p>gray training pants</p>
					<p class="price">39,000원</p>
				 </a>
				 <a href="goods_info_MustangJacket.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/mustangjacket.PNG">
					<p>mustang jacket</p>
					<p class="price">99,000원</p>
				 </a>
				 <a href="goods_info_DenimPants.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/denimpants.PNG">
					<p>denim pants</p>
					<p class="price">43,000원</p>
				 </a>
				 <a href="goods_info_StringJoggerPants.php">
					<img src="http://ydoag2003.dothome.co.kr/shop/Images/stringJoggerPants.PNG">
					<p>String Jogger Pants</p>
					<p class="price">46,000원</p>
				 </a>
				 <div class="clearfix"></div>
			</div>
		</div>
		
		
		<div class="footer">
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/face-book.png"></a>
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/instagram.png"></a>
		  <a href="#"><img src="http://ydoag2003.dothome.co.kr/shop/Images/twitter.jpg"></a>
		</div>
	 </body>
</html>