<?php
	define("CONFIG", "webConfig");
	
	$GLOBALS[CONFIG] = array();
	$GLOBALS[CONFIG]['webDomain'] = $_SERVER['HTTP_HOST'];  // bez protokolu (http)
	$GLOBALS[CONFIG]['webDir'] = dirname($_SERVER['SCRIPT_NAME']); //na zacatku i na konci cesty vzdy /

	if (substr($GLOBALS[CONFIG]['webDir'], -1,1) != '/') $GLOBALS[CONFIG]['webDir'] .= '/';

	/** Popisuje hlavně titulek webu (TITLE), jeho popis (DESCRIPTION)
	 *  a klíčová slova (KEYWORDS). Tyto tři údaje je vhodné nastavit kvůli vyhledávačům.
	 */	 	 	 
	$GLOBALS[CONFIG]['header'] = array(
		'title' => 'Hnutí Brontosaurus Praha',
		'description' => '',
		'keywords' => '',
		'others' => '',
		'otherScripts' => '',
		'document' => array(
			'onload' => ''
		)
	);

	/** Definice hlavního menu:
	 *   'název položky' => 'podrobnosti'
	 */	 	
	$GLOBALS[CONFIG]['leftMenu'] = array(

		'kdo-jsme' => array(
			'nazev' => 'Kdo jsme',
			'url' =>   '/',
			'ikona' => 'users',
			'vzdyOtevreno' => true,

			'podmenu' => array(
				'brontosaurus' => array(
					'nazev' => 'Hnutí Brontosaurus',
					'url' =>   '/kdo-jsme/'
				),
				'rozruch' => array(
					'nazev' => "Rozruch",
					'url' =>   '/kdo-jsme/rozruch/'
				),
				'sup' => array(
					'nazev' => "Sup",
					'url' =>   '/kdo-jsme/sup/'
				),
				'zemechvaly' => array(
					'nazev' => "Zeměchvály",
					'url' =>   '/kdo-jsme/zemechvaly/'
				),
				'brdo' => array(
					'nazev' => "BRĎO - dětský oddíl",
					'url' =>   '/kdo-jsme/brdo/'
				),
			)
		),

		'kluby' => array(
			'nazev' => 'Klubové večery',
			'url' =>   '/kluby/',
			'ikona' => 'user-secret',
//			'vzdyOtevreno' => true,

			'podmenu' => array()
		),

		'organizatorsky-kurz' => array(
			'nazev' => 'Kurz pro organizátory',
			'url' =>   '/organizatorsky-kurz/',
			'ikona' => 'map-pin',

//			'podmenu' => array(
//				'o-kurzu' => array(
//					'nazev' => 'O kurzu',
//					'url' =>   '/organizatorsky-kurz/'
//				),
//			)
		),

		'starame-se' => array(
			'nazev' => 'Staráme se o ...',
			'url' =>   '/starame-se/',
			'ikona' => 'leaf',
			'vzdyOtevreno' => true,

			'podmenu' => array(
				'ekofor' => array(
					'nazev' => 'Ekofór',
					'url' =>   '/starame-se/ekofor/'
				)
			)
		),

		'kontakty' => array(
			'nazev' => 'Kontakty',
			'url' =>   '/kontakty/klubovna/',
			'ikona' => 'map-pin',

			'podmenu' => array(
				'klubovna' => array(
					'nazev' => 'Klubovna',
					'url' =>   '/kontakty/klubovna/'
				),
				'adresar' => array(
					'nazev' => 'Adresář kontaktů',
					'url' =>   '/kontakty/adresar/'
				),
				'novinky-emailem' => array(
					'nazev' => 'Novinky e-mailem',
					'url' =>   'https://docs.google.com/forms/d/1BkMQ5Ovt_64o67Ns2fRbmBW372QxdXAV4pyzG5ZUziw/viewform'
				),
				'facebook' => array(
					'nazev' => 'Jsme na Facebooku',
					'url' =>   'https://www.facebook.com/brontik.praha/'
				)
			)
		),
	);
