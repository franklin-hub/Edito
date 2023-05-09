<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html
// Temps de compilation total: 9.818 ms
//

function html_0ab11e67360e282824d13fc3554cb9ac($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_rubrique') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_rubrique') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_rubrique') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['position_articles'],'1'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_pas_articles").hide();
		') :
		'') .
'
		jQuery("input[name=\'position_articles\']").change(function() {
			if (jQuery("input[name=\'position_articles\']:checked").val() == 1) {
				jQuery("#bloc_pas_articles").show();
			}
			else {
				jQuery("#bloc_pas_articles").hide();
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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_rubrique_logo')) . ',
	\'choix\' => ' . argumenter_squelette('taille_uniquement') . ',
	\'suffixe\' => ' . argumenter_squelette('_rubrique') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_documents_joints') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_descriptif_document') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',33,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_images_jointes') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_effet_image') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_effet_image')) . ',
	\'choix\' => ' . argumenter_squelette('portfolio') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',38,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_rubriques_filles') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_rubrique_filles') .
'</p>
		<label>
			<input type="radio" name="avec_filles" value="oui" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_filles'],'non'),true) == 'oui') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="avec_filles" value="non" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_filles'],'non'),true) == 'non') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_articles_publies') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_rubrique_articles') .
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
		<div id="bloc_pas_articles">
			<br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_introduction') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',74,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			<br /><br />
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'choix\' => ' . argumenter_squelette('taille_uniquement') . ',
	\'suffixe\' => ' . argumenter_squelette('_articles') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',76,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',77,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html\',\'html_0ab11e67360e282824d13fc3554cb9ac\',\'\',81,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Rubrique:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_rubrique') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0ab11e67360e282824d13fc3554cb9ac', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_rubrique.html');
}
?>