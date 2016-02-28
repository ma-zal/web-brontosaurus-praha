<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Ekofór - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['starame-se']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['starame-se']['podmenu']['ekofor']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

	<h1>Ekofór</h1>

	<p>
		V rámci Hnutí Brontosaurus pořádáme tradiční soutěž Ekofór. Účastní se jí široká veřejnost včetně dětí,
		a to zasíláním kreslených vtipů, koláží či fotografií (opatřených patřičnými komentáři) s ekologickou tematikou.
	</p>

	<p>
		Tématem roku 2015 byly Potraviny.
	</p>

	<p>
		Posláním Ekofóru je zvýšit u&nbsp;veřejnosti a&nbsp;hlavně u mladých lidí zájem o životní prostředí
		a motivovat je k&nbsp;zapojení svých tvůrčích schopností ke vtipnému vyjádření problematiky vztahu člověka k&nbsp;přírodě,
		nebo samotných vztahů v&nbsp;přírodě.
	</p

	<p>
		Více informací naleznete na <a href="http://ekofor.brontosaurus.cz/" target="_blank">vlastním webu soutěže Ekofór</a>.
	</p>

	<ul class="ilustracniFotoSeznam">
		<li class="img-responsive img-responsive-50"><img src="img/1.jpg" alt="ilustrační foto" /></li>
		<li class="img-responsive img-responsive-50"><img src="img/2.jpg" alt="ilustrační foto" /></li>
	</ul>
<?php
require_once __DIR__ . '/../../config/html_bottom.php';