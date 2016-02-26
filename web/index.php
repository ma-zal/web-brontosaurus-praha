<?php
	require_once 'config/global.php';
	require_once 'engine/all.php';

	$GLOBALS[CONFIG]['header']['title'] = 'Úvod - ' . $GLOBALS[CONFIG]['header']['title'] ;
	$GLOBALS[CONFIG]['leftMenu']['kdo-jsme']['aktivni'] = true;
	require_once 'config/html_top.php';
?>
	<section>
		<h1>Brontosaurus v Praze, aneb Kdo jsme</h1>
		<p>
			<a href="http://www.brontosaurus.cz/">Hnutí Brontosaurus</a> je celorepubliková dobrovolnická organizace,
			která už přes 40 let pořádá víkendové i vícedenní akce pro děti a mládež. Součástí těchto akcí je zpravidla
			dobrovolnická práce na <a href="http://brontosaurus.cz/akce-priroda">pomoc přírodě</a> nebo
			<a href="http://brontosaurus.cz/akce-pamatky">památkám</a>, v&nbsp;České republice i
			<a href="http://brontosaurus.cz/zahranici">v zahraničí</a>, zároveň ale také zážitkový program zaměřený na
			osobnostní rozvoj a sociální dovednosti.
		</p>
		<p>
			Naše akce jsou otevřené všem, kdo má zájem zažít něco nevšedního a přitom také přiložit ruku k dílu,
			nemusíš být členem. Většinu akcí cílíme na středoškoláky a vysokoškoláky, tedy na věkovou skupinu
			od 15 do 26 let, ale vítán je každý, kdo je mladý duchem a rád se vrhne s ostatními do všemožných her.
		</p>
		<p>Brontosaurus obývá mnoho míst po celé České republice. Tento web se zabývá jeho aktivitami v Praze a okolí.</p>
		<p>
			Prohlédni si <a href="https://www.facebook.com/brontik.praha/events">naše akce</a>, a pokud tě něco zaujme,
			neváhej a přijď. Nové tváře vídáme na každé akci, neměj proto obavu, přihlas se na konkrétní akci
			a přijď nás poznat, sám nebo klidně i s kamarády. Těšíme se!
		</p>
	</section>
	<section id="uvod-right">
		<section>
			<h1>Přijď za námi</h1>
			<?php
			$FCB_ACCESS_TOKEN = '{{FCB_ACCESS_TOKEN}}';
			$eventsUrl = 'https://graph.facebook.com/v2.5/brontik.praha/events?access_token='.$FCB_ACCESS_TOKEN.'&limit=250&since=' . mktime();
			$events = json_decode(file_get_contents($eventsUrl), true);
			$events = array_reverse($events['data']);
			foreach($events as $event) {
				$startTime = DateTime::createFromFormat('Y-m-d\TH:i:sT', $event['start_time']);
				echo '<article class="facebookEvent">';
				echo '<div class="name"><a href="https://www.facebook.com/events/'.$event['id'].'" title="'.$event['description'].'">'.$event['name'].'</a></div>';
				echo '<div class="time">' . $startTime->format('j.n. H:i') . '</div>';
				echo '<div class="location">Místo: ' . $event['place']['name'] . '</div>';
				echo '</article>';
			}
			?>
		</section>

	</section>
	<section id="uvod-left">
		<h1>Co je nového?</h1>
		<?php
		$postsUrl = 'https://graph.facebook.com/v2.5/brontik.praha/feed?access_token='.$FCB_ACCESS_TOKEN.'&limit=10';
		$posts = json_decode(file_get_contents($postsUrl), true);
		$posts = $posts['data'];
		$postCount = 0;
		$message = (isset($post['message']) ? $post['message'] : '');
		foreach($posts as $post) {
			$postId = explode('_', $post['id']);
			$postUrl = 'https://www.facebook.com/brontik.praha/posts/'.$postId[1];
			if (!isset($post['story']) || strpos($post['story'], "created an event.") === false) {
				$created = DateTime::createFromFormat('Y-m-d\TH:i:sT', $post['created_time']);
				echo '<div class="fb-post" data-href="'.$postUrl.'" data-width="688">
						<div class="fb-xfbml-parse-ignore">
							<blockquote cite="'.$postUrl.'">
								<p>'.$message.'</p>
								dne&nbsp;'.$created->format('j.n.Y').'
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
			version    : 'v2.5'
		});

		FB.api(
			"/brontik.praha/events",
			function (response) {
				if (response && !response.error) {
					/* handle the result */
				}
				console.log(response);
			}
		);
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/cs_CZ/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
