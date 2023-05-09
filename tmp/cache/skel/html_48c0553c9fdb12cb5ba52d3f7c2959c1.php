<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html
// Temps de compilation total: 12.814 ms
//

function html_48c0553c9fdb12cb5ba52d3f7c2959c1($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_auteur') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_auteur') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_auteur') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_articles").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_albums").hide();
		') :
		'') .
'
		jQuery("input[name=\'position_articles\']").change(function() {
			if (jQuery("input[name=\'position_articles\']:checked").val() == 1) {
				jQuery("#bloc_articles").show();
			}
			else {
				jQuery("#bloc_articles").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'position_albums\']").change(function() {
			if (jQuery("input[name=\'position_albums\']:checked").val() == 1) {
				jQuery("#bloc_albums").show();
			}
			else {
				jQuery("#bloc_albums").hide();
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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_auteur_logo')) . ',
	\'choix\' => ' . argumenter_squelette('taille_uniquement') . ',
	\'suffixe\' => ' . argumenter_squelette('_rubrique') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',38,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_articles_publies') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_auteur_articles') .
'</p>
		<label>
			<input type="radio" name="position_articles" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_articles" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_articles">
			<br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_introduction') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',58,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			<br /><br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'choix\' => ' . argumenter_squelette('taille_uniquement') . ',
	\'suffixe\' => ' . argumenter_squelette('_articles') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',60,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_articles') . ',
	\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',61,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_albums_publies') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_auteur_albums') .
'</p>
		<label>
			<input type="radio" name="position_albums" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_albums" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_albums'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_albums">
			<br />
			<p>' .
_T('sarkaspip:cfg_inf_auteur_albums_1_colonne') .
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
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_albums') . ',
	\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',96,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_contact') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_auteur_contact') .
'</p>
		<label>
			<input type="radio" name="position_contact" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_contact'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_contact" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_contact'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html\',\'html_48c0553c9fdb12cb5ba52d3f7c2959c1\',\'\',117,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Auteur:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_auteur') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_48c0553c9fdb12cb5ba52d3f7c2959c1', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_auteur.html');
}
?>