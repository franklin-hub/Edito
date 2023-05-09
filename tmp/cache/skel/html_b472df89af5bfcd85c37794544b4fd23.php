<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/breve/inc_breves_recentes.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _breves
 */ 

/* BOUCLE breves  */

 function BOUCLE_breveshtml_b472df89af5bfcd85c37794544b4fd23(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$in = array();
	if (!(is_array($a = ($Pile[0]['id_secteur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	static $table = 'breves';
	static $id = '_breves';
	static $from = array('breves' => 'spip_breves');
	static $type = array();
	static $groupby = array();
	static $select = array("breves.date_heure",
		"breves.id_breve",
		"breves.lang",
		"breves.titre");
	static $orderby = array('breves.date_heure DESC');
	$where = 
			array(
			array('=', 'breves.statut', '\'publie\''), (!$Pile[0]['id_secteur'] ? '' : ((is_array($Pile[0]['id_secteur'])) ? sql_in('breves.id_rubrique',sql_quote($in)) : 
			array('=', 'breves.id_rubrique', sql_quote($Pile[0]['id_secteur'],'','int')))), 
			array('NOT', 
			array('REGEXP', 'breves.id_rubrique', sql_quote(calcul_rubrique_specialisee("galerie",branche,"not_in")))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/breve/inc_breves_recentes.html','html_b472df89af5bfcd85c37794544b4fd23','_breves',2,$GLOBALS['spip_lang']));
	if ($result) {
	
	// COMPTEUR
	$Numrows['_breves']['compteur_boucle'] = 0;
	$Numrows['_breves']['total'] = @intval(sql_count($result));
	$debut_boucle = 0;
	$fin_boucle = min($debut_boucle+intval(interdire_scripts(lire_config('sarkaspip_noisettes/max_breves','5',false))) - 1, $Numrows['_breves']['total'] - 1);
	$Numrows['_breves']['grand_total'] = $Numrows['_breves']['total'];
	$Numrows['_breves']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_breves']['grand_total'] AND sql_seek($result,$debut_boucle,'','continue'))
		$Numrows['_breves']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$Numrows['_breves']['compteur_boucle']++;
		if ($Numrows['_breves']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_breves']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		' .
recuperer_fond( (	'noisettes/breve/inc_breve_' .
	interdire_scripts(lire_config('sarkaspip_noisettes/liste_breves','2',false))) , array('id_breve' => $Pile[$SP]['id_breve'] ,
	'editable' => 'non' ), array('compil'=>array('plugins/sarkaspip_31/noisettes/breve/inc_breves_recentes.html','html_b472df89af5bfcd85c37794544b4fd23','_breves',7,$GLOBALS['spip_lang'])), '') .
'
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/breve/inc_breves_recentes.html
// Temps de compilation total: 5.581 ms
//

function html_b472df89af5bfcd85c37794544b4fd23($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_breveshtml_b472df89af5bfcd85c37794544b4fd23($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div id="noisette_breves" class="noisette">
		<h1><a class="intitule" href="' .
		interdire_scripts(generer_url_public('breve')) .
		'">' .
		_T('sarkaspip:breves') .
		'</a></h1>	
		' .
		(($t3 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/liste_breves','2',false) != '1') ? ' ':''))))!=='' ?
				($t3 . '<div class="contenu mixte">') :
				'') .
		'
') . $t1 . (	'
		' .
		(($t3 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/liste_breves','2',false) != '1') ? ' ':''))))!=='' ?
				($t3 . '</div>') :
				'') .
		'
	</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b472df89af5bfcd85c37794544b4fd23', $Cache, $page, 'plugins/sarkaspip_31/noisettes/breve/inc_breves_recentes.html');
}
?>