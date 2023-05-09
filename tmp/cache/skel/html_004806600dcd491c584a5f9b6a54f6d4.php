<?php

/*
 * Squelette : plugins/sarkaspip_31/style.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/style.css.html
// Temps de compilation total: 4.986 ms
//

function html_004806600dcd491c584a5f9b6a54f6d4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/base.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/layout.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/bandeau.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/noisettes.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/elements.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/ie.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

' .
(($t1 = strval(interdire_scripts(((find_in_path('css/perso.css.html')) ?' ' :''))))!=='' ?
		($t1 . (	'
  ' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('css/perso.css') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/style.css.html\',\'html_004806600dcd491c584a5f9b6a54f6d4\',\'\',15,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_004806600dcd491c584a5f9b6a54f6d4', $Cache, $page, 'plugins/sarkaspip_31/style.css.html');
}
?>