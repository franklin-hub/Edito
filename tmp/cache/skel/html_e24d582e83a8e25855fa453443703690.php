<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html
// Temps de compilation total: 7.258 ms
//

function html_e24d582e83a8e25855fa453443703690($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars']['visible'] = interdire_scripts(plus(lire_config('sarkaspip_noisettes/position_rechspip','3',false),interdire_scripts(lire_config('sarkaspip_noisettes/moteur_externe','1',false))))) .
(((is_array($a = ($Pile["vars"])) ? $a['visible'] : "") != '3')  ?
		(' ' . (	'
	<div id="nav_recherche" class="noisette">
		<h1 class="intitule">' .
	_T('sarkaspip:rechercher') .
	'</h1>
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/position_rechspip','3',false) == '4') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_spip') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
	
		
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/moteur_externe','1',false) == '1') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_exalead') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/moteur_externe','1',false) == '2') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_google') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/moteur_externe','1',false) == '3') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_yahoo') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/moteur_externe','1',false) == '4') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_msn') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/moteur_externe','1',false) == '5') ? ' ':''))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/recherche/inc_recherche_voila') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html\',\'html_e24d582e83a8e25855fa453443703690\',\'\',14,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
	</div>
')) :
		''));

	return analyse_resultat_skel('html_e24d582e83a8e25855fa453443703690', $Cache, $page, 'plugins/sarkaspip_31/noisettes/recherche/inc_recherche.html');
}
?>