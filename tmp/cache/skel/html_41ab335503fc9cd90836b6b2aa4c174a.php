<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_coins.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_coins.html
// Temps de compilation total: 33.817 ms
//

function html_41ab335503fc9cd90836b6b2aa4c174a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_coins') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_coins') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_coins') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_coins.html\',\'html_41ab335503fc9cd90836b6b2aa4c174a\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_arrondis'],'0'),true) != '1') ? ' ':''))))!=='' ?
		($t1 . ' jQuery("#bloc_coins").hide();') :
		'') .
'

		// Traitement du choix arrondi ou pas
		jQuery("input[name=\'avec_arrondis\']").change(function() {
			if (jQuery("input[name=\'avec_arrondis\']:checked").val() == 1) {
				jQuery("#bloc_coins").show();
			}
			else {
				jQuery("#bloc_coins").hide();
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes du bandeau
		jQuery("input[name=\'modele_bandeau\']").click(function() {
			switch(jQuery("input[name=\'modele_bandeau\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_bandeau").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_bandeau0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_bandeau").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_bandeau1.png')) .
'"});break;
				case \'2\' :jQuery("#bloc_image_bandeau").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_bandeau2.png')) .
'"});break;
				case \'3\' :jQuery("#bloc_image_bandeau").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_bandeau3.png')) .
'"});break;
				case \'4\' :jQuery("#bloc_image_bandeau").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_bandeau4.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes du pied
		jQuery("input[name=\'modele_pied\']").click(function() {
			switch(jQuery("input[name=\'modele_pied\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_pied").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_pied0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_pied").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_pied1.png')) .
'"});break;
				case \'2\' :jQuery("#bloc_image_pied").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_pied2.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes des menus des pages speciales et formulaires
		jQuery("input[name=\'modele_nav\']").click(function() {
			switch(jQuery("input[name=\'modele_nav\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_nav").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_nav0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_nav").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_nav1.png')) .
'"});break;
				case \'2\' :jQuery("#bloc_image_nav").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_nav2.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes du formulaire de recherche
		jQuery("input[name=\'modele_recherche\']").click(function() {
			switch(jQuery("input[name=\'modele_recherche\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_recherche").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_recherche0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_recherche").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_recherche1.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes des colonnes
		jQuery("input[name=\'modele_noisette\']").click(function() {
			switch(jQuery("input[name=\'modele_noisette\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_noisette").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_noisette0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_noisette").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_noisette1.png')) .
'"});break;
				case \'2\' :jQuery("#bloc_image_noisette").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_noisette2.png')) .
'"});break;
				case \'3\' :jQuery("#bloc_image_noisette").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_noisette3.png')) .
'"});break;
				case \'4\' :jQuery("#bloc_image_noisette").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_noisette4.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes de l\'edito
		jQuery("input[name=\'modele_edito\']").click(function() {
			switch(jQuery("input[name=\'modele_edito\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_edito").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_edito0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_edito").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_edito1.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	
		
		// Traitement des vignettes des extraits
		jQuery("input[name=\'modele_extrait\']").click(function() {
			switch(jQuery("input[name=\'modele_extrait\']:checked").val()){
				case \'0\' :jQuery("#bloc_image_extrait").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_extrait0.png')) .
'"});break;
				case \'1\' :jQuery("#bloc_image_extrait").attr({src: "' .
interdire_scripts(find_in_path('prive/images/coins_extrait1.png')) .
'"});break;
			}
			jQuery(this).blur();
		});	

	});
//]]>
</script>

<form method="post" action="' .
self() .
'" enctype="multipart/form-data"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>	
		<legend>' .
_T('sarkaspip:cfg_lgd_coins') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_coins') .
'</p>
		<label>
			<input type="radio" name="avec_arrondis" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_arrondis'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_oui') .
'
		</label>
		<label>
			<input type="radio" name="avec_arrondis" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['avec_arrondis'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
			' .
_T('sarkaspip:cfg_lbl_non') .
'
		</label>		
	</fieldset>
  
  	<div id="bloc_coins">
		<!-- Configuration du bandeau -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_bandeau') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_bandeau" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_bandeau_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_bandeau" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_bandeau_1') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_bandeau" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_bandeau_2') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_bandeau" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true) == '3') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_bandeau_3') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_bandeau" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true) == '4') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_bandeau_4') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_bandeau" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true))))!=='' ?
			('prive/images/coins_bandeau' . $t2 . '.png') :
			''))) .
'" alt="Coins bandeau ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_bandeau'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_bandeau" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_bandeau'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration du pied -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_pied') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_pied" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_pied'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_pied_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_pied" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_pied'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_pied_1') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_pied" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_pied'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_pied_2') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_pied" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_pied'],'0'),true))))!=='' ?
			('prive/images/coins_pied' . $t2 . '.png') :
			''))) .
'" alt="Coins pied ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_pied'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_pied" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_pied'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration des menus formulaires et pages speciales -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_nav') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_nav" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_nav'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_nav_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_nav" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_nav'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_nav_1') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_nav" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_nav'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_nav_2') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_nav" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_nav'],'0'),true))))!=='' ?
			('prive/images/coins_nav' . $t2 . '.png') :
			''))) .
'" alt="Coins menus formulaires et pages speciales ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_nav'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_cadre_taille_arrondi') .
'
				<input type="text" name="taille_nav_cadre" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_nav_cadre'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration du formulaire de recherche -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_recherche') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_recherche" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_recherche'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_recherche_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_recherche" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_recherche'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_recherche_1') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_recherche" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_recherche'],'0'),true))))!=='' ?
			('prive/images/coins_recherche' . $t2 . '.png') :
			''))) .
'" alt="Coins formulaire de recherche ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_recherche'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_recherche" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_recherche'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration des noisettes des colonnes -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_noisettes') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_noisette" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_noisette_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_noisette" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_noisette_1') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_noisette" value="2" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true) == '2') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_noisette_2') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_noisette" value="3" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true) == '3') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_noisette_3') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_noisette" value="4" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true) == '4') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_noisette_4') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_noisette" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true))))!=='' ?
			('prive/images/coins_noisette' . $t2 . '.png') :
			''))) .
'" alt="Coins des noisettes ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_noisette'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_noisette" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_noisette'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration de l\'edito et de la une -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_edito') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_edito" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_edito'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_edito_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_edito" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_edito'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_edito_1') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_edito" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_edito'],'0'),true))))!=='' ?
			('prive/images/coins_edito' . $t2 . '.png') :
			''))) .
'" alt="Coins edito ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_edito'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_edito" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_edito'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>

		<!-- Configuration des extraits -->
		<fieldset>
			<legend>' .
_T('sarkaspip:cfg_lgd_coins_extrait') .
'</legend>
			<table style="border: 0; width:100%;"><tr>
			<td>
				<label>
					<input type="radio" name="modele_extrait" value="0" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_extrait'],'0'),true) == '0') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_extrait_0') .
'
				</label>
				<br />
				<label>
					<input type="radio" name="modele_extrait" value="1" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['modele_extrait'],'0'),true) == '1') ? 'checked="checked"':'')) .
' />
					' .
_T('sarkaspip:cfg_lbl_coins_extrait_1') .
'
				</label>
			</td>
			<td style="text-align: center;">
				<img id="bloc_image_extrait" src="' .
interdire_scripts(find_in_path((($t2 = strval(interdire_scripts(entites_html(sinon(@$Pile[0]['modele_extrait'],'0'),true))))!=='' ?
			('prive/images/coins_extrait' . $t2 . '.png') :
			''))) .
'" alt="Coins extrait ' .
interdire_scripts(entites_html(sinon(@$Pile[0]['modele_extrait'],'0'),true)) .
'"/>
			</td>
			</tr></table>
			<br />
			<label>' .
_T('sarkaspip:cfg_lbl_taille_arrondi') .
'
				<input type="text" name="taille_extrait" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['taille_extrait'],'10'),true)) .
'" size="3" class="fondl" />
				' .
_T('sarkaspip:cfg_lbl_pixel') .
'
			</label>
		</fieldset>
	</div>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_coins.html\',\'html_41ab335503fc9cd90836b6b2aa4c174a\',\'\',338,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Coins:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_coins') .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_41ab335503fc9cd90836b6b2aa4c174a', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_coins.html');
}
?>