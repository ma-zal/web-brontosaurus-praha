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

    <h2>Kontaktní osoby</h2>
    <p class="vcard">
        <div class="fn"><strong>Rostislav Konůpka</strong></div>
        <div class="title">předseda Regionálního centra</div>
        <a class="email" href="mailto:praha@brontosaurus.cz">praha@brontosaurus.cz</a>
        <div class="tel">+420 722 561 150</div>
    </p>

    <p class="vcard">
        <div class="fn"><strong>Michal Švarný</strong></div>
        <div class="title">místopředseda Hnutí Brontosaurus</div>
        <div class="title">vedoucí organizátorského kurzu</div>
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
        <a class="email" href="mailto:brdo.praha@gmail.com">brdo.praha@gmail.com</a>
        <div class="tel">+420 722 641 825</div>
    </p>

    <h2>Poštovní adresa</h2>
    <p class="vcard">
        <div class="title"><strong>Regionální centrum Hnutí Brontosaurus Praha</strong></div>
        <div class="adr">
            <div class="street-address"><a href="http://mapy.cz/s/cNZa">Senovážná 8</a></div>
            <div><a href="http://mapy.cz/s/cNZa">
                <span class="postal-code">110 00</span>
                <span class="locality">Praha 1</span>
            </a></div>
        </div>
        <div>IČO: 72055260</div>
    </p>
    <div id="m" style="height:300px;min-width:400px;"></div>

    <script type="text/javascript" src="//api.mapy.cz/loader.js"></script>
    <script type="text/javascript">Loader.load();</script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var center = SMap.Coords.fromWGS84(14.4292728, 50.0865058);
            var m = new SMap(JAK.gel("m"), center, 16);
            m.addDefaultLayer(SMap.DEF_BASE).enable();
            m.addDefaultControls();


            var layer = new SMap.Layer.Marker();
            m.addLayer(layer);
            layer.enable();

            var card = new SMap.Card();
            card.getHeader().innerHTML = "<strong>Klubovna</strong>";
            card.getBody().innerHTML = "Senovážná 8, Praha";

            var options = {
                title: "Klubovna"
            };
            var marker = new SMap.Marker(center, "myMarker", options);
            marker.decorate(SMap.Marker.Feature.Card, card);
            layer.addMarker(marker);
        })
    </script>
<?php
require_once __DIR__ . '/../../config/html_bottom.php';