<?php
	require_once 'config/global.php';
	require_once 'engine/all.php';
	@include 'config/credentials.php';

	//$GLOBALS[CONFIG]['header']['title'] = 'Úvod - ' . $GLOBALS[CONFIG]['header']['title'] ;
	$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
	require_once 'config/html_top.php';

?>
    <section class="panel-dulezite">
        <h4>Přestěhovali jsme se!</h4>
        <p>
            Nyní najdeš <a href="kontakty/klubovna/">naši Pražskou klubovnu v Malířské 6, Praha 7 - Bubeneč</a> (poblíž Letenského náměstí).
        </p>
    </section>


	<section>
		<h1>Brontosaurus v Praze, aneb Kdo jsme</h1>
		<p>
			<a href="/kdo-jsme/">Hnutí Brontosaurus</a> je celorepubliková dobrovolnická organizace.
			V Praze jej zastupuje vedle několika
			<a href="http://www.brontosaurus.cz/struktura-a-organizace/zakladni-clanky" target="_blank" title="Co je Základní článek Hnutí Brontosaurus">základních článků</a>
			(<a href="/kdo-jsme/rozruch/">Rozruch</a>,
			<a href="/kdo-jsme/sup/">SUP</a> a další) také jedno brontosauří
			regionální centrum, a&nbsp;to jsme my. V&nbsp;rámci naší činnosti pořádáme každoroční večerní
			<a href="/organizatorsky-kurz/">organizátorský kurz</a>, zajišťujeme
			<a href="/kdo-jsme/brdo/">Brontosauří dětský oddíl (BRĎO)</a>, staráme se
			o&nbsp;přírodní památku U&nbsp;Branického pivovaru, zaštiťujeme volnočasové
			<a href="/kluby/">klubové večery</a>, pořádáme víkendovky, aj.</p>
		<p>
			<a href="https://www.facebook.com/brontik.praha/events">Naše akce</a> jsou otevřené všem - nemusíš být
			členem, stačí mít zájem zažít něco nevšedního a&nbsp;někdy také ochotu přiložit ruku k dílu. Většinu akcí
			cílíme na středoškoláky a vysokoškoláky, ale vítán je každý, kdo je alespoň mladý duchem a rád se
			vrhne s&nbsp;ostatními do všemožných her.
		</p>
	</section>
	<section id="uvod-right">
		<section>
			<h1>Přijď za námi</h1>
			<?php
			$eventsApiUrl = 'https://graph.facebook.com/v2.5/brontik.praha/events?access_token=' . FCB_ACCESS_TOKEN . '&limit=250&since=' . mktime();
			$fcbApiResult = @file_get_contents($eventsApiUrl);
			if ($fcbApiResult) {
				$events = json_decode($fcbApiResult, true);
				$events = array_reverse($events['data']);
				foreach ($events as $event) {
					$startTime = DateTime::createFromFormat('Y-m-d\TH:i:sT', $event['start_time']);
					echo '<article class="facebookEvent">';
					echo '<div class="name"><a href="https://www.facebook.com/events/' . $event['id'] . '" title="' . $event['description'] . '">' . $event['name'] . '</a></div>';
					echo '<div class="time">' . $startTime->format('j.n. H:i') . '</div>';
					echo '<div class="location">Místo: ' . $event['place']['name'] . '</div>';
					echo '</article>';
				}
			} else {
				echo '<div class="error-box"><small>';
				echo 	'<h6>Promiň, něco se rozbilo!</h6>';
				echo 	'<p>';
				echo 		'Zatím se podívej do ';
				echo 		'<a target="_blank" href="https://www.facebook.com/brontik.praha/events">našich událostí na Facebooku</a> přímo.';
				echo 	'</p>';
				echo '</small></div>';
			}
			?>
		</section>

	</section>
	<section id="uvod-left">
		<h1>Co je nového?</h1>
		<?php
		$postsApiUrl = 'https://graph.facebook.com/v2.5/brontik.praha/feed?access_token=' . FCB_ACCESS_TOKEN . '&limit=10';
		$fcbApiResult = @file_get_contents($postsApiUrl);
		if ($fcbApiResult) {
			$posts = json_decode($fcbApiResult, true);
			$posts = $posts['data'];
			$postCount = 0;
			$message = (isset($post['message']) ? $post['message'] : '');
			foreach ($posts as $post) {
				$postId = explode('_', $post['id']);
				$postUrl = 'https://www.facebook.com/brontik.praha/posts/' . $postId[1];
				if (!isset($post['story']) || strpos($post['story'], "created an event.") === false) {
					$created = DateTime::createFromFormat('Y-m-d\TH:i:sT', $post['created_time']);
					echo '<div class="fb-post" data-href="' . $postUrl . '" data-width="688">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="' . $postUrl . '">
									<p>' . $message . '</p>
									dne&nbsp;' . $created->format('j.n.Y') . '
								</blockquote>
							</div>
						</div>';
					echo '<br /><br />';
					$postCount++;
				}
				if ($postCount >= 3) {
					break;
				}
			}
		} else {
			echo '<div class="error-box"><small>';
			echo '<h6>Něco se rozbilo! Brzdy to ale jistě opravíme.</h6>';
			echo '<p>';
			echo 	'Zatím se podívej do ';
			echo 	'<a target="_blank" href="https://www.facebook.com/brontik.praha/">našich posledních příspěvků na Facebooku</a> přímo.';
			echo '</p>';
			echo '</small></div>';
		}
		?>


	</section>
	<div class="clear-hidden">&nbsp;</div>


<?php
	require_once 'config/html_bottom.php';
?>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1639397193015205',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/cs_CZ/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>