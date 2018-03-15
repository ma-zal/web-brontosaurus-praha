<?php
require_once __DIR__ . '/../../config/global.php';
require_once __DIR__ . '/../../engine/all.php';

$GLOBALS[CONFIG]['header']['title'] = 'Klubovna - ' . $GLOBALS[CONFIG]['header']['title'] ;
$GLOBALS[CONFIG]['leftMenu']['klubovna']['aktivni'] = true;

require_once __DIR__ . '/../../config/html_top.php';
?>

    <h1>Pražská klubovna Hnutí Brontosaurus</h1>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-40"><img src="img/klubovna-deskovky.jpg" /></li>
        <li class="img-responsive img-responsive-60"><img src="img/klubovna-vecirek.jpg" /></li>
    </ul>


    <h2>Kde nás najdeš</h2>

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


    <h2>Jak se k nám dostaneš?</h2>
    <p>
        Sídlíme kousek od Letenského náměstí, což je také zastávka, kde doporučujeme vystoupit, pojedeš-li tramvají. Přesná adresa je Malířská 6.
    </p>
    <p>
        Do klubovny tě pustíme, když na nás zazvoníš, nebo zaboucháš na oknenici. Hned za hlavními vstupními dveřmi jsou vlevo dveře přímo do naší klubovny.
    </p>

    <p><em>
        Mimochodem: Naše akce jsou otevřené komukoliv. Pokud nás chceš potkat a seznámit se s novými lidmi,
        neměj obavu a využij tenhle návod, jak se k nám dostat. Jsi vítán přijít na jakoukoliv akci.
    </em></p>

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

    <br /><br />

    <h2>Jak to u nás vypadá</h2>

    <ul class="ilustracniFotoSeznam">
        <li class="img-responsive img-responsive-40"><img src="img/klubovna-martin-aja.jpg" /></li>
        <li class="img-responsive img-responsive-60"><img src="img/klubovna-projektor.jpg" /></li>

        <!--        <li class="img-responsive img-responsive-40"><img src="klubovna-pohoda.jpg" /></li>-->

        <li class="img-responsive img-responsive-60"><img src="img/klubovna-kuchyn.jpg" /></li>
        <li class="img-responsive img-responsive-40"><img src="img/klubovna-koupelna.jpg" /></li>
    </ul>

    <h2>Milý Avaste, děkujeme za podporu při rekonstrukci!</h2>

    <p>
        Rádi bychom touto cestou poděkovali <a href="http://nadacnifond.avast.cz/" target="_blank">Nadaci Avast</a>.
    </p>
    <p>
        Jak jsi si možná všiml, naše klubovna je kompletně nová. A právě díky prostředkům,
        které nám <a href="http://nadacnifond.avast.cz/" target="_blank">Nadace Avast</a> v roce 2017 poskytkla,
        jsme si totiž mohli naši klubovnu zařídit přesně podle našich představ.
    </p>
    <p>
        Velice si Vážíme, milý <a href="http://nadacnifond.avast.cz/" target="_blank">Avaste</a>, že podporuješ neziskovky.
        Kdykoliv jsi u nás vítán s otevřenou náručí. :-)
    <p>

    <ul class="ilustracniFotoSeznam">
        <li><a href="http://nadacnifond.avast.cz/" target="_blank"><img width=300 src="nadace-avast-logo.svg" /></a></li>
    </ul>


<?php
require_once __DIR__ . '/../../config/html_bottom.php';