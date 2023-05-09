<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_langues.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _langues
 */ 

/* BOUCLE articles  */

 function BOUCLE_langueshtml_8dec002ab327466b85ce98c7ef6edf9a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'articles';
	static $id = '_langues';
	static $from = array('articles' => 'spip_articles');
	static $type = array();
	static $groupby = array("lang");
	static $select = array("articles.lang",
		"lang",
		"articles.titre");
	static $orderby = array('articles.lang DESC');
	$where = 
			array(
			array('=', 'articles.statut', '\'publie\''), 
			array('<', 'articles.date', sql_quote(quete_date_postdates())));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_langues.html','html_8dec002ab327466b85ce98c7ef6edf9a','_langues',2,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<li' .
((htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) == interdire_scripts(entites_html((@$Pile[0]['lang']),true)))  ?
		(' ' . 'class="on"') :
		'') .
'>
				&#91;<a rel="start" href="' .
parametre_url(self(),'lang',htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
'" title="' .
traduire_nom_langue(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
'">' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'</a>&#93;
			</li>
');
	}
	lang_select();
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_langues.html
// Temps de compilation total: 3.434 ms
//

function html_8dec002ab327466b85ce98c7ef6edf9a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_langueshtml_8dec002ab327466b85ce98c7ef6edf9a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
	<div class="nav_langue">
		<ul>
' . $t1 . '
		</ul>
	</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_8dec002ab327466b85ce98c7ef6edf9a', $Cache, $page, 'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_langues.html');
}
?>