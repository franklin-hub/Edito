<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_article_specialise.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   _articles
 */ 

/* BOUCLE articles  */

 function BOUCLE_articleshtml_c5b01852284e00f7aaba55604cc002b0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_articles';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("0+articles.titre AS num",
		"articles.titre",
		"articles.id_article",
		"articles.lang");
	static $orderby = array('num', 'articles.titre');
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('=', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("squelette",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_article_specialise.html','html_c5b01852284e00f7aaba55604cc002b0','_articles',8,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['multiple']),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect))))!=='' ?
			((	'<option value="' .
		$Pile[$SP]['id_article'] .
		'"' .
		(($t3 = strval(((in_array($Pile[$SP]['id_article'],interdire_scripts(entites_html(sinon(@$Pile[0][(	'article_' .
				interdire_scripts(entites_html((@$Pile[0]['article']),true)))],array()),true)))) ?' ' :'')))!=='' ?
				(' ' . $t3 . 'selected="selected"') :
				'') .
		'>') . $t2 . '</option>') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['multiple']),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect))))!=='' ?
			((	'<option value="' .
		$Pile[$SP]['id_article'] .
		'"' .
		(($t3 = strval(((($Pile[$SP]['id_article'] == interdire_scripts(entites_html(sinon(@$Pile[0][(	'article_' .
				interdire_scripts(entites_html((@$Pile[0]['article']),true)))],'0'),true)))) ?' ' :'')))!=='' ?
				(' ' . $t3 . 'selected="selected"') :
				'') .
		'>') . $t2 . '</option>') :
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
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_article_specialise.html
// Temps de compilation total: 16.367 ms
//

function html_c5b01852284e00f7aaba55604cc002b0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label>' .
_T('sarkaspip:cfg_lbl_liste_articles') .
'</label>' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['multiple']),true)) ?' ' :''))))!=='' ?
		($t1 . '<br />') :
		'') .
'

<select name="article_' .
interdire_scripts(entites_html((@$Pile[0]['article']),true)) .
interdire_scripts((entites_html((@$Pile[0]['multiple']),true) ? html_entity_decode('&#91;&#93;'):'')) .
'" id="select_article_' .
interdire_scripts(entites_html((@$Pile[0]['article']),true)) .
'"' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['multiple']),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'multiple="multiple"') :
		'') .
'>
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['multiple']),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
	<option value="0"' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(@$Pile[0][(	'article_' .
		interdire_scripts(entites_html((@$Pile[0]['article']),true)))],'0'),true) == '0')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'selected="selected"') :
			'') .
	'>--</option>
')) :
		'') .
'
' .
BOUCLE_articleshtml_c5b01852284e00f7aaba55604cc002b0($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_c5b01852284e00f7aaba55604cc002b0', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_article_specialise.html');
}
?>