<!DOCTYPE HTML>
<html lang="nl">
	<head>
		<title>TickyNoet</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<link rel="stylesheet" href="assets/css/main.css">
	</head>
	<body>

		<div id="wrapper">
			<header id="header" class="alt">
				<span class="logo"><img src="images/nick.png" alt="" /></span>
				<h1>Ticky Noet</h1>
				<p>Nick bekend van Dumpert en eten met Nick</p>
			</header>
			<nav id="nav">
				<ul>
					<li><a href="#intro" class="active">Nick</a></li>
					<li><a href="#social">Social Media</a></li>
					<li><a href="#youtube">Laatste eten met Nick</a></li>
					<li><a href="#tip">Tip een recept</a></li>
				</ul>
			</nav>
			<div id="main">
				<section id="intro" class="main">
					<div class="spotlight">
						<div class="content">
							<header class="major">
								<h2>Ticky Noet</h2>
							</header>
							<p>Beter bekend als Nick van <strong>eten met Nick</strong>, wereldberoemd op Dumpert en online supersterkok (in wording) op Youtube. Mocht je meer van me willen weten dan kun je beter op één van die sites <a href="#social">hieronder</a> kijken.</p>
						</div>
						<span class="image"><img src="images/EtenMetNick.jpg" alt="" /></span>
					</div>
				</section>
				<section id="social" class="main special">
					<header class="major">
						<h2>Social media</h2>
						<p>Online ben ik hier allemaal te bezichtigen, bij de één wat meer dan bij de ander</p>
					</header>
					<ul class="features">
						<li>
							<a href="https://www.dumpert.nl/tag/etenmetnick" target="_blank" class="nolink">
								<img src="images/dumpert.svg" height="64" />
								<h3>Dumpert</h3>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/etenmetnick" target="_blank" class="nolink">
								<img src="images/youtube.svg" height="64" />
								<h3>Youtube</h3>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/tickynoet/" target="_blank" class="nolink">
								<img src="images/instagram.svg" height="64" />
								<h3>Instagram</h3>
							</a>
						</li>
					</ul>
					<ul class="features">
						<li>
							<a href="https://www.facebook.com/tickynoet/" target="_blank" class="nolink">
								<img src="images/facebook.svg" height="64" />
								<h3>Facebook</h3>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/tickynoet" target="_blank" class="nolink">
								<img src="images/twitter.svg" height="64" />
								<h3>Twitter</h3>
							</a>
						</li>
						<li>
							<a href="https://www.fansupply.com/collections/etenmetnick" target="_blank" class="nolink">
								<img src="images/fansupply.png" height="64" />
								<h3>Webshop</h3>
							</a>
						</li>
					</ul>
				</section>
				<section id="youtube" class="main special">
					<header class="major">
						<h2>Youtube</h2>
					</header>
					<p>Elke zondag om 17:00 een nieuw filmpje op youtube, alleen niet als ik op vakantie ben...<br>of een sabbatical heb...<br>of worchestershiresaus probeer uit te spreken.</p>
					<p>Deze week:<br><strong>{title}</strong></p>
					{youtube}
					<p>Als je nou denkt &#8220;<strong>Lekkâh!</strong> ... Maar Nick, heb je wel eens gedacht om <strong>DIT</strong> te maken?&#8221;<br><a href="#tip">Laat het me weten</a>, misschien ga ik het wel maken en stopt heel Nederland het over een paar weken in z&#8216;n mondje!</p>
				</section>
				<section id="tip" class="main special">
					<header class="major">
						<h2>Tip een recept</h2>
					</header>
					<p>Heb je nou een idee voor een lekker gerecht dat ik kan gaan maken, dan kun je een comment achterlaten op youtube of instagram, ik lees al die comments ... allemaal ... maar wel alleen van de laatste, ik ga niet helemaal terugbladeren naar het begin en dan zo klikken voor de comments en dan de volgende ... pffff, ik heb ook nog andere dingen te doen.</p>
					<p>Maar nu kun je ook hier een recept tippen, check alleen wel eerst op <a href="https://www.youtube.com/c/EtenmetNick/videos" target="_blank">youtube</a> of ik het niet al gemaakt heb, anders zit je voor noppes te typen. Zonde van je tijd en ik ga het dan toch niet maken, want dat heb ik al gedaan!</p>
					<form method="post" action="recepttip.php">
						<div class="row uniform">
							<div class="12u 12u$(xsmall)">
								<input type="text" name="name" id="name" value="" placeholder="Naam van het recept">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Vul hier in wat je nog meer wil vertellen over je recept" rows="6"></textarea>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<input type="email" name="email" id="email" value="" placeholder="Je email (voor de faam)">
							</div>
							<div class="12u$">
								<input type="submit" value="Verstuuuuuur" class="special">
							</div>
						</div>
					</form>
				</section>
			</div>
			<footer id="footer">
				<section>
					<h2>Webshop</h2>
					<p>Wil jij nou ook zo'n supermooie <strike>muts</strike> beanie of een trui of een andere trui met zo'n flap ... cappuchino/hoodie of een t-shirt of een mok, dan kun je die in de webshop krijgen! Lekker man!<br>Nee, je kan mij niet boeken voor een avondje koken of voedselgeschiedenis ... nog niet ... voorlopig.</p>
					<a href="https://www.fansupply.com/collections/etenmetnick" target="_blank" class="button">Fansupply</a>
				</section>
				<section>
					<h2>Zakelijk</h2>
					<dl class="alt">
						<p>
							Moet ook ff genoemd worden, word door Rootbeat geregeld<br><br>
							<a href="mailto:nick@rootbeat.com">nick@rootbeat.com</a><br>
							<a href="https://www.rootbeat.com/" target="_blank" class="nolink"><img src="images/rootbeat.svg" height="64" /></a>
						</p>
					</dl>
				</section>
				<p class="copyright">&copy; {year} Ticky Noet</p>
			</footer>
		</div>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>