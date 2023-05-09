<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_effet_image.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_effet_image.html
// Temps de compilation total: 11.787 ms
//

function html_d18c87b1b081b645f244507fa139ac91($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label id="effet_aucun">
	<input type="radio" name="mode_galerie' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_effet_aucun') .
'
<br /></label>
<label id="effet_fancybox">
	<input type="radio" name="mode_galerie' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '5') ? 'checked="checked"':'')) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("FANCYBOX", "est_actif")) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'disabled="disabled"') :
		'') .
' />
	' .
_T('sarkaspip:cfg_lbl_effet_fancybox') .
'
<br /></label>
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'portfolio|album') ? ' ':''))))!=='' ?
		($t1 . (	'
<label id="effet_fancybox_diapo">
	<input type="radio" name="mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="6" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '6') ? 'checked="checked"':'')) .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("FANCYBOX", "est_actif")) ?'' :' '))))!=='' ?
			(' ' . $t2 . 'disabled="disabled"') :
			'') .
	' />
	' .
	_T('sarkaspip:cfg_lbl_effet_fancybox_diapo') .
	'
<br /></label>
')) :
		'') .
'
<label id="effet_nyroceros">
	<input type="radio" name="mode_galerie' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '1') ? 'checked="checked"':'')) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("NYRO", "est_actif")) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'disabled="disabled"') :
		'') .
' />
	' .
_T('sarkaspip:cfg_lbl_effet_nyroceros') .
'
<br /></label>
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'portfolio|album') ? ' ':''))))!=='' ?
		($t1 . (	'
<label id="effet_nyroceros_diapo">
	<input type="radio" name="mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '2') ? 'checked="checked"':'')) .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("NYRO", "est_actif")) ?'' :' '))))!=='' ?
			(' ' . $t2 . 'disabled="disabled"') :
			'') .
	' />
	' .
	_T('sarkaspip:cfg_lbl_effet_nyroceros_diapo') .
	'
<br /></label>
')) :
		'') .
'
<label id="effet_thickbox">
	<input type="radio" name="mode_galerie' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '3') ? 'checked="checked"':'')) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("THICKBOX", "est_actif")) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'disabled="disabled"') :
		'') .
' />
	' .
_T('sarkaspip:cfg_lbl_effet_thickbox') .
'
<br /></label>
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['choix']),true) == 'portfolio') ? ' ':''))))!=='' ?
		($t1 . (	'
<label id="effet_smoothgallery">
	<input type="radio" name="mode_galerie' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="4" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'mode_galerie' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'0'),true) == '4') ? 'checked="checked"':'')) .
	' disabled="disabled" />
	' .
	_T('sarkaspip:cfg_lbl_effet_smoothgallery') .
	'
<br /></label>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_d18c87b1b081b645f244507fa139ac91', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_effet_image.html');
}
?>