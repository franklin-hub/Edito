<?php

/*
 * Squelette : ../plugins/cfg/cfg.css.html
 * Date :      Tue, 27 Jul 2010 09:41:08 GMT
 * Compile :   Mon, 01 May 2023 10:29:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/cfg/cfg.css.html
// Temps de compilation total: 2.419 ms
//

function html_f7dd2d6817c0c7a0230e2cb2894416ad($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=utf-8' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>/*  Affichage de la balise CFG_ARBO  */
.cfg_arbo h5{padding:0.2em 0.2em; margin:0.2em 0; cursor:pointer;}
.cfg_arbo ul{border:1px solid #ccc; margin:0; padding:0.2em 0.5em; list-style-type:none;}

/* Affichage des crayons/config */
.crayon-icones em.crayon-config {
    background: url(' .
interdire_scripts(find_in_path('images/crayon20.png')) .
') no-repeat;
    height: 20px; width: 20px;
    cursor: pointer; display: none;
}
.crayon-changed em.crayon-config {
    display: none;
}

/* formulaire auto configuration, boutons */
body.cfg #page .formulaire_spip {margin-bottom:2em;}
.formulaire_configurer p.boutons .save {color:#3E7735;}
.formulaire_configurer p.boutons .delete {color:#803923; float:left;}
.formulaire_configurer p.boutons .reset {font-size:1em; margin-top:3px; margin-right:5px; font-weight:bold; color:#666; float:left;}
');

	return analyse_resultat_skel('html_f7dd2d6817c0c7a0230e2cb2894416ad', $Cache, $page, '../plugins/cfg/cfg.css.html');
}
?>