<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>NSTU-Hall management System</title>
	  <link rel="stylesheet" href="css/animate/animate.css">
	  <link rel="stylesheet" href="css/custom/style.css">
	  <link rel="stylesheet" href="css/responsive/style-responsive.css">

	  <link rel="shortcut icon" href="images/logos/nstulogo.gif">

	  <script src="js/jquery/jquery-3.3.1.min.js"></script>
	  <script src="js/modernizr/modernizr.min.js"></script>

<!--
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
-->
	  <!-- Font Awesome Icons -->


<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<body>


		<header class="theme-main-header" style="background-color:#000000">
			<div class="container-fluid" >
				<!-- ========================= Theme Feature Page Menu ======================= -->
					 <?php include"header.php";?><!-- /.navbar-collapse -->
				<!-- /.theme-feature-menu -->
			</div>
		</header> <!-- /.theme-main-header -->
		<br>
		<br><br><br>

		<div class="container">

		  </div>
			<div class="main-page-wrapper">

		</div> <!-- /.main-page-wrapper -->

	<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function() {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					head.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					head.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function(msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			console.log('Live reload enabled.');
		})();
	}
	// ]]>
</script>
</body>

</html>
