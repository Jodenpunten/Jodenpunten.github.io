<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Jodenpunten</title>
		<meta name="description" content="Blueprint: On Scroll Effect Layout" />
		<meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Jodenpunten Tracker</h1>
				
			</header>
			<div class="scoreboard">
				<?php	$Sjak = 3;
						$Max = 2;
						$Joey = 1;
						$Puck = 1;
						$Jille = 1;
						 ?>
						
			<div class="csrow">
			    <div class="col-md-2 col-md-offset-1"><h3>Sjak</h3></div>
			    <div class="col-md-2"><h3>Max</h3></div>
			    <div class="col-md-2"><h3>Joey</h3></div>
			    <div class="col-md-2"><h3>Puck</h3></div>
			    <div class="col-md-2"><h3>Jille</h3></div>
			</div>	
		</br>
			<div class="row">
			    <div class="col-md-2 col-md-offset-1"><?php echo "<h4>$Sjak</h4>"; ?></div>
			    <div class="col-md-2"><?php echo "<h4>$Max</h4>"; ?></div>
			    <div class="col-md-2"><?php echo "<h4>$Joey</h4>"; ?></div>
			    <div class="col-md-2"><?php echo "<h4>$Puck</h4>"; ?></div>
			    <div class="col-md-2"><?php echo "<h4>$Jille</h4>"; ?></div>
			</div>
			</div>
			
		</br>
			<div id="cbp-so-scroller" class="cbp-so-scroller">
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Belangrijk</h2>
						<p>Jodenpunten staan centraal als je wilt kijken met wie je je eten niet moet delen. Of aan wie je de joint geeft natuurlijk.</p></article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="images/fruit.jpg" height="500" alt="img01">
					</figure>
				</section>
				<!-- Zet nieuwe Jodenpuntregel hieronder! -->
				
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<div class="from-them">
					      <p>Joey aan Puck: Puck gooit appels op Joey. Best hard.</p>
					    </div>
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<div class="clear"></div>
					</br>
				</br></br>
				</br>
						    <div class="from-me">
						      <p>Joey aan Sjak: Waarschijnlijk deed Sjak weer gewoon kankerjoods.</p>
						    </div>
						</article>
				</section>
				
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<h2>Ook wel </br>  het originele</h2>
						<div class="from-them">
					      <p>Jille aan Sjak: "Je krijgt een Jodenpunt Sjak!"</p>
					    </div>
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>bekend als Jodenpunt.</h2>
						<div class="clear"></div>
					</br>
				</br></br>
				</br>
						    <div class="from-me">
						      <p>Sjak aan Jille: "En jij ook!"</p>
						    </div>
						</article>
				</section>
				
				
				<!-- Copy en Paste dit voor een nieuwe "pagina", zet altijd bovenaan! -->
<!-- 			<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<div class="from-them">
					      <p>Dinges aan Dinges: "Reden voor Jodenpunt Links"</p>
					    </div>
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<div class="clear"></div>
					</br>
					</br>
					</br>
					</br>
						    <div class="from-me">
						      <p>Dinges aan Dinges: "Reden voor Jodenpunt Rechts"</p>
						    </div>
						</article>
				</section>	
-->			
			</div>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/cbpScroller.js"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
	</body>
</html>
