<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html
// Temps de compilation total: 13.874 ms
//

function html_d594f632b7a8b0e1cc06b556ae6a6a76($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_sommaire') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_sommaire') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_sommaire') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html\',\'html_d594f632b7a8b0e1cc06b556ae6a6a76\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles_recents'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_max_articles").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums_recents'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_max_albums").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['article_edito'],'0'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_titre_edito").hide();
		') :
		'') .
'
		jQuery("input[name=\'position_articles_recents\']").change(function() {
			if (jQuery("input[name=\'position_articles_recents\']:checked").val() == 1) {
				jQuery("#bloc_max_articles").show();
			}
			else {
				jQuery("#bloc_max_articles").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'position_albums_recents\']").change(function() {
			if (jQuery("input[name=\'position_albums_recents\']:checked").val() == 1) {
				jQuery("#bloc_max_albums").show();
			}
			else {
				jQuery("#bloc_max_albums").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("#select_article").change(function() {
			if (jQuery("#select_article option:selected").val() == 0) {
				jQuery("#bloc_titre_edito").hide();
			}
			else {
				jQuery("#bloc_titre_edito").show();
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
_T('sarkaspip:cfg_lgd_edito') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_article_specialise') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_edito_id')) . ',
	\'article\' => ' . argumenter_squelette('edito') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html\',\'html_d594f632b7a8b0e1cc06b556ae6a6a76\',\'\',48,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

		<div id="bloc_titre_edito">
			<p>' .
_T('sarkaspip:cfg_inf_titre_edito') .
'</p>
			<label>
				<input type="radio" name="titre_edito" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['titre_edito'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_oui') .
'
			</label>
			<label>
				<input type="radio" name="titre_edito" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['titre_edito'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_non') .
'
			</label>
		</div>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_sommaire_une') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_sommaire_une') .
'</p>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_sommaire_secteurs') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_sommaire_secteurs') .
'</p>
		<label>
			<input type="radio" name="position_secteurs" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_secteurs'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_secteurs" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_secteurs'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_sommaire_articles') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_sommaire_articles') .
'</p>
		<label>
			<input type="radio" name="position_articles_recents" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles_recents'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_articles_recents" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles_recents'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_max_articles">
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_max_articles_recents') .
'</label>
			<input type="text" name="max_articles_recents" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_articles_recents'],'5'),true)) .
'" size="3" class="fondl" />
			<br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_introduction') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html\',\'html_d594f632b7a8b0e1cc06b556ae6a6a76\',\'\',100,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_sommaire_sans_logo')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html\',\'html_d594f632b7a8b0e1cc06b556ae6a6a76\',\'\',101,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_sommaire_albums') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_sommaire_albums') .
'</p>
		<label>
			<input type="radio" name="position_albums_recents" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums_recents'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_albums_recents" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums_recents'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_max_albums">
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_max_albums_recents') .
'</label>
			<input type="text" name="max_albums_recents" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_albums_recents'],'5'),true)) .
'" size="3" class="fondl" />
			<p>' .
_T('sarkaspip:cfg_inf_sommaire_albums_1_colonne') .
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
		</div>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html\',\'html_d594f632b7a8b0e1cc06b556ae6a6a76\',\'\',136,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Sommaire:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_sommaire') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_d594f632b7a8b0e1cc06b556ae6a6a76', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_sommaire.html');
}
?>