<?php

/*
 * Squelette : plugins/sarkaspip_31/css/noisettes.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/noisettes.css.html
// Temps de compilation total: 94.209 ms
//

function html_c250f17f58bbf6ca5d13380bc5d70649($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'/* NOISETTES.CSS                                                        */
/* Cette feuille contient:                                              */
/* - les styles des noisettes des colonnes extra et navigation          */
/* - les styles des menus verticaux et horizontaux                      */
/* -------------------------------------------------------------------- */

/* Initialisation des variables permettant de déterminer un alignement à droite ou à gauche */
' .
vide($Pile['vars']['css_align'] = 'left') .
vide($Pile['vars']['badge_align'] = 'left') .
vide($Pile['vars']['css_bg_position'] = '170') .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_noisettes/position_badges','1',false) == '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(8|9|10|14|15|16)$')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		vide($Pile['vars']['badge_align'] = 'right') .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_noisettes/position_badges','1',false) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(7|9|10|13|15|16)$')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		vide($Pile['vars']['badge_align'] = 'right') .
		'
	')) :
			'') .
	'
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(8|9|10|14|15|16)$')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['css_align'] = 'right') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(8|9|10|14|15|16)$')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['css_bg_position'] = '9') .
	'
')) :
		'') .
'

/* Noisettes pouvant etre inserees dans les colonnes extra et navigation */
/* Styles generiques */
.noisette {margin-bottom: 15px; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false)) .
';}

.noisette h1, h2, h3 {margin: 0; font-size: 1em;}
.noisette h1.intitule, .noisette h1 a.intitule {
	display: block;	margin-bottom: 10px; font-weight: bold; font-size: 1.5em; text-align: center; line-height:1.2em;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_noisette_titre','#808080',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_noisette_titre' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_noisette_titre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_noisette_titre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_noisette_titre','#ffffff',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'
	padding : 2px 0;}
.noisette h1 a.intitule:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_noisette_titre','#eeeeee',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_noisette_titre' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_noisette_titre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_noisette_titre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_noisette_titre','#808080',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_noisette_titre','none',false))))!=='' ?
		('text-decoration: ' . $t1 . ';') :
		'') .
'}

.noisette .contenu {margin-bottom: 5px; padding: 0; 
		' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'
		background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_noisette','#FFFFFF',false)) .
';}
.noisette .contenu.mixte {padding: 5px 0 0;}
.noisette .contenu h2.titre_bloc, 
.noisette .contenu h2 a.titre_bloc {
	display: block;	margin: 0; padding: 1px; font-size: 1.25em; line-height: 1.5em; font-weight: bold; text-align: center;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-bottom: 1px solid ' . $t1 . ';') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_noisette_soustitre','#eeeeee',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_noisette_soustitre' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_noisette_soustitre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_noisette_soustitre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_noisette_soustitre','#808080',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}
.noisette .contenu h2 a.titre_bloc:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_noisette_soustitre','#808080',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_noisette_soustitre' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_noisette_soustitre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_noisette_soustitre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_noisette_soustitre','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_noisette_soustitre','none',false))))!=='' ?
		('text-decoration: ' . $t1 . ';') :
		'') .
'}

.noisette .contenu .liste ul {margin: 0; padding: 0;}
.noisette .contenu .liste ol {margin: 0; padding: 0 5px;}
.noisette .contenu .liste ol li {list-style: decimal inside;}
.noisette .contenu h2.titre, .noisette .contenu h2 a.titre, .noisette .contenu .liste li .titre {
	display: block; padding: 0 0 5px 10px; margin: 0 5px;	font-weight: bold; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false)) .
';
	' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n0.gif'))))!=='' ?
		('background: url(' . $t1 . ') left top no-repeat;') :
		'') .
'}
.noisette .contenu .liste ol li .titre {background: none; display: inline; margin:0; padding: 0;}
.noisette .contenu h2 a.titre:hover, .noisette .contenu .liste li a.titre:hover{
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_noisette','#808080',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_noisette','underline',false)) .
';}
.noisette .contenu .liste li span.titre {color: #000000;} /* A REVOIR */

.noisette .contenu .date_bloc {
	margin-left: 30%; padding: 1px; font-size: 0.9em; text-align: center;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-bottom: 1px solid ' . $t1 . ';') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-left: 1px solid ' . $t1 . ';') :
		'') .
'}

.noisette .contenu div.introduction, .noisette .contenu a.introduction {
	display: block;	margin: 0 5px; padding:0 0 5px 10px;	
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false)) .
';}
.noisette .contenu a.introduction:hover{
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_noisette','#808080',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_noisette','underline',false)) .
';}
.noisette .contenu div.introduction * {margin: 0;}

.noisette .contenu .liste {margin: 0;	padding: 5px 0;}
.noisette .contenu .texte {margin: 0; padding: 5px; line-height: 1.1em;}
.noisette .contenu .texte p {margin:0.7em 0em; padding:0;}

.noisette .contenu .notes {margin: 0; padding: 5px; line-height: 100%;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		(' border-top: 1px solid ' . $t1 . ';') :
		'') .
'}
.noisette .contenu .notes p {margin: 0;}

.noisette .contenu h3 {padding: 3px 0; line-height: 1.1em;}
.noisette .contenu  a {}
.noisette .contenu a:hover {}
.noisette .contenu strong {}
.noisette .contenu blockquote, .noisette .contenu code {margin : 2px;}

/* Styles specifiques pour la pagination dans les noisettes */
.noisette .pagination {margin: 0 5px 5px; font-size: 1em;}

/* Styles specifiques pour l\'herbier */
#noisette_herbier.noisette .contenu .texte {text-align: center;}
#noisette_herbier.noisette .contenu .texte ul {width: 120px; margin: 0 auto;}

/* Styles specifiques pour les statistiques */
#noisette_statistiques.noisette .contenu .texte {text-align: center;}

/* Styles specifiques pour la navigation des articles et rubrique mots-cles et categories */
#noisette_filtre.noisette .contenu h2.titre_bloc.bouton {border-bottom: 0;	
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_noisette_soustitre','#808080',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_noisette_soustitre' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_noisette_soustitre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_noisette_soustitre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_noisette_soustitre','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_noisette_soustitre','none',false))))!=='' ?
		('text-decoration: ' . $t1 . ';') :
		'') .
'}

#noisette_filtre.noisette .contenu h2 a.titre_bloc.bouton {border-bottom: 0;}
#noisette_navigation.noisette .contenu .liste li .titre,
#noisette_filtre.noisette .contenu .liste li .titre,
#noisette_motscles.noisette .contenu .liste li .titre {
	display: block;
	padding: 0 0 5px 10px;
	margin: 0 5px;
	font-size: 1em;
	font-weight: bold;
	text-decoration: none;
}
#noisette_navigation.noisette .contenu .liste li span.titre,
#noisette_filtre.noisette .contenu .liste li span.titre,
#noisette_motscles.noisette .contenu .liste li span.titre {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n1.gif'))))!=='' ?
		('background: url(' . $t1 . ') left top no-repeat;') :
		'') .
'}
#noisette_navigation.noisette .contenu .liste li a.titre,
#noisette_filtre.noisette .contenu .liste li a.titre,
#noisette_motscles.noisette .contenu .liste li a.titre {background-image: none;}
#noisette_navigation.noisette .contenu .liste li a.titre:hover,
#noisette_filtre.noisette .contenu .liste li a.titre:hover,
#noisette_motscles.noisette .contenu .liste li a.titre:hover {
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_noisette','#808080',false)) .
';
	' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n1.gif'))))!=='' ?
		(' background: url(' . $t1 . ') left top no-repeat;') :
		'') .
'
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_noisette','underline',false)) .
';}

/* Styles specifiques pour les badges */
.noisette .badges a {display: block; margin: 2px 0; padding: 0; border: 0; width: 80px; height: 15px;' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['badge_align'] : "")))!=='' ?
		(' float:' . $t1 . ';') :
		'') .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['badge_align'] : "")))!=='' ?
		(' clear: ' . $t1 . ';') :
		'') .
' }
.noisette .badges a:hover {text-decoration: none;}
#logo_rss {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_rss.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_rss:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_rss_hover.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_sarkaspip {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_sarkaspip.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_sarkaspip:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_sarkaspip_hover.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_spip {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_spip.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_spip:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_spip_hover.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_xhtml {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_xhtml.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_xhtml:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_xhtml_hover.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_perso {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_perso.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}
#logo_perso:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/badge_perso_hover.png'))))!=='' ?
		('background: url(' . $t1 . ') no-repeat;') :
		'') .
'}

/* Styles specifiques pour le mini-agenda */
#noisette_miniagenda.noisette {overflow: hidden; width:180px}
#noisette_miniagenda.noisette .contenu table {table-layout: fixed; border-spacing:0; width:100% !important /*FF*/; width:178px /*IE*/; font-size: 1.1em; text-align: center;border-collapse:inherit;}
#noisette_miniagenda.noisette .contenu table thead {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_noisette_titre','#808080',false)) .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_noisette_titre','#ffffff',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table th {text-align: center; padding: 2px 0;}
#noisette_miniagenda.noisette .contenu table td {line-height: 1.1em; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false)) .
'}
#noisette_miniagenda.noisette .contenu table td.libre,
#noisette_miniagenda.noisette .contenu table td.occupe {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bg_noisette','#ffffff',false))))!=='' ?
		('background-color: ' . $t1 . ';') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bg_noisette','#ffffff',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table td.horsperiode {
    ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bg_horsmois','#eeeeee',false))))!=='' ?
		('background: ' . $t1 . ';') :
		'') .
'
    ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bg_horsmois','#eeeeee',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_horsmois','#808080',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table td.today {font-weight: bolder;  
    ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bg_aujourdhui','transparent',false))))!=='' ?
		('background: ' . $t1 . ';') :
		'') .
'
    ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_aujourdhui','#990000',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table td a {font-weight: bolder;}
#noisette_miniagenda.noisette .contenu table td a:hover {}

#noisette_miniagenda.noisette .contenu h2 a.titre_bloc {padding: 0 0; font-size: 1.2em;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-top: 1px solid ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu h2.titre_bloc.centre,
#noisette_miniagenda.noisette .contenu h2 a.titre_bloc.bord {padding: 1px 0; border-top: 0;float: left;font-size: 1.2em;}
#noisette_miniagenda.noisette .contenu h2.titre_bloc.centre {width: 50%;}
#noisette_miniagenda.noisette .contenu h2 a.titre_bloc.bord {width: 25%;}

#noisette_miniagenda.noisette .contenu .texte {padding: 2px; ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-top: 1px solid ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table#footer_evenements {padding: 2px 0; table-layout: fixed; ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border-top: 1px solid ' . $t1 . ';') :
		'') .
' text-align: left; font-size: 1em;}
#noisette_miniagenda.noisette .contenu table#footer_evenements td{line-height:1.1em;}
#noisette_miniagenda.noisette .contenu table#footer_evenements td.footer_colg {padding: 1px; font-weight: bold;
	' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_agenda/format_resume','d-m H:i',false) == 'd-m H:i') ? 'width: 37% !important /*FF*/;width: 66px /*IE*/':'width: 20% !important /*FF*/;width: 36px /*IE*/'))))!=='' ?
		($t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table#footer_evenements td.footer_cold {padding: 1px;
	' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_agenda/format_resume','d-m H:i',false) == 'd-m H:i') ? 'width: 63% !important /*FF*/;width: 112px /*IE*/':'width: 80% !important /*FF*/;width: 142px /*IE*/'))))!=='' ?
		($t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table#footer_evenements td.footer_cold a {font-weight: normal; ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}
#noisette_miniagenda.noisette .contenu table#footer_evenements td.footer_cold a:hover {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_noisette','#808080',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}

/* Styles specifiques pour la noisette Rainette */
#noisette_rainette.noisette .contenu .texte .maj {text-align: center;}
#noisette_rainette.noisette .contenu .texte .resume {text-align: center; font-size: 1.2em; font-weight: bold;margin: 10px 0}
#noisette_rainette.noisette .contenu .texte .resume ul{font-weight: normal; margin-top: 5px;font-size: 0.9em;}
#noisette_rainette.noisette .contenu .texte .resume li{}
#noisette_rainette.noisette .contenu .texte .temperature {font-size: 2em; font-weight: bold; margin: 0 5px;}
#noisette_rainette.noisette .contenu .texte .previsions {font-size: 1.3em;}
#noisette_rainette.noisette .contenu .texte .temperature img {float:left;}
#noisette_rainette.noisette .contenu .texte .temperature p {padding: 30px 0 0 90px;}
#noisette_rainette.noisette .contenu .texte .liens {text-align: center;}
.pave-prevision {overflow: hidden; float: left; width: 168px; height: 190px;}
.conteneur_selection {overflow: hidden; float: left; width: 168px; height: 190px;}

/* Styles specifiques pour la noisette Nuage de mots */
#noisette_nuage.noisette .contenu ul.nuage {padding:5px;}
#noisette_nuage.noisette .contenu ul.nuage a {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_noisette','#808080',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}

/* Menus vertical des rubriques et raccourcis inseres dans les colonnes extra et navigation */
/* Navigation dans les rubriques - arborescence deroulante */
.menu_rub1 { padding: 0; font-size: 1.2em;' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['css_align'] : "")))!=='' ?
		(' text-align: ' . $t1 . ';') :
		'') .
'}
.menu_rub1 ul.menulist,
.menu_rub1 ul.menulist ul {
	 background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	 ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#ffffff',false))))!=='' ?
		('border: 1px solid ' . $t1 . '; ') :
		'') .
'
	 border-bottom: 0;
	 list-style: none;
	 z-index: 500;
	 margin: 0;
	 padding: 0;
	 line-height:1.2em;
	 width:178px;}

.menu_rub1 ul.menulist ul {position: absolute; top: -1px; ' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['css_align'] : "")))!=='' ?
		(' ' . $t1 . ': 178px;') :
		'') .
'}
.menu_rub1 ul.menulist li {position: relative; margin: 0; padding: 0;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#FFFFFF',false))))!=='' ?
		(' border-bottom: 1px solid ' . $t1 . ';') :
		'') .
'}
.menu_rub1 ul.menulist li ul {display:none;}
.menu_rub1 ul.menulist li:hover>ul {display:block;}

.menu_rub1 ul.menulist a {
	 background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'text-decoration: none; display: block; padding: 5px;}

.menu_rub1 ul.menulist a:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_menu','none',false))))!=='' ?
		('text-decoration: ' . $t1 . ';') :
		'') .
'}
.menu_rub1 ul.menulist li.smenu, .menu_rub1 ul.menulist li.smenu>a {
	 background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts((find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))) ? '':' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(find_in_path((	'images/arrow_from_' .
		(is_array($a = ($Pile["vars"])) ? $a['css_align'] : "") .
		'.gif')))))!=='' ?
			('background-image: url(' . $t2 . (	');
	' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['css_bg_position'] : "")))!=='' ?
				(' background-position: ' . $t3 . 'px;') :
				'') .
		'
	background-repeat: no-repeat;')) :
			''))) :
		'') .
'}
.menu_rub1 ul.menulist li.smenu:hover, .menu_rub1 ul.menulist li.smenu>a:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts((find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))) ? '':' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(find_in_path('images/arrow_from_top.gif'))))!=='' ?
			('background-image: url(' . $t2 . (	');
	' .
		(($t3 = strval(moins((is_array($a = ($Pile["vars"])) ? $a['css_bg_position'] : ""),'3')))!=='' ?
				(' background-position: ' . $t3 . 'px;') :
				'') .
		'
	background-repeat: no-repeat;')) :
			''))) :
		'') .
'}
.menu_rub1 ul.menulist a.menu_articles {}
.menu_rub1 ul.menulist a.menu_articles:hover {}

/* Navigation dans les rubriques - arborescence depliee */
.menu_rub2 {font-size: 1.2em; border: 0; font-weight: normal;}
.menu_rub2 ul {margin: 0; padding: 0; list-style: none;}
.menu_rub2 ul li { margin: 0; padding: 0; border: 0; line-height: 1.3em;}
.menu_rub2 ul li a {
	display: block; width: 158px; margin-bottom: 0; padding: 5px 10px; 
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#ffffff',false))))!=='' ?
		('border: 1px solid ' . $t1 . '; ') :
		'') .
'border-top: 0;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}

.menu_rub2 ul li a#m1 {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#6262a4',false))))!=='' ?
		('border-top: 1px solid ' . $t1 . ';') :
		'') .
'}
.menu_rub2 ul li ul li a {
	display: block; width: 148px; margin-bottom: 0; padding: 5px 10px 5px 20px; 
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_rub2 ul li ul li ul li a {
	display: block; width: 138px; margin-bottom: 0; padding: 5px 10px 5px 30px; 
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_rub2 a.on {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'font-weight: bold;}
.menu_rub2 a:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_menu','none',false))))!=='' ?
		('text-decoration: ' . $t1 . ';') :
		'') .
'}

/* Navigation dans les rubriques - arborescence accordeon a ouverture automatique */
.menu_rub3 {width: 100%; padding:0; font-size: 1.2em;}
.menu_rub3 .cache {padding-left:10%; width: 90%; background: none; display: none;}
.menu_rub3 .cache a {
	display: block;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#ffffff',false))))!=='' ?
		(' border-top: 1px solid ' . $t1 . ';') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_rub3 .cache a.on {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_rub3 ul.menulist {background: none; border: 0; list-style: none; z-index: 500; margin: 0; padding: 0; line-height: 1.2em}
.menu_rub3 ul.menulist li {position: relative; margin: 0; padding: 0;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#ffffff',false))))!=='' ?
		(' border-bottom: 1px solid ' . $t1 . ';') :
		'') .
'}
.menu_rub3 ul.menulist a {
	display: block; text-decoration: none; padding: 5px;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . '; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_rub3 ul.menulist a:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}
.menu_rub3 ul.menulist a.on {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'}

/* Bloc de menus des raccourcis de navigation*/
.nav2 {font-size: 1.2em; width: 178px;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_noisette','#808080',false))))!=='' ?
		('border: 1px solid ' . $t1 . ';') :
		'') .
'}
.nav2 ul {padding: 5px 0; margin: 0}
.nav2 li {
	list-style: none; margin: 5px 10px; line-height: 1.4em;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu','#ffffff',false))))!=='' ?
		(' border: ' . $t1 . ' solid 1px;') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'}
.raccourci_nav1 {text-align: center;}
.raccourci_nav1 a {display: block; width: 100%;' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu','#ffffff',false))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'}
.raccourci_nav1 a:hover {
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_menu','none',false))))!=='' ?
		('text-decoration: ' . $t1 . '; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu','#ffffff',false))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'}
.nav2 .auteur {margin: 7px 10px; padding-top: 3px; padding-bottom: 2px; text-align: center;	background: transparent; border: 0;}

/* Menu horizontal dans le bandeau bas */
' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_bandeau/menu_align','0',false) != '0')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['largeur_menu'] = interdire_scripts(lire_config('sarkaspip_bandeau/menu_largeur','600',false))) .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_bandeau/item_largeur','150',false) != '0')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['largeur_item'] = interdire_scripts(lire_config('sarkaspip_bandeau/item_largeur','150',false))) .
	'
')) :
		'') .
'
' .
vide($Pile['vars']['position_fleche'] = moins((is_array($a = ($Pile["vars"])) ? $a['largeur_item'] : ""),'8')) .
'.menu_horiz{font-size:1.2em;
	' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['largeur_menu'] : "")))!=='' ?
		(' width: ' . $t1 . 'px;') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_bandeau/menu_align','0',false) == '0')) ?' ' :''))))!=='' ?
		($t1 . ' margin: 0 15px 0;') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((lire_config('sarkaspip_bandeau/menu_align','0',false) != '0')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/menu_align','0',false))))!=='' ?
			(' margin: 0 ' . $t2 . ' 0;') :
			'')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/bas_minheight','23',false))))!=='' ?
		(' min-height: ' . $t1 . 'px;') :
		'') .
'
}
.menu_horiz, .menu_horiz ul {list-style: none; line-height: 1; padding: 0;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/bas_minheight','23',false))))!=='' ?
		(' min-height: ' . $t1 . 'px;') :
		'') .
'
}
.menu_horiz ul{width:100%; margin: 0; float: left;}

.menu_horiz a {display: block; text-decoration: none; padding: 5px 10px;
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fg_menu_horiz','#ffffff',false))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu_horiz','#6262a4',false))))!=='' ?
		(' border-left: ' . $t1 . ' solid 1px;') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/item_align','left',false))))!=='' ?
		(' text-align: ' . $t1 . ';') :
		'') .
'
}
.menu_horiz a#mh_n1 {border-left: none;}
.menu_horiz a.it_n1 {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu_horiz','#6262a4',false))))!=='' ?
		(' border-top: ' . $t1 . ' solid 1px;') :
		'') .
'}
.menu_horiz a.pere {' .
(($t1 = strval(interdire_scripts(find_in_path('images/arrow_from_left.gif'))))!=='' ?
		(' background: url(' . $t1 . ') center right no-repeat;') :
		'') .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['position_fleche'] : "")))!=='' ?
		(' background-position: ' . $t1 . 'px;') :
		'') .
'}
.menu_horiz a.pere:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/arrow_from_top.gif'))))!=='' ?
		(' background: url(' . $t1 . ') center right no-repeat;') :
		'') .
(($t1 = strval(moins((is_array($a = ($Pile["vars"])) ? $a['position_fleche'] : ""),'3')))!=='' ?
		(' background-position: ' . $t1 . 'px;') :
		'') .
'}
.menu_horiz a:hover {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/td_menu_horiz','none',false))))!=='' ?
		(' text-decoration: ' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ho_menu_horiz','#ffffff',false))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'}

.menu_horiz li {float: left; padding: 0;' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['largeur_item'] : "")))!=='' ?
		(' width: ' . $t1 . 'px;') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_menu_horiz','#6262a4',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_menu_horiz' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_menu_horiz','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_menu_horiz',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_horiz li ul {position: absolute; left: -999em; height: auto; font-weight: normal;	margin: 0;	padding: 0;
	' .
(($t1 = strval(plus((is_array($a = ($Pile["vars"])) ? $a['largeur_item'] : ""),'10')))!=='' ?
		('width: ' . $t1 . 'px;') :
		'') .
'
}
.menu_horiz li li {padding: 0 ; overflow : hidden;
  ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu_horiz','#6262a4',false))))!=='' ?
		(' border-right: ' . $t1 . ' solid 1px;') :
		'') .
'
  border-left: none;
  clear:left;
  }

.menu_horiz li ul ul {margin: -' .
(($t1 = strval(interdire_scripts(plus(lire_config('sarkaspip_bandeau/bas_minheight','23',false),'1'))))!=='' ?
		($t1 . 'px') :
		'') .
' 0 0 ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_bandeau/item_largeur','150',false))))!=='' ?
		($t1 . 'px') :
		'') .
';}
.menu_horiz li:hover ul ul, .menu_horiz li:hover ul ul ul, .menu_horiz li:hover ul ul ul ul,
.menu_horiz li.sfhover ul ul, .menu_horiz li.sfhover ul ul ul, .menu_horiz li.sfhover ul ul ul ul {left: -999em;}
.menu_horiz li:hover ul, 
.menu_horiz li li:hover ul, 
.menu_horiz li li li:hover ul,
.menu_horiz li li li li:hover ul {left: auto;}
.menu_horiz li.sfhover ul {left:auto;}
.menu_horiz li li.sfhover ul,
.menu_horiz li li li.sfhover ul,
.menu_horiz li li li li.sfhover ul {left: auto;}
.menu_horiz li:hover,
.menu_horiz li.sfhover {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_menu_horiz','#323284',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_hover_menu_horiz' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_menu_horiz','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_menu_horiz',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.menu_horiz li li a, .menu_horiz li li li a {' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/ca_menu_horiz','#6262a4',false))))!=='' ?
		(' border-bottom: ' . $t1 . ' solid 1px;') :
		'') .
'}');

	return analyse_resultat_skel('html_c250f17f58bbf6ca5d13380bc5d70649', $Cache, $page, 'plugins/sarkaspip_31/css/noisettes.css.html');
}
?>