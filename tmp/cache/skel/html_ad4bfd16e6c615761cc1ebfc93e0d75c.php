<?php

/*
 * Squelette : ../extensions/porte_plume/barre_outils_icones.css.html
 * Date :      Fri, 03 Sep 2010 07:30:20 GMT
 * Compile :   Mon, 01 May 2023 10:06:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../extensions/porte_plume/barre_outils_icones.css.html
// Temps de compilation total: 1.236 ms
//

function html_ad4bfd16e6c615761cc1ebfc93e0d75c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=utf-8' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
barre_outils_css_icones('') .
'

/* roue ajax */
.ajaxLoad{background:white url(\'' .
interdire_scripts(url_absolue(find_in_path('images/searching.gif'))) .
'\') top left no-repeat;}
');

	return analyse_resultat_skel('html_ad4bfd16e6c615761cc1ebfc93e0d75c', $Cache, $page, '../extensions/porte_plume/barre_outils_icones.css.html');
}
?>