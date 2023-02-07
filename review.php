<?php session_start();?>

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
		<link href="CSS/myPageStyle.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 </head>
	
<!-- 로고와 로그인메뉴 -->
	<body>
		<div class="navbar">
			<a class="logo" href="#">
				
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
		<title>마이페이지</title>
</head>	
	<body>
			<br><br><br><br><br><br><br>
		<form action = "reviewupdate.php" method="POST">

			<div class="mb-3 " align="center" >
                <label for="id" class="form-label">아이디</label>
                <input type="text" name="id" class="form-control" id="id" placeholder="아이디를 입력해주세요." style="width: 200px; height: 40px;">
				&nbsp; 
				<label for="username" class="form-label">주문번호</label>
                <input type="text" class="form-control" name="orderid" id="orderid" placeholder="주문번호 입력해주세요." style="width: 200px; height: 40px;">
            </div>

            <br><br><br><br>

			<div class="mb-3 " align="center" >
                <label for="id" class="form-label">리뷰</label>
                <input type="text" name="review" class="form-control" id="id" placeholder="리뷰를 작성해주세요." style="width: 500px; height: 300px;">
            </div>
			<div class="mb-3 " align="center" >
                <label for="id" class="form-label">별점</label>
                <input type="text" name="starpoint" class="form-control" id="id" placeholder="별점을 적어주세요. 1~5 !!!!!" style="width: 200px; height: 40px;">
            </div>
			<br><br><br><br>
        <div align="center">
				<input type='submit' style="width: 200px; height: 40px;" value="리뷰 등록하기">
		</div>
		
		</form>
	</body>
</html>
<script src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#no1').click(function(){
			$.ajax({
				url: "orderlist.php",
				type: "post",
				data: $("form").serialize(),
			}).done(function(data){
				$("#input_data").html(data);
			});
		});
		
	});

</script>







<!-- 스크립트 부분  -->
<script>
	function tableCreate(){

	var tc = new Array();
	var html = '';
			<!-- 테이블 삽입 부분 -->
	tc.push({orderid : '4',prodid  : 'dgsdsd1234', custid : 'shinjun', 
	orderDT : '2021-11-24',count : 2, size : 'L',starpoint : 5, review : '만족함' }); 
	
	<!-- 업데이트 하기 버튼을 누르면 데이터를 삽입한다. 나중에 DB데이터 갖고올 때 버튼누르면 이중반복해서 하나씩 갖고오는 방식 -->
	<!-- 나중에 다른 방식 괜찮은거 있으면 바꿔도 댐 임시로 했음! -->
	<!-- 내가 생각한 방식은  1.마이페이지에 들어가서 업데이트하기 누르고 자신의 주문내역을 봄 -->
	<!-- 2. 거기서 별점이 누락된 것들이 있으면 사용자가 주문 번호를 외워서 입력하고 -->
	<!-- 3. 별점 작성하기 들어가서 새로운 창에서(html) 간단하게 별점 작성과 리뷰를 달고 -->
	<!-- 4. sql문으로는 UPDATE문으로 해서 그 값만 고치면 됨  -->
	<!-- 그냥 간단하게 생각한 거니까 다른 방식 있으면 해도 됨! -->
	for(key in tc){
	html += '<tr>';
	html += '<td>'+tc[key].orderid+'</td>';
	html += '<td>'+tc[key].prodid+'</td>';
	html += '<td>'+tc[key].custid+'</td>';
	html += '<td>'+tc[key].orderDT+'</td>';
	html += '<td>'+tc[key].count+'</td>';
	html += '<td>'+tc[key].size+'</td>';
	html += '<td>'+tc[key].starpoint+'</td>';
	html += '<td>'+tc[key].review+'</td>';
	html += '</tr>';
	}
	
	$("#dynamicTbody").empty();
	<!-- append 로 나타낸다. -->
	$("#dynamicTbody").append(html);
			
}
</script>


