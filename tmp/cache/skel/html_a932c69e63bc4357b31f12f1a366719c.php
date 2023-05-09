<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/inc_header.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/inc_header.html
// Temps de compilation total: 12.229 ms
//

function html_a932c69e63bc4357b31f12f1a366719c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars']['meta_description'] = interdire_scripts(((($a = entites_html((@$Pile[0]['meta_description']),true)) OR (!is_array($a) AND strlen($a))) ? $a : interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect))))) .
'

<head>
	
	<meta http-equiv="content-type" content="text/html; charset=' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />
	<meta name="revisit-after" content="' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_header/recurrence_robot','30',false))))!=='' ?
		($t1 . ' days') :
		'') .
'" />
	<meta name="robots" content="index,follow" />
	<meta name="generator" content="SPIP' .
(($t1 = strval(spip_version()))!=='' ?
		(' ' . $t1) :
		'') .
' - Sarka-SPIP' .
(($t1 = strval(textebrut(calcul_version_squelette())))!=='' ?
		(' ' . $t1) :
		'') .
'" />
	<meta name="author" content="' .
interdire_scripts(lire_config('sarkaspip_header/auteur_site',_T('sarkaspip:realisation_squelette'),false)) .
'" />
	<meta name="copyright" content="Copyright ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect))) .
(($t1 = strval(interdire_scripts(textebrut(lire_config('sarkaspip_header/licence_site',null,false)))))!=='' ?
		(' - ' . $t1) :
		'') .
'" />
	<meta name="distribution" content="global" />
	<meta name="description" content="' .
textebrut((is_array($a = ($Pile["vars"])) ? $a['meta_description'] : "")) .
'" />
	' .
(($t1 = strval(interdire_scripts(textebrut(lire_config('sarkaspip_header/keywords_site',null,false)))))!=='' ?
		('<meta name="keywords" content="' . $t1 . '" />') :
		'') .
'

	
	' .
vide($Pile['vars']['mode'] = '') .
'
	' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CSS'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['mode'] = 'recalcul') .
	'
	')) :
		'') .
'
	
	<link rel="stylesheet" type="text/css" media="all" href="' .
interdire_scripts(find_in_path('css/raz.css')) .
'" />
	
	<link rel="stylesheet" type="text/css" media="all" href="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(lire_config('sarkaspip_layout/numero_layout','13',false))))!=='' ?
			('css/layouts/layout' . $t2 . '.css') :
			''))) .
'" />
	
	<link rel="stylesheet" type="text/css" media="all" href="' .
interdire_scripts(direction_css(find_in_path('spip_style.css'))) .
'" />
	<link rel="stylesheet" type="text/css" media="all" href="' .
interdire_scripts(direction_css(find_in_path('spip_formulaires.css'))) .
'" />
	
	' .
(($t1 = strval(interdire_scripts(parametre_url(generer_url_public('style.css'),'var_mode',(is_array($a = ($Pile["vars"])) ? $a['mode'] : "")))))!=='' ?
		('<link rel="stylesheet" type="text/css" media="all" href="' . $t1 . '" />') :
		'') .
'
	
	' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/impression.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="print" />') :
		'') .
'

	
	<link rel="shortcut icon" href="' .
interdire_scripts(find_in_path('images/favicon.ico')) .
'" />
	
	' .
(($t1 = strval(interdire_scripts(generer_url_public('backend'))))!=='' ?
		((	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('sarkaspip:syndiquer_site') .
	'" href="') . $t1 . '" />') :
		'') .
'
	' .
interdire_scripts((@$Pile[0]['meta_options'])) .
'

	<title>' .
(($t1 = strval(interdire_scripts(textebrut(entites_html((@$Pile[0]['meta_titre']),true)))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect))) .
'</title>
	
	
	' .
insert_head_css().pipeline('insert_head','<!-- insert_head -->'). '<?php header("X-Spip-Filtre: '.'compacte_head' . '"); ?'.'>
	
	' .
'<' . '?php header("X-Spip-Filtre: '.'compacte_head' . '"); ?'.'></head>
');

	return analyse_resultat_skel('html_a932c69e63bc4357b31f12f1a366719c', $Cache, $page, 'plugins/sarkaspip_31/noisettes/inc_header.html');
}
?>