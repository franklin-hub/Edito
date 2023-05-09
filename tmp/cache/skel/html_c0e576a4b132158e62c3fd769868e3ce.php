<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _debut_secteur, _debut_ssrubrique, _fin_hierarchie, _ssmenu, _menu_ssrubriques, _fin_secteur, _menu_rubriques
 */ 

/* BOUCLE rubriques  */

 function BOUCLE_debut_secteurhtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_debut_secteur';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_debut_secteur',5,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_debut_secteur']['total'] = @intval(sql_count($result));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('<li class="smenu">', $Numrows['_debut_secteur']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE rubriques  */

 function BOUCLE_debut_ssrubriquehtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_debut_ssrubrique';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_debut_ssrubrique',13,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_debut_ssrubrique']['total'] = @intval(sql_count($result));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('<li class="smenu">', $Numrows['_debut_ssrubrique']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE rubriques  */

 function BOUCLE_fin_hierarchiehtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_fin_hierarchie';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_fin_hierarchie',18,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_fin_hierarchie']['total'] = @intval(sql_count($result));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_fin_hierarchie']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE boucle  */

 function BOUCLE_ssmenuhtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$save_numrows = ($Numrows['_menu_ssrubriques']);
	$t0 = (($t1 = BOUCLE_menu_ssrubriqueshtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul>
			' . $t1 . '
				</ul>
			') :
		'');
	$Numrows['_menu_ssrubriques'] = ($save_numrows);
	return $t0;
}



/* BOUCLE rubriques  */

 function BOUCLE_menu_ssrubriqueshtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_menu_ssrubriques';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.id_parent",
		"rubriques.lang");
	static $orderby = array('num', 'rubriques.titre');
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','int')));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_ssrubriques',10,$GLOBALS['spip_lang']));
	if ($result) {
	
	// COMPTEUR
	$Numrows['_menu_ssrubriques']['compteur_boucle'] = 0;
	$Numrows['_menu_ssrubriques']['total'] = @intval(sql_count($result));
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$Numrows['_menu_ssrubriques']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				' .
(($t1 = BOUCLE_debut_ssrubriquehtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		('<li>')) .
'
					' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) != '2')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect),'80'))))!=='' ?
			((	'<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'">') . $t2 . '</a>') :
			'')) :
		'') .
'
					' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
						' .
	recuperer_fond( 'noisettes/navigation/inc_nav_rubrique_lien' , array('id_rubrique' => $Pile[$SP]['id_rubrique'] ), array('compil'=>array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_ssrubriques',16,$GLOBALS['spip_lang'])), '') .
	'
					')) :
		'') .
'
				' .
(($t1 = BOUCLE_fin_hierarchiehtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
					' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '1')) ?' ' :''))))!=='' ?
			($t2 . (	'
						' .
		recuperer_fond( 'noisettes/navigation/inc_nav_articles_1' , array('id_rubrique' => $Pile[$SP]['id_rubrique'] ,
	'avec_ul' => 'oui' ), array('compil'=>array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_ssrubriques',20,$GLOBALS['spip_lang'])), '') .
		'
					')) :
			'') .
	'
				'))) .
'
					' .
BOUCLE_ssmenuhtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</li>
				' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	((($Numrows['_menu_ssrubriques']['compteur_boucle'] == $Numrows['_menu_ssrubriques']['total']))  ?
			(' ' . (	'
						' .
		recuperer_fond( 'noisettes/navigation/inc_nav_articles_1' , array('id_rubrique' => $Pile[$SP]['id_parent'] ,
	'avec_ul' => 'non' ), array('compil'=>array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_ssrubriques',27,$GLOBALS['spip_lang'])), '') .
		'
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



/* BOUCLE rubriques  */

 function BOUCLE_fin_secteurhtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_fin_secteur';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_fin_secteur',33,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_fin_secteur']['total'] = @intval(sql_count($result));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_fin_secteur']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE rubriques  */

 function BOUCLE_menu_rubriqueshtml_c0e576a4b132158e62c3fd769868e3ce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_menu_rubriques';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.id_secteur",
		"rubriques.lang");
	static $orderby = array('num', 'rubriques.titre');
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_parent', 0), 
			array('NOT', 
			array('REGEXP', 'rubriques.id_rubrique', sql_quote(calcul_rubrique_specialisee("",secteur,"in")))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_rubriques',1,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		' .
(($t1 = BOUCLE_debut_secteurhtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		('<li>')) .
'
			' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) != '2')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect),'80'))))!=='' ?
			((	'<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'">') . $t2 . '</a>') :
			'')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	recuperer_fond( 'noisettes/navigation/inc_nav_rubrique_lien' , array('id_rubrique' => $Pile[$SP]['id_rubrique'] ), array('compil'=>array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_rubriques',8,$GLOBALS['spip_lang'])), '') .
	'
			')) :
		'') .
'
			' .
(($t1 = BOUCLE_menu_ssrubriqueshtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul>
			' . $t1 . '
				</ul>
			') :
		'') .
'
		' .
(($t1 = BOUCLE_fin_secteurhtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '1')) ?' ' :''))))!=='' ?
			($t2 . (	'
				' .
		recuperer_fond( 'noisettes/navigation/inc_nav_articles_1' , array('id_rubrique' => $Pile[$SP]['id_secteur'] ,
	'avec_ul' => 'oui' ), array('compil'=>array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html','html_c0e576a4b132158e62c3fd769868e3ce','_menu_rubriques',35,$GLOBALS['spip_lang'])), '') .
		'
			')) :
			'') .
	'
		'))) .
'
		</li>
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html
// Temps de compilation total: 20.091 ms
//

function html_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_menu_rubriqueshtml_c0e576a4b132158e62c3fd769868e3ce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<div id="menu_rubriques" class="noisette menu_rub1">
	<ul class="menulist">
' . $t1 . '
	</ul> <!-- menulist -->
</div> <!-- menu_rub1 -->
') :
		'');

	return analyse_resultat_skel('html_c0e576a4b132158e62c3fd769868e3ce', $Cache, $page, 'plugins/sarkaspip_31/noisettes/navigation/inc_menu_rubriques_1.html');
}
?>