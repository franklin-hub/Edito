<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/site/inc_sites_recents_2.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:07 GMT
 * Boucles :   _sites
 */ 

/* BOUCLE syndic_articles  */

 function BOUCLE_siteshtml_ec8530c2ebf186114b83fa2868f4f39e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$in = array();
	if (!(is_array($a = ($Pile[0]['id_secteur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	static $table = 'syndic_articles';
	static $id = '_sites';
	static $from = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
	static $type = array();
	static $groupby = array();
	static $select = array("syndic_articles.date",
		"syndic_articles.titre",
		"syndic_articles.url",
		"L1.url_site",
		"L1.nom_site");
	static $orderby = array('syndic_articles.date DESC');
	$where = 
			array(
			array('=', 'syndic_articles.statut', '\'publie\''), (!$Pile[0]['id_secteur'] ? '' : ((is_array($Pile[0]['id_secteur'])) ? sql_in('L1.id_secteur',sql_quote($in)) : 
			array('=', 'L1.id_secteur', sql_quote($Pile[0]['id_secteur'])))), 
			array('NOT', 
			array('REGEXP', 'L1.id_rubrique', sql_quote(calcul_rubrique_specialisee("galerie",branche,"not_in")))), 
			array('=', 'L1.statut', '\'publie\''));
	static $join = array('L1' => array('syndic_articles','id_syndic'));
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/site/inc_sites_recents_2.html','html_ec8530c2ebf186114b83fa2868f4f39e','_sites',2,$GLOBALS['spip_lang']));
	if ($result) {
	
	// COMPTEUR
	$Numrows['_sites']['compteur_boucle'] = 0;
	$Numrows['_sites']['total'] = @intval(sql_count($result));
	$debut_boucle = 0;
	$fin_boucle = min($debut_boucle+intval(interdire_scripts(lire_config('sarkaspip_noisettes/max_syndic','5',false))) - 1, $Numrows['_sites']['total'] - 1);
	$Numrows['_sites']['grand_total'] = $Numrows['_sites']['total'];
	$Numrows['_sites']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_sites']['grand_total'] AND sql_seek($result,$debut_boucle,'','continue'))
		$Numrows['_sites']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$Numrows['_sites']['compteur_boucle']++;
		if ($Numrows['_sites']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_sites']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts($Pile[$SP]['titre'])))!=='' ?
		((	'<h2><a class="titre" href="' .
	vider_url($Pile[$SP]['url']) .
	'" title="' .
	interdire_scripts(safehtml(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect)), "TYPO", $connect))) .
	'">' .
	(($t2 = strval(interdire_scripts(affdate_court(normaliser_date($Pile[$SP]['date'])))))!=='' ?
			($t2 . ' - ') :
			'')) . $t1 . '</a></h2>') :
		'') .
'
');
	}
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/site/inc_sites_recents_2.html
// Temps de compilation total: 5.500 ms
//

function html_ec8530c2ebf186114b83fa2868f4f39e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_siteshtml_ec8530c2ebf186114b83fa2868f4f39e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div id="noisette_sites" class="noisette">
		<h1><a class="intitule" href="' .
		interdire_scripts(generer_url_public('site')) .
		'">' .
		_T('sarkaspip:sur_web') .
		'</a></h1>
		<div class="contenu mixte">
') . $t1 . '
		</div>
	</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_ec8530c2ebf186114b83fa2868f4f39e', $Cache, $page, 'plugins/sarkaspip_31/noisettes/site/inc_sites_recents_2.html');
}
?>