<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html
// Temps de compilation total: 8.293 ms
//

function html_75d29f842218bb188a8ff415c71cabca($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_galerie') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_galerie') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_galerie') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_galerie_secteur') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_secteur_specialise') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_galerie_id')) . ',
	\'secteur\' => ' . argumenter_squelette('galerie') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_galerie_page') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_galerie_page') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_galerie_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_galerie_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:galerie')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_galerie_modele') .
'</legend>
			<p>' .
_T('sarkaspip:cfg_inf_galerie_albums_1_colonne') .
'</p>
			<label>
				<input type="radio" name="album_1_colonne" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['album_1_colonne'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_1_colonne') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="album_1_colonne" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['album_1_colonne'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_2_colonnes') .
'
			</label>
			<br /><br />
			<label>' .
_T('sarkaspip:cfg_lbl_intro_album') .
'</label>
			<input type="text" name="intro_album" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['intro_album'],'200'),true)) .
'" size="3" class="fondl" />
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_galerie_pagination_1') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_1') . ',
	\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',48,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
		
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_galerie_tri_1') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_sens_tri') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_galerie_sens_tri')) . ',
	\'suffixe\' => ' . argumenter_squelette('_1') . ',
	\'label_sens_normal\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_tri_chrono')) . ',
	\'label_sens_inverse\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_tri_antichrono')) . ',
	\'defaut_sens\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',53,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html\',\'html_75d29f842218bb188a8ff415c71cabca\',\'\',56,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Galerie:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_galerie') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_75d29f842218bb188a8ff415c71cabca', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_galerie.html');
}
?>