<?php

/*
 * Squelette : plugins/sarkaspip_31/sommaire.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _0_squelette, _une, _0_article, _0_album
 */ 

/* BOUCLE articles  */

 function BOUCLE_0_squelettehtml_799082292937e4381845170b230f1f58(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_0_squelette';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("articles.lang",
		"articles.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('=', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("squelette",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/sommaire.html','html_799082292937e4381845170b230f1f58','_0_squelette',16,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/article_edito','0',false) != '0') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/sommaire/inc_edito') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',19,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
	vide($Pile['vars']['page_vide'] = '0'))) :
		'') .
'
		');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE articles  */

 function BOUCLE_unehtml_799082292937e4381845170b230f1f58(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$doublons_index = array();
	static $table = 'articles';
	static $id = '_une';
	static $from = array('articles' => 'spip_articles','L1' => 'spip_mots_articles','L2' => 'spip_mots');
	static $type = array();
	static $groupby = array("articles.id_article");
	static $select = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.lang",
		"articles.titre");
	static $orderby = array('articles.date DESC');
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('NOT', 
			array('REGEXP', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("",secteur,"in")))), 
			array('=', 'L2.type', "'squelette_habillage'"), 
			array('=', 'L2.titre', "'article_une'"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	static $join = array('L1' => array('articles','id_article'), 'L2' => array('L1','id_mot'));
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/sommaire.html','html_799082292937e4381845170b230f1f58','_une',25,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/article/inc_article_description') . ', array(\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'afficher_commentaires\' => ' . argumenter_squelette('non') . ',
	\'logo_rubrique\' => ' . argumenter_squelette(interdire_scripts(lire_config('sarkaspip_article/logo_rubrique','oui',false))) . ',
	\'taille_logo\' => ' . argumenter_squelette(interdire_scripts(lire_config('sarkaspip_article/taille_logo','150',false))) . ',
	\'page\' => ' . argumenter_squelette('une') . ',
	\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
vide($Pile['vars']['page_vide'] = '0'));
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE articles  */

 function BOUCLE_0_articlehtml_799082292937e4381845170b230f1f58(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_0_article';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("articles.lang",
		"articles.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('NOT', 
			array('REGEXP', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("",secteur,"in")))));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/sommaire.html','html_799082292937e4381845170b230f1f58','_0_article',40,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			
			' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/position_secteurs','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/sommaire/inc_secteurs') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',43,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				' .
	vide($Pile['vars']['page_vide'] = '0'))) :
		'') .
'
	
			
			' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/position_articles_recents','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/sommaire/inc_articles_recents') . ', array(\'doublons\' => '.var_export($doublons,true).',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',46,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				' .
	vide($Pile['vars']['page_vide'] = '0'))) :
		'') .
'
		');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}



/* BOUCLE articles  */

 function BOUCLE_0_albumhtml_799082292937e4381845170b230f1f58(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_0_album';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array();
	static $select = array("articles.lang",
		"articles.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())), 
			array('=', 'articles.id_secteur', sql_quote(calcul_rubrique_specialisee("galerie",secteur,"in"),'','int')));
	static $join = array();
	static $limit = '0,1';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/sommaire.html','html_799082292937e4381845170b230f1f58','_0_album',54,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			
			' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/position_albums_recents','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/sommaire/inc_albums_recents') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',57,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				' .
	vide($Pile['vars']['page_vide'] = '0'))) :
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
// Fonction principale du squelette plugins/sarkaspip_31/sommaire.html
// Temps de compilation total: 49.479 ms
//

function html_799082292937e4381845170b230f1f58($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php header("X-Spip-Cache: 7200"); ?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

<body dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">
<div id="container">
	<div id="header">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>
	
	<div id="wrapper">
		<div id="content">
		' .
vide($Pile['vars']['page_vide'] = '1') .
BOUCLE_0_squelettehtml_799082292937e4381845170b230f1f58($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		
		' .
(($t1 = BOUCLE_unehtml_799082292937e4381845170b230f1f58($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<div id="une" class="article">
		' . $t1 . '
			</div>
		') :
		'') .
'

		' .
BOUCLE_0_articlehtml_799082292937e4381845170b230f1f58($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		' .
BOUCLE_0_albumhtml_799082292937e4381845170b230f1f58($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		' .
(((is_array($a = ($Pile["vars"])) ? $a['page_vide'] : ""))  ?
		(' ' . (	'
			<div id="page_vide">
				<div class="titre"><h1>' .
	ucfirst(_T('sarkaspip:erreur')) .
	'&nbsp;-&nbsp;' .
	_T('sarkaspip:accueil_site') .
	'</h1></div>
				<div class="description avertissement"><div class="texte">' .
	_T('sarkaspip:msg_page_vide') .
	'</div></div>
			</div>
		')) :
		'') .
'
		</div>
	</div>
	
	<div id="navigation">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',68,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>  <!--navigation-->
	
	<div id="extra">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/extra') . ', array_merge('.var_export($Pile[0],1).',array(\'page\' => ' . argumenter_squelette('sommaire') . ',
	\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',73,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>
	
	<div id="footer">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/pied') . ', array(\'squelette\' => ' . argumenter_squelette('plugins/sarkaspip_31/sommaire.html') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/sommaire.html\',\'html_799082292937e4381845170b230f1f58\',\'\',78,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>

</div>
</body>
</html>
');

	return analyse_resultat_skel('html_799082292937e4381845170b230f1f58', $Cache, $page, 'plugins/sarkaspip_31/sommaire.html');
}
?>