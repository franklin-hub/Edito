<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_bandeau.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_bandeau.html
// Temps de compilation total: 23.210 ms
//

function html_87da100de1e03c962740af1b44f34310($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_bandeau') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_bandeau') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_bandeau') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_bandeau.html\',\'html_87da100de1e03c962740af1b44f34310\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['haut'],'1'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . '
			jQuery("#menu_raccourci_defaut").attr({checked: "checked"});
			jQuery("#bloc_haut").hide();
		') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['bas'],'1'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . ' jQuery("#bloc_bas").hide();') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['menu_align'],'0'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . '	jQuery("#bloc_largeur_menu").hide();') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['logo_reduit'],'1'),true) == '0') ? ' ':''))))!=='' ?
		($t1 . ' jQuery("#bloc_logo").hide();
		') :
		'') .
'
		jQuery("input[name=\'haut\']").change(function() {
			if (jQuery("input[name=\'haut\']:checked").val() == 1)
				jQuery("#bloc_haut").show();
			else {
				jQuery("#menu_raccourci_defaut").attr({checked: "checked"});
				jQuery("#bloc_haut").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'bas\']").change(function() {
			if (jQuery("input[name=\'bas\']:checked").val() == 1)
				jQuery("#bloc_bas").show();
			else {
				jQuery("#bloc_bas").hide();
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'menu_align\']").change(function() {
			if (jQuery("input[name=\'menu_align\']:checked").val() == 0)
				jQuery("#bloc_largeur_menu").hide();
			else {
				jQuery("#bloc_largeur_menu").show();
				jQuery("input[name=\'item_largeur\']").attr({value: "150"});
			}
			jQuery(this).blur();
		});	
		jQuery("input[name=\'logo_reduit\']").change(function() {
			if (jQuery("input[name=\'logo_reduit\']:checked").val() == 1)
				jQuery("#bloc_logo").show();
			else {
				jQuery("#bloc_logo").hide();
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
_T('sarkaspip:cfg_lgd_bandeau_haut') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_bandeau_haut') .
'</p>
		<label>
			<input type="radio" name="haut" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['haut'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="haut" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['haut'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		
		<div id="bloc_haut">
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_hauteur_minimale') .
'</label>
			<input type="text" name="haut_minheight" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['haut_minheight'],'50'),true)) .
'" size="3" class="fondl" />
			<br />
			<p>' .
_T('sarkaspip:cfg_inf_logo_reduit') .
'</p>
			<label>
				<input type="radio" name="logo_reduit" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['logo_reduit'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_oui') .
'
			</label>
			<label>
				<input type="radio" name="logo_reduit" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['logo_reduit'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_non') .
'
			</label>
			<div id="bloc_logo">
				<label>' .
_T('sarkaspip:cfg_lbl_taille_logo') .
'</label>
				<input type="text" name="taille_logo" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_logo'],'150'),true)) .
'" size="3" class="fondl" />
			</div>
			<br />
			<p>' .
_T('sarkaspip:cfg_inf_titre_site') .
'</p>
			<label>
				<input type="radio" name="titre_site" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['titre_site'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_oui') .
'
			</label>
			<label>
				<input type="radio" name="titre_site" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['titre_site'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_non') .
'
			</label>
			<br /><br />
			<label>' .
_T('sarkaspip:cfg_lbl_slogan') .
'</label>
			<input type="text" name="slogan" value="' .
interdire_scripts(entites_html((@$Pile[0]['slogan']),true)) .
'" size="40" class="fondl" />
			<br />
		</div>
	</fieldset>

	' .
vide($Pile['vars']['menu_horizontal_affiche'] = 'non') .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_rubriques','1',false) == '5') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['menu_horizontal_affiche'] = 'oui') .
	vide($Pile['vars']['menu_horizontal_modele'] = _T('sarkaspip:cfg_lgd_menu_rubriques')) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_secteurs','0',false) == '5') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['menu_horizontal_affiche'] = 'oui') .
	vide($Pile['vars']['menu_horizontal_modele'] = _T('sarkaspip:cfg_lgd_menu_secteurs')) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_pages','1',false) == '5') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['menu_horizontal_affiche'] = 'oui') .
	vide($Pile['vars']['menu_horizontal_modele'] = _T('sarkaspip:cfg_lgd_menu_pages_speciales')) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/position_perso','0',false) == '5') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['menu_horizontal_affiche'] = 'oui') .
	vide($Pile['vars']['menu_horizontal_modele'] = _T('sarkaspip:cfg_lgd_menu_perso')) .
	'
')) :
		'') .
'
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_bandeau_bas') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_bandeau_bas') .
'</p>
		<label>
			<input type="radio" name="bas" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['bas'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>		
			<input type="radio" name="bas" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['bas'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>
		<br />
		<div id="bloc_bas">
			<label>' .
_T('sarkaspip:cfg_lbl_hauteur_minimale') .
'</label>
			<input type="text" name="bas_minheight" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['bas_minheight'],'23'),true)) .
'" size="3" class="fondl" />
			<br />
' .
(((is_array($a = ($Pile["vars"])) ? $a['menu_horizontal_affiche'] : "") == 'oui')  ?
		(' ' . (	'
			<p>' .
	_T('sarkaspip:cfg_inf_bandeau_bas_menu',array(lbl_menu => (is_array($a = ($Pile["vars"])) ? $a['menu_horizontal_modele'] : ""))) .
	'</p>
			<p>' .
	_T('sarkaspip:cfg_inf_alignement_menu') .
	'</p>
			<label>
				<input type="radio" name="menu_align" value="0" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['menu_align'],'0'),true) == '0') ? 'checked="checked"':'')) .
	' />
				' .
	_T('sarkaspip:cfg_lbl_align_gauche') .
	'
			</label>
			<label>
				<input type="radio" name="menu_align" value="auto" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['menu_align'],'0'),true) == 'auto') ? 'checked="checked"':'')) .
	' />
				' .
	_T('sarkaspip:cfg_lbl_align_centre') .
	'
			</label>
			<p>' .
	_T('sarkaspip:cfg_inf_alignement_item') .
	'</p>
			<label>
				<input type="radio" name="item_align" value="left" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['item_align'],'left'),true) == 'left') ? 'checked="checked"':'')) .
	' />
				' .
	_T('sarkaspip:cfg_lbl_align_gauche') .
	'
			</label>
			<label>
				<input type="radio" name="item_align" value="center" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0]['item_align'],'left'),true) == 'center') ? 'checked="checked"':'')) .
	' />
				' .
	_T('sarkaspip:cfg_lbl_align_centre') .
	'
			</label>
			<div id="bloc_largeur_item">
				<br />
				<label>
					' .
	_T('sarkaspip:cfg_lbl_largeur_item') .
	'
					<input type="text" name="item_largeur" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['item_largeur'],'150'),true)) .
	'" size="4" class="fondl" />
				</label>
			</div>
			<div id="bloc_largeur_menu">
				<label>
					' .
	_T('sarkaspip:cfg_lbl_largeur_menu') .
	'
					<input type="text" name="menu_largeur" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['menu_largeur'],'600'),true)) .
	'" size="4" class="fondl" />
				</label>
			</div>
')) :
		'') .
'
		</div>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_bandeau_chemin') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_bandeau_chemin') .
'</p>
		<label>
			<input type="radio" name="chemin" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['chemin'],'1'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="chemin" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['chemin'],'1'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>	
		<br />
	</fieldset>
		
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_bandeau.html\',\'html_87da100de1e03c962740af1b44f34310\',\'\',140,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>


' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Bandeau:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_bandeau') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_87da100de1e03c962740af1b44f34310', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_bandeau.html');
}
?>