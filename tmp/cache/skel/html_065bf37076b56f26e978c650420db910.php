<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   _auteurs
 */ 

/* BOUCLE auteurs  */

 function BOUCLE_auteurshtml_065bf37076b56f26e978c650420db910(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = '';
	$in = array();
	if (!(is_array($a = ((is_array($a = ($Pile["vars"])) ? $a['critere_statut'] : "")))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	static $table = 'auteurs';
	static $id = '_auteurs';
	static $from = array('auteurs' => 'spip_auteurs');
	static $type = array();
	static $groupby = array();
	static $select = array("auteurs.statut",
		"auteurs.nom",
		"auteurs.email",
		"auteurs.id_auteur");
	static $orderby = array('auteurs.statut', 'auteurs.nom');
	$where = 
			array(sql_in('auteurs.statut',sql_quote($in)));
	static $join = array();
	static $limit = '';
	static $having = 
			array();
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html','html_065bf37076b56f26e978c650420db910','_auteurs',70,$GLOBALS['spip_lang']));
	if ($result) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result)) {

		$t0 .= (
'
				' .
(((is_array($a = ($Pile["vars"])) ? $a['groupe_statut'] : "") != interdire_scripts($Pile[$SP]['statut']))  ?
		(' ' . (	'
					' .
	((is_array($a = ($Pile["vars"])) ? $a['groupe_en_cours'] : "")  ?
			(' ' . '</optgroup>') :
			'') .
	'
					<optgroup style="font-weight: strong;"' .
	(($t2 = strval(interdire_scripts(ucfirst(libelle_statut($Pile[$SP]['statut'])))))!=='' ?
			(' label="' . $t2 . '"') :
			'') .
	'>
					' .
	vide($Pile['vars']['groupe_statut'] = interdire_scripts($Pile[$SP]['statut'])) .
	'
					' .
	vide($Pile['vars']['groupe_en_cours'] = '1') .
	'
				')) :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(($Pile[$SP]['email'] ? ' ':''))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect))))!=='' ?
			((	'<option style="background: #FFFFF; font-weight: normal;" value="' .
		$Pile[$SP]['id_auteur'] .
		'"' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['auteur_contact'],'0'),true) == $Pile[$SP]['id_auteur']) ? 'selected="selected"':''))))!=='' ?
				(' ' . $t3) :
				'') .
		'>') . $t2 . '</option>') :
			'') .
	'
				')) :
		'') .
'
			');
	}
	@sql_free($result);
	}
	return $t0;
}


//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html
// Temps de compilation total: 43.087 ms
//

function html_065bf37076b56f26e978c650420db910($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_formulaires') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_formulaires') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_formulaires') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['plugin_contact'],'0'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_contact_1").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['plugin_contact'],'0'),true) == '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_contact_0").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_extrait'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_pas_extrait").hide();
		') :
		'') .
'
		jQuery("input[name=\'plugin_contact\']").change(function() {
			if (jQuery("input[name=\'plugin_contact\']:checked").val() == 0) {
				jQuery("#bloc_contact_1").hide();
				jQuery("#bloc_contact_0").show();
			}
			else {
				jQuery("#bloc_contact_0").hide();
				jQuery("#bloc_contact_1").show();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'position_extrait\']").change(function() {
			if (jQuery("input[name=\'position_extrait\']:checked").val() == 1) {
				jQuery("#bloc_pas_extrait").show();
			}
			else {
				jQuery("#bloc_pas_extrait").hide();
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
_T('sarkaspip:cfg_lgd_form_contact') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_contact') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_form_contact_plugin') .
'</p>
		<label>
			<input type="radio" name="plugin_contact" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['plugin_contact'],'0'),true) == '1') ? 'checked="checked"':'')) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("CONTACT", "est_actif")) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'disabled="disabled"') :
		'') .
' />
			' .
_T('sarkaspip:cfg_lbl_contact_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="plugin_contact" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['plugin_contact'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_contact_0') .
'
		</label>
		<div id="bloc_contact_0">
			<p>' .
_T('sarkaspip:cfg_inf_form_contact_plugin_0') .
'</p>
			' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_CONFIG_AUTORISATION_CONTACT'.';') == '0minirezo') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars']['critere_statut'] = array('0' => '0minirezo')))) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_CONFIG_AUTORISATION_CONTACT'.';') == '1comite') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars']['critere_statut'] = array('0' => '0minirezo', '1' => '1comite')))) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_CONFIG_AUTORISATION_CONTACT'.';') == '6forum') ? ' ':''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars']['critere_statut'] = array('0' => '0minirezo', '1' => '1comite', '2' => '6forum')))) :
		'') .
'
			' .
(($t1 = BOUCLE_auteurshtml_065bf37076b56f26e978c650420db910($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
				<label>' .
		_T('sarkaspip:cfg_lbl_liste_contacts') .
		'</label>
				<select name="auteur_contact">
					<option value="0"' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['auteur_contact'],'0'),true) == '0') ? 'selected="selected"':''))))!=='' ?
				(' ' . $t3) :
				'') .
		'>--</option>
					' .
		vide($Pile['vars']['groupe_statut'] = 'aucun') .
		vide($Pile['vars']['groupe_en_cours'] = '0')) . $t1 . '
					</optgroup>
				</select>
			') :
		'') .
'
			<br /><br />
		</div>
		<div id="bloc_contact_1">
			<p>' .
_T('sarkaspip:cfg_inf_form_contact_plugin_1') .
'</p>
		</div>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_contact') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:contacter_site')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',95,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_commentaire') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_commentaire') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_article_commente') .
'</p>
		<label>
			<input type="radio" name="position_extrait" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_extrait'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_extrait" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_extrait'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<div id="bloc_pas_extrait">
			<br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_introduction') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',118,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			<br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_extrait_sans_logo')) . ',
	\'suffixe\' => ' . argumenter_squelette('_extrait') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',120,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
		<br /><p>' .
_T('sarkaspip:cfg_inf_commentaire_repondu') .
'</p>
		<label>
			<input type="radio" name="position_commentaire" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaire'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="position_commentaire" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_commentaire'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
	</fieldset>
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_dialogue') .
'</legend>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SHOUTBOX", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'	
		<p>' .
	_T('sarkaspip:cfg_inf_form_dialogue') .
	'</p>
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_dialogue') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:dialoguer_site')) . ',
	\'defaut_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:dialogue_descriptif')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',97,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SHOUTBOX", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars']['plugin'] = 'Shoutbox') .
	'<p class="avertissement">' .
	_T('sarkaspip:cfg_inf_plugin_inactif',array(lbl_plugin => (is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))) .
	'</p>
')) :
		'') .
'
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_lettre') .
'</legend>
' .
vide($Pile['vars']['plugin'] = '') .
'
' .
(($t1 = strval(interdire_scripts(((((((((filtre_info_plugin_dist("SPIPLISTES", "est_actif")) OR (interdire_scripts(filtre_info_plugin_dist("CLEVERMAIL", "est_actif")))) ?' ' :'')) OR (interdire_scripts(filtre_info_plugin_dist("ABOMAILMANS", "est_actif")))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("ABOMAILMANS", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		vide($Pile['vars']['plugin'] = interdire_scripts(extraire_multi(filtre_info_plugin_dist("ABOMAILMANS", "nom")))) .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("ABOMAILMANS", "est_actif")) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts(((filtre_info_plugin_dist("CLEVERMAIL", "est_actif")) ?' ' :''))))!=='' ?
				($t3 . (	'
			' .
			vide($Pile['vars']['plugin'] = interdire_scripts(extraire_multi(filtre_info_plugin_dist("CLEVERMAIL", "nom")))) .
			'
		')) :
				'') .
		'
		' .
		(($t3 = strval(interdire_scripts(((filtre_info_plugin_dist("CLEVERMAIL", "est_actif")) ?'' :' '))))!=='' ?
				($t3 . (	'
			' .
			(($t4 = strval(interdire_scripts(((filtre_info_plugin_dist("SPIPLISTES", "est_actif")) ?' ' :''))))!=='' ?
					($t4 . (	'
				' .
				vide($Pile['vars']['plugin'] = interdire_scripts(extraire_multi(filtre_info_plugin_dist("SPIPLISTES", "nom")))) .
				'
			')) :
					'') .
			'
		')) :
				'') .
		'
	')) :
			'') .
	'
		<p>' .
	_T('sarkaspip:cfg_inf_form_lettre') .
	'</p>
		<p>' .
	_T('sarkaspip:cfg_inf_form_lettre_plugin',array(plugin => (is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))) .
	'</p>
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_lettre') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:inscrire_a_newsletter')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',149,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'	
' .
(!((is_array($a = ($Pile["vars"])) ? $a['plugin'] : ""))  ?
		(' ' . (	'
		' .
	vide($Pile['vars']['plugins'] = '<ul><li>&#171; Abomailmans &#187;</li><li>&#171; Clevermail &#187;</li><li>&#171; SPIP-Listes &#187;</li>') .
	'<p class="avertissement">' .
	_T('sarkaspip:cfg_inf_plugins_inactifs',array(lbl_plugins => (is_array($a = ($Pile["vars"])) ? $a['plugins'] : ""))) .
	'</p>
')) :
		'') .
'
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_inscription') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_inscription') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_inscription') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:inscrire_au_site')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',151,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_referencement') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_referencement') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_referencement') . ',
	\'choix\' => ' . argumenter_squelette('descriptif') . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',157,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_login1') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_login1') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_login1') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:acceder_espace_membre')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',163,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_form_login2') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_form_login2') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_login2') . ',
	\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_form_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:acceder_espace_prive')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',169,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html\',\'html_065bf37076b56f26e978c650420db910\',\'\',172,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Formulaires:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_formulaires') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_065bf37076b56f26e978c650420db910', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_formulaires.html');
}
?>