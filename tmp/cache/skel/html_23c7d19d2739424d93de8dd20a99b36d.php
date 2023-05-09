<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html
// Temps de compilation total: 9.481 ms
//

function html_23c7d19d2739424d93de8dd20a99b36d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_maintenance') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_maintenance') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_maintenance') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html\',\'html_23c7d19d2739424d93de8dd20a99b36d\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?>' .
executer_balise_dynamique('FORMULAIRE_SAUVEGARDE_CFG',
	array(interdire_scripts(concat(eval('return '.'_DIR_PLUGIN_SARKASPIP'.';'),'fonds/')),array('titre' => _T('sarkaspip:cfg_boite_fond_sauvegarde'), 'legende' => _T('sarkaspip:cfg_lgd_fond_sauvegarde'), 'choix' => _T('sarkaspip:cfg_inf_choix_sauvegarde'), 'label_oui' => _T('sarkaspip:cfg_lbl_oui'), 'label_non' => _T('sarkaspip:cfg_lbl_non'), 'label_fond' => _T('sarkaspip:cfg_lbl_fond_sauvegarde'), 'description' => _T('sarkaspip:cfg_inf_fond_sauvegarde'))),
	array('../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html','html_23c7d19d2739424d93de8dd20a99b36d','',0,$GLOBALS['spip_lang'])) .
'

' .
executer_balise_dynamique('FORMULAIRE_RESTAURATION_CFG',
	array(interdire_scripts(concat(eval('return '.'_DIR_PLUGIN_SARKASPIP'.';'),'fonds/')),array('titre' => _T('sarkaspip:cfg_boite_fond_restauration'), 'legende' => _T('sarkaspip:cfg_lgd_fond_restauration'), 'label' => _T('sarkaspip:cfg_lbl_fond_restauration'), 'description' => _T('sarkaspip:cfg_inf_fond_restauration'))),
	array('../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html','html_23c7d19d2739424d93de8dd20a99b36d','',0,$GLOBALS['spip_lang'])) .
'
');

	return analyse_resultat_skel('html_23c7d19d2739424d93de8dd20a99b36d', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_maintenance.html');
}
?>