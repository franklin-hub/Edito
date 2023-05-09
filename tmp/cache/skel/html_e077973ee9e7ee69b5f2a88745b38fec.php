<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_layout.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_layout.html
// Temps de compilation total: 19.271 ms
//

function html_e077973ee9e7ee69b5f2a88745b38fec($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_layout') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_layout') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_layout') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_layout.html\',\'html_e077973ee9e7ee69b5f2a88745b38fec\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['appliquer_padding'],'0'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . ' jQuery("#bloc_marge").hide();') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true),'^(13|14|15|16|17|18)$') ? ' ':''))))!=='' ?
		($t1 . ' jQuery("#bloc_largeur").hide();') :
		'') .
'

		jQuery("input[name=\'numero_layout\']").click(function() {
			switch(jQuery("input[name=\'numero_layout\']:checked").val()){
				case \'7\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout7.gif')) .
'"});break;
				case \'8\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout8.gif')) .
'"});break;
				case \'9\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout9.gif')) .
'"});break;
				case \'10\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout10.gif')) .
'"});break;
				case \'11\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout11.gif')) .
'"});break;
				case \'12\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout12.gif')) .
'"});break;
				case \'13\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout13.gif')) .
'"});break;
				case \'14\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout14.gif')) .
'"});break;
				case \'15\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout15.gif')) .
'"});break;
				case \'16\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout16.gif')) .
'"});break;
				case \'17\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout17.gif')) .
'"});break;
				case \'18\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout18.gif')) .
'"});break;      
				case \'34\' :jQuery("#bloc_layout_image").attr({src: "' .
interdire_scripts(find_in_path('prive/images/layout34.gif')) .
'"});break;
				default : jQuery("#bloc_largeur").hide();break;    
			}
			jQuery(this).blur();
		});	
		
		jQuery("input[name=\'appliquer_padding\']").change(function() {
			if (jQuery("input[name=\'appliquer_padding\']:checked").val() == 1) {
				jQuery("#bloc_marge").show();
			}
			else {
				jQuery("#bloc_marge").hide();
			}
			jQuery(this).blur();
		});	
		
		jQuery("input[name=\'numero_layout\']").change(function() {
			switch(jQuery("input[name=\'numero_layout\']:checked").val()){
				case \'7\' :
				case \'8\' :
				case \'9\' :
				case \'10\' :
				case \'11\' :
				case \'12\' :
				case \'34\' :jQuery("#bloc_largeur").show();break;
				default : jQuery("#bloc_largeur").hide();break;    
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
_T('sarkaspip:cfg_lgd_layout') .
'</legend>
			<p>' .
_T('sarkaspip:cfg_inf_layout') .
'</p>
		<table style="border: 0; width:100%;"><tr>
		<td>
			<fieldset style="border: 0">
				<legend style="font-weight:bold;">' .
_T('sarkaspip:cfg_lgd_layout_fixe') .
'</legend>
				<label>
					<input type="radio" name="numero_layout" value="7" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '7') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_07') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="8" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '8') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_08') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="9" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '9') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_09') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="10" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '10') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_10') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="11" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '11') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_11') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="12" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '12') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_12') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="numero_layout" value="34" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '34') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_layout_34') .
'
				</label>
				<br />
				<div id="bloc_largeur">
					<br />
					<label>' .
_T('sarkaspip:cfg_lbl_largeur_site') .
'
						<input type="text" name="largeur_site" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['largeur_site'],'700'),true)) .
'" size="4" class="fondl" />
						' .
_T('sarkaspip:cfg_lbl_pixel') .
'
					</label>
					<br />
					<p>' .
_T('sarkaspip:cfg_lbl_appliquer_padding') .
'</p>				
					<label>
						<input type="radio" name="appliquer_padding" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['appliquer_padding'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
						' .
_T('sarkaspip:cfg_lbl_oui') .
'
					</label>
					<label>
						<input type="radio" name="appliquer_padding" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['appliquer_padding'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
						' .
_T('sarkaspip:cfg_lbl_non') .
'
					</label>
					<div id="bloc_marge">
						<br />
						<label>' .
_T('sarkaspip:cfg_lbl_largeur_padding') .
'
							<input type="text" name="largeur_padding" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['largeur_padding'],'20'),true)) .
'" size="3" class="fondl" />
							' .
_T('sarkaspip:cfg_lbl_pixel') .
'
						</label>
					</div>
				</div>
			</fieldset>
			
			<br />
			
			<fieldset style="border: 0;">
			<legend style="font-weight:bold;">' .
_T('sarkaspip:cfg_lgd_layout_fluide') .
'</legend>
			<label>
				<input type="radio" name="numero_layout" value="13" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '13') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_13') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="numero_layout" value="14" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '14') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_14') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="numero_layout" value="15" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '15') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_15') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="numero_layout" value="16" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '16') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_16') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="numero_layout" value="17" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '17') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_17') .
'
			</label>
			<br />
			<label>
				<input type="radio" name="numero_layout" value="18" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true) == '18') ? 'checked="checked"':'')) .
' />
				' .
_T('sarkaspip:cfg_lbl_layout_18') .
'
			</label>
			</fieldset>
		</td>
		<td>
			<img id="bloc_layout_image" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true))))!=='' ?
			('prive/images/layout' . $t2 . '.gif') :
			''))) .
'" alt="Layout ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['numero_layout'],'13'),true)) .
'"/>
		</td>
		</tr></table>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_layout.html\',\'html_e077973ee9e7ee69b5f2a88745b38fec\',\'\',171,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>


' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Layout:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_layout') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_e077973ee9e7ee69b5f2a88745b38fec', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_layout.html');
}
?>