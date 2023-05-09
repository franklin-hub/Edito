<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html
// Temps de compilation total: 28.006 ms
//

function html_d8b2b9092d6e8bbb22f2aa85516385c6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_agenda') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_agenda') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_agenda') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html\',\'html_d8b2b9092d6e8bbb22f2aa85516385c6\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['type'],'1'),true) != '2') ? ' ':''))))!=='' ?
		($t1 . (	'
			jQuery("#select_mois1").prepend(\'<option value=1>' .
	_T('sarkaspip:janvier') .
	'</option>\');
			jQuery("#select_mois1 option:first").attr({selected: "selected"});
			jQuery("#bloc_saison").hide();
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['type_resume'],'oui'),true) != 'oui') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_taille_resume").hide();
		') :
		'') .
'
		jQuery("input[name=\'type\']").change(function() {
			if (jQuery("input[name=\'type\']:checked").val() == 2) {
				jQuery("#bloc_saison").show();
				jQuery("#select_mois1 option:first").remove();
				jQuery("#select_mois1 option:first").attr({selected: "selected"});
			}
			else {
				jQuery("#select_mois1").prepend(\'<option value=1>' .
_T('sarkaspip:janvier') .
'</option>\');
				jQuery("#select_mois1 option:first").attr({selected: "selected"});
				jQuery("#bloc_saison").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'type_resume\']").change(function() {
			if (jQuery("input[name=\'type_resume\']:checked").val() == \'oui\') {
				jQuery("#bloc_taille_resume").show();
			}
			else {
				jQuery("#bloc_taille_resume").hide();
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
_T('sarkaspip:cfg_lgd_agenda_secteur') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_secteur_specialise') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_agenda_id')) . ',
	\'secteur\' => ' . argumenter_squelette('agenda') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html\',\'html_d8b2b9092d6e8bbb22f2aa85516385c6\',\'\',43,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_agenda_page') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_agenda_page') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_agenda_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_agenda_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:agenda')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html\',\'html_d8b2b9092d6e8bbb22f2aa85516385c6\',\'\',49,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_agenda_modele') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_agenda_modele') .
'</p>
		<label>
			<input type="radio" name="type" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['type'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_agenda_modele_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="type" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['type'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_agenda_modele_2') .
'
		</label>
		<div id="bloc_saison">
			<p>' .
_T('sarkaspip:cfg_inf_agenda_mois1') .
'</p>
			<label>' .
_T('sarkaspip:cfg_lbl_agenda_mois1') .
'</label>
			<select name="mois1" id="select_mois1">
				<option value="2"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '2') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:fevrier') .
'</option>
				<option value="3"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '3') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:mars') .
'</option>
				<option value="4"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '4') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:avril') .
'</option>
				<option value="5"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '5') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:mai') .
'</option>
				<option value="6"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '6') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:juin') .
'</option>
				<option value="7"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '7') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:juillet') .
'</option>
				<option value="8"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '8') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:aout') .
'</option>
				<option value="9"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '9') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:septembre') .
'</option>
				<option value="10"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '10') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:octobre') .
'</option>
				<option value="11"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '11') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:novembre') .
'</option>
				<option value="12"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['mois1'],'1'),true) == '12') ? 'selected="selected"':''))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
_T('sarkaspip:decembre') .
'</option>
			</select>
			<br /><br /> 
			<label>' .
_T('sarkaspip:cfg_lbl_pagination_format') .
'</label>
			<select name="format_pagination" id="select_pagination">
				<option value="annee" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['format_pagination'],'annee'),true) == 'annee') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:cfg_itm_pagination_format_1') .
'</option>
				<option value="periode" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['format_pagination'],'annee'),true) == 'periode') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:cfg_itm_pagination_format_2') .
'</option>
				<option value="periode_abregee" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['format_pagination'],'annee'),true) == 'periode_abregee') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:cfg_itm_pagination_format_3') .
'</option>
			</select>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_agenda_tri') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_agenda_sens_tri') .
'</p>
		<label>
			<input type="radio" name="sens_tri" value="normal" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['sens_tri'],'normal'),true) == 'normal') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_tri_chrono') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="sens_tri" value="inverse" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['sens_tri'],'normal'),true) == 'inverse') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_tri_antichrono') .
'
		</label>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_mini_agenda') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_mini_agenda') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_mini_agenda_mois') .
'</p>
		<label>
			<input type="radio" name="affichage_hors_mois" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['affichage_hors_mois'],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_horsmois_oui') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="affichage_hors_mois" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['affichage_hors_mois'],'oui'),true) == 'non') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_horsmois_non') .
'
		</label>
		<br /><br /> 
		<label>' .
_T('sarkaspip:cfg_lbl_mini_agenda_jour1') .
'</label>
		<select name="jour1">
			<option value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '0') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:dimanche') .
'</option>
			<option value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '1') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:lundi') .
'</option>
			<option value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '2') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:mardi') .
'</option>
			<option value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '3') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:mercredi') .
'</option>
			<option value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '4') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:jeudi') .
'</option>
			<option value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '5') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:vendredi') .
'</option>
			<option value="6" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['jour1'],'1'),true) == '6') ? 'selected="selected"':'')) .
'>' .
_T('sarkaspip:samedi') .
'</option>
		</select>
		<br /> 
		<p>' .
_T('sarkaspip:cfg_inf_mini_agenda_resume_1') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_mini_agenda_resume_2') .
'</p>
		<label>
			<input type="radio" name="type_resume" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['type_resume'],'oui'),true) == 'oui') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="type_resume" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['type_resume'],'oui'),true) == 'non') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_taille_resume">
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_maxmois_resume') .
'</label>
			<input type="text" name="max_mois_resume" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_mois_resume'],'6'),true)) .
'" size="2" class="fondl" />
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_resume') .
'</label>
			<input type="text" name="taille_resume" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_resume'],'5'),true)) .
'" size="4" class="fondl" />
			<p>' .
_T('sarkaspip:cfg_inf_mini_agenda_format') .
'</p>
			<label>
				<input type="radio" name="format_resume" value="d-m H:i" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['format_resume'],'d-m H:i'),true) == 'd-m H:i') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_format_dmhi') .
'
			</label>
			<label>
				<input type="radio" name="format_resume" value="d-m" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['format_resume'],'d-m H:i'),true) == 'd-m') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_format_dm') .
'
			</label>
		</div>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html\',\'html_d8b2b9092d6e8bbb22f2aa85516385c6\',\'\',166,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Agenda:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_agenda') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_d8b2b9092d6e8bbb22f2aa85516385c6', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_agenda.html');
}
?>