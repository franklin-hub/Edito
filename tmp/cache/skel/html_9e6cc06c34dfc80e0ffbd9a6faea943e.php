<?php

/*
 * Squelette : ../plugins/sarkaspip_31/formulaires/sauvegarde_cfg.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/formulaires/sauvegarde_cfg.html
// Temps de compilation total: 8.035 ms
//

function html_9e6cc06c34dfc80e0ffbd9a6faea943e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- nom=sarkaspip_maintenance -->

<script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function() {
		' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(@$Pile[0]['mode'],'page'),true) == 'tout')) ?' ' :''))))!=='' ?
		($t1 . '
			jQuery("#bloc_fonds").hide();
		') :
		'') .
'
		jQuery("input[name=\'mode\']").change(function() {
			if (jQuery("input[name=\'mode\']:checked").val() == \'page\') {
				jQuery("#bloc_fonds").show();
			}
			else {
				jQuery("#bloc_fonds").hide();
			}
			jQuery(this).blur();
		});	
	});
//]]>
</script>

' .
debut_cadre_trait_couleur('1','1','',interdire_scripts(entites_html((@$Pile[0]['_titre']),true))) .
'
<form method="post" action="' .
self() .
'"><div>
	' .
	'<div>' .
	form_hidden(self()) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><fieldset>
		' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['_legende']),true))))!=='' ?
		('<legend>' . $t1 . '</legend>') :
		'') .
'
		' .
(($t1 = strval((@$Pile[0]['_description'])))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
		
		' .
(($t1 = strval((@$Pile[0]['_choix'])))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
		<label>
			<input type="radio" name="mode" value="tout" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['mode'],'page'),true) == 'tout') ? 'checked="checked"':'')) .
' />
			' .
interdire_scripts(entites_html((@$Pile[0]['_label_oui']),true)) .
'</label>
		<label>
			<input type="radio" name="mode" value="page" ' .
interdire_scripts(((entites_html(sinon(@$Pile[0]['mode'],'page'),true) == 'page') ? 'checked="checked"':'')) .
' />
			' .
interdire_scripts(entites_html((@$Pile[0]['_label_non']),true)) .
'</label>
		<p id="bloc_fonds">
			' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['_label_fond']),true))))!=='' ?
		('<label>' . $t1 . '</label>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((@$Pile[0]['_fonds']))))!=='' ?
		('<select name="fond_a_sauvegarder">
				' . $t1 . '
			</select>') :
		'') .
'
		</p>
	</fieldset>

	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['message_ok']))))!=='' ?
		('<fieldset><div class="formulaire_message formulaire_message_ok">' . $t1 . '</div></fieldset>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['message_nok']))))!=='' ?
		('<fieldset><div class="formulaire_message formulaire_message_erreur">' . $t1 . '</div></fieldset>') :
		'') .
'

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'choix\' => ' . argumenter_squelette('valider_seul') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/formulaires/sauvegarde_cfg.html\',\'html_9e6cc06c34dfc80e0ffbd9a6faea943e\',\'\',45,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>
' .
fin_cadre_trait_couleur('1') .
'
');

	return analyse_resultat_skel('html_9e6cc06c34dfc80e0ffbd9a6faea943e', $Cache, $page, '../plugins/sarkaspip_31/formulaires/sauvegarde_cfg.html');
}
?>