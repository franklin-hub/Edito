<?php

/*
 * Squelette : plugins/sarkaspip_31/css/base.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/base.css.html
// Temps de compilation total: 27.607 ms
//

function html_a20e74cfe881a5142cb3331d1bb1db5f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'/* BASE.CSS                                                             */
/* Cette feuille contient:                                              */
/* - les styles associes au code genere par SPIP 2.0                    */
/* - les styles des formulaires de SPIP 2.0                             */
/* - les styles de la pagination SPIP                                   */
/* - les styles generaux propres au squelette                           */
/* -------------------------------------------------------------------- */

/* -------------------------------------------------------------------- */
/* 	Styles de Typographie generale generes par SPIP (spip_styles.css)   */
/* -------------------------------------------------------------------- */
strong {font-weight: bold;}
em {font-style: italic;}

/* Titraille / Intertitres */
h3.spip {
	font-weight: bold;	font-size: 1.3em; margin: 2em 0 0.5em 0; text-align: left; line-height: 1.1em;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_intertitre','#6262a4',false)) .
';}
hr.spip {} /*Cf.: spip_style.css*/

/* Listes SPIP */
/* -- Puces generees par un tiret suivant d\'un ou plusieurs asterisques (ex: -* blabla...) */
/* -- Ces puces sont incluses dans une balise <ul class="spip"> et le code de chaque item est <li class="spip"> */
ul.spip {padding: 0; margin: 5px 0 10px 20px;}
ul.spip li {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n0.gif'))))!=='' ?
		('list-style-image: url(' . $t1 . '); ') :
		'') .
'padding: 0; margin: 5px 0 0 0; line-height: 1.4em;}
ul.spip ul.spip li {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n1.gif'))))!=='' ?
		('list-style-image: url(' . $t1 . ');') :
		'') .
' line-height: 1.4em;}
ul.spip ul.spip ul.spip li {' .
(($t1 = strval(interdire_scripts(find_in_path('images/puce-n2.gif'))))!=='' ?
		('list-style-image: url(' . $t1 . ');') :
		'') .
' line-height: 1.4em;}
/* -- Puces generees par un tiret suivant d\'un ou plusieurs diese (ex: -# blabla...) */
/* -- Ces puces sont incluses dans une balise <ol class="spip"> et le code de chaque item est <li class="spip"> */
ol.spip {padding: 0; margin: 5px 0 10px 20px;}
ol.spip li {list-style-type: decimal; list-style-image: none; list-style-position: outside;	padding: 0; margin: 5px 0 0 0; line-height: 1.4em;border:none;}
ol.spip ol.spip li {list-style-type: decimal; line-height: 1.4em;}
ol.spip ol.spip ol.spip li {list-style-type: decimal; line-height: 1.4em;}

/* Citations, code et poesie */
/* -- Citations et poésie */
blockquote.spip {
	display: block; padding: 0 1em; font-style: italic; overflow: auto;
	border-left: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_quote','#990000',false)) .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_citation','#000000',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_citation','#eeeeee',false)) .
';}
blockquote.spip_poesie {font-family: inherit; border: 0; line-height: 1.2em;}
blockquote.spip_poesie div {} /*Cf.: spip_style.css*/
/* -- Code et cadre y compris la prise en compte du plugin Coloration Code */
.spip_code {display: inline; font-family: Courier, "Courier New", monospace; font-size: 1em;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_code','#669999',false)) .
';}
div.spip_code, .coloration_code .code {
	display: block; padding: 0 1em; margin: 1em 0; font-family: Courier, "Courier New", monospace; font-size: 1.2em; line-height:1.5em; overflow: auto; max-height: 25em;
	border-left: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_code','#669999',false)) .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_citation','#000000',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_citation','#eeeeee',false)) .
';} 
.coloration_code .code {font-size: 1em;} 
.coloration_code .code_download {margin-bottom: 1em;} 
.spip_cadre, .coloration_code .cadre {border: 0; padding: 0.5em 1em; width: 95%; font: inherit;
	border-left: 4px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_cadre','transparent',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_citation','#000000',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_citation','#eeeeee',false)) .
';}

/* Surlignage */
.spip_surligne {} /*Cf.: spip_style.css*/

/* Tableaux */
table.spip {font-size: 1em; border-color: transparent; line-height: 1.4em; border-collapse: inherit; border-spacing: 2px; margin-bottom: 1em;} 
table.spip caption {} /*Cf.: spip_style.css*/
table.spip tr.row_first {text-align: center;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_thead','#ffffff',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_thead','#808080',false)) .
';}
table.spip tr.row_odd {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_todd','#e0e0e0',false)) .
'; color: inherit}
table.spip tr.row_even {background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_teven','#eeeeee',false)) .
'; color: inherit}
table.spip td, table.spip th {padding: 0 10px}
table.spip th {border : none;} 
table.spip td {border : none;} 

/* Logos, documents et images */
img, .spip_logos {} /*Cf.: spip_style.css*/
.spip_documents {} 
.spip_documents_center {} /*Cf.: spip_style.css*/
.spip_documents_left {margin: 5px 15px 5px 0;} /*Cf.: spip_style.css*/
.spip_documents_right { margin: 5px 0 5px 15px;} /*Cf.: spip_style.css*/
.spip_doc_titre {} /*Cf.: spip_style.css*/
.spip_doc_descriptif {} /*Cf.: spip_style.css*/

/* modeles par defaut */
.spip_modele {}  /*Cf.: spip_style.css*/

/* Couleurs des liens de SPIP */
a {text-decoration:none; display: inline; padding: 0; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';}	
a.spip_note {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';} /* liens vers notes de bas de page */
a.spip_ancre {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_ancre.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'} /* liens internes a la page */
a.spip_in {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_in.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'} /* liens internes */
a.spip_out {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_out.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'} /* liens sortants */
a.spip_mail {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_mail.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'}
a.spip_mail:before {content: "";} /* liens vers un email */
a.spip_url {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_out.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'} /* liens url sortants */
a.spip_glossaire {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_lien','#990000',false)) .
';' .
(($t1 = strval(interdire_scripts(find_in_path('images/lien_glossaire.gif'))))!=='' ?
		(' background: transparent url(' . $t1 . ') right center no-repeat; padding-right: 14px;') :
		'') .
'} /* liens vers encyclopedie */
a.spip_glossaire:hover {color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_lien','#990000',false)) .
'; text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_lien','underline overline',false)) .
';}
a:hover {text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_lien','underline',false)) .
'; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_lien','#990000',false)) .
';}
.on {} /* liens exposes */

/* -------------------------------------------------------------------- */
/* 	Styles de la pagination generes par SPIP                            */
/* -------------------------------------------------------------------- */
.pagination {margin: 30px 0; padding: 0; font-size: 1.2em; text-align: right; text-decoration: none;
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pagination','#6262a4',false)) .
';}
.pagination .on {
	display:inline; padding: 2px 5px 0; font-weight: bold;
 	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_pagination_on','#6262a4',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pagination_on','#ffffff',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_pagination_on','none',false)) .
';}
.pagination a {
	display:inline; padding: 2px 5px 0; 
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_pagination','transparent',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_pagination','#6262a4',false)) .
';}
.pagination a:hover {
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/hb_pagination','#f0f0a4',false)) .
'; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ho_pagination','#6262a4',false)) .
';
	text-decoration: ' .
interdire_scripts(lire_config('sarkaspip_styles/td_pagination','none',false)) .
';}
.pagination a.ancre {display:none;}

/* -------------------------------------------------------------------- */
/*  Styles des formulaires SPIP                                         */
/* -------------------------------------------------------------------- */
input, textarea, select { font-size: 100%; font-family: inherit; }

/* Structure generale des formulaires */
.formulaire_spip {clear: both; margin-bottom: 30px; padding: 1em; border: 0; text-align: left; font-size: 1.2em; 
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form','#f0f0fa',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_form' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_form','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_form',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form','#000000',false)) .
';}
.formulaire_spip form { margin: 0; padding: 0; } /* Bug IE/Win */
.formulaire_spip .bugajaxie { display: none; } /* Bug IE/Win */

/* - Fieldset */
.formulaire_spip fieldset { clear: both; margin: 0 0 1em 0; padding: 0; border: 0; }
.formulaire_spip fieldset legend { margin: 0 0 10px; padding: 0; line-height: 1.2; font-size: 1.55em; font-weight: bold; 
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form','#f0f0fa',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_form' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_form','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_form',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form_legende','#000000',false)) .
'; } /* Preciser la couleur des legend pour IE/Win */
.formulaire_spip fieldset fieldset { margin-top: 1em; }
.formulaire_spip fieldset fieldset legend { font-size: 1em; font-weight: normal; }

/* - Explications */
.formulaire_spip .explication { margin: 0.50em 0; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form','#000000',false)) .
'; }

/* - Lignes */
.formulaire_spip ul { margin: 0; padding: 0; list-style: none; }
.formulaire_spip ul li { clear: both; margin: 0; padding: 0.50em 0; }
.formulaire_spip ul li.multi_critere{width: 50%; float: left;}

/* - Labels */
.formulaire_spip label { margin-bottom: 3px; display: block; text-align: left; font-weight: bold; /* for IE */ position: relative; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form_input','#000000',false)) .
'; }
.formulaire_spip li p { margin-top: 0; margin-bottom: 0; }

/* - Champs de saisie */
.formulaire_spip input.text {padding: 0.2em 0; width: 99%; background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';  border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}
.formulaire_spip textarea {padding: 0.2em 0; width: 99%; background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';  border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}
.formulaire_spip select { width: 99%; }

/* - Boutons */
.formulaire_spip .boutons { clear: both; margin: 0; padding: 0; text-align: right; }
.formulaire_spip .boutons input { margin-left: 1em; }
.formulaire_spip .boutons input, input.submit {}

/* Reponses, previsu et erreurs */
/* - Champs obligatoires */
.formulaire_spip li.obligatoire {}
.formulaire_spip li.obligatoire label { font-weight: bold; }

/* - Previsualisation du message */
.formulaire_spip fieldset.previsu { margin-bottom: 2em; padding: 1em; 
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_previsu','#f0f0fa',false)) .
';
	border: 2px dashed ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_previsu','#f57900',false)) .
'; }
.formulaire_spip fieldset.previsu legend { padding: 0 0.50em; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_previsu','#f57900',false)) .
'; font-weight: bold; }
.formulaire_spip fieldset.previsu li { padding: 3px; border: none; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form_previsu','#000000',false)) .
'}
.formulaire_spip fieldset.previsu .boutons input {}

/* - Reponse du formulaire */
.reponse_formulaire { font-weight: bold; color: #e86519; font-size: 1.20em; }
fieldset.reponse_formulaire { border-color: #e86519; font-weight: normal; }
fieldset.reponse_formulaire.reponse_formulaire legend { color: #F57900; } /* Preciser la couleur des legend pour IE/Win */

/* - Erreurs */
.formulaire_spip li.erreur .erreur_message { display: block; color: red; font-weight: bold; }
.formulaire_spip li.erreur input.text, .formulaire_spip li.erreur textarea { background-color: #FCC; border-style: solid; border-color: red; }
.reponse_formulaire_erreur { margin: 0; color: red; font-weight: bold; }

/* - OK */
.reponse_formulaire_ok { margin: 0; color: #53AD20; font-weight: bold; }

/* Variantes et cas particuliers */
/* - Barre de raccourcis typographiques */
table.spip_barre { width: 100%; }
table.spip_barre a img { background: #f5f5f5; padding: 3px; border: 1px solid #cccccc; margin-right: 1px; }
table.spip_barre a:hover img { background: #ffffff; border: 1px solid #888888; }
table.spip_barre input.barre { width: 99%; background: transparent; border: 0; color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_form','#000000',false)) .
'; }

/* - Formulaire de forum */
.formulaire_forum .saisie_titre input.text { width: 99%; }

/* - Login */
.formulaire_spip input.text#var_login {width: 40%;}
.formulaire_spip input.password {padding: 0.2em 0; width: 40%; background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';  border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}

/* - Selection des langues */
.formulaire_menu_lang { margin: 0; padding: 1em; background: none; width: 40%;}

/* - Formulaires de contact */
.formulaire_ecrire_auteur fieldset legend {padding-left: 20px;' .
(($t1 = strval(interdire_scripts(find_in_path('images/formulaire_mail.gif'))))!=='' ?
		(' background: url(' . $t1 . ') top left no-repeat;') :
		'') .
'}

/* - Formulaires de recherche */
.formulaire_recherche {margin: 0 0 0 10px; padding: 0; background: none; width : 158px; }
.formulaire_recherche form {margin: 0;}
.formulaire_recherche label {display: none !important; }
.formulaire_recherche input{margin : 0; clear:none; }
.formulaire_recherche input.text {width: 115px; float:left; margin:0 2px 1px 0; height:17px; padding: 0;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';
	border: 1px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}
.formulaire_recherche input.submit {padding: 0 2px; font-size:1.1em;}


/* -- specificite du formulaire dans la noisette recherche */
.contenu .formulaire_recherche {display : block; padding: 0 0 5px 0;}

/* -- specificite du formulaire de recherche dans le bandeau --*/
.recherche_chemin{font-size:1.2em;}
.recherche_chemin #formulaire_recherche {background:transparent; display:block; float:right; margin:0; padding:0; width:160px; font-size:1em;}
.recherche_chemin .formulaire_recherche input.text{margin-top:1px; padding: 0; 
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';
	border: 1px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}
.recherche_chemin .formulaire_recherche input.submit {cursor: pointer;}
.recherche_chemin span{float:right; margin: 5px 5px 0 20px;}

/* -- formulaires de recherche des moteurs externes a SPIP */
.moteur {margin: 2px 0 0 10px;} 

/* -- formulaire de la shoutbox */
#contenu_shoutbox_dialogue {margin: 0 0 20px; padding: 5px; line-height:1.1em;
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_form_input','#ffffff',false)) .
';
	border: 2px solid ' .
interdire_scripts(lire_config('sarkaspip_styles/ca_form_input','#888888',false)) .
';}

/* Choix des mots-clefs */
ul.choix_mots { display: block; margin: 0; padding: 0; list-style: none; }
ul.choix_mots li { clear: none; float: left; display: block; width: 30%; padding: 1%; }
ul.choix_mots li label { display: inline; font-weight: normal; }

/* -------------------------------------------------------------------- */
/* 	Styles generaux specifiques au squelette                            */
/* -------------------------------------------------------------------- */
/* Typographie par defaut du squelette */
h1 {font-size: 2em; line-height: 1.2em;}
p {margin: 0 0 10px;}

/* Les logos des articles, rubriques... */
.logo img {margin: 0;}
.gauche {float: left; margin: 0 10px 5px 0;}
.droite {float: right; margin: 0 0 5px 10px;}

/* Nettoyage de float */
.nettoyeur{ clear: both; height: 0; margin: 0; padding: 0; border: 0; line-height: 1px; font-size: 1px; }
.nettoyeur_droite {clear: right;}
.nettoyeur_gauche {clear: left;}
');

	return analyse_resultat_skel('html_a20e74cfe881a5142cb3331d1bb1db5f', $Cache, $page, 'plugins/sarkaspip_31/css/base.css.html');
}
?>