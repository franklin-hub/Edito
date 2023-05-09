<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_flux_rss.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_flux_rss.html
// Temps de compilation total: 4.513 ms
//

function html_c4bed7e256ba3da2908b3cb7b370ad5e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<p>' .
interdire_scripts(entites_html((@$Pile[0]['explication']),true)) .
'</p>
<label>
	<input type="radio" name="rss' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'rss' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_oui') .
'
</label>
<label>
	<input type="radio" name="rss' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'rss' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'oui'),true) == 'non') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_non') .
'
</label>
<div id="bloc_rss' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'">
	<br />
	<label>' .
_T('sarkaspip:cfg_lbl_rss_nombre') .
'</label>
	<input type="text" name="nb' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0][(	'nb' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'10'),true)) .
'" size="2" class="fondl" />
	<br />
	<label>' .
_T('sarkaspip:cfg_lbl_rss_age') .
'</label>
	<input type="text" name="age' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0][(	'age' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'3'),true)) .
'" size="2" class="fondl" />
</div>
');

	return analyse_resultat_skel('html_c4bed7e256ba3da2908b3cb7b370ad5e', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_flux_rss.html');
}
?>