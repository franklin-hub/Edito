<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plan.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plan.html
// Temps de compilation total: 6.815 ms
//

function html_af2573d06b980b165a05618539edf5c3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_plan') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_plan') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_plan') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plan.html\',\'html_af2573d06b980b165a05618539edf5c3\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
_T('sarkaspip:cfg_lgd_plan_pagination') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_plan_pagination') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_plan_sens_tri') .
'</p>
		<label>
			<input type="radio" name="senstri_date" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['senstri_date'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_tri_chrono') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="senstri_date" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['senstri_date'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_tri_antichrono') .
'
		</label>
		<p>' .
_T('sarkaspip:cfg_inf_pagination_bande') .
'</p>
		<label>
			<input type="radio" name="position_pagination" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pagination'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_bande_pos_1') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_pagination" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pagination'],'1'),true) == '2') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_bande_pos_2') .
'
		</label>
		<br />
		<label>
			<input type="radio" name="position_pagination" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['position_pagination'],'1'),true) == '3') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_bande_pos_3') .
'
		</label>
		<br />
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plan.html\',\'html_af2573d06b980b165a05618539edf5c3\',\'\',40,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Plan:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_plan') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_af2573d06b980b165a05618539edf5c3', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_plan.html');
}
?>