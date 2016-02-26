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
	<div class="komentarNadpisu">Pražský článek hnutí Brontosaurus</div>

	<p>Jsme parta kamarádů se společným zájmem o přírodu, neobyčejné zážitky a trochu méně konzumní styl života.</p>

	<p>Krom ochrany přírody se zaměřujeme na neformální vzdělávání mládeže, zejména budování vztahů mezi lidmi a&nbsp;přírodou a mezi lidmi navzájem.</p>

	<p>
		Ale o tom kdo skutečně jsme se nejlépe přesvědčíte když se podíváte na akce které děláme, nebo dokonce na nějakou přijedete.
		Sídlíme v Praze, tedy většinu krátkých akcí situjeme poblíž, na prázdinovky rádi jezdíme hlavně do Krkonoš či Jeseníků.
	</p>

	<p>Chceš-li se dozvědět o nás víc, podívej se na náš <a href="http://rozruch.brontosaurus.cz/" target="_blank">web brontosauřího článku Rozruch</a>.

	<ul class="ilustracniFotoSeznam">
		<li><img src="img/img2581.jpg" width="420" alt="Ilustrační foto" /></li>
		<li><img src="img/naruby.jpg" width="420" alt="Ilustrační foto" /></li>
	</ul>


<?php
require_once __DIR__ . '/../../config/html_bottom.php';