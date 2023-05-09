<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_cartouche.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_cartouche.html
// Temps de compilation total: 7.411 ms
//

function html_4656aec428d4ecd12f7dde07670decf9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication_popularite']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label>
	<input type="radio" name="avec_popularite" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_popularite'],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_oui') .
'
</label>
<label>
	<input type="radio" name="avec_popularite" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_popularite'],'oui'),true) == 'non') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_non') .
'
</label>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("NOTATION", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
<br />
' .
	(($t2 = strval(interdire_scripts(entites_html((@$Pile[0]['explication_notation']),true))))!=='' ?
			('<p>' . $t2 . '</p>') :
			'') .
	'
<label>
	<input type="radio" name="position_notation" value="0" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_notation'],'0'),true) == '0') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_non') .
	'
</label><br />
<label>
	<input type="radio" name="position_notation" value="1" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_notation'],'0'),true) == '1') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_cartouche') .
	'
</label><br />
<label>
	<input type="radio" name="position_notation" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_notation'],'0'),true) == '2') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_fin_description') .
	'
</label>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SOCIALTAGS", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
<br />
' .
	(($t2 = strval(interdire_scripts(entites_html((@$Pile[0]['explication_socialtags']),true))))!=='' ?
			('<p>' . $t2 . '</p>') :
			'') .
	'
<label>
	<input type="radio" name="position_socialtags" value="0" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_socialtags'],'0'),true) == '0') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_non') .
	'
</label><br />
<label>
	<input type="radio" name="position_socialtags" value="1" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_socialtags'],'0'),true) == '1') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_cartouche') .
	'
</label><br />
<label>
	<input type="radio" name="position_socialtags" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_socialtags'],'0'),true) == '2') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bloc_fin_description') .
	'
</label>
')) :
		''));

	return analyse_resultat_skel('html_4656aec428d4ecd12f7dde07670decf9', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_cartouche.html');
}
?>