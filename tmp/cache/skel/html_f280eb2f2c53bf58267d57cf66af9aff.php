<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/inc_badges.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/inc_badges.html
// Temps de compilation total: 4.503 ms
//

function html_f280eb2f2c53bf58267d57cf66af9aff($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="noisette_badges" class="noisette">
	<div class="badges">
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/badge_xhtml',null,false) == 'on') ? ' ':''))))!=='' ?
		($t1 . (	'
			<a id="logo_xhtml" href="http://validator.w3.org/check?uri=referer" title="' .
	_T('sarkaspip:verifier_xhtml') .
	'">&nbsp;</a>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/badge_rss',null,false) == 'on') ? ' ':''))))!=='' ?
		($t1 . (	'
			<a id="logo_rss" href="./spip.php?page=backend" title="' .
	_T('sarkaspip:syndiquer_site') .
	'">&nbsp;</a>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/badge_sarka',null,false) == 'on') ? ' ':''))))!=='' ?
		($t1 . (	'
			<a id="logo_sarkaspip" href="http://www.sarka-spip.net" title="' .
	ucfirst(_T('sarkaspip:squelette')) .
	'">&nbsp;</a>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/badge_spip',null,false) == 'on') ? ' ':''))))!=='' ?
		($t1 . (	'
			<a id="logo_spip" href="http://spip.net" title="' .
	_T('sarkaspip:site_realise_avec_spip') .
	'">&nbsp;</a>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_noisettes/badge_perso',null,false) == 'on') ? ' ':''))))!=='' ?
		($t1 . (	'
			<a id="logo_perso"' .
	(($t2 = strval(interdire_scripts(lire_config('sarkaspip_noisettes/lien_badge_perso',null,false))))!=='' ?
			(' href="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(lire_config('sarkaspip_noisettes/infobulle_badge_perso',null,false))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>&nbsp;</a>
		')) :
		'') .
'
		<br class="nettoyeur" />
	</div>
</div>
');

	return analyse_resultat_skel('html_f280eb2f2c53bf58267d57cf66af9aff', $Cache, $page, 'plugins/sarkaspip_31/noisettes/inc_badges.html');
}
?>