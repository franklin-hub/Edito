<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_pied.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_pied.html
// Temps de compilation total: 16.876 ms
//

function html_b9fadfb4fa1b4ac1994ed557513773ab($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_pied') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_pied') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_pied') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_pied.html\',\'html_b9fadfb4fa1b4ac1994ed557513773ab\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pied'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#affiche_pied").hide();
		') :
		'') .
'
		jQuery("input[name=\'position_pied\']").change(function() {
			if (jQuery("input[name=\'position_pied\']:checked").val() == 1) {
				jQuery("#affiche_pied").show();
			}
			else {
				jQuery("#affiche_pied").hide();
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
_T('sarkaspip:cfg_lgd_pied_affichage') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_pied_affichage') .
'</p>
		<label>
			<input type="radio" name="position_pied" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pied'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_pied" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pied'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
	</fieldset>		
	
	<div id="affiche_pied">
		<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_pied_copyright') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_copyright_site') .
'</p>
		<label>
			<input type="radio" name="copyright_site" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['copyright_site'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="copyright_site" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['copyright_site'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
		<div id="bloc_licence_site">
			<p>' .
_T('sarkaspip:cfg_inf_licence_site') .
'</p>
			<label>
				<textarea name="licence_site" rows="4" cols="40" style="width:100%;">' .
interdire_scripts(entites_html((@$Pile[0]['licence_site']),true)) .
'</textarea>
			</label>
			<br />
		</div>
		<br />
		</fieldset>

		<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_pied_version') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_version_spip') .
'</p>
		<label>
			<input type="radio" name="version_spip" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['version_spip'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="version_spip" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['version_spip'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
		<p>' .
_T('sarkaspip:cfg_inf_version_sarka') .
'</p>
		<label>
			<input type="radio" name="version_sarka" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['version_sarka'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="version_sarka" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['version_sarka'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
		</fieldset>	

		<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_pied_liens') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_lien_plan') .
'</p>
		<label>
			<input type="radio" name="lien_plan" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_plan'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="lien_plan" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_plan'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />

		<p>' .
_T('sarkaspip:cfg_inf_collectif_sarka') .
'</p>
		<label>
			<input type="radio" name="collectif_sarka" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['collectif_sarka'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="collectif_sarka" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['collectif_sarka'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />

		<p>' .
_T('sarkaspip:cfg_inf_licence_squelette') .
'</p>
		<label>
			<input type="radio" name="licence_squelette" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['licence_squelette'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="licence_squelette" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['licence_squelette'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />

		<p>' .
_T('sarkaspip:cfg_inf_lien_squelette') .
'</p>
		<label>
			<input type="radio" name="lien_squelette" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_squelette'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="lien_squelette" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['lien_squelette'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />

		<p>' .
_T('sarkaspip:cfg_inf_outils_perso') .
'</p>
		<label>
			<textarea name="outils_perso" rows="4" cols="40" style="width:100%;">' .
interdire_scripts(entites_html((@$Pile[0]['outils_perso']),true)) .
'</textarea>
		</label>
		<br />

		<p>' .
_T('sarkaspip:cfg_inf_ancre_hautpage') .
'</p>
		<label>
			<input type="radio" name="ancre_haut_page" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['ancre_haut_page'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="ancre_haut_page" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['ancre_haut_page'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
		</fieldset>
	</div>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_pied.html\',\'html_b9fadfb4fa1b4ac1994ed557513773ab\',\'\',153,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>


' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Bandeau et Pied:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_pied') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b9fadfb4fa1b4ac1994ed557513773ab', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_pied.html');
}
?>