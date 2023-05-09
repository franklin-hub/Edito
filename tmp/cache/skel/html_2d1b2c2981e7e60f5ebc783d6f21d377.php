<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_pagination.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_pagination.html
// Temps de compilation total: 10.141 ms
//

function html_2d1b2c2981e7e60f5ebc783d6f21d377($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['choix']),true) == 'sans_position')) ?'' :' '))))!=='' ?
		($t1 . (	'
<p>' .
	_T('sarkaspip:cfg_inf_pagination_1') .
	'</p>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['choix']),true) == 'sans_position')) ?' ' :''))))!=='' ?
		($t1 . (	'
<p>' .
	_T('sarkaspip:cfg_inf_pagination_2') .
	'</p>
')) :
		'') .
'
<label>
	<input type="radio" name="modele_pagination' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="" ' .
(($t1 = strval(interdire_scripts((entites_html((@$Pile[0][(	'modele_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) ? '':' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
	' .
_T('sarkaspip:cfg_lbl_pagination_1') .
'
</label>
<br />
<label>
	<input type="radio" name="modele_pagination' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="page" ' .
interdire_scripts(((entites_html((@$Pile[0][(	'modele_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) == 'page') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_pagination_2') .
'
</label>
<br />
<label>
	<input type="radio" name="modele_pagination' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="precedent_suivant" ' .
interdire_scripts(((entites_html((@$Pile[0][(	'modele_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) == 'precedent_suivant') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_pagination_3') .
'
</label>
<br />
<label>
	<input type="radio" name="modele_pagination' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="page_precedent_suivant" ' .
interdire_scripts(((entites_html((@$Pile[0][(	'modele_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true) == 'page_precedent_suivant') ? 'checked="checked"':'')) .
' />
	' .
_T('sarkaspip:cfg_lbl_pagination_4') .
'
</label>
<br /><br />
<label>' .
_T('sarkaspip:cfg_lbl_pas_pagination') .
'</label>
<input type="text" name="pas_pagination' .
interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
'" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0][(	'pas_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_pas']),true))),true)) .
'" size="3" class="fondl" />
<br />
' .
(($t1 = strval(interdire_scripts((((entites_html((@$Pile[0]['choix']),true) == 'sans_position')) ?'' :' '))))!=='' ?
		($t1 . (	'
<p>' .
	_T('sarkaspip:cfg_inf_pagination_bande') .
	'</p>
<label>
	<input type="radio" name="position_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="1" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'position_pagination' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_position']),true))),true) == '1') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bande_pos_1') .
	'
</label>
<br />
<label>
	<input type="radio" name="position_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'position_pagination' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_position']),true))),true) == '2') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bande_pos_2') .
	'
</label>
<br />
<label>
	<input type="radio" name="position_pagination' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="3" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'position_pagination' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['defaut_position']),true))),true) == '3') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_bande_pos_3') .
	'
</label>
<br />
')) :
		''));

	return analyse_resultat_skel('html_2d1b2c2981e7e60f5ebc783d6f21d377', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_pagination.html');
}
?>