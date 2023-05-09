<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html
// Temps de compilation total: 5.031 ms
//

function html_b6533a7eb80c3b0a01b5cc1d9922020a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_accueil') .
' -->
<!-- icone=prive/images/sarka-spip-ongletcfg.png -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_accueil',array(lbl_vskel => calcul_version_squelette(), lbl_vspip => spip_version(), lbl_vphp => phpversion())) .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_accueil') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html\',\'html_b6533a7eb80c3b0a01b5cc1d9922020a\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
<!-- onglet=oui -->
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_accueil_intro') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_accueil_intro_0') .
'</p>
		<p><strong>' .
_T('sarkaspip:cfg_inf_accueil_bloc_divers') .
'</strong></p>
		<ul>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_1') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_11') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_16') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_25') .
'</li>
		</ul>
		<p><strong>' .
_T('sarkaspip:cfg_inf_accueil_bloc_layout') .
'</strong></p>
		<ul>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_2') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_3') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_4') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_5') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_23') .
'</li>
		</ul>
		<p><strong>' .
_T('sarkaspip:cfg_inf_accueil_bloc_page') .
'</strong></p>
		<ul>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_6') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_9') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_15') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_17') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_18') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_20') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_7') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_8') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_12') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_24') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_10') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_13') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_21') .
'</li>
		</ul>
		<p><strong>' .
_T('sarkaspip:cfg_inf_accueil_bloc_style') .
'</strong></p>
		<ul>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_14') .
'</li>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_19') .
'</li>
		</ul>
		<p><strong>' .
_T('sarkaspip:cfg_inf_accueil_bloc_gestion') .
'</strong></p>
		<ul>
			<li>' .
_T('sarkaspip:cfg_inf_accueil_intro_22') .
'</li>
		</ul>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_secteur_squelette') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_secteur_specialise') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_squelette_id')) . ',
	\'secteur\' => ' . argumenter_squelette('squelette') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html\',\'html_b6533a7eb80c3b0a01b5cc1d9922020a\',\'\',58,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html\',\'html_b6533a7eb80c3b0a01b5cc1d9922020a\',\'\',61,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Accueil:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_accueil') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b6533a7eb80c3b0a01b5cc1d9922020a', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_accueil.html');
}
?>