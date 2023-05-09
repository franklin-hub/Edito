<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_modele_exclusif.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_modele_exclusif.html
// Temps de compilation total: 3.857 ms
//

function html_14392a7ab8593144c121482c017872e4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label>
	<input type="radio" name="exclusif' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'exclusif' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'non'),true) == 'oui') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_oui') .
'
</label>
<label>
	<input type="radio" name="exclusif' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'exclusif' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'non'),true) == 'non') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_non') .
'
</label>
');

	return analyse_resultat_skel('html_14392a7ab8593144c121482c017872e4', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_modele_exclusif.html');
}
?>