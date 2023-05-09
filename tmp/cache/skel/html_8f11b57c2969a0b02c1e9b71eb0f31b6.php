<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/pied/inc_pied_copyright.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:07 GMT
 * Boucles :   _1er_article
 */ 

/* BOUCLE articles  */

 function BOUCLE_1er_articlehtml_8f11b57c2969a0b02c1e9b71eb0f31b6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_1er_article';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("articles.date",
		"articles.lang",
		"articles.titre");
	static $orderby = array('articles.date');
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('NOT', 
			array('REGEXP', 'articles.id_rubrique', sql_quote(calcul_rubrique_specialisee("galerie",branche,"not_in")))));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/pied/inc_pied_copyright.html','html_8f11b57c2969a0b02c1e9b71eb0f31b6','_1er_article',1,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(((annee(normaliser_date($Pile[$SP]['date'])) != interdire_scripts(annee(date("Y-m-d H:i")))) ? ' ':''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['copyright2'] = (($t3 = strval(interdire_scripts(annee(normaliser_date($Pile[$SP]['date'])))))!=='' ?
				($t3 . '-') :
				'')) .
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
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/pied/inc_pied_copyright.html
// Temps de compilation total: 12.015 ms
//

function html_8f11b57c2969a0b02c1e9b71eb0f31b6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_1er_articlehtml_8f11b57c2969a0b02c1e9b71eb0f31b6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	' .
		vide($Pile['vars']['copyright1'] = (	_T('sarkaspip:copyright_site') .
			'&nbsp;')) .
		'
') . $t1 . (	'
	' .
		vide($Pile['vars']['copyright3'] = (	interdire_scripts(annee(date("Y-m-d H:i"))) .
			(($t4 = strval(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect))))!=='' ?
					('&nbsp;' . $t4) :
					''))) .
		'
')) :
		'') .
'
' .
vide($Pile['vars']['copyright'] = concat((is_array($a = ($Pile["vars"])) ? $a['copyright1'] : ""),concat((is_array($a = ($Pile["vars"])) ? $a['copyright2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['copyright3'] : "")))) .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/copyright_site','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['ligne_1'] = (is_array($a = ($Pile["vars"])) ? $a['copyright'] : "")) .
	'
')) :
		'') .
'
' .
((is_array($a = ($Pile["vars"])) ? $a['ligne_1'] : "")  ?
		(' ' . (	'
		' .
	vide($Pile['vars']['item'] = (($t3 = strval(interdire_scripts(trim(ptobr(propre(lire_config('sarkaspip_pied/licence_site',null,false)))))))!=='' ?
				('&nbsp;|&nbsp;' . $t3) :
				'')) .
	'
		' .
	vide($Pile['vars']['ligne_1'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_1'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(!(is_array($a = ($Pile["vars"])) ? $a['ligne_1'] : "")  ?
		(' ' . (	'
	' .
	vide($Pile['vars']['ligne_1'] = interdire_scripts(trim(ptobr(propre(lire_config('sarkaspip_pied/licence_site',null,false)))))) .
	'
')) :
		'') .
'


' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_1'] : "")))!=='' ?
		('<div class="copyright">' . $t1 . '</div>') :
		'') .
'
');

	return analyse_resultat_skel('html_8f11b57c2969a0b02c1e9b71eb0f31b6', $Cache, $page, 'plugins/sarkaspip_31/noisettes/pied/inc_pied_copyright.html');
}
?>