<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html
// Temps de compilation total: 4.223 ms
//

function html_8bcce55e6544c3893c6bdc9e8aa86ada($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_breve') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_breve') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_breve') .
' -->

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html\',\'html_8bcce55e6544c3893c6bdc9e8aa86ada\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_breves_toutes') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_breve') . ',
	\'defaut_pas\' => ' . argumenter_squelette('10') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html\',\'html_8bcce55e6544c3893c6bdc9e8aa86ada\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html\',\'html_8bcce55e6544c3893c6bdc9e8aa86ada\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Br&egrave;ve :<br />
		' .
	cfg_affiche_arborescence('sarkaspip_breve') .
	'</div>
')) :
		'') .
'

');

	return analyse_resultat_skel('html_8bcce55e6544c3893c6bdc9e8aa86ada', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_breve.html');
}
?>