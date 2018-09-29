<?php
$page_title = 'Fortify';
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fortify</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="content">
	<div class="container wow fadeInUp delay-03s">
		<div class="row">
			<div class="logo text-center">
					<h2>Fortify</h2>
			</div>
			<div class="row">
				<div class="logo text-center">
					<h3 class="abt-hd">Our process</h3>
					<p>The stego tool embeds text into your image.</p>
					</br>
				</div>
				<div id="main" class="section dark">
					<div class='step'>Choose an image</div>
					<img id='preview' class='preview hide' />
					<div class='sectionbody'>
						<input type='file' id='file' />
					</div>
				</div>
				<div id="choose" class="section dark hide">
					<div class="step">What do you want to do?</div>
					<div class="sectionbody">
						<div class="left">
							<textarea id="message" class="message" maxlength="1000" placeholder="Type hidden message"></textarea>
							<input type="password" id="password" class="password" placeholder="Password (optional)" />
							<button id="encode" class="submit">Hide message</button>
						</div>
						<div class="right">
							<input type="password" id="password2" class="password" placeholder="Password" />
							<button id="decode" class="submit">Reveal message</button>
						</div>
					</div>
				</div>
				<div id="reveal" class="section dark hide">
					<div class="step">Hidden message</div>
					<div id="messageDecoded" class="sectionbody"></div>
				</div>
				<canvas id="canvas" class="hide"></canvas>
				<img id="output" />
			</div>
		</div>
	</div>
</div>


  <footer class="footer">
    <div class="container">
      <div class="row bort">
        <div class="copyright">
          © Copyright Fortify Privacy Policy. All rights reserved. 2018
        </div>
      </div>
    </div>
  </footer>

<script src="main.js"></script>
<script src="sjcl.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>