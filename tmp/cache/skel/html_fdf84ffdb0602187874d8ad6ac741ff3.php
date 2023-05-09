<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_sens_tri.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_sens_tri.html
// Temps de compilation total: 3.510 ms
//

function html_fdf84ffdb0602187874d8ad6ac741ff3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
<label>
	<input type="radio" name="sens_tri' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'sens_tri' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_sens']),true))),true) == '0') ? 'checked="checked"':'')) .
' />
	' .
interdire_scripts(entites_html((@$Pile[0]['label_sens_normal']),true)) .
'
</label>
<br />
<label>
	<input type="radio" name="sens_tri' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0][(	'sens_tri' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_sens']),true))),true) == '1') ? 'checked="checked"':'')) .
' />
	' .
interdire_scripts(entites_html((@$Pile[0]['label_sens_inverse']),true)) .
'
</label>
');

	return analyse_resultat_skel('html_fdf84ffdb0602187874d8ad6ac741ff3', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_sens_tri.html');
}
?>