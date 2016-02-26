<?php
	define ("NN", "\n");
	
	function __autoload($className) {
		require_once dirname(__FILE__) . '/class.' . strtolower($className) . '.php';
	}	
	
	/** Funkce zobrazi menu definovane v poli jako seznam
	 *  	$menu_aktivni udava, ktera polozka ma byt oznacena class="aktivni" (napr. pro zvyrazneni v css)
	 *  	$putID definuje, jake ID ma mit UL element	 	 
	 */	
	function menuToUL(array $menu, $putID = "")
	{
		$ret = "";
		if (empty($menu)) {
			return "";
		}

		$ret .= '<ul' . (!empty($putID) ? ' id="'.htmlspecialchars($putID) . '"' : '').'>';
		foreach ($menu as $polozka)
		{
			//tridy
			$class = '';
			if (!empty($polozka['aktivni'])) {
				$class .= 'aktivni ';
			}
			if (isset($polozka['class'])) {
				$class .= $polozka['class'];
			}
			if (strpos($polozka['nazev'],"\n") > 0) {
				$class .= 'dva-radky ';
			}

			$ret .= '<li' . (!empty($class) ? ' class="'.$class.'"' : '') . '>';
			if (!empty($polozka['url'])) {
				$ret .= 	'<a href="' . htmlspecialchars($polozka['url']) . '">';
				if (isset($polozka['ikona'])) {
					$ret .= '<i class="fa fa-fw fa-'.$polozka['ikona'].'"></i>  ';
				}
				$ret .=			nl2br(htmlspecialchars($polozka['nazev']));
				$ret .= 	'</a>';
			} else {
				$ret .=			nl2br(htmlspecialchars($polozka['nazev']));
				$ret .= '&nbsp;';
			}
			if (!empty($polozka['vzdyOtevreno']) || (!empty($polozka['aktivni']) && !empty($polozka['podmenu']))) {
				$ret .= menuToUL($polozka['podmenu']);
			}
			$ret .= '</li>'; 		
		}
		$ret .= '</ul>';
		return $ret;
	}
?>
