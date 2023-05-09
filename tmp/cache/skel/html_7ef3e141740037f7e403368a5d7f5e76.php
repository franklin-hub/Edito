<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_secteur_specialise.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:06 GMT
 * Boucles :   _encours, _secteurs
 */ 

/* BOUCLE rubriques  */

 function BOUCLE_encourshtml_7ef3e141740037f7e403368a5d7f5e76(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_encours';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.id_rubrique', sql_quote(interdire_scripts(entites_html(sinon(@$Pile[0][(	'rubrique_' .
	interdire_scripts(entites_html((@$Pile[0]['secteur']),true)))],'0'),true)))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_secteur_specialise.html','html_7ef3e141740037f7e403368a5d7f5e76','_encours',5,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect)))))!=='' ?
		((	'<option value="' .
	$Pile[$SP]['id_rubrique'] .
	'" selected="selected">') . $t1 . '</option>') :
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

 function BOUCLE_secteurshtml_7ef3e141740037f7e403368a5d7f5e76(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_secteurs';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
	static $orderby = array('num', 'rubriques.titre');
	$where = 
			array(
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
		 array('../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_secteur_specialise.html','html_7ef3e141740037f7e403368a5d7f5e76','_secteurs',8,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect)))))!=='' ?
		((	'<option value="' .
	$Pile[$SP]['id_rubrique'] .
	'">') . $t1 . '</option>') :
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
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_secteur_specialise.html
// Temps de compilation total: 14.461 ms
//

function html_7ef3e141740037f7e403368a5d7f5e76($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label>' .
_T('sarkaspip:cfg_lbl_liste_secteurs') .
'</label>
<select name="rubrique_' .
interdire_scripts(entites_html((@$Pile[0]['secteur']),true)) .
'" id="select_secteur">
	<option value="0"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0][(	'rubrique_' .
	interdire_scripts(entites_html((@$Pile[0]['secteur']),true)))],'0'),true) == '0') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>--</option>
' .
BOUCLE_encourshtml_7ef3e141740037f7e403368a5d7f5e76($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
BOUCLE_secteurshtml_7ef3e141740037f7e403368a5d7f5e76($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_7ef3e141740037f7e403368a5d7f5e76', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_secteur_specialise.html');
}
?>