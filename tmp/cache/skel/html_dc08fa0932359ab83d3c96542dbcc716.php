<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html
// Temps de compilation total: 18.210 ms
//

function html_dc08fa0932359ab83d3c96542dbcc716($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_album') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_album') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_album') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_carrousel'],'1'),true) == '1') ? 'jQuery("#bloc_modele_3").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_carrousel'],'1'),true) != '1') ? 'jQuery("#bloc_modele_2").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_carrousel'],'1'),true) == '0') ? 'jQuery("#bloc_modele_1").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['afficher_zoom'],'oui'),true) == 'oui') ? 'jQuery("#effet_fancybox_diapo").hide();jQuery("#effet_nyroceros_diapo").hide();':'')) .
'

		jQuery("input[name=\'position_carrousel\']").change(function() {
			if (jQuery("input[name=\'position_carrousel\']:checked").val() == 0) {
				jQuery("#bloc_modele_1").hide();
			}
			else {
				jQuery("#bloc_modele_1").show();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'modele_carrousel\']").change(function() {
			if (jQuery("input[name=\'modele_carrousel\']:checked").val() == 1) {
				jQuery("#bloc_modele_3").hide();
				jQuery("#bloc_modele_2").show();
			}
			else {
				jQuery("#bloc_modele_2").hide();
				jQuery("#bloc_modele_3").show();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'afficher_zoom\']").change(function() {
			if (jQuery("input[name=\'afficher_zoom\']:checked").val() == "oui") {
				jQuery("#effet_fancybox_diapo").hide();
				jQuery("#effet_nyroceros_diapo").hide();
			}
			else {
				jQuery("#effet_fancybox_diapo").show();
				jQuery("#effet_nyroceros_diapo").show();
			}
			jQuery(this).blur();
		});	
	});
//]]>
</script>

<form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_description') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_album_sans_logo')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',56,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_cartouche') . ', array_merge('.var_export($Pile[0],1).',array(\'explication_popularite\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_album_popularite')) . ',
	\'explication_notation\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_album_notation')) . ',
	\'explication_socialtags\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_album_socialtags')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',57,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_documents_joints') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_descriptif_document') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',62,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_album_carrousel') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_album_carrousel_position') .
'</p>
		<label>
			<input type="radio" name="position_carrousel" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_carrousel'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_carrousel_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_carrousel" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_carrousel'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_carrousel_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_carrousel" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_carrousel'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_carrousel_position_2') .
'
		</label>
		<br />
		<div id="bloc_modele_1">
			<p>' .
_T('sarkaspip:cfg_inf_album_carrousel_modele') .
'</p>
			<label>
				<input type="radio" name="modele_carrousel" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_carrousel'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_carrousel_modele_1') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="modele_carrousel" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_carrousel'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_carrousel_modele_2') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="modele_carrousel" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_carrousel'],'1'),true) == '3') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_carrousel_modele_3') .
'
			</label>
			<div id="bloc_modele_2">
				<br />
				<label>' .
_T('sarkaspip:cfg_lbl_carrousel_taille') .
'</label>
				<input type="text" name="taille_carrousel" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_carrousel'],'10'),true)) .
'" size="2" class="fondl" />
			</div>
			<div id="bloc_modele_3">
				' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_carrousel') . ',
	\'defaut_pas\' => ' . argumenter_squelette('20') . ',
	\'choix\' => ' . argumenter_squelette('sans_position') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',111,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				<p>' .
_T('sarkaspip:cfg_inf_album_carrousel_hover') .
'</p>
				<label>
					<input type="radio" name="survol_carrousel" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['survol_carrousel'],'non'),true) == 'oui') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_oui') .
'
				</label>
				<label>
					<input type="radio" name="survol_carrousel" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['survol_carrousel'],'non'),true) == 'non') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_non') .
'
				</label>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_album_zoom') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_album_zoom') .
'</p>
		<label>
			<input type="radio" name="afficher_zoom" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['afficher_zoom'],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="afficher_zoom" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['afficher_zoom'],'oui'),true) == 'non') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_effet_image') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_album_zoom_effet')) . ',
	\'choix\' => ' . argumenter_squelette('album') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',140,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_album_exif') .
'</legend>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("PHOTO_INFOS", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
		<p>' .
	_T('sarkaspip:cfg_inf_album_zoom_exif') .
	'</p>
		<label>
			<input type="radio" name="afficher_exif" value="oui" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['afficher_exif'],'non'),true) == 'oui') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_oui') .
	'
		</label>
		<label>
			<input type="radio" name="afficher_exif" value="non" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['afficher_exif'],'non'),true) == 'non') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_non') .
	'
		</label>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("PHOTO_INFOS", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['plugin'] = 'Metadonn&eacute;es photo') .
	'<p class="avertissement">' .
	_T('sarkaspip:cfg_inf_plugin_inactif',array(lbl_plugin => (is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))) .
	'</p>
')) :
		'') .
'
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_commentaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_album_commentaires') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('20') . ',
	\'defaut_position\' => ' . argumenter_squelette('2') . ',
	\'suffixe\' => ' . argumenter_squelette('_commentaires') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',155,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html\',\'html_dc08fa0932359ab83d3c96542dbcc716\',\'\',158,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Album:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_album') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_dc08fa0932359ab83d3c96542dbcc716', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_album.html');
}
?>