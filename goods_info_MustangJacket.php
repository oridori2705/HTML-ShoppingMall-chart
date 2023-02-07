<?php
    session_start();
	$conn = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003") or die("connect failed");
    $prodid = "outer3";

    $sql = "SELECT prodname, tag, price, image FROM product WHERE prodid = '$prodid'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
	$prodname = ($row['prodname']); 
	$tag = ($row['tag']);
    $price = ($row['price']); 
    $image = ($row['image']);
    
	$sql1 = "SELECT AVG(starpoint) AS staravg
            FROM orders
            WHERE prodid = '$prodid'";
    $result1 = mysqli_query($conn, $sql1);
    $row1=mysqli_fetch_assoc($result1);
    $avgstar = ($row1['staravg']);
?>
<!DOCTYPE html>
<html>
	 <head>
		<meta charset="utf-8">
		<meta name="descriptiopn" content="프로젝트_01"> <!--홈페이지 설명-->
		<meta name="keywords" content="HTML, CSS, JQUERY"> <!--검색 키워드-->
	  
		<title>SimpleShop-상품</title>
		<meta charset="utf-8" />
		<link href="CSS/goodsInfoStyle.css" rel="stylesheet" />
		
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
					<a href="ranking.php">
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
		
		<!-- 두개의 div를 자식으로 두고있는 부분 -->
		<div class="goodsInfoFirst">
			<form action="buyProcess.php" method="POST" id="size"> 
				<!-- 상품 이미지 부분 -->
				<div class="productImage">
					<img src="<?php echo $image;?>" width="600px" height="600px">
					<input type="hidden" value = <?php echo $prodid;?>  name="prodid1">
					<input type="hidden" value = <?php echo $price;?>  name="price">
				</div>
				<!-- 상품 상세점보 부분 -->
				<div class="infoMenu">
					<!-- 상품명 부분 -->
					<div class="headingArea">
						<h1><?php echo $prodname;?></h1>
					</div>
					<!-- 판매가 부분 -->
					<div class="price">
						<ul>
							<li>판매가</li>
							<li><?php echo $_COOKIE['price'];?></li>
						</ul>
					</div>
					<!-- 사이즈 선택부분 -->
					<div class="sizeCheck">
						<ul>
							<li>사이즈</li>
							<!-- 콤보박스 -->
								<select name="size" >
									<option value="none">=== 선택 ===</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
						</ul>
					</div>
					<div>
						<form>
							<input id = count type = "number" name=amount value=0>
							<input type=button value="증가" onClick="javascript:this.form.amount.value++;">
							<input type=button value="감소" onClick="javascript:this.form.amount.value--;">
						</form>
					</div>
					<!-- 태그부분 -->
					<div class="productTag">
						<p>#<?php echo $tag;?></p>
					</div>
					<div class="goodsStar">
						<p>구매후기</p>
						<span class="star">
								★★★★★ <!--그냥 별-->
								<?php if($avgstar > 0 && $avgstar <= 1)
										{
											?>
												<span style=" width:110px;">★</span>
											<?php
										}
								?>
								<?php if($avgstar > 1 && $avgstar <= 2)
										{
											?>
												<span style=" width:110px;">★★</span>
											<?php
										}
								?>
								<?php if($avgstar > 2 && $avgstar <= 3)
										{
											?>
												<span style=" width:110px;">★★★</span>
											<?php
										}
								?>
								<?php if($avgstar > 3 && $avgstar <= 4)
										{
											?>
												<span style=" width:110px;">★★★★</span>
											<?php
										}
								?>
								<?php if($avgstar > 4 && $avgstar <= 5)
										{
											?>
												<span style=" width:110px;">★★★★★</span>
											<?php
										}
								?>
							<input type="range" oninput="drawStar(this)" value="1" step="1" min="0" max="">
						</span>
					
					
					</div>
					<div class="btnAll">
						<a href="#">
							<div class="btnBuy" >
								<input type="submit" class="inputBtnBuy" value="바로구매"></input>
							</div>
						</a>
		
						<a href="#">
							<div class="btnJang">
							장바구니
							</div>
						</a>
						<a href="#">
							<div class="btnLikeGoods">
							관심 상품
							</div>
						</a>
					</div>
					
				</div>
				</form>
					
			</div>
		
		<div class="productInfoMiddle">
			<h2>상품 상세 정보</h2>
			<div class="productExplan">
				<ul>
					<li><img src="http://ydoag2003.dothome.co.kr/shop/Images/mustang1.PNG" width="600px" height="600px"></li>
					<li><img src="http://ydoag2003.dothome.co.kr/shop/Images/mustang2.PNG" width="600px" height="600px"></li>
					<li><img src="http://ydoag2003.dothome.co.kr/shop/Images/mustang3.PNG" width="600px" height="600px"></li>
					<li><img src="http://ydoag2003.dothome.co.kr/shop/Images/mustang4.PNG" width="600px" height="600px"></li>
				</ul>
		</div>
		</div>
		
		<script src="CSS/goodsInfoStar.js"></script>
	</body>
</html>