<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Staráme se o ... - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['starame-se']['aktivni'] = true;

require_once __DIR__ . '/../config/html_top.php';
?>

	<h1>Staráme se o ...</h1>
	<p>
		Regionální centrum Hnutí Brontosaurus Praha pečuje o <a href="https://cs.wikipedia.org/wiki/U_Branick%C3%A9ho_pivovaru">Přírodní památku U Branického pivovaru</a>,
		spolu s Alešem Rudlem jsme vytvořili a staráme se o první <a href="http://www.prazskestromy.cz/index.php?p=27">pražskou audiostezku po památných stromech</a>.
		Pomáháme kulturním památkám v okolí Prahy, pravidelně například na <a href="http://www.zamek-veltrusy.cz/kulturni-akce-1/uskutecnene-akce/?pageshowing=2&more=147#msg147">zámku Veltrusy</a>.
		V uplynulých letech jsme také pořádali soutěž kreslených vtipů na témata spojená s ochranou přírody, <a href="ekofor/">EkoFór</a>.
	</p>

	<ul class="ilustracniFotoSeznam">
		<li><img src="img/veltrusy.jpg" width="640" height="427" alt="Zámek Veltrusy" /></li>
	</ul>
<?php
require_once __DIR__ . '/../config/html_bottom.php';