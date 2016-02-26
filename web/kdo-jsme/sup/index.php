<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Sup - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['podmenu']['sup']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

	<h1>
		SUP
	</h1>
	<div class="komentarNadpisu">Pražský článek hnutí Brontosaurus</div>

	<p>SUP - Sport, Umění, Práce nebo také Spolek Úplně Praštěných je článek vzniklý v roce 1986.</p>


	<h2>Sup a jeho cíle</h2>

	<p>
		Teď asi někoho strašně zklamu a někomu potvrdím jeho nejčernější obavy.
		Sup nemá definovány žádné vysoké a ušlechtilé cíle! Po pravdě řečeno, máme ve stanovách cosi jako ekologie lidských vztahů,
		ale ještě jsme se neshodli na tom co to znamená. Hmmm - my si prostě jen rádi hrajem, tak je to!
		Kromě toho taky řádíme, zkoušíme co vydržíme a vymýšlíme šílenosti (nejlépe takové které ještě nikdo nevymyslel).
		Bohužel ať chceme nebo ne, stejně se nám tam to "poznání sebe sama" nebo "enviromentální výchova" nějak vplíží i proti naší vůli.
		A s tím i jiní plíživí tvorové jako „celoživotní přátelství" nebo "nezapomenutelné zážitky"
		nebo "radost ze života" či snad dokonce i "láska k bližnímu".
	</p>


	<h2>Lokality</h2>

	<p>Mezi naše tradiční lokality patří státní zámek Kynžvart, Kuks, Josefov a Oucmanice.</p>
	<p>A více se o nás dovíte na <a href="http://sup.brontosaurus.cz/" target="_blank">webu článku "Sup"</a>.</p>

	<ul class="ilustracniFotoSeznam">
		<li><img src="img/sup.jpg" alt="ilustracni foto" width="640" height="480" /></li>
	</ul>

<?php
require_once __DIR__ . '/../../config/html_bottom.php';