<?php

/*
 * Squelette : plugins/sarkaspip_31/css/elements.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/elements.css.html
// Temps de compilation total: 52.339 ms
//

function html_b2b3c3816baf8925a2ebefa397cbc44b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'/* ELEMENTS.CSS                                                         */
/* Cette feuille contient:                                              */
/* - les styles de la partie centrale du site                           */
/* -------------------------------------------------------------------- */

/* -------------------------------------------------------------------- */
/* 	Styles des titres de page                                           */
/* -------------------------------------------------------------------- */
/* Titre generique */
.titre h1 {font-weight: bold; margin: 0 0 5px; padding-bottom: 5px;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';
	border-bottom: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
	
/* Boutons de fonction positionnes a droite du titre */
a.fonction {display: block; float: right; width: 24px; height: 24px; margin-left: 10px;}
a.fonction.repondre_commentaire {width: 16px; height: 16px; margin-right: 0;' .
(($t1 = strval(interdire_scripts(find_in_path('images/commentaire_repondre.gif'))))!=='' ?
		(' background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#commenter {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_commenter.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#signer {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_commenter.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#creer_pdf {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_pdf.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#voir_commentaires {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_commentaires.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#voir_signatures {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_signatures.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
#recommander {' .
(($t1 = strval(interdire_scripts(find_in_path('images/article_recommander.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}
a.fonction.revenir_haut_page {' .
(($t1 = strval(interdire_scripts(find_in_path('images/arrow_to_top.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-repeat: no-repeat;}

/* -------------------------------------------------------------------- */
/* 	Styles du cartouche (auteurs, date, popularite, notation)           */
/* -------------------------------------------------------------------- */
.cartouche { font-weight: normal; font-size: 1.1em; line-height: 1.1em; text-align: right; margin: 0 0 30px 10px; padding: 0; float: right;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.complements {font-weight: normal; margin: 10px 0 5px; font-size: 1.1em;}

/* -------------------------------------------------------------------- */
/* 	Styles de la description (champs editoriaux)                        */
/* -------------------------------------------------------------------- */
/* Styles generiques */
.description {margin: 10px 0 30px; font-size: 1.2em; line-height: 1em;}
.description li {margin-left: 10px;	line-height: 1.4em;}
.description p {font-size: 1em;}
.description .soustitre {float: none; line-height: 1em; font-size: 1.4em; font-weight: bold; font-style: italic; margin: 0; padding: 0;
	 color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .chapo {margin: 0 0 30px; font-style: italic; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .texte {}
.description .lien_site {margin: 10px 0 20px; padding-top: 10px; font-size: 1em; 
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .ps {margin: 10px 0 20px; padding-top: 10px; font-size: 1em; 
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .notes {margin: 10px 0 20px; padding-top: 10px; font-size: 1em; 
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .filles {margin: 10px 0 20px; padding-top: 10px; font-size: 1em; 
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .filles a {padding: 0 0 0 15px; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce0.jpg'))))!=='' ?
		('background: transparent url(' . $t1 . ') left center no-repeat; ') :
		'') .
'text-decoration: none;}
.description .filles a:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce1.jpg'))))!=='' ?
		('background: transparent url(' . $t1 . ') left center no-repeat; ') :
		'') .
';text-decoration: none;}

/* -------------------------------------------------------------------- */
/* 	Styles des messages d\'avertissement                                 */
/* -------------------------------------------------------------------- */
.avertissement {margin-top: 20px; padding: 10px; background: #f0d0d0; border: 1px solid red; font-size: 1.2em;}
.formulaire_spip .avertissement {margin: 0 0 20px 0; padding: 10px; background: #f0d0d0; border: 1px solid red; font-size: 1em;}

/* -------------------------------------------------------------------- */
/* 	Styles des blocs type portfolio (images, documents joints, breves)  */
/* -------------------------------------------------------------------- */
/* Styles generiques */
.portfolio {clear: both; margin-bottom: 30px; padding-top: 2px;width:100%;}
.portfolio h2 {font-size: 1.9em; line-height: 1em; font-weight: bold; margin: 0 0 10px; padding: 0 0 5px 20px;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';
	border-bottom: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
	
/* Portfolio des images jointes */
.portfolio a img {margin: 10px 10px; border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_portfolio','#eeeeee',false)) .
';}
.portfolio a:hover img {border-color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_portfolio','#6262a4',false)) .
';}

/* Portfolio des documents jointes */
.portfolio dl {' .
(($t1 = strval(interdire_scripts(eval('return '.'_SARKASPIP_CONFIG_LARGEUR_DOCUMENT'.';'))))!=='' ?
		('width: ' . $t1 . 'px; ') :
		'') .
'height: 11em; text-align: center; margin: 10px; float: left;}
.portfolio dt {' .
(($t1 = strval(interdire_scripts(eval('return '.'_SARKASPIP_CONFIG_LARGEUR_DOCUMENT'.';'))))!=='' ?
		('width: ' . $t1 . 'px; ') :
		'') .
'font-weight: bold;}
.portfolio dt a img {border: 0;}
.portfolio dt a:hover img {border: 0;}
.portfolio dd {' .
(($t1 = strval(interdire_scripts(eval('return '.'_SARKASPIP_CONFIG_LARGEUR_DOCUMENT'.';'))))!=='' ?
		('width: ' . $t1 . 'px; ') :
		'') .
'margin: 0; padding: 0;}

/* -------------------------------------------------------------------- */
/* 	Styles des blocs de type commentaires                               */
/* -------------------------------------------------------------------- */
.commentaires {padding: 0 0 10px 0; margin: 0 0 30px 0; clear: both;}
.commentaires h2 {font-size: 1.9em; line-height: 1.2em; font-weight: bold; padding: 0 0 5px 20px; margin: 0;
	' .
(($t1 = strval(interdire_scripts(find_in_path('images/commentaires.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_commentaire','#6262a4',false)) .
';
	border-bottom: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_commentaire','#6262a4',false)) .
';}
.commentaires h2.date {margin-top:30px; padding: 0 0 5px 20px;' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_syndics.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
.commentaires .message {margin: 0; padding: 10px 0 10px;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_commentaire','transparent',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_commentaire' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_commentaire','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_commentaire',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_commentaire','#6262a4',false)) .
';}
.commentaires .message:hover {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_commentaire','#f0f0fa',false)) .
';}
.commentaires #co_n1.message,.commentaires .co_n1 {border-top: 0; padding: 20px 0 10px;}
.commentaires .message .titre {font-size: 1.2em; font-weight:bold; margin:0 0 10px 50px;}
.commentaires .message .gravatar {float:left}
.commentaires .message .cartouche_simple {margin-left: 50px; font-size: 1.1em;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_commentaire','#6262a4',false)) .
';}
.commentaires .message .texte{margin-left : 50px; padding-top: 5px;font-size:1.2em;line-height:1.1em;}
.commentaires .message .texte ul li{border-top:none;}
.commentaires ul { line-height: 1.1em;}
.commentaires ul#exif {width:50%;margin : 0 auto;text-align:center;border:1px dotted;}
.commentaires li {padding:10px 0; height:auto; border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_commentaire','#6262a4',false)) .
';}
.commentaires li:hover {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_commentaire','#f0f0fa',false)) .
';}
.commentaires a.titre{padding-top: 5px; margin: 0; font-size: 1.3em; font-weight: bold; line-height:1em; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_commentaire','#6262a4',false)) .
';}
.commentaires li .cartouche{margin : 0 0 10px 10px; font-size: 1.1em;}
.commentaires li .complements{font-size: 1.1em;}

/* -------------------------------------------------------------------- */
/* 	Styles des blocs de type extraits                                   */
/* -------------------------------------------------------------------- */
.extrait {margin: 0 0 20px;	padding: 0 0 10px 15px;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_extrait','transparent',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_extrait' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_extrait','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_extrait',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	border-left: 5px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_extrait','#6262a4',false)) .
';
	border-bottom: 1px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_extrait','#6262a4',false)) .
';}
.extrait h3 a.titre {display: block; padding-top: 5px; margin: 0; font-size: 1.6em; font-weight: bold; line-height:1em; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_extrait','#6262a4',false)) .
';}
.extrait h3 a.titre:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_extrait','#6262a4',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_extrait','underline',false)) .
';}
.extrait .cartouche {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_extrait','#6262a4',false)) .
';}
.extrait .lire_suite {text-align: left; margin: 10px 0 0; font-size: 1.1em;}
.extrait .cartouche a, .extrait .complements a  {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_extrait_lien','#990000',false)) .
'; text-decoration: none;}
.extrait .lire_suite a {padding: 0 0 5px 20px;' .
(($t1 = strval(interdire_scripts(find_in_path('images/lire_suite.gif'))))!=='' ?
		(' background: url(' . $t1 . ') left center no-repeat;') :
		'') .
'
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_extrait_lien','#990000',false)) .
'; text-decoration: none;}
.extrait .cartouche a:hover, .extrait .complements a:hover, .extrait .lire_suite a:hover {
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_extrait_lien','#990000',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_extrait_lien','underline',false)) .
';}
.extrait .introduction {margin: 10px 0 0; font-size:1.2em; line-height : 1.4em;}

/* -------------------------------------------------------------------- */
/* 	Styles des blocs de type arbre (plan, agenda)                       */
/* -------------------------------------------------------------------- */
.arbre {margin: 0; padding-bottom: 10px;}
.arbre ul { list-style-type: none; padding: 0; margin: 0; font-size: 1em; line-height: 1em;}
.arbre ul li {font-weight: bold; padding: 5px 10px 10px; margin: 0 0 15px; 
	border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_arbre','#888888',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_arbre','#eeeeee',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_arbre' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_arbre','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_arbre',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
.arbre ul li li {padding: 0 0 0 15px; margin: 0; border: 0; background: none;}
.arbre ul li li li {padding: 0 0 0 15px; margin: 0; border: 0; background: none;}
.arbre .noeud {padding: 5px 0 5px 15px; font-size: 1.5em; line-height: 1.4em; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_arbre_noeud','#888888',false)) .
';}
.arbre a.noeud:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce0.jpg'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-position: left center; background-repeat: no-repeat; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_arbre_noeud','#888888',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_arbre_noeud','none',false)) .
';}
.arbre a.feuille {padding: 0 0 0 15px; font-size: 1.1em; font-weight: normal; line-height: 1.2em;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_arbre_feuille','#6262a4',false)) .
';}
.arbre a.feuille:hover {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n0.gif'))))!=='' ?
		('background-image: url(' . $t1 . '); ') :
		'') .
'background-position: left center; background-repeat: no-repeat; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_arbre_feuille','#888888',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_arbre_feuille','underline',false)) .
';}
.arbre a.feuille .date {}

/* -------------------------------------------------------------------- */
/* 	Styles des blocs de type planches                                   */
/* -------------------------------------------------------------------- */
.planche {margin-top: 30px;}
.planche h2 {font-size: 1.9em; line-height: 1em; font-weight: bold; margin: 0 0 10px; padding: 0 0 5px 20px;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';
	border-bottom: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.planche ul {margin: 0; padding: 0; list-style-type: none;}
.planche li {width: 45%; min-height: 18em; float: left; margin: 0 0 20px; padding: 10px 0;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_planche','transparent',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_planche' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_planche','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_planche',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_planche','#6262a4',false)) .
';}
.planche li.n1 {border-top: 0;}
.planche li.gauche {margin-right: 20px;}
.planche li.droite {margin-left: 20px; float: right;}
.planche h3 a.titre {display: block; padding-top: 5px; margin: 0; font-size: 1.6em; font-weight: bold; line-height:1em; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_planche','#6262a4',false)) .
';}
.planche h3 a.titre:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_planche','#6262a4',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_planche','underline',false)) .
';}
.planche .complements {font-weight: normal; margin: 10px 0 5px; font-size: 1.1em;}
.planche .cartouche {text-align: left; margin: 0; float: none;}
.planche .cartouche a, .planche .complements a  {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_planche_lien','#990000',false)) .
'; text-decoration: none;}
.planche .cartouche a:hover, .planche .complements a:hover {
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_planche_lien','#990000',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_planche_lien','underline',false)) .
';}
.planche a img {float:right; margin: 0 0 5px 5px; border: 4px solid  ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_planche_logo','#eeeeee',false)) .
';}
.planche a:hover img {border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_planche_logo','#6262a4',false)) .
';}
.planche .introduction {margin: 10px 0 0;font-size:1.2em;line-height:1.4em;}

/* -------------------------------------------------------------------- */
/* 	Styles specifiques a chaque page                                    */
/* -------------------------------------------------------------------- */
/* Style specifique a la notation (plugin Notation) */
.description .plugin {margin: 10px 0 0; padding-top: 10px; font-size: 1em; line-height: 1.6em; 
	border-top: 1px dotted ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}
.description .notation div.star-rating a {border: 0; text-align: left;}
.description .notation .note { color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_description','#6262a4',false)) .
';}

/* Style specifique aux bookmarks sur les reseaux sociaux (plugin Social Tags) */
.description .socialtags {margin: 0; padding: 0;}

/* Titres de blocs */
#images_jointes.portfolio h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/portfolio_images.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#documents_joints.portfolio h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/portfolio_documents.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#articles_recents.portfolio h2,
#article_commentaire.portfolio h2,
#articles_auteur.portfolio h2,
#articles_rubrique.portfolio h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_articles.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#breves_site.commentaires h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_breves.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#sites_site.portfolio h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_sites.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
.portfolio h2.jalon {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_tickets.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}

/* Page rubrique */
.rubrique {margin: 0; padding-bottom: 10px;}
.rubrique .titre {}
.rubrique .titre h1 {margin: 0 0 35px;}

/* Page article */
.article {margin: 0; padding-bottom: 10px;}
.article .cartouche {font-size: 0.92em}

/* -- Styles des petitions de l\'article */
#signatures.commentaires h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_signatures.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#signatures.commentaires table{width: 100%; margin-top: 10px; font-size: 1.2em;}

/* Page sommaire */
/* -- Edito et une */
#edito.article, #une.article {margin: 0 0 30px; padding: 5px 10px; text-align: justify;}
#edito.article {
	border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_edito','#808080',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_edito','#eeeeee',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_edito' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_edito','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_edito',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
#une.article {
	border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_une','#808080',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_une','#eeeeee',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_une' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_une','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_une',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';}
#edito.article .titre, #edito.article .soustitre, #une.article .titre, #une.article .soustitre {}
#edito.article .titre h1, #une.article .titre h1 {border: 0;}
#edito.article a.fonction, #une.article a.fonction {display: none;}
#edito.article .cartouche, #une.article .cartouche {font-size: 1.2em}
#une.article .complements {font-size: 0.91em; margin-bottom: 10px;}

/* -- Albums recents */
#albums_recents.planche h2,
#albums_auteur.planche h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_albums.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#albums_recents.planche li,
#albums_auteur.planche li {
	' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/album_1_colonne','0',false)) ?'' :' '))))!=='' ?
		($t1 . 'min-height: 18em;') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_sommaire/album_1_colonne','0',false)) ?' ' :''))))!=='' ?
		($t1 . 'width: 100%;') :
		'') .
'}

/* Page evenement */
#evenement.article .cartouche {text-align: left; float: left; margin: 0 10px 30px 0;}

/* Page auteur */
.auteur {margin: 0; padding-bottom: 10px;}
#albums_auteur.planche li {' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_auteur/album_1_colonne','0',false)) ?' ' :''))))!=='' ?
		($t1 . 'width: 100%;') :
		'') .
'}

/* Page site */
.site {margin: 0; padding-bottom: 10px;}

/* -- Thumbshot du site */
.site a img {margin: 0 0 10px 10px; border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_planche_logo','#eeeeee',false)) .
';}
.site a:hover img{border-color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_planche_logo','#6262a4',false)) .
';}

/* -- Liste des articles syndiques */
#articles_syndiques.commentaires h2 {' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_syndics.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#articles_syndiques.commentaires .titre {margin: 0;}
#articles_syndiques.commentaires .texte{margin: 5px 0 0;}
.site .description li {margin-left: 0; margin-bottom: 10px;}
.site .description li:hover {background:' .
interdire_scripts(lire_config('sarkaspip_styles/hb_commentaire','#f0f0fa',false)) .
';}

/* Page galerie */
.galerie {margin: 0; padding-bottom: 10px;width:100%;}
.galerie .planche li {' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_galerie/album_1_colonne','0',false)) ?' ' :''))))!=='' ?
		($t1 . 'width: 100%; min-height: 0;') :
		'') .
'}

/* Page Herbier */
.herbier {margin: 0; padding-bottom: 10px;width:100%;}
.herbier .planche li {width: 100%; min-height: 0;}

/* Page Recherche */
.recherche {margin: 0; padding-bottom: 10px; width:100%;}
#recherche_rubrique.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/portfolio_documents.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_mot_article.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_breves.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_breve.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_breves.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_site.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_sites.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_commentaire.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/commentaires.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_article.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/liste_articles.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_album.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/portfolio_images.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}
#recherche_evenement.commentaires h2 {margin:0; ' .
(($t1 = strval(interdire_scripts(find_in_path('images/evenement.gif'))))!=='' ?
		('background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}

/* Page album */
.album {padding: 0 0 10px 0; margin: 0 0 30px 0; clear: both; width:100%;}
.carrousel {display: block; margin: 0 0 20px; padding: 10px 0}
#a_defilement.carrousel {overflow: hidden; position: relative;}
.carrousel .contenu {margin: 0 auto; position: relative;}
#a_pagination.carrousel .contenu li {display: block; float: left;}
.carrousel .contenu .vignette a img {margin-right: 5px; border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_carrousel','#eeeeee',false)) .
';}
.carrousel .contenu .vignette a:hover img {border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_carrousel','#6262a4',false)) .
';}
.carrousel .contenu .vignette a.survol {display:none;position:absolute;background: transparent url(' .
interdire_scripts(find_in_path('images/pointeur_bas.gif')) .
') no-repeat bottom center;}
.carrousel .contenu .vignette a.survol img {margin: 0; border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_carrousel','#6262a4',false)) .
';}
.carrousel .navigation {margin: 10px 0 20px; text-align: center; font-size: 1.2em; font-weight: bold;}
.carrousel .navigation a {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_pagination','transparent',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pagination','#6262a4',false)) .
';}
.carrousel .navigation a:hover {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_pagination','#f0f0a4',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_pagination','#6262a4',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_pagination','none',false)) .
';}
.carrousel .pagination {margin: 10px 0 20px; text-align: center; font-weight: bold;}

.carrousel .contenu ul.vignettes span {' .
(($t1 = strval(interdire_scripts(plus(eval('return '.'_SARKASPIP_CONFIG_TAILLE_MAX_VIGNETTE_4'.';'),'8'))))!=='' ?
		('width: ' . $t1 . 'px;') :
		'') .
'}/* max thumbnail width + 2px */
.carrousel .contenu ul.vignettes span.wrap1 {margin: 0 5px 5px 5px; display: inline-block; vertical-align: top; text-align: center;}
.carrousel .contenu ul.vignettes span.wrap2 {' .
(($t1 = strval(interdire_scripts(plus(eval('return '.'_SARKASPIP_CONFIG_TAILLE_MAX_VIGNETTE_4'.';'),'16'))))!=='' ?
		('height: ' . $t1 . 'px; ') :
		'') .
'
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_carrousel','transparent',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_carrousel' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_carrousel','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_carrousel',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_carrousel','#eeeeee',false)) .
'; display: table-cell; vertical-align: middle;}
.carrousel .contenu ul.vignettes span.wrap2:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_carrousel','#888888',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/hb_carrousel' .
	interdire_scripts(lire_config('sarkaspip_styles/hi_extension_carrousel','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/hi_proprietes_carrousel',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
'; 
	border: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ch_carrousel','#6262a4',false)) .
';}
.carrousel .contenu ul.vignettes span.wrap2 a {display: block; ' .
(($t1 = strval(interdire_scripts(plus(eval('return '.'_SARKASPIP_CONFIG_TAILLE_MAX_VIGNETTE_4'.';'),'8'))))!=='' ?
		('width: ' . $t1 . 'px;') :
		'') .
'}      /* max thumbnail width + 2px */
.carrousel .contenu ul.vignettes span.titre {
	display: block;  
	height: 4em;    
	padding-top: 5px;
	font-size: 90%; overflow: hidden;
	margin-left:auto;
	margin-right:auto;
	line-height : 1.2em;
}

.zoom {display: block; margin: 0 0 20px; padding: 10px 0;}
.zoom #conteneur_photo {padding:0; margin: 0 0 10px;}
.zoom #titre_photo {padding:0; margin: 0 0 20px; font-size: 1.2em; font-weight: bold; text-align: center;}
.zoom #descriptif_photo {padding:0; margin: 0 0 20px;}
.zoom #exif_photo {padding:0; margin: 0 0 20px;}

#exif_photo.commentaires table{width: 300px;  font-family: verdana; border: 0; margin :0 auto;}
#exif_photo.commentaires table tr{height: 20px;}
#exif_photo.commentaires table td.titre {background-color : #EFEFEF; padding: 0 5px; border-bottom : 1px dotted #000000; font-weight:bold;height: 20px;}
#exif_photo.commentaires table td.minilogo {text-align: right; height: 20px;}
#exif_photo.commentaires table td.colonne1{width: 130px; font-size: 90%; text-align: right; padding: 5px;}
#exif_photo.commentaires table td.colonne2{width: 170px;}
');

	return analyse_resultat_skel('html_b2b3c3816baf8925a2ebefa397cbc44b', $Cache, $page, 'plugins/sarkaspip_31/css/elements.css.html');
}
?>