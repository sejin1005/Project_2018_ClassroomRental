<meta charset="utf-8">
<?php
header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charest=UTF-8" />
		<title>하루하루</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
							<h1>하루하루</h1>
							<p>아이디와 비밀번호를 입력해주세요.</p>
                            <p>※임시 계정 123456789 / 123 ※</p>
						</header>
						<hr />
						<form method="post" action="loginCheck.php">
							<div class="fields">
								<div class="field">
									<input type="text" name="id" id="id" placeholder="ID" />
								</div>
								<div class="field">
									<input type="password" name="pw" id="pw" placeholder="PASSWORD" />
								</div>
								<div class="field">
                                        <li> <input type="submit" id="submit" value="START">  </li>
								</div>
							</div>
						</form>
						<hr />
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Kang Tae Koo</li><li> Son Hyo Jeong</li>
						</ul>
					</footer>
			</div>
			<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
	</body>
</html>