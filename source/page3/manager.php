<meta charset="utf-8">
<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>하루하루</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
					
				<!-- Menu -->
					<nav id="menu">
						<h2>메뉴</h2>
						<ul>
                            
							<li><a href="../days2/top.php">Top </a></li>
							<li><a href="../days3/schedule_basket.php">개설 강좌 조회</a></li>
							<li><a href="../days3/finish_course.php">수강 내역 조회</a></li>
							<li><a href="../days3/graduation.php">졸업 학점 조회</a></li>
							<li><a href="../days3/manager.php">관리자 페이지</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>강좌 데이터베이스 관리 </h1>
							<table>
  							<tr>
    						<th>과목코드</th>
    						<th>반번호</th>
    						<th>과목명</th>
    						<th>이수구분</th>
    						<th>학년</th>
    						<th>학점</th>
    						<th>요일/교시</th>
   							 <th>강의실</th>
   							 <th>교수명</th> 
  							</tr>
  							<tr>
    						<td>0511014</td>
    						<td>01</td>
    						<td>웹프로그래밍</td>
    						<td>전공필수</td>
    						<td>3</td>
    						<td>3</td> 
    						<td>금1 금2 금3 금4</td>
    						<td>8공717</td>
							<td>임헌규</td>
  							</tr>
  							<tr>
    						<td>0511014</td>
    						<td>02</td>
    						<td>웹프로그래밍</td>
    						<td>전공필수</td>
    						<td>3</td>
    						<td>3</td>    						
   							<td>금5 금6 금7 금8</td>
    						<td>8공717</td>
    						<td>임헌규</td>
  							</tr>
  							<tr>
    						<td>0512025</td>
    						<td>01</td>
    						<td>임베디드시스템</td>
    						<td>전공선택</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>금1 금2 금3</td>
    						<td>8공816</td>
    						<td>이광준</td>
  							</tr>
    						<tr>
    						<td>0512025</td>
    						<td>02</td>
    						<td>임베디드시스템</td>
    						<td>전공선택</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>금5 금6 금7</td>
    						<td>8공816</td>
    						<td>이광준</td>
  							</tr>
  							<tr>
    						<td>0522026</td>
    						<td>01</td>
    						<td>컴퓨터그래픽스</td>
    						<td>전공선택</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>목1 목2 목3</td>
    						<td>8공717</td>
    						<td>맹승렬</td>
  							</tr>
 							 <tr>
    						<td>0522068</td>
    						<td>03</td>
    						<td>인공지능</td>
   							 <td>전공필수</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>화1 화2 화3</td>
   							 <td>8공817</td>
   							 <td>김동근</td>
  							</tr>
   							 <tr>
    						<td>0522068</td>
    						<td>04</td>
    						<td>인공지능</td>
    						<td>전공필수</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>수1 수2 수3</td>
    						<td>8공817</td>
    						<td>김동근</td>
  							</tr>
 							 <tr>
    						<td>0522103</td>
    						<td>01</td>
    						<td>웹서비스컴퓨팅</td>
    						<td>전공선택</td>
    						<td>3</td>
    						<td>3</td>    						
    						<td>화5 화6 화7</td>
    						<td>8공716</td>
    						<td>강순덕</td>
  							</tr>
     						 <tr>
    						<td>1514007</td>
    						<td>01</td>
    						<td>데이터베이스설계</td>
    						<td>전공선택</td>
    						<td>3</td>
   							 <td>3</td>
   						 	<td>월5 월6 화8 화9 </td>
   						 	<td>8공617</td>
   						 	<td>임종태</td>
  							</tr>
 						 	<tr>
    						<td>0512025</td>
    						<td>01</td>
    						<td>임베디드시스템</td>
   						 	<td>전공선택</td>
   						 	<td>3</td>
   						 	<td>3</td>
    						<td>금1 금2 금3</td>
    						<td>8공816</td>
    						<td>이광준</td>
  							</tr>
  							</table>
						</div>	 					
					</div>
					
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>개설 강좌 추가 / 삭제</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field ">
											<input type="text" name="text" id="add1" placeholder="과목코드" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add2" placeholder="반번호" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add3" placeholder="과목명" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add4" placeholder="이수구분" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add5" placeholder="학년" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add6" placeholder="학점" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add7" placeholder="요일/교시" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add8" placeholder="강의실" />
										</div>
										<div class="field half">
											<input type="text" name="text" id="add9" placeholder="교수명" />
										</div>
										<div class="field half">
										<ul class="actions">
										<li><input type="submit" value="추가" class="primary" /></li>
										</ul>
										</div>
										<div class="field half">
										<ul class="actions">
										<li><input type="submit" value="삭제" class="primary" /></li>
										</ul>
										</div>
									</div>
								</form>
								
							</section>
							<ul class="copyright">
								<li>&copy; Kang Tae Koo</li><li> Son Hyo Jeong</li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>