<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   _hierarchie, _rubrique
 */ 

/* BOUCLE hierarchie  */

 function BOUCLE_hierarchiehtml_4c086128d8d98f648b5847dcd60a9098(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	$hierarchie = '';
	while ($id_rubrique = sql_getfetsel("id_parent","spip_rubriques","id_rubrique=" . $id_rubrique,"","","", "", $connect)) { 
		$hierarchie = ",$id_rubrique$hierarchie";
	}
	if (!$hierarchie) return "";
	$hierarchie = substr($hierarchie,1);
	static $table = 'rubriques';
	static $id = '_hierarchie';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"rubriques.id_secteur",
		"rubriques.lang",
		"rubriques.titre");
	$orderby = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$where = 
			array(
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html','html_4c086128d8d98f648b5847dcd60a9098','_hierarchie',17,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		' .
interdire_scripts(eval('return '.'_SARKASPIP_CONFIG_SYMBOLE_CHEMIN'.';')) .
((match($Pile[$SP]['id_rubrique'],calcul_rubrique_specialisee("",secteur,"in")))  ?
		(' ' . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/rubrique/inc_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',20,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
		' .
(!(match($Pile[$SP]['id_secteur'],calcul_rubrique_specialisee("",secteur,"in")))  ?
		(' ' . (	'
			' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?'' :' '))))!=='' ?
			($t2 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/rubrique/inc_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?' ' :''))))!=='' ?
			($t2 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_nav_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',23,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			')) :
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



/* BOUCLE rubriques  */

 function BOUCLE_rubriquehtml_4c086128d8d98f648b5847dcd60a9098(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	static $table = 'rubriques';
	static $id = '_rubrique';
	static $from = array('rubriques' => 'spip_rubriques');
	static $type = array();
	static $groupby = array();
	static $select = array("rubriques.id_rubrique",
		"rubriques.id_secteur",
		"rubriques.lang",
		"rubriques.titre");
	static $orderby = array();
	$where = 
			array(
			array('=', 'rubriques.statut', '\'publie\''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[0]['id_rubrique'],'','int')), 
			array('NOT', 
			array('=', 'rubriques.id_secteur', sql_quote(calcul_rubrique_specialisee("squelette",secteur,"in"),'','int'))));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html','html_4c086128d8d98f648b5847dcd60a9098','_rubrique',16,$GLOBALS['spip_lang']));
	if ($result) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
BOUCLE_hierarchiehtml_4c086128d8d98f648b5847dcd60a9098($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
interdire_scripts(eval('return '.'_SARKASPIP_CONFIG_SYMBOLE_CHEMIN'.';')) .
((match($Pile[$SP]['id_rubrique'],calcul_rubrique_specialisee("",secteur,"in")))  ?
		(' ' . (	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/rubrique/inc_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',20,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
		' .
(!(match($Pile[$SP]['id_secteur'],calcul_rubrique_specialisee("",secteur,"in")))  ?
		(' ' . (	'
			' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?'' :' '))))!=='' ?
			($t2 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/rubrique/inc_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_menus/option_rubriques','0',false) == '2')) ?' ' :''))))!=='' ?
			($t2 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/inc_nav_rubrique_lien') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html\',\'html_4c086128d8d98f648b5847dcd60a9098\',\'\',23,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			')) :
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
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html
// Temps de compilation total: 25.067 ms
//

function html_4c086128d8d98f648b5847dcd60a9098($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="bandeau_chemin">
	' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_rechspip','3',false) == '3') ? ' ':''))))!=='' ?
		($t1 . (	'
		<div class="recherche_chemin">
			
			' .
	executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html','html_4c086128d8d98f648b5847dcd60a9098','',5,$GLOBALS['spip_lang'])) .
	'
			<span>' .
	_T('sarkaspip:rechercher_sur_site') .
	'</span>
		</div>
	')) :
		'') .
'
		
' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("BOUTONSTEXTE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
	<img src="' .
	interdire_scripts(find_in_path('images/fontsizeup.png')) .
	'" alt="fontsizeup" class="textsizeup" />
	<img src="' .
	interdire_scripts(find_in_path('images/fontsizedown.png')) .
	'" alt="fontsizedown" class="textsizedown" />
')) :
		'') .
'
	<div class="chemin">
	<a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'">' .
_T('sarkaspip:accueil_site') .
'</a>
' .
BOUCLE_rubriquehtml_4c086128d8d98f648b5847dcd60a9098($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</div>

</div>
');

	return analyse_resultat_skel('html_4c086128d8d98f648b5847dcd60a9098', $Cache, $page, 'plugins/sarkaspip_31/noisettes/bandeau/inc_bandeau_chemin.html');
}
?>