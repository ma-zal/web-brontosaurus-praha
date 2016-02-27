<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Klubové večery - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kluby']['aktivni'] = true;

require_once __DIR__ . '/../config/html_top.php';
?>

	<h1>Klubové večery</h1>
	<p>
		Pražské brontosauří kluby jsou večery na různá témata otevřené všem, kteří mají zájem se něco dozvědět, naučit,
		odreagovat se nebo se setkávat s přáteli a poznávat nové. Kluby probíhají od září do června nejčastěji od šesti hodin
		a konají se přímo v naší klubovně v Senovážné ulici <!--TODO odkaz zde na web-->, případně někde venku porůznu po Praze,
		například když pořádáme pikniky nebo vycházky po pražské přírodě.
	</p>
	<p>
		Střídají se večery herní, umělecké a tvořivé, environmentální, hudební, cestovatelské či filmové a v neposlední
		řadě večery večeřící. Vedle těch pravidelných, které se konají jednou za dva týdny, případně jednou za měsíc,
		můžete navštívit i spoustu akcí nepravidelně pravidelných, anebo také naprosto ojedinělých.
	</p>
	<p>
		Do přípravy klubů se můžeš zapojit i Ty! Máš nápad? Máš chuť něco uspořádat?
		Ozvi se <a href="mailto:terca.op@seznam.cz">Terce</a>, koordinátorce
		klubových večerů. Pomůžeš nám i tím, když nám <a href="http://goo.gl/forms/BCG33BBD94">vyplníš dotazník</a> o tom,
		jak se Ti kluby líbily.
	</p>
	<p>
		Pokud chceš být v obraze, jaké kluby zrovna chystáme, přihlas se k odběru novinek emailem <!--- TODO odkaz zde na webu-->,
		nebo nás sleduj <a href="https://www.facebook.com/brontik.praha">na Facebooku</a>.
	</p>

	<ul class="ilustracniFotoSeznam">
		<li><img width="420" src="img/kluby_deskovky_01.jpg" /></li>
		<li><img width="420" src="img/kluby_deskovky_02_cr.jpg" /></li>
		<li><img width="844" src="img/kluby_film_01_cr.jpg" /></li>
		<li><img width="420" src="img/kluby_film_02.jpg" /></li>
		<li><img width="420" src="img/kluby_obecny_02.jpg" /></li>
		<li><img width="844" src="img/kluby_piknik_01_cr.jpg" /></li>
	</ul>
	<div class="photo-copyright">Foto: Alexandr Radecký</div>

<!--	<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;hl=cs&amp;bgcolor=%23FFFFFF&amp;src=9v1bnlc0bjjjdp16v8oiuq4q94%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Europe%2FPrague" style=" border-width:0 " width="840" height="440" frameborder="0" scrolling="no"></iframe>-->

<?php
require_once __DIR__ . '/../config/html_bottom.php';