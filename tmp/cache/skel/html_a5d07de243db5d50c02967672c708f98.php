<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html
// Temps de compilation total: 14.886 ms
//

function html_a5d07de243db5d50c02967672c708f98($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="bandeau_haut">	
	' .
pipeline( 'bandeau_haut_debut' , array('args' => array('id_rubrique' => interdire_scripts(entites_html((@$Pile[0]['id_rubrique']),true))), 'data' => '') ) .
'
	<div class="nav_bandeau">  
    	<!-- Navigation dans les langues -->
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_langues','4',false) == '4') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau/inc_bandeau_langues') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html\',\'html_a5d07de243db5d50c02967672c708f98\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
        <!-- Navigation dans les raccourcis -->
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_pages','1',false) == '4') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_menu_pages_speciales') . ', array(\'position\' => ' . argumenter_squelette('bandeau_haut') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html\',\'html_a5d07de243db5d50c02967672c708f98\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
        <!-- Navigation dans les raccourcis -->
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_formulaires','1',false) == '4') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_menu_formulaires') . ', array(\'id_rubrique\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(@$Pile[0]['id_rubrique'],'0'),true))) . ',
	\'position\' => ' . argumenter_squelette('bandeau_haut') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html\',\'html_a5d07de243db5d50c02967672c708f98\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
	</div>
	
	' .
vide($Pile['vars']['logo'] = 
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_bandeau/logo_reduit','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['logo'] = filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts(lire_config('sarkaspip_bandeau/taille_logo','150',false))))) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['logo'] : "")))!=='' ?
		((	'<a class="site_logo" href="' .
	htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'" title="' .
	_T('sarkaspip:accueil_site') .
	'">') . $t1 . '</a>') :
		'') .
'
	<div class="site_nom">
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_bandeau/titre_site','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
		   ' .
	(($t2 = strval(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect))))!=='' ?
			((	'<h1><a href="' .
		htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
		'" title="' .
		_T('sarkaspip:accueil_site') .
		'">') . $t2 . '</a></h1>') :
			'') .
	'
		')) :
		'') .
'
	   ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/slogan',null,false))))!=='' ?
		('<h2>' . $t1 . '</h2>') :
		'') .
'
	</div>
	<br class="nettoyeur" />
	' .
pipeline( 'bandeau_haut_fin' , array('args' => array('id_rubrique' => interdire_scripts(entites_html((@$Pile[0]['id_rubrique']),true))), 'data' => '') ) .
'
</div>
');

	return analyse_resultat_skel('html_a5d07de243db5d50c02967672c708f98', $Cache, $page, 'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_haut.html');
}
?>