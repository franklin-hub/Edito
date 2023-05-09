<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html
// Temps de compilation total: 7.478 ms
//

function html_68b6d59361bb959b121a131de14e6074($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_backend') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_backend') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_backend') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html\',\'html_68b6d59361bb959b121a131de14e6074\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['rss_articles'],'oui'),true) != 'oui') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_rss_articles").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['rss_albums'],'oui'),true) != 'oui') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_rss_albums").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['rss_evenements'],'oui'),true) != 'oui') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#bloc_rss_evenements").hide();
		') :
		'') .
'
		jQuery("input[name=\'rss_articles\']").change(function() {
			if (jQuery("input[name=\'rss_articles\']:checked").val() == \'oui\') {
				jQuery("#bloc_rss_articles").show();
			}
			else {
				jQuery("#bloc_rss_articles").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'rss_albums\']").change(function() {
			if (jQuery("input[name=\'rss_albums\']:checked").val() == \'oui\') {
				jQuery("#bloc_rss_albums").show();
			}
			else {
				jQuery("#bloc_rss_albums").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'rss_evenements\']").change(function() {
			if (jQuery("input[name=\'rss_evenements\']:checked").val() == \'oui\') {
				jQuery("#bloc_rss_evenements").show();
			}
			else {
				jQuery("#bloc_rss_evenements").hide();
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
_T('sarkaspip:cfg_lgd_rss_articles') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_flux_rss') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_rss_articles')) . ',
	\'suffixe\' => ' . argumenter_squelette('_articles') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html\',\'html_68b6d59361bb959b121a131de14e6074\',\'\',48,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_rss_albums') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_flux_rss') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_rss_albums')) . ',
	\'suffixe\' => ' . argumenter_squelette('_albums') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html\',\'html_68b6d59361bb959b121a131de14e6074\',\'\',53,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_rss_evenements') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_flux_rss') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_rss_evenements')) . ',
	\'suffixe\' => ' . argumenter_squelette('_evenements') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html\',\'html_68b6d59361bb959b121a131de14e6074\',\'\',58,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html\',\'html_68b6d59361bb959b121a131de14e6074\',\'\',61,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Backend:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_backend') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_68b6d59361bb959b121a131de14e6074', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_backend.html');
}
?>