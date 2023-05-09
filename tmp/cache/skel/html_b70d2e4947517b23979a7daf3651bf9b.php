<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plugins.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plugins.html
// Temps de compilation total: 19.809 ms
//

function html_b70d2e4947517b23979a7daf3651bf9b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_plugins') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_plugins') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_plugins') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plugins.html\',\'html_b70d2e4947517b23979a7daf3651bf9b\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_plugins_info') .
'</legend>
		' .
vide($Pile['vars']['nb_plugins'] = '0') .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("BOUTONSTEXTE", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	vide($Pile['vars']['nb_plugins'] = plus((is_array($a = ($Pile["vars"])) ? $a['nb_plugins'] : ""),'1')) .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((filtre_info_plugin_dist("NYRO", "est_actif") ? ' ':''))))!=='' ?
		($t1 . (	'	
			' .
	vide($Pile['vars']['nb_plugins'] = plus((is_array($a = ($Pile["vars"])) ? $a['nb_plugins'] : ""),'1')) .
	'
		')) :
		'') .
'
		' .
(((is_array($a = ($Pile["vars"])) ? $a['nb_plugins'] : "") == '0')  ?
		(' ' . (	'<p>' .
	_T('sarkaspip:cfg_inf_plugins_0') .
	'</p>')) :
		'') .
'
		' .
(((is_array($a = ($Pile["vars"])) ? $a['nb_plugins'] : "") == '1')  ?
		(' ' . (	'<p>' .
	_T('sarkaspip:cfg_inf_plugins_1') .
	'</p>')) :
		'') .
'
		' .
(((is_array($a = ($Pile["vars"])) ? $a['nb_plugins'] : "") > '1')  ?
		(' ' . (	'<p>' .
	_T('sarkaspip:cfg_inf_plugins_n') .
	'</p>')) :
		'') .
'
	</fieldset>

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("BOUTONSTEXTE", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	<fieldset>
		<legend>' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("BOUTONSTEXTE", "nom")))))!=='' ?
			((	_T('sarkaspip:cfg_lgd_plugin') .
		'&nbsp;') . $t2) :
			'') .
	'</legend>
		' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("BOUTONSTEXTE", "nom")))))!=='' ?
			((	'<p>' .
		_T('sarkaspip:cfg_inf_plugins_config') .
		'&nbsp;&#171;&nbsp;') . $t2 . '&nbsp;&#187;</p>') :
			'') .
	'
		<label>
			<input type="radio" name="config_boutonstexte" value="sarkaspip" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_boutonstexte'],'defaut'),true) == 'sarkaspip') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_sarkaspip') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="config_boutonstexte" value="defaut" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_boutonstexte'],'defaut'),true) == 'defaut') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_defaut') .
	'
		</label>
	</fieldset>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("FANCYBOX", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'	
	<fieldset>
		<legend>' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("FANCYBOX", "nom")))))!=='' ?
			((	_T('sarkaspip:cfg_lgd_plugin') .
		'&nbsp;') . $t2) :
			'') .
	'</legend>
		' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("FANCYBOX", "nom")))))!=='' ?
			((	'<p>' .
		_T('sarkaspip:cfg_inf_plugins_config') .
		'&nbsp;&#171;&nbsp;') . $t2 . '&nbsp;&#187;</p>') :
			'') .
	'
		<label>
			<input type="radio" name="config_fancybox" value="sarkaspip" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_fancybox'],'defaut'),true) == 'sarkaspip') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_sarkaspip') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="config_fancybox" value="defaut" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_fancybox'],'defaut'),true) == 'defaut') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_defaut') .
	'
		</label>
	</fieldset>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("NYRO", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'	
	<fieldset>
		<legend>' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("NYRO", "nom")))))!=='' ?
			((	_T('sarkaspip:cfg_lgd_plugin') .
		'&nbsp;') . $t2) :
			'') .
	'</legend>
		' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("NYRO", "nom")))))!=='' ?
			((	'<p>' .
		_T('sarkaspip:cfg_inf_plugins_config') .
		'&nbsp;&#171;&nbsp;') . $t2 . '&nbsp;&#187;</p>') :
			'') .
	'
		<label>
			<input type="radio" name="config_nyroceros" value="sarkaspip" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_nyroceros'],'defaut'),true) == 'sarkaspip') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_sarkaspip') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="config_nyroceros" value="defaut" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_nyroceros'],'defaut'),true) == 'defaut') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_defaut') .
	'
		</label>
	</fieldset>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SOCIALTAGS", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'	
	<fieldset>
		<legend>' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("SOCIALTAGS", "nom")))))!=='' ?
			((	_T('sarkaspip:cfg_lgd_plugin') .
		'&nbsp;') . $t2) :
			'') .
	'</legend>
		' .
	(($t2 = strval(interdire_scripts(extraire_multi(filtre_info_plugin_dist("SOCIALTAGS", "nom")))))!=='' ?
			((	'<p>' .
		_T('sarkaspip:cfg_inf_plugins_config') .
		'&nbsp;&#171;&nbsp;') . $t2 . '&nbsp;&#187;</p>') :
			'') .
	'
		<label>
			<input type="radio" name="config_socialtags" value="sarkaspip" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_socialtags'],'defaut'),true) == 'sarkaspip') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_sarkaspip') .
	'
		</label>
		<br />
		<label>
			<input type="radio" name="config_socialtags" value="defaut" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['config_socialtags'],'defaut'),true) == 'defaut') ? 'checked="checked"':'')) .
	' />
			' .
	_T('sarkaspip:cfg_lbl_config_defaut') .
	'
		</label>
	</fieldset>
')) :
		'') .
'
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plugins.html\',\'html_b70d2e4947517b23979a7daf3651bf9b\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Plugins:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_plugins') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b70d2e4947517b23979a7daf3651bf9b', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plugins.html');
}
?>