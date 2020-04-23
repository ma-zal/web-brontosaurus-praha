<?php
require_once __DIR__ . '/../config/global.php';
require_once __DIR__ . '/../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Zásady ochrany soukromí - ' . $GLOBALS[CONFIG]['header']['title'] ;

require_once __DIR__ . '/../config/html_top.php';
?>

    <h1>Zásady ochrany soukromí</h1>
    <p>
        Tento web užívá nástroj Google Analytics pro sběr anonymizovaných statistických údajů o návštěvnosti webu.
    </p>
    <p>
        Tento web má integraci s naší stránkou na Facebooku. Je možné, že Facebook bude vědět, že jste navštívili tento web.
    </p>
    <p>
        Žádné další Vaše osobní údaje tento web nesbírá, ani neukládá.
    </p>
<?php
require_once __DIR__ . '/../config/html_bottom.php';