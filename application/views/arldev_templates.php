<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>ARL</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!--Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding:0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome back master arl!</h1> 
	<div id="body">
		<p>New project to work on? I have prepared your templates.</p>

		<p>main css path</p>
		<code>asset/css/mainstyle.css</code>

		<p>main js path</p>
		<code>asset/js/mainjs.css</code>

		<div class="row p-1">
			<h5>Quick links</h5>
			<div class="col-6">
				<div class="quicklinks">
					<span>Bootstrap 4 : <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>Bootstrap 5 : <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>jQuery : <a href="https://cdnjs.com/libraries/jquery" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>cdn Libraries : <a href="https://cdnjs.com/libraries" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>Icon8 : <a href="https://icons8.com/icons/" target="_blank">link</a></span>
				</div>
			</div>
			<div class="col-6">
				<div class="quicklinks">
					<span>Fontawesome : <a href="https://fontawesome.com/" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>css scan tools : <a href="https://getcssscan.com/" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>Code Formatter - beautify : <a href="https://codebeautify.org/" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>Mocking bird : <a href="https://gomockingbird.com/home" target="_blank">link</a></span>
				</div>
				<div class="quicklinks">
					<span>hex to filter : <a href="https://isotropic.co/tool/hex-color-to-css-filter" target="_blank">link</a></span>
				</div>

				<div class="quicklinks">
					<span>bootstrap cards : <a href="https://freefrontend.com/bootstrap-cards/" target="_blank">link</a></span>
				</div>

				
				
				unsplash random image : https://source.unsplash.com/600x900/?potato
			</div>
		</div>
	</div>
</div>

	<p class="footer">@2022 <strong>arldev </strong><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
