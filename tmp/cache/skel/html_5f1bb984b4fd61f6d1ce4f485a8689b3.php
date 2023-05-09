<?php

/*
 * Squelette : ../plugins/zen-garden/prive/zengarden_theme_actif.html
 * Date :      Tue, 27 Jul 2010 09:39:18 GMT
 * Compile :   Mon, 01 May 2023 10:24:40 GMT
 * Boucles :   _sel
 */ 

/* BOUCLE POUR  */

 function BOUCLE_selhtml_5f1bb984b4fd61f6d1ce4f485a8689b3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = 'pour';
	static $table = 'POUR';
	static $id = '_sel';
	static $from = array('POUR' => 'POUR');
	static $type = array();
	static $groupby = array();
	static $select = array("POUR.valeur",
		"POUR.cle");
	static $orderby = array();
	$where = 
			array(
			array('=', 'POUR.cle', sql_quote(interdire_scripts(entites_html((@$Pile[0]['selection']),true)))));
	static $join = array();
	static $limit = '';
	$having = 
			array(
			array('tableau', interdire_scripts(entites_html((@$Pile[0]['themes']),true))));
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/zen-garden/prive/zengarden_theme_actif.html','html_5f1bb984b4fd61f6d1ce4f485a8689b3','_sel',1,$GLOBALS['spip_lang']));
	if ($result) {
	
	$l1 = _T('zengarden:theme_actif');
	$l2 = _T('public/spip/ecrire:intitule_licence');
	$l3 = _T('zengarden:desactiver_ce_theme');$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result, 'pour')) {

		$t0 .= (
'
<li class=\'item on\'>
' .
interdire_scripts(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_reduire',concat(eval('return '.'_DIR_THEMES'.';'),interdire_scripts(table_valeur($Pile[$SP]['valeur'],'chemin')),'/',interdire_scripts(table_valeur($Pile[$SP]['valeur'],'icon'))),'200','150')),'class','spip_documents_left'),'alt',interdire_scripts(extraire_multi(typo(table_valeur($Pile[$SP]['valeur'],'nom')))))) .
'
<h2>' .
$l1 .
'</h2>
<h3>' .
interdire_scripts(extraire_multi(typo(table_valeur($Pile[$SP]['valeur'],'nom')))) .
'</h3>
<div class=\'descriptif\'>' .
interdire_scripts(propre(table_valeur($Pile[$SP]['valeur'],'description'))) .
'</div>
<div class=\'auteur\'>' .
_T('info_les_auteurs_1',array('les_auteurs' => interdire_scripts(PtoBR(propre(table_valeur($Pile[$SP]['valeur'],'auteur')))))) .
'</div>
<div class=\'licence\'>' .
(($t1 = strval(interdire_scripts(PtoBR(propre(table_valeur($Pile[$SP]['valeur'],'licence'))))))!=='' ?
		((	$l2 .
	' ') . $t1) :
		'') .
'</div>
<p class=\'actions\'>[<a href=\'' .
invalideur_session($Cache, generer_action_auteur('zengarden_activer_theme',(	'defaut:' .
	interdire_scripts(invalideur_session($Cache, $Pile[$SP]['cle']))),invalideur_session($Cache, self()))) .
'\'>' .
$l3 .
'</a>]</p>
</li>
');
	}
	@sql_free($result, 'pour');
	}
	return $t0;
}


//
// Fonction principale du squelette ../plugins/zen-garden/prive/zengarden_theme_actif.html
// Temps de compilation total: 11.305 ms
//

function html_5f1bb984b4fd61f6d1ce4f485a8689b3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_selhtml_5f1bb984b4fd61f6d1ce4f485a8689b3($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class=\'liste_items themes\'>
' . $t1 . '
</ul>
') :
		'');

	return analyse_resultat_skel('html_5f1bb984b4fd61f6d1ce4f485a8689b3', $Cache, $page, '../plugins/zen-garden/prive/zengarden_theme_actif.html');
}
?>