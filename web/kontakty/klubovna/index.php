<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Klubovna - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['podmenu']['klubovna']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

    <h1>Kde najdeš naši klubovnu?</h1>

    <div class="vcard" style="display: none">
        <div class="title"><strong>Klubovna Hnutí Brontosaurus Praha</strong></div>
        <div class="adr">
            <span class="street-address">Senovážná 8</span>,
            <span class="postal-code">110 00</span>
            <span class="locality">Praha 1</span>
        </div>
    </div>

    <p>
        V <a href="http://mapy.cz/s/cNZa">Senovážné ulici č. 8 na Praze 1</a>, která spojuje náměstí Republiky se Senovážným náměstím, potažmo s&nbsp;Jindřišskou.
    </p>
    <p>
        Zhruba uprostřed je dům s reklamou na Omega reality, tak tam se schováváme. Hned vedle vchodu je Tlustá koala, ta Ti může taky pomoct nás najít.
    </p>
    <p>
        Zazvoníš na Brontosaura a ještě než bys vešel/vešla na dvůr, se dáš doprava mřížovými dveřmi na schodiště. V&nbsp;prvním patře zas doprava a tam Tě už budou čekat otevřené dveře i náruč.
    </p>
    <p>
        Pozor! Čeká tě malá akční hra. Musíš stihnout bzučák, který zároveň otevírá zmíněné mřížované dveře. Jinak se vrať ven a zazvoň znovu.
    </p>
    <p>
        Nejbližší zastávky tramvají a metra jsou Nám. Republiky, Jindřišská a Masarykovo nádraží.
    </p>

    <h2>Mapa</h2>
    <div id="m" style="height:500px;"></div>

    <script type="text/javascript" src="//api.mapy.cz/loader.js"></script>
    <script type="text/javascript">Loader.load();</script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var center = SMap.Coords.fromWGS84(14.4292728, 50.0865058);
            var m = new SMap(JAK.gel("m"), center, 17);
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