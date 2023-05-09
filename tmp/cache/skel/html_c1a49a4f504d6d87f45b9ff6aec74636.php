<?php

/*
 * Squelette : ../plugins/zen-garden/prive/style_prive_plugin_zengarden.html
 * Date :      Tue, 27 Jul 2010 09:39:18 GMT
 * Compile :   Mon, 01 May 2023 10:24:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/zen-garden/prive/style_prive_plugin_zengarden.html
// Temps de compilation total: 3.840 ms
//

function html_c1a49a4f504d6d87f45b9ff6aec74636($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars']['claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['couleur_claire'],'edf3fe'),true)))) .
vide($Pile['vars']['foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['couleur_foncee'],'3874b0'),true)))) .
vide($Pile['vars']['left'] = interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','left','right'))) .
vide($Pile['vars']['right'] = interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','right','left'))) .
'.zengarden .themes li.item {padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':227px;}
.zengarden .themes li.item .spip_documents_left {background:#eee;padding:5px;border:1px solid #e1e1e1;margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':-227px;position:relative;display:inline;}
.zengarden .themes li.item .bandeau {margin-top:5px;font-style:italic;}
.zengarden .themes li.item .squelette {margin-top: 1em;}

.zengarden .liste_themes {list-style:none;margin:0;padding:0;font-size:11px;}
.zengarden .liste_themes .theme {margin:0;padding:10px 5px;border-bottom:1px solid #e1e1e1;overflow:hidden;float:left;width:115px;height:150px;position:relative;}
.zengarden .liste_themes .theme:hover {background-color:' .
(($t1 = strval(filtrer('couleur_eclaircir',(is_array($a = ($Pile["vars"])) ? $a['claire'] : ""))))!=='' ?
		('#' . $t1) :
		'') .
';}
.zengarden .liste_themes .theme img {margin:0;display:block;float:none;position:absolute;top:10px;left:5px;padding:5px;background:#eee;border:1px solid #e1e1e1;}
.zengarden .liste_themes .theme h3 {margin-top:0;padding-top:95px;font-size:1.2em;}
.zengarden .liste_themes .theme h3 span {font-size:0.9em;}

.zengarden .liste_themes .theme .actions {text-align:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';font-size:0.9em;}
.zengarden .liste_themes .theme .bandeau {margin-top:5px;font-style:italic;}
.zengarden .liste_themes .theme .squelette {margin-top: 1em;}
.zengarden .liste_themes .theme .qTipContent {display:none;}
');

	return analyse_resultat_skel('html_c1a49a4f504d6d87f45b9ff6aec74636', $Cache, $page, '../plugins/zen-garden/prive/style_prive_plugin_zengarden.html');
}
?>