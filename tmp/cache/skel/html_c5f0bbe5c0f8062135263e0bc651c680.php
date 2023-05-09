<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_groupes_mots.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   _mot_existe, _groupes
 */ 

/* BOUCLE mots  */

 function BOUCLE_mot_existehtml_c5f0bbe5c0f8062135263e0bc651c680(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'mots';
	static $id = '_mot_existe';
	static $from = array('mots' => 'spip_mots');
	static $type = array();
	static $groupby = array();
	static $select = array("1");
	static $orderby = array();
	$where = 
			array(
			array('=', 'mots.id_groupe', sql_quote($Pile[$SP]['id_groupe'],'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_groupes_mots.html','html_c5f0bbe5c0f8062135263e0bc651c680','_mot_existe',5,$GLOBALS['spip_lang']));
	if ($result) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP-1]['titre']), "TYPO", $connect))))!=='' ?
		((	'<option value="' .
	$Pile[$SP-1]['id_groupe'] .
	'"' .
	(($t2 = strval(((in_array($Pile[$SP-1]['id_groupe'],interdire_scripts(entites_html(sinon(@$Pile[0][(	'groupes' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],array()),true)))) ?' ' :'')))!=='' ?
			(' ' . $t2 . 'selected="selected"') :
			'') .
	'>') . $t1 . '</option>') :
		'') .
'
	');
	}
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE groupes_mots  */

 function BOUCLE_groupeshtml_c5f0bbe5c0f8062135263e0bc651c680(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(entites_html((@$Pile[0]['id_groupe']),true))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	static $table = 'groupes_mots';
	static $id = '_groupes';
	static $from = array('groupes_mots' => 'spip_groupes_mots');
	static $type = array();
	static $groupby = array();
	static $select = array("groupes_mots.id_groupe",
		"groupes_mots.titre",
		"0+groupes_mots.titre AS num");
	static $orderby = array('num', 'groupes_mots.titre');
	$where = 
			array(
			array('NOT', 
			array('=', 'groupes_mots.titre', "'squelette_habillage'")), ($Pile[0]['id_groupe'] ? sql_in('groupes_mots.id_groupe',sql_quote($in)) : ''));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_groupes_mots.html','html_c5f0bbe5c0f8062135263e0bc651c680','_groupes',1,$GLOBALS['spip_lang']));
	if ($result) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
	' .
BOUCLE_mot_existehtml_c5f0bbe5c0f8062135263e0bc651c680($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_groupes_mots.html
// Temps de compilation total: 13.653 ms
//

function html_c5f0bbe5c0f8062135263e0bc651c680($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_groupeshtml_c5f0bbe5c0f8062135263e0bc651c680($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'	
 	<label>' .
		interdire_scripts(entites_html((@$Pile[0]['label']),true)) .
		'</label><br />
	<select name="groupes' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
		'[]" multiple="multiple" style="width: 100%;">
') . $t1 . '
	</select> 	
') :
		'') .
'
');

	return analyse_resultat_skel('html_c5f0bbe5c0f8062135263e0bc651c680', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_groupes_mots.html');
}
?>