<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_logo.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_logo.html
// Temps de compilation total: 5.455 ms
//

function html_c1946533c250e5247f044958c4c91fe6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['choix']),true) != 'taille_uniquement') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>
	<input type="radio" name="logo_rubrique' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="oui" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'logo_rubrique' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_oui') .
	'
</label>
<label>
	<input type="radio" name="logo_rubrique' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="non" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'logo_rubrique' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'oui'),true) == 'non') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_non') .
	'
</label>
<br /><br />
')) :
		'') .
'
<label>' .
_T('sarkaspip:cfg_lbl_taille_logo') .
'</label>
<input type="text" name="taille_logo' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0][(	'taille_logo' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'150'),true)) .
'" size="3" class="fondl" />
');

	return analyse_resultat_skel('html_c1946533c250e5247f044958c4c91fe6', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_logo.html');
}
?>