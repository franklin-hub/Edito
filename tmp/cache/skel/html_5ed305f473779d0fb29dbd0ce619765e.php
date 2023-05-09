<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_introduction.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_introduction.html
// Temps de compilation total: 1.842 ms
//

function html_5ed305f473779d0fb29dbd0ce619765e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<label>' .
_T('sarkaspip:cfg_lbl_intro_article') .
'</label>
<input type="text" name="intro_article" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['intro_article'],'300'),true)) .
'" size="3" class="fondl" />
<br />
<p>' .
_T('sarkaspip:cfg_inf_lire_suite') .
'</p>
<label>
	<input type="radio" name="avec_lire_suite" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_lire_suite'],'non'),true) == 'oui') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_oui') .
'
</label>
<label>
	<input type="radio" name="avec_lire_suite" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_lire_suite'],'non'),true) == 'non') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_non') .
'
</label>
');

	return analyse_resultat_skel('html_5ed305f473779d0fb29dbd0ce619765e', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_introduction.html');
}
?>