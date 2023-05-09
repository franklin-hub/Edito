<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_menus.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_menus.html
// Temps de compilation total: 25.373 ms
//

function html_59064af01ec12e9dd5edffea64c26058($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_menus') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_menus') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_menus') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_menus.html\',\'html_59064af01ec12e9dd5edffea64c26058\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_rubriques'],'1'),true) != '1') ? 'jQuery("#bloc_option2").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_rubriques'],'1'),true) == '0') ? 'jQuery("#bloc_option1").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rubriques'],'1'),true) == '0') ? 'jQuery("#bloc_modele1").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_perso'],'0'),true) == '0') ? 'jQuery("#bloc_liens").hide();':'')) .
'

		jQuery("input[name=\'position_rubriques\']").change(function() {
			if (jQuery("input[name=\'position_rubriques\']:checked").val() == 0) {
				jQuery("#bloc_modele1").hide();
			}
			else {
				jQuery("#bloc_modele1").show();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'modele_rubriques\']").change(function() {
			if (jQuery("input[name=\'modele_rubriques\']:checked").val() == 1) {
				jQuery("#bloc_option1").show();
				jQuery("#bloc_option2").show();
				jQuery("#option_rubriques_0").attr({checked: "checked"});
			}
			else if (jQuery("input[name=\'modele_rubriques\']:checked").val() == 0) {
				jQuery("#bloc_option2").hide();
				jQuery("#bloc_option1").hide();
			}
			else {
				jQuery("#bloc_option1").show();
				jQuery("#bloc_option2").hide();
				jQuery("#option_rubriques_0").attr({checked: "checked"});
			}
			jQuery(this).blur();
		});	
		
		jQuery("input[name=\'position_perso\']").change(function() {
			if (jQuery("input[name=\'position_perso\']:checked").val() == 0) {
				jQuery("#bloc_liens").hide();}
			else {
				jQuery("#bloc_liens").show();}		
		
		jQuery(this).blur();
		});	
	});
//]]>
</script>

<form method="post" action="' .
self() .
'" enctype="multipart/form-data"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_rubriques') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_rubriques') .
'</p>
		<label>
			<input type="radio" name="position_rubriques" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rubriques'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_rubriques" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rubriques'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_rubriques" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rubriques'],'1'),true) == '5') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_5') .
'
		</label>
		<br />
		<div id="bloc_modele1">
			<p>' .
_T('sarkaspip:cfg_inf_menu_modele_rubriques') .
'</p>
			<label>
				<input type="radio" name="modele_rubriques" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_rubriques'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_rubriques_1') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="modele_rubriques" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_rubriques'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_rubriques_2') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="modele_rubriques" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_rubriques'],'1'),true) == '3') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_rubriques_3') .
'
			</label>
			<div id="bloc_option1">
				<p>' .
_T('sarkaspip:cfg_inf_menu_option1') .
'</p>
				<label>
					<input type="radio" name="option_rubriques" id="option_rubriques_0" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['option_rubriques'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_menu_option1_1') .
'
				</label>
				<br />
				<label id="bloc_option2">
					<input type="radio" name="option_rubriques" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['option_rubriques'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_menu_option1_2') .
'
				<br />
				</label>
				<label>
					<input type="radio" name="option_rubriques" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['option_rubriques'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_menu_option1_3') .
'
				</label>
			</div>
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_secteurs') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_secteurs') .
'</p>
		<label>
			<input type="radio" name="position_secteurs" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_secteurs'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_secteurs" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_secteurs'],'0'),true) == '5') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_5') .
'
		</label>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_pages_speciales') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_pages_speciales') .
'</p>
		<label>
			<input type="radio" name="position_pages" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pages'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_pages" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pages'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_pages" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pages'],'1'),true) == '4') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_4') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_pages" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pages'],'1'),true) == '5') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_5') .
'
		</label>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_formulaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_formulaires') .
'</p>
		<label>
			<input type="radio" name="position_formulaires" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_formulaires'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_formulaires" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_formulaires'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_formulaires" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_formulaires'],'1'),true) == '4') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_4') .
'
		</label>
		<br />
		<p>' .
_T('sarkaspip:cfg_inf_lien_plan') .
'</p>
		<label>
			<input type="radio" name="lien_plan" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_plan'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="lien_plan" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_plan'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_langues') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_langues') .
'</p>
		<label>
			<input type="radio" name="position_langues" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_langues'],'4'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_langues" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_langues'],'4'),true) == '4') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_4') .
'
		</label>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_menu_perso') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_menu_perso') .
'</p>
		<label>
			<input type="radio" name="position_perso" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_perso'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_perso" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_perso'],'0'),true) == '5') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_5') .
'
		</label>
		<br />
		<div id="bloc_liens">
		  <p>' .
_T('sarkaspip:cfg_inf_menu_perso_aide') .
'</p>
		  <table>
		    <tr>
		      <th>' .
_T('sarkaspip:cfg_lbl_lien_texte') .
'</th>
		      <th>' .
_T('sarkaspip:cfg_lbl_lien_url') .
'</th>
		    </tr>
		    <tr>
		      <td><input type="text" name="lien_texte_1" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_texte_1']),true)) .
'" size="30" class="fondl" /></td>
		      <td><input type="text" name="lien_url_1" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_url_1']),true)) .
'" size="40" class="fondl" /></td>
		    </tr>
		    <tr>
		      <td><input type="text" name="lien_texte_2" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_texte_2']),true)) .
'" size="30" class="fondl" /></td>
		      <td><input type="text" name="lien_url_2" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_url_2']),true)) .
'" size="40" class="fondl" /></td>
		    </tr>
		    <tr>
		      <td><input type="text" name="lien_texte_3" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_texte_3']),true)) .
'" size="30" class="fondl" /></td>
		      <td><input type="text" name="lien_url_3" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_url_3']),true)) .
'" size="40" class="fondl" /></td>
		    </tr>
		    <tr>
		      <td><input type="text" name="lien_texte_4" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_texte_4']),true)) .
'" size="30" class="fondl" /></td>
		      <td><input type="text" name="lien_url_4" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_url_4']),true)) .
'" size="40" class="fondl" /></td>
		    </tr>
		    <tr>
		      <td><input type="text" name="lien_texte_5" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_texte_5']),true)) .
'" size="30" class="fondl" /></td>
		      <td><input type="text" name="lien_url_5" value="' .
interdire_scripts(entites_html((@$Pile[0]['lien_url_5']),true)) .
'" size="40" class="fondl" /></td>
		    </tr>
		  </table>
		</div>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_menus.html\',\'html_59064af01ec12e9dd5edffea64c26058\',\'\',246,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Menus:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_menus') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_59064af01ec12e9dd5edffea64c26058', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_menus.html');
}
?>