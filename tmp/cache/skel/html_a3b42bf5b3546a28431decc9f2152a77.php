<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/pied.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/pied.html
// Temps de compilation total: 3.407 ms
//

function html_a3b42bf5b3546a28431decc9f2152a77($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="pied_bas">
' .
pipeline( 'pied_debut' , array('args' => '', 'data' => '') ) .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/pied/inc_pied_copyright') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/pied.html\',\'html_a3b42bf5b3546a28431decc9f2152a77\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/pied/inc_pied_outils') . ', array(\'squelette\' => ' . argumenter_squelette(@$Pile[0]['squelette']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/noisettes/pied.html\',\'html_a3b42bf5b3546a28431decc9f2152a77\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .
(($t1 = strval(interdire_scripts(((find_in_path('noisettes/pied/inc_pied_habillage.html')) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	recuperer_fond( 'noisettes/pied/inc_pied_habillage' , array(), array('compil'=>array('plugins/sarkaspip_31/noisettes/pied.html','html_a3b42bf5b3546a28431decc9f2152a77','',5,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
' .
pipeline( 'pied_fin' , array('args' => '', 'data' => '') ) .
'
</div>

' .
"<!-- SPIP-CRON --><div style=\"background-image: url('http://127.0.0.1/spip/spip.php?action=cron');\"></div>" .
'
');

	return analyse_resultat_skel('html_a3b42bf5b3546a28431decc9f2152a77', $Cache, $page, 'plugins/sarkaspip_31/noisettes/pied.html');
}
?>