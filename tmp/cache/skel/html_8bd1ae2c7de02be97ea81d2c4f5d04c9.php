<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html
// Temps de compilation total: 3.851 ms
//

function html_8bd1ae2c7de02be97ea81d2c4f5d04c9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_site') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_site') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_site') .
' -->

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html\',\'html_8bd1ae2c7de02be97ea81d2c4f5d04c9\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
_T('sarkaspip:cfg_lgd_syndication') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_syndication_nbj') .
'</p>
		<label>' .
_T('sarkaspip:cfg_lbl_nb_jours_syndiques_1') .
' :</label>
		<input type="text" name="nbj_syndication_1" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['nbj_syndication_1'],'30'),true)) .
'" size="3" class="fondl" />
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_nb_jours_syndiques_2') .
' :</label>
		<input type="text" name="nbj_syndication_2" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['nbj_syndication_2'],'60'),true)) .
'" size="3" class="fondl" />
		<p>' .
_T('sarkaspip:cfg_inf_syndication_pagination') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_site') . ',
	\'defaut_pas\' => ' . argumenter_squelette('50') . ',
	\'defaut_position\' => ' . argumenter_squelette('3') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html\',\'html_8bd1ae2c7de02be97ea81d2c4f5d04c9\',\'\',20,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html\',\'html_8bd1ae2c7de02be97ea81d2c4f5d04c9\',\'\',23,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Site :<br />
		' .
	cfg_affiche_arborescence('sarkaspip_site') .
	'</div>
')) :
		'') .
'

');

	return analyse_resultat_skel('html_8bd1ae2c7de02be97ea81d2c4f5d04c9', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_site.html');
}
?>