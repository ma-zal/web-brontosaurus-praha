<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
        echo '	<title>'.htmlspecialchars($GLOBALS[CONFIG]['header']['title']).'</title>'.NN;

        if (!empty($GLOBALS[CONFIG]['header']['description']))
            echo '	<meta xml:lang="cs" name="description" content="'.htmlspecialchars($GLOBALS[CONFIG]['header']['description']).'" />'.NN;
        if (!empty($GLOBALS[CONFIG]['header']['keywords']))
            echo '	<meta xml:lang="cs" name="keywords" content="'.htmlspecialchars($GLOBALS[CONFIG]['header']['keywords']).'" />'.NN;
?>
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<?php
	echo $GLOBALS[CONFIG]['header']['others'];
	echo '</head>'.NN;
	echo '<body' 
		. (!empty($GLOBALS[CONFIG]['header']['document']['onload']) ? ' onload="'.htmlspecialchars($GLOBALS[CONFIG]['header']['document']['onload']).'"' : '')
		. '>'.NN;
?>

	<!--googleoff: index-->
		<!--[if lt IE 11]>
			<div id="old-browser-warn">
				Využíváte starou verzi Vašeho prohlížeče Internet Explorer. Navštěvované stránky se nemusejí zobrazovat správně.<br />Pokud je to možné, doporučujeme stáhnout a využívat moderní prohlížeč <a href="http://www.google.com/intl/cs/chrome/">Google Chrome</a> nebo <a href="http://www.mozilla.cz/produkty/firefox/">Mozilla Firefox</a>.
			</div>
		<![endif]-->
	<!--googleon: index-->
	<header>
		<div id="layout-top-space"></div>
		<div id="layout-top">
			<a href="/"><span>Hnutí Brontosaurus Praha</span></a>
		</div>
	</header>
	<div id="main-container">
		<nav id="left-menu">
			<?php echo menuToUL($GLOBALS[CONFIG]['leftMenu']); ?>
		</nav>
		<div id="main-content">
