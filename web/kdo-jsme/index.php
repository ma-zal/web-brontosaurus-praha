<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Kdo jsme - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['header']['otherScripts'] .= '<script src="../lib/swiper/js/swiper.jquery.min.js "></script>';
$GLOBALS[CONFIG]['header']['others'] .= '<link rel="stylesheet" href="../lib/swiper/css/swiper.min.css" />';
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['podmenu']['brontosaurus']['aktivni'] = true;
$GLOBALS[CONFIG]['header']['otherScripts'] .= '
	<script>
		$(document).ready(function () {
		//initialize swiper when document ready
			var mySwiper = new Swiper (".swiper-container", {
			  // Optional parameters
			  direction: "horizontal",
			  loop: true,
			  autoplay: 5000,
			  speed: 1000,
			  effect: "fade"
			})
		 });
	</script>';

require_once __DIR__ . '/../config/html_top.php';
?>

	<h1>Hnutí Brontosaurus</h1>
	<div class="komentarNadpisu">Hnutí Brontosaurus je nezisková organizace, jejíž práce je vidět.</div>

	<p>
		Hnutí Brontosaurus je uskupení převážně mladých lidí do 26 let, kterým není lhostejný svět, ve kterém žijí.
		Propojují proto smysluplnou práci pro přírodu, památky i lidi s netradičními zážitky a zábavou.
		Jsou nezávislí a otevření novým myšlenkám. Každoročně s nimi vyráží tisíce dobrovolníků na kosení orchidejových luk,
		sázení stromů, opravování hradů nebo třeba stavění školy v Himálajích. Přidej se i Ty!
	</p>

	<ul class="ilustracniFotoSeznam">
		<li class="img-responsive" style="max-width:640px;"><img src="img/hnuti_01.jpg" alt="ilustracni foto"></li>
	</ul>
	<p>
		Hnutí Brontosaurus má <a href="http://brontosaurus.cz/o-nas/historie-brontosaura">více než čtyřicetiletou tradici<a>,
		<a href="http://brontosaurus.cz/o-nas/nase-uspechy">viditelné úspěchy</a> a více než 1 000 hrdých členů,
		kteří za ním stojí. Ti si mezi sebou sami volí vedení organizace - jde prostě o týmovou hru,
		ve které je přátelství stejně důležité jako důvěra.
	</p>

	<p style="text-align:center;">
		<iframe width="640" height="360" src="https://www.youtube.com/embed/EURSCzM4p2k" frameborder="0" allowfullscreen></iframe>
	</p>

	<p>
		Každý, kdo chce být součástí respektované neziskové organizace, se může zapojit do aktivit některého
		z <a href="http://brontosaurus.cz/struktura-a-organizace/zakladni-clanky">více než 30 základních článků</a>
		působících po celé České republice,
		stát se <a href="http://brontosaurus.cz/struktura-a-organizace/volni-individualni-clenove">členem Hnutí Brontosaurus</a>,
		zúčastnit se některé <a href="http://brontosaurus.cz/co-delame">z jeho akcí</a> nebo jej podpořit
		jako <a href="http://brontosaurus.cz/podporte-nas">člen klubu příznivců</a>.
	</p>

	<div class="swiper-container" style="width:550px; margin: 40px auto 20px; height:220px; overflow: hidden;">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="img/adopce_banner2.jpg" /></div>
			<div class="swiper-slide"><img src="img/adopce_banner3.jpg" /></div>
			<div class="swiper-slide"><img src="img/adopce_banner4.jpg" /></div>
		</div>
	</div>

<?php
require_once __DIR__ . '/../config/html_bottom.php';