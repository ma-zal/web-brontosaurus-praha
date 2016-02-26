<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'BRĎO Přihláška odeslána - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['podmenu']['brdo']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

	<h1>
		BRĎO - BRontosauří Dětský Oddíl
	</h1>

	<h2>Přihláška odeslána</h2>
	<p>Vaše přihláška byla odeslána. V nejbližších dnech se Vám ozveme zpět.</p>
	<p>Děkujeme za Váš zájem a budeme se těšit na setkání.</p>
<?php
$GLOBALS[CONFIG]['header']['otherScripts'] .= '<script src="js/brdo.js" type="text/javascript"></script>';
require_once __DIR__ . '/../../config/html_bottom.php';