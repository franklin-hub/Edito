<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_descriptif_document.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_descriptif_document.html
// Temps de compilation total: 1.411 ms
//

function html_e83593e5f149221d800fdecf7caee13b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<p>' .
_T('sarkaspip:cfg_inf_descriptif_doc') .
'</p>
<label>
	<input type="radio" name="avec_descriptif" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_descriptif'],'non'),true) == 'oui') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_oui') .
'
</label>
<label>
	<input type="radio" name="avec_descriptif" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_descriptif'],'non'),true) == 'non') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_non') .
'
</label>
');

	return analyse_resultat_skel('html_e83593e5f149221d800fdecf7caee13b', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_descriptif_document.html');
}
?>