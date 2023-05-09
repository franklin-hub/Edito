<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html
// Temps de compilation total: 5.773 ms
//

function html_c0f14422ae73a46701053602fee81fc9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_article') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_article') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_article') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
_T('sarkaspip:cfg_lgd_description') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_logo') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_article_sans_logo')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_cartouche') . ', array_merge('.var_export($Pile[0],1).',array(\'explication_popularite\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_article_popularite')) . ',
	\'explication_notation\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_article_notation')) . ',
	\'explication_socialtags\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_article_socialtags')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_documents_joints') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_descriptif_document') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_images_jointes') .
'</legend>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_effet_image') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_effet_image')) . ',
	\'choix\' => ' . argumenter_squelette('portfolio') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_commentaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_article_commentaires') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('20') . ',
	\'defaut_position\' => ' . argumenter_squelette('2') . ',
	\'suffixe\' => ' . argumenter_squelette('_commentaires') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_petition') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_petition') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_pagination') . ', array_merge('.var_export($Pile[0],1).',array(\'defaut_pas\' => ' . argumenter_squelette('20') . ',
	\'defaut_position\' => ' . argumenter_squelette('2') . ',
	\'suffixe\' => ' . argumenter_squelette('_signatures') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',34,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html\',\'html_c0f14422ae73a46701053602fee81fc9\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Article:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_article') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_c0f14422ae73a46701053602fee81fc9', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_article.html');
}
?>