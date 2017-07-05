<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Organizátorský kurz - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['organizatorsky-kurz']['aktivni'] = true;
//$GLOBALS[CONFIG]['leftMenu']['organizatorsky-kurz']['podmenu']['o-kurzu']['aktivni'] = true;

require_once __DIR__ . '/../config/html_top.php';
?>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-100"><img src="img/ohb-plakat.png" /></li>
    </ul>

    <h1>O organizátorském kurzu</h1>

    <p>
        Organizátorský kurz je každoroční 8-mi měsíční kurz určený hlavně začínajícím a mírně pokročilým organizátorům zážitkových
        akcí pro děti, mládež i dospělé. Díky širokému záběru a praktickému zaměření bude přínosný i pro zkušené organizátory.
    </p>
    <p>
        Kurz probíhá formou neformálních večeních seminářů, které se konají vždy jednou týdně v době 18:00-21:00.
        Kurz obsahuje celkem 24 takových seminářů, každý na jiné téma. V rámci kurzu jsou pořádány také tři víkendové akce,
        na kterých si účast i organizování zážitkových akcí mohou účastníci vyzkoušet na vlastní kůži.
    </p>


    <h2>Proč kurz u nás?</h2>

    <p>
        Hnutí Brontosaurus již přes 40 let pořádá tábory pro děti a mládež, jejichž součástí vedle zážitkových
        a sportovních programů je i dobrovolnická práce na pomoc památkám a přírodě v ČR i v zahraničí.
        Organizátorský kurz je vynikající příležitostí, jak z těchto dlouholetých zkušeností čerpat.
    </p>
    <p>
        Kurz se každoročně koná hlavně díky dobrovolnické práci organizátorů i většiny lektorů a díky podpoře Ministerstva školství ČR.
        Díky tomu, že naši organizátoři jsou motivování svým nadšením pro dobrou věc, dokážeme nabídnout prostředí, které
        žádná podobná komerčně konaná akce nabídnout nedokáže.
    </p>


    <h2>Více informací?</h2>
    <p>
        Detaily a podrobný program nalezneš na vlastním webu
        <a href="https://sites.google.com/brontosaurus.cz/organizatorsky-kurz-praha/">pražského Organizátorského kurzu Hnutí Brontosaurus</a>.
    </p>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-100"><img src="img/ohb-1.jpg" /></li>
    </ul>

<?php
require_once __DIR__ . '/../config/html_bottom.php';