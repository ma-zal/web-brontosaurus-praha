<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Organizátorský kurz - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['organizatorsky-kurz']['aktivni'] = true;
//$GLOBALS[CONFIG]['leftMenu']['organizatorsky-kurz']['podmenu']['o-kurzu']['aktivni'] = true;

require_once __DIR__ . '/../config/html_top.php';
?>

    <h1>O organizátorském kurzu</h1>

    <p>
        <em>Organizátorský kurz pořádaný Hnutím Brontosaurus probíhá letos vždy ve středu od 18 do 21 hodin od poloviny října až do dubna následujícího roku. Ačkoliv letošní ročník již začal, v průběhu celého kurzu je možné se za drobný poplatek 40&nbsp;Kč zúčastnit i jeho jednotlivých seminářů.</em>
    </p>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-100"><img src="img/ohb-plakat.png" /></li>
    </ul>

    <p>
        Kurz je určen pro začínající organizátory zážitkových akcí především pro mládež, ale díky širokému záběru a praktickému zaměření bude přínosný i pro zkušené organizátory. Úspěšní absolventi mohou získat osvědčení "Hlavní vedoucí dětských táborů" akreditovaný Ministerstvem školství.
    </p>
    <p>
        Hnutí Brontosaurus již přes 40 let pořádá tábory pro děti a mládež, jejichž součástí vedle zážitkových a sportovních programů je i dobrovolnická práce na pomoc památkám a přírodě v ČR i v zahraničí. Organizátorský kurz je vynikající příležitostí, jak z těchto dlouholetých zkušeností čerpat.
    </p>
    <p>
        Díky dobrovolnické práci organizátorů i většiny lektorů a díky podpoře Ministerstva školství ČR Vám můžeme kurz o rozsahu 24 tříhodinových seminářů nabídnout za velmi výhodnou cenu 900 Kč. Součástí kurzu jsou také 2-3 víkendové akce, na kterých si účast i organizování zážitkových akcí mohou účastníci vyzkoušet na vlastní kůži.
    </p>
    <p>
        Více informací a podrobný program naleznete na webu <a href="http://praha.brontosaurus.cz/ohb/">pražského Organizátorského kurzu Hnutí Brontosaurus</a>.
    </p>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-100"><img src="img/ohb-1.jpg" /></li>
    </ul>

<?php
require_once __DIR__ . '/../config/html_bottom.php';