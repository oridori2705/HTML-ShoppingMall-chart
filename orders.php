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
                <li><a href="#"><?php echo $_SESSION['userid'], "님"; ?></a></li>
				<li><a href="#">Login</a></li>
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
		<title>마이페이지</title>
</head>	
	<body>
		

<div class="purchaseHistory">
			<h2>구매 내역</h2>
			<div>
				<table width ="1000"  align = "center" id="dynamicTable" >
					<thead>
						<tr align = "center" bgcolor="gray">
							<th>주문번호</th>
							<th>상품명</th>
							<th>주문아이디</th>
							<th>개수</th>
                            <th>가격</th>
                            <th>주문 날짜</th>
							<th>사이즈</th>
							<th>별점</th>
							<th>리뷰</th>	
						</tr>
					</thead>
				
					<tbody id="input_data">
                        
                        
					</tbody>
					
				</table>
				
				
			</div>
            
			
			
		</div>

        <div align="center">
				<button id="no1" style="width: 200px; height: 40px;">구매 내역 보기</button>
				<button style="width: 200px; height: 40px;" onClick="location.href='review.php'" >리뷰 쓰러 가기</button>
		</div>
		
		
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


