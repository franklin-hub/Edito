<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html
// Temps de compilation total: 65.948 ms
//

function html_cc9264e6363b3bb5ff8baac652bb6715($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_noisettes') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_noisettes') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_noisettes') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_breves'],'2'),true) != '2') ? 'jQuery("#bloc_intro_breve").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_publications'],'0'),true) == '0') ? 'jQuery("#bloc_max_publications").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_nuage'],'0'),true) == '0') ? 'jQuery("#bloc_nuage").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaires'],'0'),true) == '0') ? 'jQuery("#bloc_intro_commentaires").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_messages'],'0'),true) == '0') ? 'jQuery("#bloc_intro_messages").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_sites'],'2'),true) != '1') ? 'jQuery("#bloc_max_site").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_herbier'],'0'),true) == '0') ? 'jQuery("#bloc_type_herbier").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_2'],'0'),true) == '0') ? 'jQuery("#bloc_stats_2_compo,#bloc_stats_2_max_hasard,#bloc_stats_2_max_top").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_2'],'0'),true) != '0') ? (	interdire_scripts(((entites_html(sinon(@$Pile[0]['composition_stats_2'],'3'),true) == '1') ? 'jQuery("#bloc_stats_2_max_hasard").hide();':'')) .
	'
			' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['composition_stats_2'],'3'),true) == '2') ? 'jQuery("#bloc_stats_2_max_top").hide();':''))):'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_badges'],'1'),true) == '0') ? 'jQuery("#bloc_badges_liste").hide();jQuery("#bloc_badges_perso").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_badges'],'1'),true) != '0') ? (	interdire_scripts(((entites_html((@$Pile[0]['badge_perso']),true) != 'on') ? 'jQuery("#bloc_badges_perso").hide();':'')) .
	'
		'):'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_annonce'],'0'),true) == '0') ? 'jQuery("#bloc_annonce_id").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rainette'],'0'),true) == '0') ? 'jQuery("#bloc_rainette_ville").hide();':'')) .
'

		jQuery("input[name=\'liste_breves\']").change(function() {
			if (jQuery("input[name=\'liste_breves\']:checked").val() == 2)
				jQuery("#bloc_intro_breve").show();
			else
				jQuery("#bloc_intro_breve").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_publications\']").change(function() {
			if (jQuery("input[name=\'position_publications\']:checked").val() != 0)
				jQuery("#bloc_max_publications").show();
			else
				jQuery("#bloc_max_publications").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_nuage\']").change(function() {
			if (jQuery("input[name=\'position_nuage\']:checked").val() != 0)
				jQuery("#bloc_nuage").show();
			else
				jQuery("#bloc_nuage").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_commentaires\']").change(function() {
			if (jQuery("input[name=\'position_commentaires\']:checked").val() != 0)
				jQuery("#bloc_intro_commentaires").show();
			else
				jQuery("#bloc_intro_commentaires").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_messages\']").change(function() {
			if (jQuery("input[name=\'position_messages\']:checked").val() != 0)
				jQuery("#bloc_intro_messages").show();
			else
				jQuery("#bloc_intro_messages").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'liste_sites\']").change(function() {
			if (jQuery("input[name=\'liste_sites\']:checked").val() == 1)
				jQuery("#bloc_max_site").show();
			else
				jQuery("#bloc_max_site").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_herbier\']").change(function() {
			if (jQuery("input[name=\'position_herbier\']:checked").val() != 0) {
				jQuery("#bloc_type_herbier").show();
			}
			else {
				jQuery("#bloc_type_herbier").hide();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_stats_2\']").change(function() {
			if (jQuery("input[name=\'position_stats_2\']:checked").val() != 0) {
				jQuery("#bloc_stats_2_compo").show();
				if (jQuery("input[name=\'composition_stats_2\']:checked").val() == 1) {
					jQuery("#bloc_stats_2_max_top").show();
					jQuery("#bloc_stats_2_max_hasard").hide();
				}
				else if (jQuery("input[name=\'composition_stats_2\']:checked").val() == 2) {
					jQuery("#bloc_stats_2_max_top").hide();
					jQuery("#bloc_stats_2_max_hasard").show();
				}
				else {
					jQuery("#bloc_stats_2_max_top").show();
					jQuery("#bloc_stats_2_max_hasard").show();
				}
			}	
			else
				jQuery("#bloc_stats_2_compo,#bloc_stats_2_max_hasard,#bloc_stats_2_max_top").hide();
			jQuery(this).blur();
		});	

		jQuery("input[name=\'composition_stats_2\']").change(function() {
			if (jQuery("input[name=\'composition_stats_2\']:checked").val() == 1) {
				jQuery("#bloc_stats_2_max_top").show();
				jQuery("#bloc_stats_2_max_hasard").hide();
			}
			else if (jQuery("input[name=\'composition_stats_2\']:checked").val() == 2) {
				jQuery("#bloc_stats_2_max_top").hide();
				jQuery("#bloc_stats_2_max_hasard").show();
			}
			else {
				jQuery("#bloc_stats_2_max_top").show();
				jQuery("#bloc_stats_2_max_hasard").show();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_badges\']").change(function() {
			if (jQuery("input[name=\'position_badges\']:checked").val() != 0)
				jQuery("#bloc_badges_liste").show();
			else
				jQuery("#bloc_badges_liste").hide();
			jQuery(this).blur();
		});	
		jQuery("input[name=\'badge_perso\']").change(function() {
			if (jQuery("input[name=\'badge_perso\']:checked").val() == \'on\') {
				jQuery("#bloc_badges_perso").show();
			}
			else {
				jQuery("#bloc_badges_perso").hide();
			}
			jQuery(this).blur();
		});	

		jQuery("input[name=\'position_annonce\']").change(function() {
			if (jQuery("input[name=\'position_annonce\']:checked").val() != 0) {
				jQuery("#bloc_annonce_id").show();
			}
			else {
				jQuery("#bloc_annonce_id").hide();
				jQuery("#select_article option:first").attr({selected: "selected"});
			}
			jQuery(this).blur();
		});	
		
		jQuery("input[name=\'position_rainette\']").change(function() {
			if (jQuery("input[name=\'position_rainette\']:checked").val() != 0)
				jQuery("#bloc_rainette_ville").show();
			else
				jQuery("#bloc_rainette_ville").hide();
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
_T('sarkaspip:cfg_lgd_inc_navigation') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_navigation') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('10') . ',
	\'suffixe\' => ' . argumenter_squelette('_navigation') . ',
	\'choix\' => ' . argumenter_squelette('sans_position') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',166,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_filtre') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_filtre') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('10') . ',
	\'suffixe\' => ' . argumenter_squelette('_filtre') . ',
	\'choix\' => ' . argumenter_squelette('sans_position') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',177,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_publications') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_publications') .
'</p>
		<label>
			<input type="radio" name="position_publications" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_publications'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_publications" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_publications'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_publications" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_publications'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_max_publications">
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_max_publications') .
'</label>
			<input type="text" name="max_publications" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_publications'],'5'),true)) .
'" size="2" class="fondl" />
		<br />
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_nuage') .
'</legend>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("NUAGE", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
		<p>' .
	_T('sarkaspip:cfg_inf_inc_nuage') .
	'</p>
		<label>
			<input type="radio" name="position_nuage" value="0" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_nuage'],'0'),true) == '0') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_0') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="position_nuage" value="1" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_nuage'],'0'),true) == '1') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_1') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="position_nuage" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_nuage'],'0'),true) == '2') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_2') .
	'
		</label>
		<div id="bloc_nuage">
			<br />
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_recherche/groupes_recherche',null,false)) ?' ' :''))))!=='' ?
			($t2 . (	'
			<label>' .
		_T('sarkaspip:cfg_lbl_max_nuage') .
		'</label>
			<input type="text" name="max_nuage" value="' .
		interdire_scripts(entites_html(sinon(@$Pile[0]['max_nuage'],'50'),true)) .
		'" size="3" class="fondl" />
			<br /><br />
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_groupes_mots') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_nuage') . ',
	\'label\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_groupes_mots')) . ',
	\'id_groupe\' => ' . argumenter_squelette(interdire_scripts(lire_config('sarkaspip_recherche/groupes_recherche',array('0' => '0'),false))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',47,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(((lire_config('sarkaspip_recherche/groupes_recherche',null,false)) ?'' :' '))))!=='' ?
			($t2 . (	'
			<p>' .
		_T('sarkaspip:cfg_inf_aucun_groupe_nuage') .
		'</p>
		')) :
			'') .
	'
		</div>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("NUAGE", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['plugin'] = 'Nuage') .
	'<p class="avertissement">' .
	_T('sarkaspip:cfg_inf_plugin_inactif',array(lbl_plugin => (is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))) .
	'</p>
')) :
		'') .
'
	</fieldset>

	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_commentaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_commentaires') .
'</p>
		<label>
			<input type="radio" name="position_commentaires" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaires'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_commentaires" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaires'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_commentaires" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaires'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_intro_commentaires">
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_max_commentaires') .
'</label>
			<input type="text" name="max_commentaires" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_commentaires'],'5'),true)) .
'" size="2" class="fondl" />
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_intro_commentaires') .
'</label>
			<input type="text" name="intro_commentaire" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['intro_commentaire'],'100'),true)) .
'" size="3" class="fondl" />
		<br />
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_messages') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_messages') .
'</p>
		<label>
			<input type="radio" name="position_messages" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_messages'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_messages" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_messages'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_messages" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_messages'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_intro_messages">
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_max_messages') .
'</label>
			<input type="text" name="max_messages" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_messages'],'5'),true)) .
'" size="2" class="fondl" />
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_intro_messages') .
'</label>
			<input type="text" name="intro_message" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['intro_message'],'100'),true)) .
'" size="3" class="fondl" />
		<br />
		</div>
	</fieldset>

	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_breves') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_breves') .
'</p>
		<label>
			<input type="radio" name="liste_breves" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_breves'],'2'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_breves_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="liste_breves" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_breves'],'2'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_breves_2') .
'
		</label>
		<br /><br />
		<label>' .
_T('sarkaspip:cfg_lbl_max_breves') .
'</label>
		<input type="text" name="max_breves" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_breves'],'5'),true)) .
'" size="2" class="fondl" />
		<div id="bloc_intro_breve">
			<label>' .
_T('sarkaspip:cfg_lbl_intro_breve') .
'</label>
			<input type="text" name="intro_breve" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['intro_breve'],'100'),true)) .
'" size="3" class="fondl" />
		</div>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_sites') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_sites') .
'</p>
		<label>
			<input type="radio" name="liste_sites" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_sites'],'2'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_sites_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="liste_sites" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_sites'],'2'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_sites_2') .
'
		</label>
		<br /><br />
		<div id="bloc_max_site">
			<label>' .
_T('sarkaspip:cfg_lbl_max_sites') .
'</label>
			<input type="text" name="max_sites" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_sites'],'5'),true)) .
'" size="2" class="fondl" />
		</div>
		<label>' .
_T('sarkaspip:cfg_lbl_max_syndic') .
'</label>
		<input type="text" name="max_syndic" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_syndic'],'5'),true)) .
'" size="2" class="fondl" />
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_herbier') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_herbier_pos') .
'</p>
		<label>
			<input type="radio" name="position_herbier" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_herbier'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_herbier" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_herbier'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_herbier" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_herbier'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_type_herbier">
		<p>' .
_T('sarkaspip:cfg_inf_inc_herbier_type') .
'</p>
		<label>
			<input type="radio" name="liste_herbier" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_herbier'],'2'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_herbier_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="liste_herbier" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['liste_herbier'],'2'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_herbier_2') .
'
		</label>
		<br /><br />
			<label>' .
_T('sarkaspip:cfg_lbl_max_herbier') .
'</label>
			<input type="text" name="max_herbier" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_herbier'],'5'),true)) .
'" size="2" class="fondl" />
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_recherche') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_rechspip_pos') .
'</p>
		<label>
			<input type="radio" name="position_rechspip" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rechspip'],'3'),true) == '3') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_3') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_rechspip" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rechspip'],'3'),true) == '4') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_7') .
'
		</label>
		<br />
		<br />
		<p>' .
_T('sarkaspip:cfg_inf_inc_recherche_pos') .
'</p>
		<label>
			<input type="radio" name="position_recherche" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_recherche'],'2'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_recherche" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_recherche'],'2'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<br />
		<p>' .
_T('sarkaspip:cfg_inf_inc_recherche_ext') .
'</p>
		<label>
			<input type="radio" name="moteur_externe" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="moteur_externe" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="moteur_externe" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_2') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="moteur_externe" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '3') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_3') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="moteur_externe" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '4') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_4') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="moteur_externe" value="5" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['moteur_externe'],'1'),true) == '5') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_recherche_ext_5') .
'
		</label>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_statsite') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_statsite_pos') .
'</p>
		<label>
			<input type="radio" name="position_stats_1" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_1'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_stats_1" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_1'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_stats_1" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_1'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_stathit') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_stathit_pos') .
'</p>
		<label>
			<input type="radio" name="position_stats_2" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_2'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_stats_2" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_2'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_stats_2" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_stats_2'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_stats_2_compo">
			<br />
			<p>' .
_T('sarkaspip:cfg_inf_inc_stathit_compo') .
'</p>
			<label>
				<input type="radio" name="composition_stats_2" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['composition_stats_2'],'3'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_stathit_compo_1') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="composition_stats_2" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['composition_stats_2'],'3'),true) == '2') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_stathit_compo_2') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="composition_stats_2" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['composition_stats_2'],'3'),true) == '3') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_stathit_compo_3') .
'
			</label>
			<br />
			<br />
		</div>
		<div id="bloc_stats_2_max_top">
			<label>' .
_T('sarkaspip:cfg_lbl_stathit_max_top') .
'</label>
			<input type="text" name="max_articles_top" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_articles_top'],'5'),true)) .
'" size="2" class="fondl" />
			<br />
		</div>
		<div id="bloc_stats_2_max_hasard">
			<label>' .
_T('sarkaspip:cfg_lbl_stathit_max_hasard') .
'</label>
			<input type="text" name="max_articles_hasard" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['max_articles_hasard'],'5'),true)) .
'" size="2" class="fondl" />
			<br />
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_badges') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_badges_pos') .
'</p>
		<label>
			<input type="radio" name="position_badges" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_badges'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_badges" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_badges'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_badges" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_badges'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<br />
		<div id="bloc_badges_liste">
			<p>' .
_T('sarkaspip:cfg_inf_inc_badges_liste') .
'</p>
			<label>
				<input type="checkbox" name="badge_xhtml" ' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['badge_xhtml']),true) == 'on') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_badges_xhtml') .
'
			</label>
			<br />
			<label>
				<input type="checkbox" name="badge_rss" ' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['badge_rss']),true) == 'on') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_badges_rss') .
'
			</label>
			<br />
			<label>
				<input type="checkbox" name="badge_sarka" ' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['badge_sarka']),true) == 'on') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_badges_sarka') .
'
			</label>
			<br />
			<label>
				<input type="checkbox" name="badge_spip" ' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['badge_spip']),true) == 'on') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_badges_spip') .
'
			</label>
			<br />
			<label>
				<input type="checkbox" name="badge_perso" ' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['badge_perso']),true) == 'on') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' />
				' .
_T('sarkaspip:cfg_lbl_inc_badges_perso') .
'
			</label>
			<br />
			<ul id="bloc_badges_perso">
				<li><label>' .
_T('sarkaspip:cfg_lbl_badge_perso_lien') .
'
						<input type="text" name="lien_badge_perso" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['lien_badge_perso'],'http://'),true)) .
'" size="30" class="fondl" />
					</label></li>
				<li><label>' .
_T('sarkaspip:cfg_lbl_badge_perso_infobulle') .
'
						<input type="text" name="infobulle_badge_perso" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['infobulle_badge_perso'],''),true)) .
'" size="30" class="fondl" />
					</label></li>
			</ul>
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_annonce') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_inc_annonce_pos') .
'</p>
		<label>
			<input type="radio" name="position_annonce" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_annonce'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_0') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_annonce" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_annonce'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_annonce" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_annonce'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_inc_position_2') .
'
		</label>
		<br />
		<div id="bloc_annonce_id">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_article_specialise') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_annonce_id')) . ',
	\'article\' => ' . argumenter_squelette('annonce') . ',
	\'multiple\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',569,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</fieldset>

	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_inc_rainette') .
'</legend>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("RAINETTE", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
		<p>' .
	_T('sarkaspip:cfg_inf_inc_rainette_pos') .
	'</p>
		<label>
			<input type="radio" name="position_rainette" value="0" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rainette'],'0'),true) == '0') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_0') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="position_rainette" value="1" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rainette'],'0'),true) == '1') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_1') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="position_rainette" value="2" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['position_rainette'],'0'),true) == '2') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_inc_position_2') .
	'
		</label>
		<br />
		<div id="bloc_rainette_ville">
			<p>' .
	_T('sarkaspip:cfg_inf_inc_rainette_ville') .
	'</p>
			<label>' .
	_T('sarkaspip:cfg_lbl_rainette_ville') .
	'</label>
			<input type="text" name="rainette_ville" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['rainette_ville'],'FRXX0076'),true)) .
	'" size="10" class="fondl" /><br />
			<label>' .
	_T('sarkaspip:cfg_lbl_rainette_nb_prevision') .
	'</label>
			<input type="text" name="rainette_prevision" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['rainette_prevision'],'7'),true)) .
	'" size="3" class="fondl" />
		</div>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("RAINETTE", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['plugin'] = 'Rainette') .
	'<p class="avertissement">' .
	_T('sarkaspip:cfg_inf_plugin_inactif',array(lbl_plugin => (is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))) .
	'</p>
')) :
		'') .
'
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html\',\'html_cc9264e6363b3bb5ff8baac652bb6715\',\'\',584,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Noisettes:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_noisettes') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_cc9264e6363b3bb5ff8baac652bb6715', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_noisettes.html');
}
?>