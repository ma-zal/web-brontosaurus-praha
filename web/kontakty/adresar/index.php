<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Kontakty - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['podmenu']['adresar']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

    <h1>Adresář kontaktů Hnutí Brontosaurus Praha</h1>

    <p>
        <div><strong>Hlavní kontaktní e-mail pro Prahu</strong></div>
        <div><a href="mailto:praha@brontosaurus.cz">praha@brontosaurus.cz</a></div>
    </p>

    <p class="vcard">
        <div class="title"><strong>BRontosauří Dětský Oddíl</strong></div>
        <a class="email" href="mailto:brdo.praha@gmail.com">brdo.praha@gmail.com</a>
    </p>

    <h2>Poštovní adresa</h2>
    <p class="vcard">
        <div class="title"><strong>Regionální centrum Hnutí Brontosaurus Praha</strong></div>
        <div class="adr">
            <div class="street-address">Malířská 6</div>
            <div>
                <span class="postal-code">170 00</span>
                <span class="locality">Praha 7 - Bubeneč</span>
            </div>
        </div>
    </p>
    <p>
        <em>PS: Nehledáš náhodou, <a href="../klubovna/">kde najdeš v Praze naši klubovnu</a>?</em>
    </p>

    <h2>Další fakturační údaje</h2>
    <p>IČ: 72055260</p>

    <h2>Kontaktní osoby</h2>
    <p class="vcard">
        <div class="fn"><strong>Rostislav Konůpka</strong></div>
        <div class="title">předseda Regionálního centra</div>
        <a class="email" href="mailto:praha@brontosaurus.cz">praha@brontosaurus.cz</a>
        <div class="tel">+420 722 561 150</div>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Andrea Romanowská</strong></div>
        <div class="title">místopředsedkyně Regionálního centra</div>
        <a class="email" href="mailto:praha@brontosaurus.cz">praha@brontosaurus.cz</a>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Hana Pupíková</strong></div>
        <div class="title">hospodářka Regionálního centra</div>
        <a class="email" href="mailto:praha@brontosaurus.cz">praha@brontosaurus.cz</a>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Michal Švarný</strong></div>
        <div class="title">předseda Hnutí Brontosaurus</div>
        <a class="email" href="mailto:michal.svarny@brontosaurus.cz">michal.svarny@brontosaurus.cz</a>
        <div class="tel">+420 732 729 742</div>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Tereza Opravilová</strong></div>
        <div class="title">koordinátorka klubových večerů</div>
        <a class="email" href="mailto:terca.op@seznam.cz">terca.op@seznam.cz</a>
        <div class="tel">+420 736 720 568</div>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Marie Salajková</strong></div>
        <div class="title">BRontosauří Dětský Oddíl</div>
        <div class="tel">+420 722 641 825</div>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Martin Žaloudek</strong></div>
        <div class="title">člen Regionálního centra</div>
        <div class="title">Správce webu</div>
        <div class="tel">+420 777 851 998</div>
    </p>

<?php
require_once __DIR__ . '/../../config/html_bottom.php';