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
		
			
		
		<div class="userInformation">
			<h1>마이 페이지</h1>
			<table id = no1 border="1" bordercolor="blue" width ="500" height="300" align = "center" >
				<tr bgcolor="blue" align ="center">
					<p><td colspan = "2" span style="color:white">K : J 회원 정보</td></p>
				</tr>
				<tr align = "center" bgcolor="skybule">
					<td>목록</td>
					<td>내 정보</td>
				
				</tr>
				<tr>
					<td>아이디</td>
					<td></td>
				
				</tr>
				<tr>
					<td>비밀번호</td>
					<td></td>
				
				</tr>
				<tr>
					<td>이름</td>
					<td></td>
				
				</tr>
				<tr>
					<td>성별</td>
					<td></td>
				
				</tr>
				<tr>
					<td>생년월일</td>
					<td></td>
				
				</tr>
				<tr>
					<td>주소</td>
					<td></td>
				
				</tr>
				
				<tr>
					<td>핸드폰</td>
					<td></td>
				</tr>
				
				<tr>
					<td colspan = "2" align = "center" bgcolor="skyblue">나의 개인정보</td>
				</tr>
				<tr>
					<td>키</td>
					<td></td>
				
				</tr>
				<tr>
					<td>몸무게</td>
					<td></td>
				
				</tr>
				<tr>
					<td>지역</td>
					<td></td>
				
				</tr>
				<tr>
					<td>전공</td>
					<td></td>
				
				</tr>
				<tr>
					<td>mbti</td>
					<td></td>
				
				</tr>
			</table>
			<button id = no1>정보보기</button>
		</div>
        
		
		
	</body>
</html>
<script src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#no1').click(function(){
			$.ajax({
				url: "customerinfo.php",
				type: "post",
				data: $("form").serialize(),
				dataType:"json",
			}).done(function(data){
				var html = "";
				for(var i = 0; i<data.seq.length; i++){
					html += "<tr>";
					html += "<td>Json - "+data.custid[i]+"</td>";
					html += "<td>"+data.custpw[i]+"</td>";
					html += "<td>"+data.name[i]+"</td>";
					html += "<td>"+data.dayofbirth[i]+"</td>";
					html += "<td>"+data.sex[i]+"</td>";
					html += "<td>"+data.height[i]+"</td>";
					html += "<td>"+data.weight[i]+"</td>";
					html += "<td>"+data.address[i]+"</td>";
					html += "<td>"+data.phone[i]+"</td>";
					html += "<td>"+data.major[i]+"</td>";
					html += "<td>"+data.mbti[i]+"</td>";
					html += "<td>"+data.area[i]+"</td>";
					html += "</tr>";
				}
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