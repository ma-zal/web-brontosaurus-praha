<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Rozruch - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['podmenu']['rozruch']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

	<h1>
		Rozruch
	</h1>
	<div class="komentarNadpisu">Základní článek Hnutí Brontosaurus působící v Praze a okolí</div>

	<p>Jsme parta kamarádů se společným zájmem o přírodu, neobyčejné zážitky a trochu méně konzumní styl života.</p>

	<p>Na našich akcích je hlavním cílem ochrana přírody a neformální vzdělávání mládeže, zejména budování vztahů mezi lidmi a přírodou a mezi lidmi navzájem. V našem programu tak nechybí nejrůznější hry a aktivity na rozvoj individuálních, týmových schopností, prostor pro vlastní realizaci, ale taky pro odreagování a vyblbnutí, protože přece jsme a děláme rozruch.</p>

	<p>
		Ale o tom, kdo skutečně jsme, se nejlépe přesvědčíte, když se podíváte na akce, které děláme, nebo na ně rovnou přijedete. </p>
	<p>
		Sídlíme v Praze, tedy většinu krátkých, většinou víkendových akcí situujeme poblíž, ale spoustu z nás pochází z nejrůznějších končin, takže to není žádné pravidlo. Je ale pravda, že v Praze každoročně akce konáme, protože v pražských parcích věšíme ptačí budky, o které se pravidelně staráme. <br>
		Na delší prázdninové akce jezdíme hlavně do Krkonoš či Jeseníků. Kosíme tady louky, pomáháme s obnovou zaniklé osady, dojíme kozy, spíme pod plachtou, myjeme se v potoce, vaříme na ohni a spoustu dalších úžasných věcí. 
	</p>

	<p>Další informace se o nás dozvíš na <a href="http://rozruch.brontosaurus.cz/" target="_blank">webu základního článku Rozruch</a>.

	<ul class="ilustracniFotoSeznam">
		<li class="img-responsive img-responsive-50"><img src="img/img2581.jpg" alt="Ilustrační foto" /></li>
		<li class="img-responsive img-responsive-50"><img src="img/naruby.jpg" alt="Ilustrační foto" /></li>
	</ul>


<?php
require_once __DIR__ . '/../../config/html_bottom.php';
