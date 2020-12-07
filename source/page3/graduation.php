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
							<h1>졸업 학점 현황</h1>
							<table>
  							<tr>
    					<th>이수구분</th>
    						<th>신청학점</th>
    					<th>취득학점</th>
    					<th>부족학점</th>
  							</tr>
  							<tr>
   							 <td>교양필수</td>
    						<td>9</td>
    						<td>0</td>
    						<td>9</td>
  							</tr>
  							<tr>
    						<td>교양선택</td>
    						<td>18</td>
    						<td>0</td>
   							 <td>18</td>
 							 </tr>
  							<tr>
  	  						<td>전공필수</td>
    						<td>36</td>
   							 <td>3</td>
   							 <td>33</td>
 							 </tr>
  							<tr>
    						<td>전공선택</td>
    						<td>18</td>
  							  <td>6</td>
  							  <td>12</td>
 								 </tr>
  								<tr>
  							  <td>전공기초</td>
  							  <td>24</td>
   							 <td>0</td>
   							 <td>24</td>
							  </tr>
						</table>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
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