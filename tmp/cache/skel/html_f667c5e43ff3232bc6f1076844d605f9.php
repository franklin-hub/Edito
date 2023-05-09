<?php

/*
 * Squelette : plugins/sarkaspip_31/css/bandeau.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/bandeau.css.html
// Temps de compilation total: 12.495 ms
//

function html_f667c5e43ff3232bc6f1076844d605f9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'/* BANDEAU.CSS                                                          */
/* Cette feuille contient:                                              */
/* - les styles de la partie haute du bandeau                           */
/* - les styles de la partie basse du bandeau                           */
/* - les styles du chemin du bandeau                                    */
/* - les styles de la partie haute du pied de page                      */
/* - les styles de la partie basse du pied de page                      */
/* -------------------------------------------------------------------- */

/* -------------------------------------------------------------------- */
/* 	Styles du bandeau - partie haute                                    */
/* -------------------------------------------------------------------- */

/* Structure generale du bandeau haut */
.bandeau_haut {
	padding: 0 10px 0;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/haut_minheight','50',false))))!=='' ?
		(' min-height: ' . $t1 . 'px;') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_bandeau_haut','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_bandeau_haut' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_bandeau_haut','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_bandeau_haut',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
' ;}

/* Navigation: liste des langues et raccourcis */
.nav_bandeau{float: right; min-width: 150px; max-width: 45%; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_bandeau_haut','#eeeeee',false)) .
'; font-size: 1.2em; padding-top:10px;}
.nav_raccourci, .nav_langue {margin-right: 5px; text-align: right;}
.nav_langue {line-height: 1.6em;}
.nav_langue ul, .nav_raccourci ul {padding: 0 5px 0 0; margin: 5px 0; line-height: 1em;}
.nav_langue li, .nav_raccourci li  {display: inline; list-style: none;}
.nav_langue li a, .nav_raccourci li a {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_bandeau_haut','#eeeeee',false)) .
'; text-decoration: none; padding: 0 2px 0 2px;}
.nav_langue li a:hover, .nav_raccourci li a:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_bandeau_haut','#aaaaaa',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_bandeau_haut','none',false)) .
';}
.nav_langue li.on {font-size: 1.25em; font-weight: bold;}
.nav_raccourci li.auteur a {font-weight: normal;}
.raccourci_bandeau {} /* sert uniquement a faire le pendant de la structure des raccourcis dans la colonne navigation */

/* Logo, titre et slogan du site */
.site_logo {margin: 10px 20px 10px 10px; float: left;}
.site_nom  {padding: 10px 0 0 10px; overflow: visible !important /*Firefox*/; overflow :hidden /*IE6*/;}
.site_nom h1 {}
.site_nom h1 a {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_bandeau_haut','#eeeeee',false)) .
'; text-decoration: none;}
.site_nom h1 a:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_bandeau_haut','#eeeeee',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_bandeau_haut','none',false)) .
';}
.site_nom h2 {font-size: 1.3em; line-height: 1em; margin: 0; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_bandeau_haut','#eeeeee',false)) .
'; display: inline;}

/* -------------------------------------------------------------------- */
/* 	Styles du bandeau - partie basse                                    */
/* -------------------------------------------------------------------- */
.bandeau_bas {
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/bas_minheight','23',false))))!=='' ?
		('min-height: ' . $t1 . 'px; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_bandeau_bas','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_bandeau_bas' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_bandeau_bas','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_bandeau_bas',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
  text-align:left;}
	
a .bandeau_bas  {display:inline;}

/* -------------------------------------------------------------------- */
/* 	Styles du bandeau - chemin                                          */
/* -------------------------------------------------------------------- */
.bandeau_chemin {
	min-height:22px; margin-bottom: 20px; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_chemin','#6262a4',false)) .
'; padding: 0 15px;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_chemin','#ddddef',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_chemin' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_chemin','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_chemin',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	height:auto;line-height:1.4em;
	}
.bandeau_chemin .recherche_chemin {width: auto; float: right;}
.bandeau_chemin a {padding: 0 5px 0 10px; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_chemin','#6262a4',false)) .
';}
.bandeau_chemin a:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_chemin','#808080',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_chemin','none',false)) .
';}
.chemin {padding-top: 5px; font-size:1.2em;}

/* Surcharge des boutons du plugin Boutons dans le Texte */
.textsizeup, .textsizedown, .textonly {float: right; margin: 0 5px 0 0; padding: 0; border: 0;}
.textsizeup:hover, .textsizedown:hover {}
.textonly {display: none}

/* -------------------------------------------------------------------- */
/* 	Styles du pied de page - partie haute (non disponible)              */
/* -------------------------------------------------------------------- */

/* -------------------------------------------------------------------- */
/* 	Styles du pied de page - partie basse                               */
/* -------------------------------------------------------------------- */
.pied_bas {
	padding: 10px 20px 10px; font-size: 1.2em; text-align: ' .
interdire_scripts(lire_config('sarkaspip_styles/ta_pied_bas','right',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_pied_bas','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_pied_bas' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_pied_bas','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_pied_bas',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pied_bas','#eeeeee',false)) .
';
	' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_pied/position_pied','1',false) == '0')) ?' ' :''))))!=='' ?
		($t1 . ' display: none;') :
		'') .
'}
.pied_bas .copyright {margin: 0 0 5px;}
.pied_bas .credits {margin: 0 0 5px;}
.pied_bas a {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pied_bas','#eeeeee',false)) .
'; text-decoration: none;}
.pied_bas a:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_pied_bas','#aaaaaa',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_pied_bas','none',false)) .
';}
');

	return analyse_resultat_skel('html_f667c5e43ff3232bc6f1076844d605f9', $Cache, $page, 'plugins/sarkaspip_31/css/bandeau.css.html');
}
?>