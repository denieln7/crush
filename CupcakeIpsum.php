<?php

	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
	if ($page_name == 'index') $page_name = 'home';

	function bla() {
		return 'gule';
	}
?>

<!-- <?php require 'inc/config.php' ?> -->
<?php
	$data = $database->select('users', 'email');

	echo '<pre>';
	print_r( $data );
	echo '</pre>';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Crushapp</title>
		<link rel="stylesheet" href="assets\CupcakIms.css">
	</head>
	<body>
		<h1><a href="CupcakeIpsum.php" class="nadpis">This is Crush</a></h1>

		<section class="paragrafy">

			<p>Chceš ísť na origo CupcakeIpsum? <a href="http://www.cupcakeipsum.com" class="tlacidla">Klikni sem</a></p>

			<p>
				Chocolate bar gummi bears gummi bears dragée. Halvah marshmallow chupa chups candy canes. Ice cream pie dragée. Bear claw jelly-o chocolate. Liquorice jujubes jelly ice cream dragée caramels soufflé. Cake cupcake biscuit dessert gummi bears pie marshmallow 	pastry cheesecake. Marzipan cookie chocolate chocolate cake danish jelly-o bear claw gummies. Jelly-o cupcake jujubes chocolate halvah pudding. Tiramisu sugar plum toffee oat cake lemon drops cupcake. Liquorice muffin macaroon liquorice candy jelly cotton candy sesame snaps powder.
			</p>

			<div class="Odkazy">
				<p class="skusim2">
					Užitočné odkazy pre tvorbu webových stránok:
				</p>
				<p class="skusim">
					<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element" class="tlacidla">HTML Elements</a>
					<a href="https://validator.w3.org" class="tlacidla">W3 Validator</a>
					<a href="http://themeelite.com/demos/flato/template-1/" class="tlacidla">Stránka na analýzu</a>
				</p>


				<p class="skusim2">Linky pre prácu s farbami:</p>

				<p class="skusim">
					<a href="http://colours.neilorangepeel.com/" class="tlacidla" title="Farby">Colours</a>
					<a href="https://color.hailpixel.com" class="tlacidla" title="Výber farby pomocou pohybu kurzora po obrazovke">Color Hailpixel</a>
					<a href="http://www.0to255.com/" class="tlacidla" title="Farby a ich odtiene">0to255</a>
					<a href="https://color.adobe.com/create/color-wheel/" class="tlacidla" title="Farebné témy a farby ktoré k sebe pasujú">Color Adobe</a>
				</p>

				<p class="skusim2">
					Užitočné odkazy pre prácu s písmom a fontami:
				</p>

				<p class="skusim">
					<a href="http://www.cssfontstack.com" class="tlacidla">CSS Font Stack</a>
					<a href="https://fonts.google.com/" class="tlacidla">Fonts Google</a>
					<a href="http://chad.is/beautiful-web-type/" class="tlacidla">Beautiful Web Type</a>
				</p>

				<p class="skusim2">
					Práca v CSS
				</p>

				<p class="skusim">
					<a href="https://code.tutsplus.com/tutorials/the-30-css-selectors-you-must-memorize--net-16048" class="tlacidla" title="30 CSS Selectorov ktoré je dobré vedieť">The 30 CSS Selectors</a>
					<a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors" class="tlacidla" title="CSS Selectory zaklady a informacie">CSS selectors basic to advanced</a>

				</p>

				<p class="skusim2">
					Užitočné tipy v HTML
				</p>

				<p class="skusim">
					<a href="http://www.escapecodes.info" class="tlacidla" title="EscapeCodes">Vykreslenie rezervovaných symbolov</a>
				</p>

				<p class="skusim2">
					Užitočné vecičky
				</p>

				<p class="skusim">
					<a href="http://www.css3factory.com/linear-gradients/" class="tlacidla" title="Generovanie gradient pozadia">LinearGradients</a>
					<a href="https://necolas.github.io/normalize.css/" class="tlacidla" title="Normalizácia CSS">normalize.css</a>
				</p>


				<p class="skusim2">HTML5 a CSS3 novinky a ich použitie</p>

				<p class="skusim">
					<a href="http://html5please.com/" class="tlacidla" title="Novinky a odporúčania použitia príkazov v html">HTML5 Please</a>
					<a href="http://css3please.com/" class="tlacidla" title="CSS3 novinky a bavkanie sa :)">CSS3 Please</a>
				</p>

				<p class="skusim2">Vektorové ikony</p>

				<p class="skusim">
					<a href="http://fontawesome.io/" class="tlacidla" title="Ikony">FontAwesome</a>

				</p>


			</div>
			<p class="info">
				<strong>CSS selektory ktoré budú na väčšinu roboty stačiť:</strong><br>
				# -ID selector, má majvyššiu váhu <br>
				. -Class selector, má druhú najvyššiu váhu <br>
				p -Type Selector, má váhu na treťom mieste <br>
				body p {<br>
				Všetky p ktoré spadajú pod body <br>
				} <br>
				li a { <br>
				Všetky a ktoré spadajú pod li <br>
				} <br>
				<strong>Selectory spomenuté vyššie by mali vystačiť na väčšinu vecí, ostatné selectory sú väčšinou vylepšenia.</strong> <br> Pozri HTML a CSS video 28. CSS kaskáda.
				<a href="#" class="badge">
					Info
				</a>
			</p>
			<p>
				<em>Pie lemon drops pastry cake chocolate soufflé chocolate.</em> Oat cake cookie chupa chups wafer cheesecake. Tiramisu toffee candy fruitcake sweet jujubes lollipop. Halvah chocolate cake soufflé tiramisu caramels croissant pudding cupcake. Powder cheesecake tiramisu wafer donut croissant halvah dessert. Powder caramels jujubes marshmallow tiramisu cake lemon drops. Cake cheesecake cake cheesecake. Toffee cupcake caramels gummi bears gummies pie wafer. Halvah fruitcake macaroon. Donut pudding tootsie roll jujubes ice cream cake sesame snaps chocolate danish.
			</p>
			<p>
				<strong id="mainguy">Apple pie bear claw pudding tiramisu jelly-o pie.</strong> Danish lemon drops apple pie sugar plum sweet roll cupcake halvah bear claw. Liquorice tiramisu liquorice chocolate bar. Bear claw ice cream jelly beans jelly beans dessert danish. Biscuit liquorice icing icing fruitcake biscuit sugar plum chocolate macaroon. Cake cake lollipop powder. Jelly beans sesame snaps gummies cheesecake cake biscuit icing.
			</p>
			<p>
				Cupcake chocolate bar jelly-o fruitcake biscuit. Biscuit caramels cupcake jelly-o jelly pie cheesecake tart toffee. Bear claw cupcake cookie candy canes cookie gummies icing jelly marzipan. Jelly lollipop pastry bear claw. Pastry icing cake caramels. Carrot cake cotton candy danish.
			</p>
			<p>
				Marzipan pie oat cake dessert sweet roll pie halvah candy cake. Sesame snaps jujubes pudding cheesecake dragée macaroon. Cake jelly candy brownie halvah. Bonbon tootsie roll cupcake gummi bears gingerbread topping lollipop marshmallow bonbon. Icing dragée croissant chupa chups sweet cotton candy tiramisu candy. Fruitcake jelly beans fruitcake lollipop sugar plum powder carrot cake lemon drops muffin. Gingerbread lollipop powder macaroon soufflé croissant chocolate halvah. Fruitcake candy gummies chupa chups.
			</p>
		</section>
	</body>
</html>
