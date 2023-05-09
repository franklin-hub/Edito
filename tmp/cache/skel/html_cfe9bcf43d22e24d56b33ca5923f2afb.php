<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/pied/inc_pied_outils.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/pied/inc_pied_outils.html
// Temps de compilation total: 27.701 ms
//

function html_cfe9bcf43d22e24d56b33ca5923f2afb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/lien_plan','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['ligne_2'] = (	'<a' .
		(($t3 = strval(interdire_scripts(generer_url_public('plan','tri=par_rubrique'))))!=='' ?
				(' href="' . $t3 . '"') :
				'') .
		'>' .
		_T('sarkaspip:plan_site') .
		'</a>')) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/version_spip','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = (	'<a href="http://www.spip.net" title="' .
		_T('sarkaspip:kezako_spip') .
		'">SPIP&nbsp;' .
		spip_version() .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/version_sarka','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = (	'<a href="http://www.sarka-spip.net" title="' .
		_T('sarkaspip:kezako_sarkaspip') .
		'">Sarka-SPIP&nbsp;' .
		calcul_version_squelette() .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/collectif_sarka','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = (	'<a href="http://www.sarka-spip.net" title="' .
		_T('sarkaspip:kezako_collectif') .
		'">' .
		_T('sarkaspip:realisation_squelette') .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/licence_squelette','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = (	'<a href="http://www.gnu.org/copyleft/gpl.html" title="' .
		_T('sarkaspip:kezako_gpl') .
		'">' .
		_T('sarkaspip:licence_gpl') .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/lien_squelette','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['nom_fichier'] = interdire_scripts(basename(entites_html((@$Pile[0]['squelette']),true)))) .
	'
	' .
	vide($Pile['vars']['item'] = (	'<a' .
		(($t3 = strval(interdire_scripts(entites_html((@$Pile[0]['squelette']),true))))!=='' ?
				(' href="' . $t3 . '"') :
				'') .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['nom_fichier'] : "")))!=='' ?
				((	' title="' .
			_T('sarkaspip:kezako_squelette') .
			'&nbsp;') . $t3 . '"') :
				'') .
		' rel="nofollow">' .
		ucfirst(_T('sarkaspip:squelette')) .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/outils_perso',null,false)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = interdire_scripts(trim(ptobr(propre(lire_config('sarkaspip_pied/outils_perso',null,false)))))) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_pied/ancre_haut_page','1',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['item'] = (	'<a href="#header" title="' .
		_T('sarkaspip:kezako_haut_page') .
		'" rel="nofollow">' .
		_T('sarkaspip:ancre_haut_page') .
		'</a>')) .
	'
	' .
	((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")  ?
			(' ' . (	'
		' .
		vide($Pile['vars']['ligne_2'] = (($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
					($t4 . '&nbsp;|&nbsp;') :
					'')) .
		'
	')) :
			'') .
	'
	' .
	vide($Pile['vars']['ligne_2'] = concat((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : ""),(is_array($a = ($Pile["vars"])) ? $a['item'] : ""))) .
	'
')) :
		'') .
'


' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['ligne_2'] : "")))!=='' ?
		('<div class="credits">' . $t1 . '</div>') :
		'') .
'
');

	return analyse_resultat_skel('html_cfe9bcf43d22e24d56b33ca5923f2afb', $Cache, $page, 'plugins/sarkaspip_31/noisettes/pied/inc_pied_outils.html');
}
?>