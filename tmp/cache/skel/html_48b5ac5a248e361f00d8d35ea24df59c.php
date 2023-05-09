<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/extra.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _acces_agenda, _acces_splickrbox
 */ 

/* BOUCLE rubriques  */

 function BOUCLE_acces_agendahtml_48b5ac5a248e361f00d8d35ea24df59c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_acces_agenda';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_rubrique', sql_quote(calcul_rubrique_specialisee("agenda",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/extra.html','html_48b5ac5a248e361f00d8d35ea24df59c','_acces_agenda',58,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/agenda/inc_mini_agenda_' .
	interdire_scripts(lire_config('sarkaspip_agenda/plugin','1',false)))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',59,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE rubriques  */

 function BOUCLE_acces_splickrboxhtml_48b5ac5a248e361f00d8d35ea24df59c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_acces_splickrbox';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_rubrique', sql_quote(calcul_rubrique_specialisee("galerie",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/extra.html','html_48b5ac5a248e361f00d8d35ea24df59c','_acces_splickrbox',70,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("SPLICKR", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'sommaire') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_splickrbox') . ', array(\'id_secteur\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',73,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
	')) :
		'') .
'
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/extra.html
// Temps de compilation total: 38.221 ms
//

function html_48b5ac5a248e361f00d8d35ea24df59c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
pipeline( 'colonne_extra_debut' , array('args' => interdire_scripts(unserialize(@serialize($Pile[0]))), 'data' => '') ) .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_publications','0',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_dernieres_publications') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',6,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_recherche','2',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'agenda') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/agenda/inc_agenda_filtre') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'categorie\' => ' . argumenter_squelette(@$Pile[0]['categorie']) . ',
	\'annee\' => ' . argumenter_squelette(@$Pile[0]['annee']) . ',
	\'mois\' => ' . argumenter_squelette(@$Pile[0]['mois']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',12,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'galerie') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/galerie/inc_galerie_filtre') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'categorie\' => ' . argumenter_squelette(@$Pile[0]['categorie']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',13,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'herbier') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/herbier/inc_herbier_filtre') . ', array(\'categorie\' => ' . argumenter_squelette(@$Pile[0]['categorie']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',14,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'evenement') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/agenda/inc_evenement_navigation') . ', array(\'id_secteur\' => ' . argumenter_squelette(calcul_rubrique_specialisee("agenda",secteur,"in")) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'id_evenement\' => ' . argumenter_squelette(@$Pile[0]['id_evenement']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'article') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/article/inc_article_navigation') . ', array(\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'rubrique') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/rubrique/inc_rubrique_navigation') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',19,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'album') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/album/inc_album_navigation') . ', array(\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',21,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'site') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/site/inc_site_filtre') . ', array(\'id_syndic\' => ' . argumenter_squelette(@$Pile[0]['id_syndic']) . ',
	\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) == 'breve') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/breve/inc_breve_navigation') . ', array(\'id_breve\' => ' . argumenter_squelette(@$Pile[0]['id_breve']) . ',
	\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',24,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("NUAGE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_nuage','0',false) == '2') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/mot/inc_mot_nuage') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
BOUCLE_acces_agendahtml_48b5ac5a248e361f00d8d35ea24df59c($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("RAINETTE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_rainette','0',false) == '2') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_rainette') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',65,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
BOUCLE_acces_splickrboxhtml_48b5ac5a248e361f00d8d35ea24df59c($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_annonce','0',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_annonce') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',80,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_commentaires','0',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts((match(entites_html((@$Pile[0]['page']),true),'article|album') ? '':' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_commentaires') . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',84,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_messages','0',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((entites_html((@$Pile[0]['id_secteur']),true) == calcul_rubrique_specialisee("forum",secteur,"in")) ? '':' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_messages') . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',89,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_herbier','0',false) == '2') ? ' ':''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/herbier/inc_herbier_recents_' .
			interdire_scripts(lire_config('sarkaspip_noisettes/liste_herbier','2',false)))) . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',94,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) != 'breve') ? ' ':''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/breve/inc_breves_recentes') . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',95,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['page']),true) != 'site') ? ' ':''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/site/inc_sites_recents_' .
		interdire_scripts(lire_config('sarkaspip_noisettes/liste_sites','2',false)))) . ', array(\'id_secteur\' => ' . argumenter_squelette(@$Pile[0]['id_secteur']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',96,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_stats_1','1',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/statistiques/inc_stats_site') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',100,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_stats_2','0',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/statistiques/inc_stats_articles') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',101,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_badges','1',false) == '2') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_badges') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/extra.html\',\'html_48b5ac5a248e361f00d8d35ea24df59c\',\'\',104,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
pipeline( 'colonne_extra_fin' , array('args' => interdire_scripts(unserialize(@serialize($Pile[0]))), 'data' => '') ) .
'
');

	return analyse_resultat_skel('html_48b5ac5a248e361f00d8d35ea24df59c', $Cache, $page, 'plugins/sarkaspip_31/noisettes/extra.html');
}
?>