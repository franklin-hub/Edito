<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _maj, _tous_articles, _tous_albums, _tous_breves, _tous_sites, _tous_auteurs
 */ 

/* BOUCLE articles  */

 function BOUCLE_majhtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_maj';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("articles.date_modif",
		"articles.lang",
		"articles.titre");
	static $orderby = array('articles.date_modif DESC');
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('NOT', 
			array('=', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("squelette",secteur,"in"),'','int'))));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_maj',6,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<div class="texte">' .
nom_jour(normaliser_date($Pile[$SP]['date_modif'])) .
'&nbsp;' .
affdate(normaliser_date($Pile[$SP]['date_modif'])) .
'</div>
		');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE articles  */

 function BOUCLE_tous_articleshtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_tous_articles';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	$select = array("count(*)");
	static $orderby = array();
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('NOT', 
			array('REGEXP', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("",secteur,"in")))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_tous_articles',20,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_tous_articles']['total'] = @intval(array_shift(sql_fetch($result)));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_tous_articles']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE articles  */

 function BOUCLE_tous_albumshtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_tous_albums';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	$select = array("count(*)");
	static $orderby = array();
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('=', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("galerie",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_tous_albums',22,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_tous_albums']['total'] = @intval(array_shift(sql_fetch($result)));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_tous_albums']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE breves  */

 function BOUCLE_tous_breveshtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'breves';
	static $id = '_tous_breves';
	static $from = array('breves' => 'spip_breves');
	static $type = array();
	static $groupby = array();
	$select = array("count(*)");
	static $orderby = array();
	$where = 
			array(
			array('=', 'breves.statut', '\'publie\''), 
			array('NOT', 
			array('REGEXP', 'breves.id_rubrique', sql_quote(calcul_rubrique_specialisee("",branche,"in")))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_tous_breves',24,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_tous_breves']['total'] = @intval(array_shift(sql_fetch($result)));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_tous_breves']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE syndication  */

 function BOUCLE_tous_siteshtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'syndic';
	static $id = '_tous_sites';
	static $from = array('syndic' => 'spip_syndic');
	static $type = array();
	static $groupby = array();
	$select = array("count(*)");
	static $orderby = array();
	$where = 
			array(
			array('=', 'syndic.statut', '\'publie\''), 
			array('NOT', 
			array('REGEXP', 'syndic.id_secteur', sql_quote(calcul_rubrique_specialisee("annonce:galerie:agenda",secteur,"in")))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_tous_sites',26,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_tous_sites']['total'] = @intval(array_shift(sql_fetch($result)));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_tous_sites']['total']);
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE auteurs  */

 function BOUCLE_tous_auteurshtml_9898ec8efdfe3c89a7af496321f34819(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'auteurs';
	static $id = '_tous_auteurs';
	static $from = array('auteurs' => 'spip_auteurs');
	static $type = array();
	static $groupby = array();
	$select = array("count(*)");
	static $orderby = array();
	static $where = 
			array(
			array('NOT', 
			array('=', 'auteurs.statut', "'6forum'")));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html','html_9898ec8efdfe3c89a7af496321f34819','_tous_auteurs',28,$GLOBALS['spip_lang']));
	if ($result) {
	$Numrows['_tous_auteurs']['total'] = @intval(array_shift(sql_fetch($result)));
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_tous_auteurs']['total']);
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html
// Temps de compilation total: 25.272 ms
//

function html_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<?php header("X-Spip-Cache: 60"); ?><div id="noisette_statistiques" class="noisette">
	<h1 class="intitule">' .
_T('sarkaspip:statistiques') .
'</h1>
	<div class="contenu">
		' .
(($t1 = BOUCLE_majhtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<h2 class="titre_bloc">' .
		_T('sarkaspip:maj') .
		'</h2>
		') . $t1 . '
		') :
		((	'
			<h2 class="titre_bloc">' .
	_T('sarkaspip:maj') .
	'</h2>
			<div class="texte">' .
	_T('sarkaspip:date_aujourdhui') .
	'</div>
		'))) .
'
	</div>

	<div class="contenu">
		<h2 class="titre_bloc">' .
_T('sarkaspip:statistiques_edition') .
'</h2>
		<div class="texte">
			' .
(($t1 = BOUCLE_tous_articleshtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' ' . $t1 . (	'
				' .
		(($t3 = strval((($Numrows['_tous_articles']['total'] == '1') ? _T('sarkaspip:1_article'):_T('sarkaspip:articles'))))!=='' ?
				((	$Numrows['_tous_articles']['total'] .
			' ') . $t3) :
				''))) :
		(_T('sarkaspip:0_article'))) .
'<br />
			' .
(($t1 = BOUCLE_tous_albumshtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' ' . $t1 . (	'
				' .
		(($t3 = strval((($Numrows['_tous_albums']['total'] == '1') ? _T('sarkaspip:1_album'):_T('sarkaspip:n_albums'))))!=='' ?
				((	$Numrows['_tous_albums']['total'] .
			' ') . $t3) :
				''))) :
		(_T('sarkaspip:0_album'))) .
'<br />
			' .
(($t1 = BOUCLE_tous_breveshtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' ' . $t1 . (	'
				' .
		(($t3 = strval((($Numrows['_tous_breves']['total'] == '1') ? _T('sarkaspip:1_breve'):_T('sarkaspip:breves'))))!=='' ?
				((	$Numrows['_tous_breves']['total'] .
			' ') . $t3) :
				''))) :
		(_T('sarkaspip:0_breve'))) .
'<br />
			' .
(($t1 = BOUCLE_tous_siteshtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' ' . $t1 . (	'
				' .
		(($t3 = strval((($Numrows['_tous_sites']['total'] == '1') ? _T('sarkaspip:1_site_web'):_T('sarkaspip:sites_web'))))!=='' ?
				((	$Numrows['_tous_sites']['total'] .
			' ') . $t3) :
				''))) :
		(_T('sarkaspip:0_site_web'))) .
'<br />
			' .
(($t1 = BOUCLE_tous_auteurshtml_9898ec8efdfe3c89a7af496321f34819($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' ' . $t1 . (	'
				' .
		(($t3 = strval((($Numrows['_tous_auteurs']['total'] == '1') ? _T('sarkaspip:1_auteur'):_T('sarkaspip:auteurs'))))!=='' ?
				((	$Numrows['_tous_auteurs']['total'] .
			' ') . $t3) :
				''))) :
		(_T('sarkaspip:0_auteur'))) .
'<br />
		</div>
	</div>
	
	<div class="contenu">
		<h2 class="titre_bloc">' .
_T('sarkaspip:statistiques_visites') .
'</h2>
		<div class="texte">
			' .
interdire_scripts(calcul_visites_site("aujourdhui")) .
'&nbsp;' .
_T('sarkaspip:aujourdhui') .
'<br />
			' .
interdire_scripts(calcul_visites_site("hier")) .
'&nbsp;' .
_T('sarkaspip:hier') .
'<br />
			' .
interdire_scripts(calcul_visites_site("depuis_debut")) .
'&nbsp;' .
_T('sarkaspip:depuis_debut') .
'<br />
			' .
(($t1 = strval(interdire_scripts(((calcul_visiteurs_connectes() == '0') ? ' ':''))))!=='' ?
		($t1 . _T('sarkaspip:0_visiteur_connecte')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(((calcul_visiteurs_connectes() == '0') ? '':' '))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(interdire_scripts(((calcul_visiteurs_connectes() == '1') ? _T('sarkaspip:1_visiteur_connecte'):_T('sarkaspip:n_visiteurs_connectes')))))!=='' ?
			((	interdire_scripts(calcul_visiteurs_connectes()) .
		'&nbsp;') . $t2) :
			'') .
	'
			')) :
		'') .
'
		</div>
	</div>
</div>
');

	return analyse_resultat_skel('html_9898ec8efdfe3c89a7af496321f34819', $Cache, $page, 'plugins/sarkaspip_31/noisettes/statistiques/inc_stats_site.html');
}
?>