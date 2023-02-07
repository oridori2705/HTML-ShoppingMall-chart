
<?php session_start(); ?>
<?php
	//mysql 연결
	$db = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");  //현재 나는 웹서버로 하였음
	// 쿼리문
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//이 sql문은 3개의 테이블을 조인하면서 조건을 썻음 10대 20대 30대 40대 따로 따로 sql문을 해야함
	$sql = "SELECT A.tag as tag ,count(B.orderid) as count FROM product AS A,orders AS B,customer AS C 
	WHERE B.prodid = A.prodid  and B.custid =C.custid and 
	ROUND((TO_DAYS(NOW()) - (TO_DAYS(C.dayofbirth))) / 365) 
	between 10 and 20 group by A.tag order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array10[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array10[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data10 = json_encode($data_array10); //json으로 배열을 js에 넘겨줌
	$lable10 = json_encode($lable_array10);

	
	//20대------------------------------------------------------------------------------------------
	$sql = "SELECT A.tag as tag ,count(B.orderid) as count FROM product AS A,orders AS B,customer AS C WHERE B.prodid = A.prodid  and B.custid =C.custid and ROUND((TO_DAYS(NOW()) - (TO_DAYS(C.dayofbirth))) / 365) between 20 and 30 group by A.tag order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array20[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array20[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data20 = json_encode($data_array20); //json으로 배열을 js에 넘겨줌
	$lable20 = json_encode($lable_array20);



	//30대------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag as tag ,count(B.orderid) as count FROM product AS A,orders AS B,customer AS C WHERE B.prodid = A.prodid  and B.custid =C.custid and ROUND((TO_DAYS(NOW()) - (TO_DAYS(C.dayofbirth))) / 365) between 30 and 40 group by A.tag order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array30[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array30[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data30 = json_encode($data_array30); //json으로 배열을 js에 넘겨줌
	$lable30 = json_encode($lable_array30);


	//40대------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag as tag ,count(B.orderid) as count FROM product AS A,orders AS B,customer AS C WHERE B.prodid = A.prodid  and B.custid =C.custid and ROUND((TO_DAYS(NOW()) - (TO_DAYS(C.dayofbirth))) / 365) between 40 and 50 group by A.tag order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array40[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array40[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data40 = json_encode($data_array40); //json으로 배열을 js에 넘겨줌
	$lable40 = json_encode($lable_array40);
	
	
	//50대------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag as tag ,count(B.orderid) as count FROM product AS A,orders AS B,customer AS C WHERE B.prodid = A.prodid  and B.custid =C.custid and ROUND((TO_DAYS(NOW()) - (TO_DAYS(C.dayofbirth))) / 365) between 50 and 60 group by A.tag order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array50[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array50[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data50 = json_encode($data_array50); //json으로 배열을 js에 넘겨줌
	$lable50 = json_encode($lable_array50);
?>

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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> <!--가끔 원인모르는 오류 차트 못찾겟다 같은오류 뜨는데 여기 바꾸면 잘됨-->
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
		<div class="mainBox">
			<div class="chartBox">
				<h1>10대 구매 비율</h1>
				<canvas id="bar-chart-horizontal-10" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>20대 구매 비율</h1>
				<canvas id="bar-chart-horizontal-20" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>30대 구매 비율</h1>
				<canvas id="bar-chart-horizontal-30" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>40대 구매 비율</h1>
				<canvas id="bar-chart-horizontal-40" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>50대이후 구매 비율</h1>
				<canvas id="bar-chart-horizontal-50" width="300" height="250"></canvas>
			</div>
			
		</div>
		
	 </body>
</html>
<script  charset="UTF-8"> //chart.js 쓸때 위에서 스크립트 src 선언을 head쪽에서 하는게 오류 안남
	
	//10대
	new Chart(document.getElementById("bar-chart-horizontal-10"), {
		type: 'horizontalBar',
		data: {
		  labels: <?php echo ($lable10);?>, //json에서 받아온 배열을 데이터로 넣음 바로 됨
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: <?php echo ($data10);?>  //json으로 받아온 배열을 데이터로 넣는 것 바로 됨
			}
		  ]
		},
		options: {
			legend: { display: false },
			scales: {
				xAxes: [{
					ticks: {
						min: 0,  //여기는 최소값 설정하는것 반점 잘 찍어서 오류 없애기
					}
				}]
			},
			title: {
			display: true,
				text: '10대의 선호 비율'
			}
		}
	});
	new Chart(document.getElementById("bar-chart-horizontal-20"), {
		type: 'horizontalBar',
		data: {
		  labels: <?php echo ($lable20);?>,
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: <?php echo ($data20);?>
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  scales: {
				xAxes: [{
					ticks: {
						min: 0,  //여기는 최소값 설정하는것 반점 잘 찍어서 오류 없애기
					}
				}]
			},
		  title: {
			display: true,
			text: '20대의 선호 비율'
		  }
		}
	});
	new Chart(document.getElementById("bar-chart-horizontal-30"), {
		type: 'horizontalBar',
		data: {
		  labels: <?php echo ($lable30);?>,
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: <?php echo ($data30);?>
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  scales: {
				xAxes: [{
					ticks: {
						min: 0,  //여기는 최소값 설정하는것 반점 잘 찍어서 오류 없애기
					}
				}]
			},
		  title: {
			display: true,
			text: '30대의 선호 비율'
		  }
		}
	});
	new Chart(document.getElementById("bar-chart-horizontal-40"), {
		type: 'horizontalBar',
		data: {
		  labels:	<?php echo ($lable40);?>,
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: <?php echo ($data40);?>
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  scales: {
				xAxes: [{
					ticks: {
						min: 0,  //여기는 최소값 설정하는것 반점 잘 찍어서 오류 없애기
					}
				}]
			},
		  title: {
			display: true,
			text: '40대의 선호 비율'
		  }
		}
	});
	new Chart(document.getElementById("bar-chart-horizontal-50"), {
		type: 'horizontalBar',
		data: {
		  labels: <?php echo ($lable50);?>,
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: <?php echo ($data50);?>
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  scales: {
				xAxes: [{
					ticks: {
						min: 0,  //여기는 최소값 설정하는것 반점 잘 찍어서 오류 없애기
					}
				}]
			},
		  title: {
			display: true,
			text: '50대의 선호 비율'
		  }
		}
	});	

	
</script>
