<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html
// Temps de compilation total: 7.096 ms
//

function html_3a452e4cf4957ec2eded49619d3c9ba3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_herbier') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_herbier') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_herbier') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html\',\'html_3a452e4cf4957ec2eded49619d3c9ba3\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele'],'liste'),true) == 'liste') ? 'jQuery("#bloc_modele_2").hide();':'')) .
'
		' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele'],'liste'),true) == 'panorama') ? 'jQuery("#bloc_modele_1").hide();':'')) .
'

		jQuery("input[name=\'modele\']").change(function() {
			if (jQuery("input[name=\'modele\']:checked").val() != liste) {
				jQuery("#bloc_modele_1").hide();
				jQuery("#bloc_modele_2").show();
			}
			else {
				jQuery("#bloc_modele_2").hide();
				jQuery("#bloc_modele_1").show();
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
_T('sarkaspip:cfg_lgd_herbier_page') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_herbier_page') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_information_page') . ', array_merge('.var_export($Pile[0],1).',array(\'choix\' => ' . argumenter_squelette('titre_descriptif') . ',
	\'label_titre\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_herbier_titre')) . ',
	\'label_descriptif\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_herbier_descriptif')) . ',
	\'defaut_titre\' => ' . argumenter_squelette(_T('sarkaspip:herbier_sites')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html\',\'html_3a452e4cf4957ec2eded49619d3c9ba3\',\'\',33,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_herbier_modele') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_herbier_modele') .
'</p>
		<label>
			<input type="radio" name="modele" value="liste" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele'],'liste'),true) == 'liste') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_herbier_modele_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="modele" value="panorama" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele'],'liste'),true) == 'panorama') ? 'checked="checked"':'')) .
' disabled="disabled" />
			' .
_T('sarkaspip:cfg_lbl_herbier_modele_2') .
'
		</label>
	</fieldset>

	<fieldset id="bloc_modele_1">
		<legend>' .
_T('sarkaspip:cfg_lgd_herbier_pagination_1') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_1') . ',
	\'defaut_pas\' => ' . argumenter_squelette('5') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html\',\'html_3a452e4cf4957ec2eded49619d3c9ba3\',\'\',57,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset id="bloc_modele_2">
		<legend>' .
_T('sarkaspip:cfg_lgd_herbier_pagination_2') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_2') . ',
	\'defaut_pas\' => ' . argumenter_squelette('10') . ',
	\'defaut_position\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html\',\'html_3a452e4cf4957ec2eded49619d3c9ba3\',\'\',62,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html\',\'html_3a452e4cf4957ec2eded49619d3c9ba3\',\'\',65,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Herbier:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_herbier') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_3a452e4cf4957ec2eded49619d3c9ba3', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_herbier.html');
}
?>