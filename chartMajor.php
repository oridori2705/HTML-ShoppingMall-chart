
<?php session_start(); ?>
<?php
	//mysql 연결
	$db = mysqli_connect("localhost", "ydoag2003", "wnsgur2705^", "ydoag2003");  //현재 나는 웹서버로 하였음
	// 쿼리문
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//컴공   이 sql문은 3개의 테이블을 조인하면서 조건을 썻음 left outer join이란 왼쪽 테이블을 기준으로 값을 (모두[outer]) 표시한다------------------------------------------------------------
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B  
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='컴퓨터공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array1[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array1[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data1 = json_encode($data_array1); //json으로 배열을 js에 넘겨줌
	$lable1 = json_encode($lable_array1);

	
	//전기전자------------------------------------------------------------------------------------------
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='전기전자제어공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array2[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array2[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data2 = json_encode($data_array2); //json으로 배열을 js에 넘겨줌
	$lable2 = json_encode($lable_array2);



	//정보통신공학부------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='정보통신공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array3[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array3[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data3 = json_encode($data_array3); //json으로 배열을 js에 넘겨줌
	$lable3 = json_encode($lable_array3);


	//기계자동차------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='기계자동차공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array4[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array4[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data4 = json_encode($data_array4); //json으로 배열을 js에 넘겨줌
	$lable4 = json_encode($lable_array4);
	
	
	//건축학부------------------------------------------------------------------------------------------

	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='건축학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array5[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array5[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data5 = json_encode($data_array5); //json으로 배열을 js에 넘겨줌
	$lable5 = json_encode($lable_array5);
	
	//화학공학부------------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='화학공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array6[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array6[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data6 = json_encode($data_array6); //json으로 배열을 js에 넘겨줌
	$lable6 = json_encode($lable_array6);
	
	
	
	//신소재공헉부------------------------------------------------------------------------------------
	
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='신소재공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array7[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array7[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data7 = json_encode($data_array7); //json으로 배열을 js에 넘겨줌
	$lable7= json_encode($lable_array7);
	
	
	
	//산업디자인공학부 --------------------------------------------------------------------
	
	
	$sql = "SELECT A.tag ,count(B.orderid) as count
			FROM product AS A
				LEFT OUTER JOIN orders AS B
						ON A.prodid = B.prodid
				LEFT OUTER JOIN customer AS C
						ON B.custid =C.custid
			WHERE C.major='산업디자인공학부'
			group by A.tag
			order by tag ASC;";
	//결과를 변수에 할당
	$result = mysqli_query($db,$sql);
	//배열에 출력된 배열을 담기(모든 데이터)
	while($row=mysqli_fetch_assoc($result)){
		$lable_array8[] = ($row["tag"]); //이건 태그 부분 넣는곳(1열)
		$data_array8[] = ($row["count"]); //이건 그 횟수부분 넣는 곳 (2열)
	}
	$data8 = json_encode($data_array8); //json으로 배열을 js에 넘겨줌
	$lable8 = json_encode($lable_array8);
	
	
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
				<h1>컴퓨터공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-computer" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>전기전자제어공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-electric" width="300" height="250"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>정보통신공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-information" width="300" height="300"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>기계자동차공학부 비율</h1>
				<canvas id="bar-chart-horizontal-mechanical" width="300" height="300"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>건축학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-architecture" width="300" height="300"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>화학공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-chemistry" width="300" height="300"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>신소재공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-material" width="300" height="300"></canvas>
			</div>
			
			<div class="chartBox">
				<h1>산업디자인공학부 구매 비율</h1>
				<canvas id="bar-chart-horizontal-industrial" width="300" height="300"></canvas>
			</div>
			
		</div>
		
	 </body>
</html>
<script  charset="UTF-8">
new Chart(document.getElementById("bar-chart-horizontal-computer"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable1);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data1);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-electric"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable2);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data2);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-information"), {
    type: 'horizontalBar',
    data: {
      labels:<?php echo ($lable2);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data2);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-mechanical"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable3);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data3);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-architecture"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable4);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data4);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-chemistry"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable5);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data:<?php echo ($data5);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-material"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable6);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data6);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-industrial"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable7);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data7);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
new Chart(document.getElementById("bar-chart-horizontal-industrial"), {
    type: 'horizontalBar',
    data: {
      labels: <?php echo ($lable8);?>,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: <?php echo ($data8);?>
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
        text: 'Predicted world population (millions) in 2050'
      }
    }
});

</script>