<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_boutons.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_boutons.html
// Temps de compilation total: 7.805 ms
//

function html_230775380f07bf2ed9e5403131191546($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div style="text-align: right; margin-right:3px;">
' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['choix']),true) == 'valider_seul')) ?'' :' '))))!=='' ?
		($t1 . (	'
	<input type="reset" class="fondo" title="' .
	_T('sarkaspip:bulle_bouton_effacer') .
	'" value="' .
	_T('sarkaspip:bouton_effacer') .
	'" />
')) :
		'') .
'
	<input type="submit" name="_cfg_ok" class="fondo" title="' .
_T('sarkaspip:bulle_bouton_valider') .
'" value="' .
_T('sarkaspip:bouton_valider') .
'" />
' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['choix']),true) == 'valider_seul')) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts((((eval('return '.'_SARKASPIP_DEBUG_CFG_BOUTON'.';') == 'oui')) ?' ' :''))))!=='' ?
			($t2 . (	'
		<input type="submit" name="_cfg_delete" class="fondo" title="' .
		_T('sarkaspip:bulle_bouton_supprimer') .
		'" value="' .
		_T('sarkaspip:bouton_supprimer') .
		'" />
	')) :
			'') .
	'
')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_230775380f07bf2ed9e5403131191546', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_boutons.html');
}
?>