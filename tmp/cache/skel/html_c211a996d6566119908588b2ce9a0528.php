<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _acces_rubriques, _acces_mots, _acces_herbier, _acces_syndics
 */ 

/* BOUCLE rubriques  */

 function BOUCLE_acces_rubriqueshtml_c211a996d6566119908588b2ce9a0528(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_acces_rubriques';
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
			array('REGEXP', 'rubriques.id_rubrique', sql_quote(calcul_rubrique_specialisee("agenda:galerie:forum",secteur,"in"))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html','html_c211a996d6566119908588b2ce9a0528','_acces_rubriques',19,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
((($Pile[$SP]['id_rubrique'] == calcul_rubrique_specialisee("agenda",secteur,"in")))  ?
		(' ' . (	'
	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_agenda/plugin','1',false) == '1')) ?' ' :''))))!=='' ?
			($t2 . (	'
		<li' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
				(' class="' . $t3 . '"') :
				'') .
		'><a' .
		(($t3 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
				($t3 . (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
					(' id="mh_n' . $t4 . '"') :
					'')) :
				'') .
		(($t3 = strval(interdire_scripts(parametre_url(parametre_url(parametre_url(generer_url_public('agenda'),'id_rubrique',$Pile[$SP]['id_rubrique']),'annee',interdire_scripts(annee(date("Y-m-d H:i")))),'mois',interdire_scripts(mois(date("Y-m-d H:i")))))))!=='' ?
				(' href="' . $t3 . '"') :
				'') .
		'>' .
		_T('sarkaspip:agenda') .
		'</a></li>
		' .
		vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')))) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_agenda/plugin','1',false) == '2')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts(((filtre_info_plugin_dist("AGENDA", "est_actif")) ?' ' :''))))!=='' ?
				($t3 . (	'
		<li' .
			(($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
					(' class="' . $t4 . '"') :
					'') .
			'><a' .
			(($t4 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
					($t4 . (($t5 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
						(' id="mh_n' . $t5 . '"') :
						'')) :
					'') .
			(($t4 = strval(interdire_scripts(parametre_url(parametre_url(parametre_url(generer_url_public('agenda'),'id_rubrique',$Pile[$SP]['id_rubrique']),'annee',interdire_scripts(annee(date("Y-m-d H:i")))),'mois',interdire_scripts(mois(date("Y-m-d H:i")))))))!=='' ?
					(' href="' . $t4 . '"') :
					'') .
			'>' .
			_T('sarkaspip:agenda') .
			'</a></li>
		' .
			vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')))) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .
((($Pile[$SP]['id_rubrique'] == calcul_rubrique_specialisee("galerie",secteur,"in")))  ?
		(' ' . (	'
		<li' .
	(($t2 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	'><a' .
	(($t2 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
			($t2 . (($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
				(' id="mh_n' . $t3 . '"') :
				'')) :
			'') .
	(($t2 = strval(interdire_scripts(parametre_url(generer_url_public('galerie'),'id_rubrique',$Pile[$SP]['id_rubrique']))))!=='' ?
			(' href="' . $t2 . '"') :
			'') .
	'>' .
	_T('sarkaspip:galerie') .
	'</a></li>
		' .
	vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')))) :
		'') .
'
' .
((($Pile[$SP]['id_rubrique'] == calcul_rubrique_specialisee("forum",secteur,"in")))  ?
		(' ' . (	'
		<li' .
	(($t2 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	'><a' .
	(($t2 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
			($t2 . (($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
				(' id="mh_n' . $t3 . '"') :
				'')) :
			'') .
	(($t2 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))))!=='' ?
			(' href="' . $t2 . '"') :
			'') .
	'>' .
	_T('sarkaspip:forum') .
	'</a></li>
		' .
	vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')))) :
		'') .
'
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE mots  */

 function BOUCLE_acces_motshtml_c211a996d6566119908588b2ce9a0528(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'mots';
	static $id = '_acces_mots';
	static $from = array('mots' => 'spip_mots');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	static $where = 
			array(
			array('NOT', 
			array('=', 'mots.type', "'squelette_habillage'")));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html','html_c211a996d6566119908588b2ce9a0528','_acces_mots',47,$GLOBALS['spip_lang']));
	if ($result) {
	
	$l1 = _T('sarkaspip:mots_clefs');$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
		<li' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'><a' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
			(' id="mh_n' . $t2 . '"') :
			'')) :
		'') .
(($t1 = strval(interdire_scripts(generer_url_public('mot'))))!=='' ?
		(' href="' . $t1 . '"') :
		'') .
'>' .
$l1 .
'</a></li>
		' .
vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')));
	}
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE syndication  */

 function BOUCLE_acces_herbierhtml_c211a996d6566119908588b2ce9a0528(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'syndic';
	static $id = '_acces_herbier';
	static $from = array('syndic' => 'spip_syndic');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'syndic.statut', '\'publie\''), 
			array('NOT', 
			array('REGEXP', 'syndic.id_secteur', sql_quote(calcul_rubrique_specialisee("galerie",secteur,"not_in")))));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html','html_c211a996d6566119908588b2ce9a0528','_acces_herbier',57,$GLOBALS['spip_lang']));
	if ($result) {
	
	$l1 = _T('sarkaspip:herbier_sites');$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
	<li' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'><a' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
			(' id="mh_n' . $t2 . '"') :
			'')) :
		'') .
(($t1 = strval(interdire_scripts(generer_url_public('herbier'))))!=='' ?
		(' href="' . $t1 . '"') :
		'') .
'>' .
ucfirst($l1) .
'</a></li>
		' .
vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')));
	}
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE syndic_articles  */

 function BOUCLE_acces_syndicshtml_c211a996d6566119908588b2ce9a0528(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'syndic_articles';
	static $id = '_acces_syndics';
	static $from = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'syndic_articles.statut', '\'publie\''), 
			array('NOT', 
			array('REGEXP', 'L1.id_secteur', sql_quote(calcul_rubrique_specialisee("galerie",secteur,"not_in")))), 
			array('=', 'L1.statut', '\'publie\''));
	static $join = array('L1' => array('syndic_articles','id_syndic'));
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html','html_c211a996d6566119908588b2ce9a0528','_acces_syndics',67,$GLOBALS['spip_lang']));
	if ($result) {
	
	$l1 = _T('sarkaspip:sur_web');$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
		<li' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'><a' .
(($t1 = strval(interdire_scripts((((safehtml(entites_html((@$Pile[0]['position']),true)) == 'bandeau_bas')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
			(' id="mh_n' . $t2 . '"') :
			'')) :
		'') .
(($t1 = strval(interdire_scripts(generer_url_public('site'))))!=='' ?
		(' href="' . $t1 . '"') :
		'') .
'>' .
$l1 .
'</a></li>
		' .
vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')));
	}
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html
// Temps de compilation total: 54.702 ms
//

function html_c211a996d6566119908588b2ce9a0528($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'navigation')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['classe_div'] = 'noisette nav2') .
	vide($Pile['vars']['classe_li'] = 'raccourci_nav1'))) :
		'') .
'

' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_haut')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['classe_div'] = 'nav_raccourci') .
	vide($Pile['vars']['classe_li'] = 'raccourci_bandeau'))) :
		'') .
'

' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['classe_div'] = 'noisette menu_horiz') .
	vide($Pile['vars']['classe_li'] = ''))) :
		'') .
'

' .
vide($Pile['vars']['raccourci'] = 'non') .
vide($Pile['vars']['no_menu'] = '1') .
(($t1 = BOUCLE_acces_rubriqueshtml_c211a996d6566119908588b2ce9a0528($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'non'))  ?
				(' ' . (	'
	<div id="menu_raccourcis" class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
			'"><ul>
	' .
			vide($Pile['vars']['raccourci'] = 'oui') .
			'
')) :
				'') .
		'
') . $t1) :
		'') .
'

' .
(($t1 = BOUCLE_acces_motshtml_c211a996d6566119908588b2ce9a0528($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'non'))  ?
				(' ' . (	'
	<div id="menu_raccourcis" class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
			'"><ul>
	' .
			vide($Pile['vars']['raccourci'] = 'oui') .
			'
')) :
				'') .
		'
') . $t1) :
		'') .
'

' .
(($t1 = BOUCLE_acces_herbierhtml_c211a996d6566119908588b2ce9a0528($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'non'))  ?
				(' ' . (	'
	<div id="menu_raccourcis" class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
			'"><ul>
	' .
			vide($Pile['vars']['raccourci'] = 'oui') .
			'
')) :
				'') .
		'
') . $t1) :
		'') .
'

' .
(($t1 = BOUCLE_acces_syndicshtml_c211a996d6566119908588b2ce9a0528($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'non'))  ?
				(' ' . (	'
	<div id="menu_raccourcis" class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
			'"><ul>
	' .
			vide($Pile['vars']['raccourci'] = 'oui') .
			'
')) :
				'') .
		'
') . $t1) :
		'') .
'

' .
((afaire_ticket_existe('1'))  ?
		(' ' . (	'
	' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("TICKETS", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'non'))  ?
				(' ' . (	'
		<div id="menu_raccourcis" class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
			'"><ul>
		' .
			vide($Pile['vars']['raccourci'] = 'oui') .
			'
		')) :
				'') .
		'
		<li' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
				(' class="' . $t3 . '"') :
				'') .
		'><a' .
		(($t3 = strval(interdire_scripts((((entites_html((@$Pile[0]['position']),true) == 'bandeau_bas')) ?' ' :''))))!=='' ?
				($t3 . (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")))!=='' ?
					(' id="mh_n' . $t4 . '"') :
					'')) :
				'') .
		(($t3 = strval(interdire_scripts(generer_url_public('afaire'))))!=='' ?
				(' href="' . $t3 . '"') :
				'') .
		'>' .
		_T('sarkaspip:afaire') .
		'</a></li>
		' .
		vide($Pile['vars']['no_menu'] = plus((is_array($a = ($Pile["vars"])) ? $a['no_menu'] : ""),'1')))) :
			'') .
	'
')) :
		'') .
'

' .
pipeline( 'menu_pages_speciales_fin' , array('args' => array('position' => interdire_scripts(entites_html((@$Pile[0]['position']),true)), 'classe_li' => (is_array($a = ($Pile["vars"])) ? $a['classe_li'] : ""), 'no_menu' => (is_array($a = ($Pile["vars"])) ? $a['no_menu'] : "")), 'data' => '') ) .
'

' .
((((is_array($a = ($Pile["vars"])) ? $a['raccourci'] : "") == 'oui'))  ?
		(' ' . '
	</ul>
</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_c211a996d6566119908588b2ce9a0528', $Cache, $page, 'plugins/sarkaspip_31/noisettes/navigation/inc_menu_pages_speciales.html');
}
?>