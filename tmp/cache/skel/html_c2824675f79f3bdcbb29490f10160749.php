<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/navigation.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/navigation.html
// Temps de compilation total: 23.668 ms
//

function html_c2824675f79f3bdcbb29490f10160749($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
pipeline( 'colonne_navigation_debut' , array('args' => interdire_scripts(unserialize(@serialize($Pile[0]))), 'data' => '') ) .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_publications','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_dernieres_publications') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',6,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_recherche','2',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_rubriques','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/navigation/inc_menu_rubriques_' .
		interdire_scripts(lire_config('sarkaspip_menus/modele_rubriques','1',false)))) . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_pages','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_menu_pages_speciales') . ', array(\'position\' => ' . argumenter_squelette('navigation') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',14,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_formulaires','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_menu_formulaires') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'position\' => ' . argumenter_squelette('navigation') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',15,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("NUAGE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_nuage','0',false) == '1') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/mot/inc_mot_nuage') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',19,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_commentaires','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts((match(entites_html((@$Pile[0]['page']),true),'article|album') ? '':' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_commentaires') . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',24,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_messages','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((entites_html((@$Pile[0]['id_secteur']),true) == calcul_rubrique_specialisee("forum",secteur,"in")) ? '':' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_messages') . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',29,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_annonce','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_annonce') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',33,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("RAINETTE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_rainette','0',false) == '1') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_rainette') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) != 'herbier') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_herbier','0',false) == '1') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/herbier/inc_herbier_recents_' .
			interdire_scripts(lire_config('sarkaspip_noisettes/liste_herbier','2',false)))) . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',42,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_stats_1','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/statistiques/inc_stats_site') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',46,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_stats_2','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/statistiques/inc_stats_articles') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',47,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_badges','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_badges') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/navigation.html\',\'html_c2824675f79f3bdcbb29490f10160749\',\'\',50,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
pipeline( 'colonne_navigation_fin' , array('args' => interdire_scripts(unserialize(@serialize($Pile[0]))), 'data' => '') ) .
'
');

	return analyse_resultat_skel('html_c2824675f79f3bdcbb29490f10160749', $Cache, $page, 'plugins/sarkaspip_31/noisettes/navigation.html');
}
?>