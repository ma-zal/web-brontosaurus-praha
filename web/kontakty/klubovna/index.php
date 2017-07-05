<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Klubovna - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['aktivni'] = true;
$GLOBALS[CONFIG]['leftMenu']['kontakty']['podmenu']['klubovna']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

    <h1>Kde najdeš naši klubovnu?</h1>

    <div class="vcard">
        <div class="title"><strong>Klubovna Hnutí Brontosaurus Praha</strong></div>
        <div class="adr">
            <div class="street-address">Malířská 6</div>
            <div>
                <span class="postal-code">170 00</span>
                <span class="locality">Praha 7 - Bubeneč</span>
            </div>
        </div>
    </div>

    <p>
        Sídlíme kousek od Letenského náměstí (což je také zastávka, kde doporučujeme vystoupit, pojedeš-li tramvají).
    </p>
    <p>
        Do klubovny tě pustíme, když na nás zazvoníš, nebo zaboucháš na oknenici. Hned za hlavními vstupními dveřmi jsou vlevo dveře přímo do naší klubovny.
    </p>

    <p>
        <img src="ortofoto-vstup-klubovna.jpg" width="100%" alt="Foto vstupu do budovy" />
        <em style="display:block; text-align: center">Zdroj fotografie: Mapy.cz</em>
    </p>

    <h2>Mapa</h2>
    <div id="m" style="height:500px;"></div>

    <script type="text/javascript" src="//api.mapy.cz/loader.js"></script>
    <script type="text/javascript">Loader.load();</script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var center = SMap.Coords.fromWGS84(14.4257364, 50.1013150);
            var m = new SMap(JAK.gel("m"), center, 16);
            m.addDefaultLayer(SMap.DEF_BASE).enable();
            m.addDefaultControls();


            var layer = new SMap.Layer.Marker();
            m.addLayer(layer);
            layer.enable();

            var card = new SMap.Card();
            card.getHeader().innerHTML = "<strong>Klubovna</strong>";
            card.getBody().innerHTML = "Malířská 6, Letná";

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