<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/bandeau.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/bandeau.html
// Temps de compilation total: 3.623 ms
//

function html_5f763dea96c8fa4ffb3c432752ce86b6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_bandeau/haut','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau/inc_bandeau_haut') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau.html\',\'html_5f763dea96c8fa4ffb3c432752ce86b6\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_bandeau/bas','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau/inc_bandeau_bas') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau.html\',\'html_5f763dea96c8fa4ffb3c432752ce86b6\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_bandeau/chemin','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau/inc_bandeau_chemin') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/bandeau.html\',\'html_5f763dea96c8fa4ffb3c432752ce86b6\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_5f763dea96c8fa4ffb3c432752ce86b6', $Cache, $page, 'plugins/sarkaspip_31/noisettes/bandeau.html');
}
?>