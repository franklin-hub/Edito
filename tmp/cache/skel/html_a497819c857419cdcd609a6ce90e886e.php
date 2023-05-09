<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_header.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_header.html
// Temps de compilation total: 3.666 ms
//

function html_a497819c857419cdcd609a6ce90e886e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_header') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_header') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_header') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_header.html\',\'html_a497819c857419cdcd609a6ce90e886e\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	<fieldset>
		<label>' .
_T('sarkaspip:cfg_lbl_meta_auteur') .
'</label><br />
		<input type="text" name="auteur_site" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['auteur_site'],_T('sarkaspip:realisation_squelette')),true)) .
'" size="40" class="fondl" />
		<br />
		<br />
		<label>' .
_T('sarkaspip:cfg_lbl_meta_robot') .
'</label>
		<input type="text" name="recurrence_robot" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['recurrence_robot'],'30'),true)) .
'" size="3" class="fondl" />
		<br />
		<br />
		<p>' .
_T('sarkaspip:cfg_inf_meta_keywords') .
'</p>
		<label>
			<textarea name="keywords_site" rows="4" cols="40" style="width:100%;">' .
interdire_scripts(entites_html((@$Pile[0]['keywords_site']),true)) .
'</textarea>
		</label>
	</fieldset>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_header.html\',\'html_a497819c857419cdcd609a6ce90e886e\',\'\',24,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>


' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Balises meta:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_header') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a497819c857419cdcd609a6ce90e886e', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_header.html');
}
?>