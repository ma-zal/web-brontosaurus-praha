<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Zeměchvály - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['podmenu']['zemechvaly']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

	<h1>
		Zeměchvály
	</h1>
	<div class="komentarNadpisu">Základní článek Hnutí Brontosaurus působící v Praze a okolí</div>

	<h2>Kdo jsme?</h2>
	<img src="img/1.jpg" alt="Zemechvály u středu všehomíra" width="480" height="463" class="img-right" />
	<p>
		... několik mladých lidí, kteří se dali dohromady při pořádání akcí spojujících
		"<a href="http://www.kapucini.cz/domains/kapucini.cz/index.php/zivotopisy/svati/107-frantisekzassisi" target="_blank">myšlenky Františka z Assisi</a>",
		pomáhání přírodě a opravy drobných památek.
	</p>

	<p>Naše bydliště jsou rozeseta po celé republice, ale působíme především na Jesenicku a v okolí Prahy.</p>
	<p>
		Na víkendovkách a táborech rádi vídáme lidičky, kteří mají chuť se zapojit do práce a zároveň si čas mimo
		ni rádi zpestří trochou her a humoru. Nejlépe pak, když na akci panuje pohoda a milá atmosféra.
	</p>

	<p>
		Snažíme se, aby účastníci nalezli nové přátele, měli skvělé zážitky, získali nové dovednosti a poznali nejen
		místo a smysl práce na něm, ale aby poznali i sami sebe, lidi kolem sebe a široké možnosti vzájemného porozumění.
	</p>


	<h2>O co usilujeme?</h2>

	<p>Naše usilování shrnuje ve zkratce samotný název ZEMĚCHVÁLY:</p>

	<ul>
		<li>Ze mě chvály - snažit se hledat důvody k radosti, které jsou ukryté uvnitř z nás,</li>
		<li>Země chvály - obdivovat krásu země a svou prací pomáhat přírodě a krajině,</li>
		<li>země chvály - vytvářet prostor "zemi" pro sdílené chvály a radost - společenství.</li>
	</ul>

	<p>
		Máme za to, že v době technických vymožeností se například ve chválení a radosti stále máme co učit
		a ani 800 let od života Františka z Assissi nepřineslo v tomto směru velké pokroky.
	</p>


	<p>Podívej se na náš <a href="http://zemechvaly.brontosaurus.cz/" target="_blank">web Zeměchvály</a>.</p>

<?php
require_once __DIR__ . '/../../config/html_bottom.php';