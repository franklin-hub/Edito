<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html
// Temps de compilation total: 7.316 ms
//

function html_173393c3d73a7d0d7d9da9db5fa742be($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_recherche') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_recherche') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_recherche') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
_T('sarkaspip:cfg_lgd_recherche_presentation') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_recherche_information') .
'</p>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_recherche_choix_groupe') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_groupes_mots') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_recherche') . ',
	\'label\' => ' . argumenter_squelette((	' ' .
	_T('sarkaspip:cfg_lbl_groupes_mots_recherche') .
	' ')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_recherche_pagination') .
'</legend>
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_article') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_article') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<br />
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_commentaire') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_commentaire') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',25,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<br />
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_breve') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_breve') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<br />
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_rubrique') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_rubrique') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',31,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<br />
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_mot') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_mot') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',34,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<br />
		<p><b>' .
_T('sarkaspip:cfg_inf_recherche_site') .
'</b></p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'suffixe\' => ' . argumenter_squelette('_recherche_site') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html\',\'html_173393c3d73a7d0d7d9da9db5fa742be\',\'\',40,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Recherche:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_recherche') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_173393c3d73a7d0d7d9da9db5fa742be', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_recherche.html');
}
?>