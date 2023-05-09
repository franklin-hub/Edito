<?php

/*
 * Squelette : ../plugins/zen-garden/prive/exec/zengarden.html
 * Date :      Tue, 27 Jul 2010 09:39:18 GMT
 * Compile :   Mon, 01 May 2023 10:24:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/zen-garden/prive/exec/zengarden.html
// Temps de compilation total: 6.746 ms
//

function html_9cca853318e7f6843e2c418ba4d3f8e3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(invalideur_session($Cache, (include_spip("inc/autoriser")&&autoriser('administrer', 'theme')?" ":""))))!=='' ?
		($t1 . (	'
<h1>' .
	_T('zengarden:choix_theme') .
	'</h1>
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/zengarden_theme') . ', array_merge('.var_export($Pile[0],1).',array(\'selection\' => ' . argumenter_squelette(interdire_scripts(lire_config('zengarden_theme',null,false))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/zen-garden/prive/exec/zengarden.html\',\'html_9cca853318e7f6843e2c418ba4d3f8e3\',\'\',3,$GLOBALS[\'spip_lang\']),"ajax"=>true), _request("connect"));
?'.'>

<!--#navigation-->
<div class="cadre cadre-info"><div class="cadre_padding">
	' .
	interdire_scripts(filtre_balise_img_dist(find_in_path('img_pack/themes-128.png'))) .
	'
	' .
	propre(_T('zengarden:info_page')) .
	'

' .
	(($t2 = strval(interdire_scripts(((lire_config('zengarden_switcher',null,false)) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		'<form class=\'bouton_action_post ' . '' . '\' method=\'post\' action=\'' . ($u=invalideur_session($Cache, generer_action_auteur('zengarden_activer_switcher','off',invalideur_session($Cache, self())))) . '\'>'
. '<div>' . form_hidden($u)
. '<button type=\'submit\' class=\'submit\' ' . '' . '>' . _T('zengarden:switcher_desactiver') . '</button>'
. '</div></form>
')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((lire_config('zengarden_switcher',null,false)) ?'' :' '))))!=='' ?
			($t2 . (	'
	' .
		'<form class=\'bouton_action_post ' . '' . '\' method=\'post\' action=\'' . ($u=invalideur_session($Cache, generer_action_auteur('zengarden_activer_switcher','on',invalideur_session($Cache, self())))) . '\'>'
. '<div>' . form_hidden($u)
. '<button type=\'submit\' class=\'submit\' ' . '' . '>' . _T('zengarden:switcher_activer') . '</button>'
. '</div></form>
')) :
			'') .
	'
</div></div>

<!--/#navigation-->
')) :
		'');

	return analyse_resultat_skel('html_9cca853318e7f6843e2c418ba4d3f8e3', $Cache, $page, '../plugins/zen-garden/prive/exec/zengarden.html');
}
?>