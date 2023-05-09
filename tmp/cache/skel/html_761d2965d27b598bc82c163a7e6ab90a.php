<?php

/*
 * Squelette : ../plugins/sarkaspip_31/formulaires/restauration_cfg.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/formulaires/restauration_cfg.html
// Temps de compilation total: 3.766 ms
//

function html_761d2965d27b598bc82c163a7e6ab90a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- nom=sarkaspip_maintenance -->
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
		<legend>' .
interdire_scripts(entites_html((@$Pile[0]['_legende']),true)) .
'</legend>
		<p>' .
(@$Pile[0]['_description']) .
'</p>
		<label>' .
interdire_scripts(entites_html((@$Pile[0]['_label']),true)) .
'</label>
		<select name="fichier_a_restaurer">
			' .
interdire_scripts((@$Pile[0]['_fichiers_sauvegardes'])) .
'</select>
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
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/formulaires/restauration_cfg.html\',\'html_761d2965d27b598bc82c163a7e6ab90a\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>
' .
fin_cadre_trait_couleur('1') .
'
');

	return analyse_resultat_skel('html_761d2965d27b598bc82c163a7e6ab90a', $Cache, $page, '../plugins/sarkaspip_31/formulaires/restauration_cfg.html');
}
?>