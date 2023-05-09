<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_information_page.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_information_page.html
// Temps de compilation total: 6.094 ms
//

function html_4d657ce206e86724f3130ce2a8170fcd($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(titre)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	interdire_scripts(entites_html((@$Pile[0]['label_titre']),true)) .
	'</label><br />
<input type="text" name="titre' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" ' .
	(($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0][(	'titre' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(ucfirst(entites_html((@$Pile[0]['defaut_titre']),true)))),true))))!=='' ?
			('value="' . $t2 . '" ') :
			'') .
	'size="50" class="fondl" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(descriptif)') ? ' ':''))))!=='' ?
		($t1 . (	'
<p>' .
	interdire_scripts(entites_html((@$Pile[0]['label_descriptif']),true)) .
	'</p>
' .
	(($t2 = strval(interdire_scripts((entites_html((@$Pile[0][(	'descriptif' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) ? ' ':''))))!=='' ?
			($t2 . (	'	
	' .
		vide($Pile['vars']['description'] = interdire_scripts(entites_html((@$Pile[0][(	'descriptif' .
				interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true))) .
		'
')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((entites_html((@$Pile[0][(	'descriptif' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) ? '':' '))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['description'] = interdire_scripts(entites_html((@$Pile[0]['defaut_descriptif']),true))) .
		'
')) :
			'') .
	'
<label>
	<textarea name="descriptif' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" rows="4" cols="40" style="width:100%;">' .
	(is_array($a = ($Pile["vars"])) ? $a['description'] : "") .
	'</textarea>
</label>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_4d657ce206e86724f3130ce2a8170fcd', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_information_page.html');
}
?>