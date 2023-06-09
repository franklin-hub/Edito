<?php

/*
 * Squelette : ../prive/style_prive.html
 * Date :      Fri, 03 Sep 2010 07:30:02 GMT
 * Compile :   Mon, 01 May 2023 10:06:26 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/style_prive.html
// Temps de compilation total: 88.174 ms
//

function html_8638567901775a77b8f85e4b9175d543($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars']['claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['couleur_claire'],'edf3fe'),true)))) .
vide($Pile['vars']['foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(@$Pile[0]['couleur_foncee'],'3874b0'),true)))) .
vide($Pile['vars']['left'] = interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','left','right'))) .
vide($Pile['vars']['right'] = interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','right','left'))) .
vide($Pile['vars']['rtl'] = interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','','_rtl'))) .
vide($Pile['vars']['chemin_img_pack'] = interdire_scripts(eval('return '.'_DIR_IMG_PACK'.';'))) .
'
' .
recuperer_fond( 'style_vieilles_def' , array('couleur_claire' => @$Pile[0]['couleur_claire'] ,
	'couleur_foncee' => @$Pile[0]['couleur_foncee'] ,
	'ltr' => @$Pile[0]['ltr'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('../prive/style_prive.html','html_8638567901775a77b8f85e4b9175d543','',14,$GLOBALS['spip_lang'])), '') .
'

body { background-color: #f8f7f3; margin: 0; border: 0; color: #000; }
body{ font-size: 100%;font-family: Verdana, Geneva, Sans, sans-serif; }

/*-- spip-admin pour le debug --*/
' .
(($c = find_in_path('prive/spip_admin.css')) ? spip_file_get_contents($c) : "") .
'/* Espaceurns de blocs */
.nettoyeur { clear: both; height: 0; margin: 0; padding: 0; border: 0; line-height: 1px; font-size: 1px; }

/* Non visible a l\'ecran */
.invisible { position: absolute; top: -3000em; height: 1%; }
.none { display: none; }

/* ajax */
.image_loading {float:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';}

#page { font-size: small; }
/* ecran etroit*/
#conteneur,.table_page,div.messages { clear: both; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': auto; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': auto; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; width: 750px; margin-top:0.5em;}
#navigation { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; width: 200px; min-height: 100px; }
#contenu { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 30px; width: 505px; }
#extra { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; width: 200px; }

/* ecran large*/
.large #conteneur,.large .table_page,.large div.messages { margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': auto; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': auto; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; width: 974px; }
.large #navigation { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; width: 200px; }
.large #contenu { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 17px; width: 540px; }
.large #extra { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; width: 200px; }

/* les formulaires sont en 600px en config large */
.articles_edit .large #contenu,
.mots_edit .large #contenu,
.breves_edit .large #contenu,
.rubriques_edit .large #contenu {width:600px; margin-top: 20px;}
.articles_edit .large #extra,
.mots_edit .large #extra,
.breves_edit .large #extra,
.rubriques_edit .large #extra {width:140px;}


div.table_page { margin-top: 1em; }
#contenu { font-size: small; }

#chemin { 
	font-size: 0.85em; 
	overflow: hidden; 
	margin: 0; 
	padding: 0; 
}
#chemin li a { color: black;  }
#chemin li a:hover { text-decoration: underline;  }

#chemin ul, #chemin li, #chemin li .bloc {  
	margin: 0; 
	padding: 0; 
	margin-top: 0; 
	padding-top: 0; 
	list-style-type: none;
	display: inline; 
}
#chemin li .bloc {	
	padding: 2px;	
	padding-bottom: 4px;
	display: -moz-inline-box; 
	display: inline-block; 
}
#chemin li .bloc:hover {
}

#chemin li li .bloc { 
	margin-top: 2px; 
}
#chemin li li .bloc a  {
	color: #444;
}
#chemin .aide {padding-top: 0px; }

h1 { color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; font-size:large; font-family: Arial, Sans, sans-serif; margin: 0.5em 0 0.25em 0; }
h2 { color: #000; font-size: medium; font-family: Arial, Sans, sans-serif; margin: 0.5em 0 0.25em 0; }
h3 { color: #666; font-size: medium; font-family: Arial, Sans, sans-serif; margin: 0.5em 0 0.25em 0; }

td { text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; }



select.fondl { padding: 0; }
.maj-debut:first-letter { text-transform: uppercase; }

/*style for horizontal list <div class=\'h-list\'><ul ><li><tag class=\'menu-item\'></tag></li></ul></div>*/
/*for IE item list must be specified in .menu-item*/
/*possible added classes ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'ed centered righted vcentered*/  

.h-list { display: table}
.h-list ul { display: table-row; list-style: none; margin: 0; padding: 0; }
.h-list li { display: table-cell; margin: 0; padding: 0; }
#bandeau-principal .h-list ul>li .menu-item { width: auto !important}

.vcentered li { vertical-align:middle}
.' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'ed { margin: 0 auto 0 0; }
.centered { margin: 0 auto; text-align: center; }
.' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'ed { margin: 0 0 0 auto; }
#page { margin: auto; text-align: center; }
.table_page{ margin: auto; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; }

/*style for bandeau-principal*/
#bandeau-principal { padding-top: 5px; border-bottom: 1px solid #ccc; position: relative; z-index: 90; background: #fff; }
#bandeau-principal .h-list .menu-item { margin: 0 auto}

#bandeau-principal a {cursor:hand;}
#bandeau-principal a .icon_fond { width: 48px; height: 48px; background: ' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['couleur_claire']),true))))!=='' ?
		('#' . $t1) :
		'') .
'; margin: auto; }
#bandeau-principal a.selection .icon_fond { width: 48px; margin:auto }
#bandeau-principal a:hover span.icon_fond { background: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html((@$Pile[0]['couleur_claire']),true)))))!=='' ?
		('#' . $t1) :
		'') .
';  width: 48px; height: 48px; margin: auto; }
#bandeau-principal li.boutons_admin:hover .bandeau_sec,
#bandeau-principal li.boutons_admin.sfhover .bandeau_sec { display: block; }
#bandeau-principal span.icon_fond span { background: center top no-repeat; height: 48px; display: block; width: 48px; margin: 0; }

/*style for submenus*/
.bandeau_sec { margin-top: 0; padding: 2px; padding-top: 0; background-color: #fff; border-bottom: 1px solid #ccc; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid #ccc; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid #ccc; z-index: 100; display: none; position:absolute; }

/*style for #bandeau_couleur*/
.bandeau_couleur {text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; margin: 0; padding: 0; }
.bandeau_couleur a {color:#666;}

#bandeau_couleur { min-height: 20px; padding: 2px 0; max-height: 40px; width: 100%; background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
#bandeau_couleur1 .menu-item { width: 230px; text-align: ' .
interdire_scripts(entites_html((@$Pile[0]['ltr']),true)) .
'}
#bandeau_couleur3 .menu-item { width: 150px; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'}
#bandeau_couleur4 .menu-item { width: 68px; margin: 0 5px; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; }
#bandeau_couleur4 .menu-item a {font-weight:normal; color: black;}
#bandeau_couleur5 .menu-item { width: 114px; }
#bandeau_couleur6 .menu-item { width: 32px; }

#preferences_couleurs,
#preferences_menu,
#preferences_ecran {display:inline; padding:0 3px;}
#preferences_map {display:none;}

#preferences_couleurs {
	white-space: nowrap;
}

#bandeau_couleur5 label {position:absolute;top:-500px;}


/* * Icones et bandeaux */

/* Da cancellare
#bandeau-principal { background-color: #fff; margin: 0; padding: 0; border-bottom: 1px solid #000; }
.bandeau-icones { background-color: #fff; margin: 0; padding: 0; padding-bottom: 2px; padding-top: 4px; } */
/* .bandeau_sec .gauche { margin-top: 0; padding: 2px; padding-top: 0; background-color: #fff; border-bottom: 1px solid #000; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid #000; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid #000; z-index: 100; } */
/* .bandeau-icones.separateur { vertical-align: middle; height: 100%; width: 11px; margin: 0; padding: 0; background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'file=tirets-separation.gif); background-position: 5px 0px; } */
.bandeau_couleur { padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 4px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 4px; font-family: verdana, helvetica, arial, sans; font-size: 11px; color: #000; text-align: center; font-weight: bold; height: 22px; }
.bandeau_couleur_sous { position: absolute; visibility: hidden; top: 1px; background-color: white; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; color: #000; padding: 5px; padding-top: 2px; font-family: verdana, helvetica, arial, sans; font-size: 11px; }

a.lien_sous { color: #666; }
a.lien_sous:hover { color: #000; text-decoration: underline; }
.cadre-bandeau-rubriques { background-color: #eee; z-index: 1; }
.cadre-bandeau-rubriques .titrem { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.cadre-bandeau-rubriques .cadre_padding { padding: 0; }
.cadre-meme-rubriques { background: #eee; border: 1px solid #ccc; }
.cadre-meme-rubriques .cadre_padding.padding_x { padding: 0; }
.cadre-meme-rubriques .padding_x .bloc_depliable { padding: 0; }

a.bandeau_rub { display: block; font-size: 10px; padding: 3px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 13px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 16px; color: #666; text-decoration: none; border-bottom: 1px solid #ccc; background-repeat: no-repeat; background-position: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' center; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-12.gif); }
a.bandeau_rub:hover { background-color: #fff; text-decoration: none; color: #333; background-repeat: no-repeat; background-position: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' center; }
div.bandeau_rub { position: absolute; ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 120px; background-color: #eee; padding: 0; border: 1px solid #ccc; border-bottom: 0px; visibility: hidden; min-width:100%; }

div.brt { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'triangle-droite' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
' center no-repeat; }
div.pos_r { position: relative; }

/* selecteur de rubriques */
.selecteur_parent{font-size: 90%; width: 99%; max-height: 24px;} /* appliquee sur le <select> */
option.selec_rub { background-position: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' center; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-12.gif); background-repeat: no-repeat; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 16px; }
option.niveau_1 { font-weight: bold; background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'secteur-12.gif); background-repeat:  no-repeat; }
option.niveau_2 { color: #202020; border-bottom: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
option.niveau_3 { color: #404040; }
option.niveau_4 { color: #606060; }
option.niveau_5 { color: #808080; }
option.niveau_6 { color: #a0a0a0; }


div.wrap-messages, div.en_lignes { padding: 5px; border-bottom: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; font-weight: bold;}
div.wrap-messages {background:#333;color:#fff;}
div.messages {margin-top:0;font-size: 11px;}
div.messages ul {text-align:left;}

div.en_lignes { font-size: 10px;}



/* Icones de fonctions */
a.icone26 { font-family: verdana, helvetica, arial, sans; font-size: 11px; font-weight: bold; color: #000; text-decoration: none; padding: 1px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 2px; }
a.icone26:hover { text-decoration: none; }
a.icone26 img { vertical-align: middle; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
a.icone26:hover img { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.icone36 { border: 0; padding: 5px 0; margin: 0; text-align: center; text-decoration: none; font-size: x-small; width:72px; }
.icone36 a, .icone36 a,a.icone36, a.icone36:hover { text-decoration: none; }
.icone36 a img, a.icone36 img { margin: 0 auto; display: inline; padding: 4px; background-color: #eee; border: 2px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.icone36 a:hover img,a.icone36:hover img { background-color: #fff; border: 2px solid #666; }
.icone36.danger img { background-color: #fff; border: 2px solid #ff9999; }
.icone36.danger a:hover img,a.icone36.danger:hover img { background-color: #fff; border: 2px solid red; }
.icone36 span { font-weight: bold; color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; display: block; margin: 2px auto; width: 100%; height: 3em; }
.icone36 a:hover span,a.icone36:hover span { color: #000; }
.icone36.danger span { color: #ff9999; }
.icone36.danger a:hover span,a.icone36.danger:hover span { color: red; }
a.icone36.historique-24 { width: 90px; }
a.icone36.suivi-forum-24 { width: 100px; }


/* Icones 48 * 48 et 24 * 24 */
.cellule36, .cellule48 { padding: 0; border: 0; vertical-align: top; text-align: center; text-decoration: none; }
.cellule36 { margin: 0; font-size: 10px; }
.cellule48 { margin: 2px; font-size: 12px; }
.cellule36 a, .cellule36 a:hover, .cellule48 a, .cellule48 a:hover { text-decoration: none; }
.cellule36 a, .cellule48 a { display: block; text-align: center; }
.cellule48 a img { display: inline; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; margin: 4px; padding: 0; border: 0; }
.cellule48 a.selection img { display: inline; margin: 4px; padding: 0; border: 0; background-color: #999; }
.cellule48 a:hover img { display: inline; margin: 4px; padding: 0; border: 0; background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html((@$Pile[0]['couleur_claire']),true))) .
'; }
.cellule36 a img { margin: 0; display: inline; padding: 3px; border: 0; border: 1px solid #fff; background-color: transparent; }
.cellule36 a.selection img{ margin: 0; display: inline; padding: 3px; background-color: #fff; border: 1px solid #ccc; }
.cellule36 a:hover img { margin: 0; display: inline; padding: 3px; background-color: #e4e4e4; background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html((@$Pile[0]['couleur_claire']),true))) .
'; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.cellule36 a span, .cellule48 a span { color: #666; display: block; margin: 1px; width: 100%; }
.cellule36 a:hover span, .cellule48 a:hover span { color: #000; display: block; margin: 1px; width: 100%; }
.cellule36 a.selection span, .cellule48 a.selection span { color: #000; display: block; margin: 1px; width: 100%; }

img.aide { width: 12px; height: 12px; vertical-align: middle; margin-bottom: -1px; margin-top: -1px; }

.cellule36 a.aide, .cellule36 a.aide:hover { display: inline; background: none; margin: 0; padding: 0; }
.cellule36 a.aide img { margin: 0; padding: 0; }

/* Navigation texte */
.cellule-texte { margin: 0; padding: 0; border: 0; vertical-align: top; font-size: 10px; font-weight: bold; text-align: center; text-decoration: none; }
.cellule-texte a, .cellule-texte a:hover { text-decoration: none; display: block; }
.cellule-texte a { margin: 1px; padding: 4px; border: 0; color: #606060; }
.cellule-texte a.selection { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; margin: 1px; padding: 3px; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #000; }
.cellule-texte a:hover { background-color: #fff; margin: 1px; padding: 3px; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #333; }
.cellule-texte a.aide, .cellule-texte a.aide:hover { display: inline; background: none; border: 0; }
.cellule-texte a.aide img { margin: 0; }


/* * Icones horizontales */
a.cellule-h { display: block; }
a.cellule-h { font-size: 10px; font-weight: bold; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; text-decoration: none; color: #666; }
a.cellule-h:hover, a.cellule-h:hover a.cellule-h, a.cellule-h a.cellule-h:hover { font-size: 10px; font-weight: bold; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; text-decoration: none; color: #000; }
a.cellule-h div.cell-i { padding: 0; border: 1px solid #fff; margin: 0; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; }
a.cellule-h:hover div.cell-i { background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html((@$Pile[0]['couleur_claire']),true))) .
'; margin: 0; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; padding: 0; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
table.cellule-h-table { margin: 0; padding: 0; border: 0; }
a.cellule-h img { width: 24px; height: 24px; border: 0; margin: 3px; background-repeat: no-repeat; background-position: center center; }
a.cellule-h a.aide img { width: 12px; height: 12px; }
a.cellule-h-texte { display: block; clear: both; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; font-family: Trebuchet Sans MS, Arial, Sans, sans-serif; font-weight: bold; font-size: 11px; color: #606060; padding: 4px; margin: 3px; border: 1px solid #ddd; background-color: #f0f0f0; width: 92%; }
.danger, a.cellule-h-texte { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rayures-sup.gif); }
a.cellule-h-texte:hover { text-decoration: none; color: #000; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': solid 1px #fff; border-bottom: solid 1px #fff; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': solid 1px #666; border-top: solid 1px #666; background-color: #eee; }


/* * Style des icones */

.fondgris { cursor: pointer; padding: 4px; margin: 1px; }
.fondgrison { cursor: pointer; padding: 3px; margin: 1px; border: 1px dashed #999; background-color: #e4e4e4; }
.fondgrison2 { cursor: pointer; padding: 3px; margin: 1px; border: 1px dashed #999; background-color: #fff; }
.bouton36gris { padding: 6px; margin-top: 2px; border: 1px solid #ccc; background-color: #eee; }
.bouton36blanc { padding: 6px; margin-top: 2px; border: 1px solid #999; background-color: #fff; }
.bouton36rouge { padding: 6px; margin-top: 2px; border: 1px solid red; background-color: #fff; }
.bouton36off { padding: 6px; margin-top: 2px; width: 24px; height: 24px; }

div.onglet { font-family: Verdana, Arial, Sans, sans-serif; font-size: 11px; font-weight: bold; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; padding: 5px; background-color: #fff; }
div.onglet a { color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
div.onglet_on { font-family: Verdana, Arial, Sans, sans-serif; font-size: 11px; font-weight: bold; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; padding: 5px; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
div.onglet_on a, div.onglet_on a:hover { color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; text-decoration: none; }
div.onglet_off { font-family: Verdana, Arial, Sans, sans-serif; font-size: 11px; font-weight: bold; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; padding: 5px; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; }

.reliefblanc { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'barre-blanc.gif); }
.reliefgris { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'barre-noir.gif); }
.iconeoff { padding: 3px; margin: 1px; border: 1px dashed #ccc; background-color: #f0f0f0; }
.iconeon { cursor: pointer; padding: 3px; margin: 1px; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': solid 1px #fff; border-bottom: solid 1px #fff; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': solid 1px #666; border-top: solid 1px #666; background-color: #eee; }
.iconedanger { padding: 3px; margin: 1px; border: 1px dashed #000; background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rayures-sup.gif); }

/* Raccourcis pour les polices (utile pour les tableaux) */
.arial0 { font-family: Arial, Sans, sans-serif; font-size: 9px; }
.arial1 { font-family: Arial, Sans, sans-serif; font-size: 10px; }
.arial11 { font-family: Arial, Sans, sans-serif; font-size: 11px; }
.arial2 { font-family: Arial, Sans, sans-serif; font-size: 12px; }
.verdana1 { font-size: 10px; }
.verdana2 { font-size: 11px; }
.verdana12 {font-size: 12px; }
.verdana3 { font-size: 13px; }
.serif { font-family: Georgia, Garamond, Times New Roman, serif; }
.serif1 { font-family: Georgia, Garamond, Times New Roman, serif; font-size: 11px; }
.serif2 { font-family: Georgia, Garamond, Times New Roman, serif; font-size: 13px; }

.spip_xx-large { font-size: 32px; }
.spip_x-large { font-size: 26px; }
.spip_large { font-size: 18px; }
.spip_medium { font-size: 16px; }
.spip_small { font-size: 14px; }
.spip_x-small { font-size: 12px; }
.spip_xx-small { font-size: 10px; }


/* Liens hypertexte */
a { text-decoration: none; color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
a:hover { text-decoration: none; }
a.icone { text-decoration: none; }
a.icone:hover { text-decoration: none; }

/* * Correction orthographique */
.ortho { background: #ffe0e0; margin: 0; margin-bottom: -2px; border-bottom: 2px dashed red; color: inherit; text-decoration: none; }
a.ortho:hover { margin: -2px; border: 2px dashed red; color: inherit; text-decoration: none; }
.ortho-dico { background: #e0f4d0; margin: 0; margin-bottom: -2px; border-bottom: 2px dashed #a0b890; color: inherit; text-decoration: none; }
a.ortho-dico:hover { margin: -2px; border: 2px dashed #a0b890; color: inherit; text-decoration: none; }

#ortho-fixed { position: fixed; top: 0; ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 0; width: 25%; padding: 15px; margin: 0; }
.ortho-content { position: absolute; top: 0; width: 70%; padding: 15px; margin: 0; }
.suggest-actif, .suggest-inactif { font-family: "Trebuchet Sans MS", Verdana, Geneva, sans-serif; font-size: 95%; font-weight: bold; margin: 8px; z-index: 1; }
.suggest-actif .detail, .suggest-inactif .detail { margin: 8px; margin-top: -0.5em; padding: 0.5em; padding-top: 1em; border: 1px solid #c8c8c8; background: #f3f2f3; font-family: Georgia, Garamond, "Times New Roman", serif; font-weight: normal; z-index: 0; }
.suggest-actif .detail ul, .suggest-inactif .detail ul { list-style-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce.gif); background: #f3f2f3; margin: 0; padding: 0; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 25px; }
.suggest-actif { display: block; }
.suggest-inactif { display: none; }
.form-ortho select { background: #ffe0e0; }


/* * Comparaison d articles */
.diff-para-deplace { background: #e8e8ff; }
.diff-para-ajoute { background: #d0ffc0; color: #000; }
.diff-para-supprime { background: #ffd0c0; color: #904040; text-decoration: line-through; }
.diff-deplace { background: #e8e8ff; }
.diff-ajoute { background: #d0ffc0; }
.diff-supprime { background: #ffd0c0; color: #802020; text-decoration: line-through; }
.diff-para-deplace .diff-ajoute { background: #b8ffb8; border: 1px solid #808080; }
.diff-para-deplace .diff-supprime { background: #ffb8b8; border: 1px solid #808080; }
.diff-para-deplace .diff-deplace { background: #b8b8ff; border: 1px solid #808080; }

td.icone table {}
td.icone a { color: #000; text-decoration: none; font-size: 10px; font-weight: bold; }
td.icone a:hover { text-decoration: none; }
td.icone a img { border: 0; }

.bouton_rotation { display: block; background-color: #eee; margin-bottom: 1px; padding: 1px; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.bouton_rotation:hover { border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }


/* icone en bord haut du cadre */
.cadre-icone {position: absolute; top: -16px; ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px;z-index:1;}

/* * Cadre couleur foncee */
.cadre_padding { padding: 6px; }
.cadre_padding.padding_x { padding: 0 6px; }
.padding_x .bloc_depliable { padding: 6px 0; }
/* .cadre-titre { font-family: Verdana, Geneva, helvetica, sans; font-weight: bold; font-size: 12px; padding: 3px; }*/
.cadre { margin: 20px 0 10px 0; font-family: Verdana, Geneva, helvetica, sans; font-size: 11px; position: relative; }
.cadre-fonce { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.cadre-gris-fonce { background: #666; }
.cadre-gris-clair { border: 1px solid #ccc; background-color: #dedede; }
.cadre-couleur { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.cadre-couleur div.cadre-titre { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-bottom: 2px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; }
.cadre-couleur-foncee { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.cadre-couleur-foncee div.cadre-titre { color: #fff; }
.cadre-trait-couleur { background-color: #fff; border: 2px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.cadre-trait-couleur div.cadre-titre { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-bottom: 2px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; }
.cadre-r { background-color: #fff; border: 1px solid #ccc; color: #333; }
.cadre-r div.cadre-titre { background-color: #ccc; border-bottom: 1px solid #666; color: #000; }
.cadre-e { background-color: #eee; border: 1px solid #ccc; }
.cadre-e div.cadre-titre { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; border-bottom: 1px solid #666; color: #000; }
.cadre-forum { background-color: #fff; border: 1px solid #ccc; margin-bottom: 0; }
.cadre-forum div.cadre-titre { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; border-bottom: 1px solid #ccc; color: #000; }
.cadre-sous_rub { background-color: #fff; border: 1px solid #ccc; }
.cadre-thread-forum { background-color: #eee; border: 1px solid #ccc; border-top: 0; margin-bottom: 0; margin-top: 0px; }
.cadre-thread-forum div.cadre-titre { background-color: #ccc; color: #000; }
.cadre-info{ background-color: #fff; border: 2px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; padding: 5px; }
.cadre-formulaire { border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; background-color: #ddd; padding: 5px; color: #444; font-family: Verdana, Geneva, helvetica, sans; font-size: 11px; }
.cadre-formulaire-editer {color: #444; font-family: Verdana, Geneva, helvetica, sans; font-size: 11px; }
.cadre-alerte { border: 6px solid red; }


/* * Styles pour "Tout le site" */

.plan-rubrique { margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 12px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px dotted #888; }
.plan-secteur { margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 12px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px dotted #404040; }
 
.plan-articles, .plan-articles-bloques { border-top: 1px solid #ccc; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid #ccc; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid #ccc; }
.plan-articles a, .plan-articles-bloques .publie, .plan-articles-bloques .prepa, .plan-articles-bloques .prop, .plan-articles-bloques .refuse, .plan-articles-bloques .poubelle { display: block; padding: 2px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 18px; border-bottom: 1px solid #ccc; background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-color: #eee; font-size: 11px; text-decoration: none; }
.plan-articles a:hover { background-color: #fff; text-decoration: none; }
.plan-articles .publie, .plan-articles-bloques .publie { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce-verte.gif); }
.plan-articles .prepa, .plan-articles-bloques .prepa { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce-blanche.gif); }
.plan-articles .prop, .plan-articles-bloques .prop { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce-orange.gif); }
.plan-articles .refuse, .plan-articles-bloques .refuse { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce-rouge.gif); }
.plan-articles .poubelle, .plan-articles-bloques .poubelle { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'puce-poubelle.gif); }

a.foncee, a.foncee:hover, a.claire, a.claire:hover, span.creer, span.lang_base { display: inline; float: none; padding: 2px; margin: 0; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px; border: 0; font-family: Arial, Helvetica, Sans, sans-serif; font-size: 9px; text-decoration: none; z-index: 1; }
a.foncee, a.foncee:hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
a.claire, a.claire:hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
span.lang_base { color: #666; border: 1px solid #666; background-color: #eee; }
span.creer { color: #333; border: 1px solid #333; background-color: #fff; }
.trad_float { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; z-index: 20; margin-top: 4px; }

div.liste,div.cadre-liste { border: 1px solid #ccc; background:white; }
div.cadre div.cadre-liste { margin-top: 3px; margin-bottom: 3px; }
div.cadre-couleur-foncee div.cadre-liste { margin-top: 10px; margin-bottom: 3px; }
div.cadre-liste .cadre_padding {padding: 0; }
div.cadre-liste .padding_x .bloc_depliable {padding: 0; }
div.cadre-liste .tranches{ position: relative;border-top: 1px solid #ccc; background-color: #ddd; border-bottom: 1px solid #ccc; padding: 2px;padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
':25px; }
div.cadre-liste .tranches a.plus {position: absolute; top: 3px; ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
':10px;}
	
.tout-site #page ul#articles_tous,.tout-site ul#articles_tous ul { list-style: none; }
.tout-site #page ul { margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 12px; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px dotted #888; }
.tout-site #page ul,.tout-site #page li { clear: both; }
li.sec, li.rub { display: inline; }
ul>li.sec,ul>li.rub { display: block; }
li.sec a.titre,  li.rub a.titre { display: block; height: 20px; margin: 0; margin-bottom: 5px; padding: 0; padding-top: 4px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 5px; font-weight: bold; }
li.art { display: block; height:24px; }
li.sec a.titre { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
li.rub a.titre { background-color: transparent; }
li.art a.titre { display: inline; background-color: transparent; font-weight: normal; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 5px; padding-top: 4px; height: 20px; }
span.icone { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; position: relative; display: block; width: 28px; height: 24px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': -14px; }
li.art span.icone { margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 0; }

span.holder {}
li.sec span.icone { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'secteur-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' bottom no-repeat; }
li.rub span.icone { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' top no-repeat; }
li.art span.icone { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'article-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' top no-repeat; }
li.sec ul{ display: none; }
li.rub ul{ display: none; }

li img.expandImage { display: block; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; position: relative; ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': -20px; width: 16px; height: 16px; }
li.selected { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'}

.tr_liste { background-color: #eee; }
.tr_liste_over, .tr_liste:hover { background-color: #fff; }
.tr_liste td, .tr_liste:hover td, .tr_liste_over td { border-bottom: 1px solid #ddd; }
tbody>.tr_liste:last-child td { border-bottom: 0px; }
.tr_liste td div.liste_clip { height: 12px; overflow: hidden; }
.tr_liste:hover td div.liste_clip, span.liste_clip { overflow: visible; height: 100%; }

img.puce { width: 7px; height: 7px; border: 0; }
img.lang { width: 12px; height: 12px; border: 0; }

div.brouteur_rubrique { display: block; padding: 3px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 10px; border-top: 0px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-bottom: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'triangle-droite' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
' center no-repeat; background-color: #fff; }
div.brouteur_rubrique_on { display: block; padding: 3px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 10px; border-top: 0px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-bottom: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'triangle-droite' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
' center no-repeat; background-color: #eeeeee; }

xdiv.brouteur_rubrique:hover { background-color: #eeeeee; }

div.brouteur_rubrique div, div.brouteur_rubrique_on div { padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px; background-repeat: no-repeat; background-position: center ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; font-weight: bold; font-family: Arial, Sans, sans-serif; font-size: 12px; }
div.brouteur_rubrique div a { color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
div.brouteur_rubrique_on div a { color: #000; }

.brouteur_icone_racine { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'racine-site-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px }
.brouteur_icone_secteur { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'secteur-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px }
.brouteur_icone_rubrique { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px }
.brouteur_icone_article { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'article-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; margin: 3px; padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px }
.brouteur_icone_site { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'site-24.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' center no-repeat; margin: 3px; padding-top: 5px; padding-bottom: 5px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 28px }

.iframe-brouteur { background-color: #eee; border: 0; z-index: 1; }

/* * Styles pour les statistiques */
table.bottom td { vertical-align: bottom; }
table.bottom img { display: block; }  

/* * Styles generes par les raccourcis de mise en page */

.chapo { font-weight: bold; color: #333; }

#wysiwyg { line-height: 1.4em; }
#wysiwyg a { /*color: #604A7F;*/ text-decoration: underline; }
#wysiwyg a:hover { /*color: #f57900;*/ text-decoration: underline; }

.spip_recherche { width: 240px; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; }
.spip_recherche .recherche{ padding: 3px; width: 200px; font-size: 10px; border: 1px solid #fff; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; margin: 0 3px 6px 0; }
.spip_recherche .submit {vertical-align:middle;}

/* pour le plugin "revision_nbsp" */
.spip-nbsp { border-bottom: 2px solid #c8c8c8; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 2px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 2px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': -1px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': -1px; }

.boutonlien { font-weight: bold; font-size: 9px; }
a.boutonlien:hover { color: #454545; text-decoration: none; }
a.boutonlien { color: #808080; text-decoration: none; }

a.triangle_block { margin-top: -3px; margin-bottom: -3px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': -3px; filter:alpha(opacity=70); -moz-opacity:0.7; opacity: 0.7; }
a.triangle_block:hover { filter: alpha(opacity=100); -moz-opacity: 1; opacity: 1; }

.fond-agenda { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'fond-agenda.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
' center no-repeat; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 3px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 4px; line-height: 12px; color: #666; }

.highlight { color: #000; background-color: #666; }
.highlight.off { padding: 2px; display: block; color: #666; background-color: #fff; }
a.highlight:hover { color: #000; cursor: pointer; }

div.petite-racine { margin-bottom: -5px; }
div.petite-racine, a.petite-racine { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'racine-site-12.gif); padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 15px; background-color: #fff; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; border-bottom: 0; width: 134px; }
div.petite-rubrique, a.petite-rubrique { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-12.gif); padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 15px; }
div.petit-secteur, a.petit-secteur { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html((@$Pile[0]['ltr']),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'secteur-12.gif); padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 15px; }
div.rub-ouverte, a.rub-ouverte { padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 10px; background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'triangle-droite' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
' center no-repeat; }

a.ical { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'synchro-24.gif) no-repeat; background-position: top center; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 30px; padding-bottom: 20px; }

.swap-couche { border: 0; height: 10px; width: 10px; }

/* Titre d\'une boite */
.titrem { font-weight: bold; }
div.titrem { display: block; padding-top: 6px; padding-bottom: 4px; background-repeat: no-repeat; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':16px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
':10px;}
div.titrem a.titremancre {padding:15px 0 0 16px;background-position: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' top;background-repeat: no-repeat; position:relative;float:' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
';margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':-16px;}

.cadre-couleur-foncee .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; color: #fff; color: #444; }
.cadre-couleur-foncee .cadre_padding .titrem { color: #444; }
.cadre-trait-couleur .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: #fff; }
.cadre-trait-couleur .cadre_padding .titrem { background-color: #fff;color: #444; }

.ajax-action {padding-top:0px;clear:both;position: relative; }

.dater {position: relative; }
.dater { border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.dater .hover, .editer_mot .hover, .editer_auteurs .hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }

.mots_tous #contenu .titrem.impliable { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }

.configuration #contenu .cadre .titrem { background-color:#eee; }
.configuration #contenu .titrem.hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.configuration #contenu .cadre-trait-couleur { border: 1px solid #ccc; }
.configuration #contenu .cadre-trait-couleur .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
';color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncer',entites_html((@$Pile[0]['couleur_foncee']),true)))))!=='' ?
		('#' . $t1) :
		'') .
'; text-transform: uppercase; }
.configuration #contenu .ajax-action,
.configuration #contenu .cadre-trait-couleur .cadre_padding {
	padding-top: 0px;
}
.configuration #contenu .cadre-couleur .cadre_padding .titrem,
.configuration #contenu .cadre-trait-couleur .cadre_padding .titrem { 
	text-transform: none;
	background-color: white;
	padding-bottom: 11px;
	color: #444444;

}
.configuration #contenu .cadre-couleur .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }



.cadre-liste .titrem { background-color: #fff; color: #444; }
.cadre-liste .titrem.hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'}
.cadre-liste .tr_liste .titrem { background-color:#eee; }
.cadre-couleur .titrem { background-color: #fff; }

.joindre .titrem, #navigation .joindre .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.accueil #navigation .titrem { background-color: #fff; }

#navigation .titrem, #extra .titrem {text-align: center; }
#navigation .titrem, #extra .titrem { background-color: #fff; }
#liste_images .titrem, #liste_documents .titrem { background-color: #ccc; }
/*#liste_images .legender .titrem, #liste_documents .legender .titrem { background-color: #fff; } */
#navigation .hover, #extra .hover, .joindre .hover, #liste_images .hover, #liste_documents .hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }

.iconifier div div.titrem {text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; }
.iconifier div div {text-align: center; }
.iconifier div div label {text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
';display: block; }

/* Deplier / Replier */
.deplie a.titremancre, .deplie a.titremancre, .depliant a.titremancre, .replie a.titremancre { height: 1px; padding-bottom: 0px; }
.replie a.titremancre { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'deplierhaut' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif); }
.hover { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.deplie a.titremancre { background-image: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'deplierbas.gif); }
.impliable {}
.blocreplie { display: none; }
.blocdeplie { display: block; background: none; }

td.pense-bete, a.pense-bete { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'm_envoi_bleu' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) center ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 20px; }

td.annonce, a.annonce { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'm_envoi_jaune' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) center ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 20px; }

td.message, a.message { background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'm_envoi' .
(is_array($a = ($Pile["vars"])) ? $a['rtl'] : "") .
'.gif) center ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
' no-repeat; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px; }

.enfants ul { list-style: none; }
.enfants ul li.rubrique_12 {background:url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'rubrique-12.gif)' .
(($t1 = strval((is_array($a = ($Pile["vars"])) ? $a['left'] : "")))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat; padding: 2px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 18px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 6px;position:relative;}

/* * ***************************************************/
/* directives specifiques a une page */
/* exec=admin_tech */
#sauvegarder,#restaurer,#reparer { margin: 0 0 2em 0; }

/* exec=admin_plugin */
.liste-plugins.formulaire_spip {border:0;background:none;padding:0;}
.liste-plugins .liens {padding:6px;background:#ddd; margin-left: -6px; margin-right: -7px;}
#liste_plugins .boutons { margin: -6px; } 
.liste-plugins .liste-items {margin-left: -6px; margin-right: -6px;}
.liste-plugins .liste-items .item {position:relative;padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':76px; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 10px;}
.liste-plugins .liste-items .item.actif {background:#eee;}
.liste-plugins .liste-items .item.actif:hover {background:#e8e8e8;}
.liste-plugins .liste-items .item.erreur {background:#fdd;}
.liste-plugins .liste-items .item.erreur .erreur {color:red;font-weight:bold;}
.liste-plugins .liste-items .item.on {background:' .
(($t1 = strval(filtrer('couleur_eclaircir',(is_array($a = ($Pile["vars"])) ? $a['claire'] : ""))))!=='' ?
		('#' . $t1) :
		'') .
';}

.liste-plugins .liste-items .item .short {color:#666;font-size:0.95em;}
.liste-plugins .liste-items .item.on .short {display:none;}
.liste-plugins .liste-items .item .check {float:' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
';margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':-70px;position:relative;display:inline;}
.liste-plugins .liste-items .item .check input {margin:0;}
.liste-plugins .liste-items .item .check label {display:none;}

.liste-plugins .liste-items .item .download {float:' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
';margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':-70px;position:relative;display:inline;}

.liste-plugins .liste-items .item .nom {font-size:1.2em;display:inline;}
.liste-plugins .liste-items .item .nom a {color:#444;}
.liste-plugins .liste-items .item.actif .nom a {color:' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
';}

.liste-plugins .liste-items .item .icon {position:absolute;top:3px;' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':34px;width:32px;height:32px;overflow:hidden;}
.liste-plugins .liste-items .item .actions {float:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';visibility:hidden;}
.liste-plugins .liste-items .item:hover .actions {visibility:visible;}
.liste-plugins .liste-items .item .cfg_link { position:absolute; right:4px; top:4px; }

.liste-plugins .liste-items .item .details .desc {padding:5px 0 2px;}
.liste-plugins .liste-items .item .details .auteurs {font-style:italic;padding-bottom:5px;display:inline;}
.liste-plugins .liste-items .item .details .licence {display:inline;}
.liste-plugins .liste-items .item .details .tech {font-size:0.9em;float:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';text-align:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';clear:' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'}

.install-plugins {background:#ddd;border:1px solid black;color:#555;font-size:0.85em;padding:10px;}
.install-plugins .ok {color:green;font-weight:bold;}
.install-plugins .erreur {color:red;font-weight:bold;}

.erreur_message-plugins {border:1px solid red;background:#f0d0d0;font-weight:normal;padding:10px;font-size:0.9em;}
.erreur_message-plugins >ul {list-style:none;}
.erreur_message-plugins .info_todo {margin:10px 0;}


#liste_plug { border: solid 1px ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; padding:3px; background-color:white; height: 200px; overflow:auto;overflow-y: auto; }

/* exec=statistiques_visites */
.trait_haut { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.trait_bas { background:black; }
.trait_moyen { background: #666; }
.couleur_dimanche { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.couleur_jour { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.couleur_janvier { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.couleur_mois { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.couleur_prevision { background: #eee; }
.couleur_realise { background: #999; }

.couleur_cumul { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }
.couleur_nombre { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.couleur_langue { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }

.statistiques_visites ul.referers { margin-left: 0; padding-left: 0; list-style: none; color: #666; }
.statistiques_visites ul.referers li { clear: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; margin-bottom: 1em; padding-left: 16px; }
.statistiques_visites ul.referers li .titrem { margin-left: -16px; font-weight: normal; }
.statistiques_visites ul.referers li .visites3 { color: red; }
.statistiques_visites ul.referers li .visites2 { color: #666; }
.statistiques_visites ul.referers li .visites1 { color: #999; }
.statistiques_visites ul.referers li a { font-weight: bold; }
.statistiques_visites ul.referers li ul { font-size: x-small; list-style-type: disc; }
.statistiques_visites ul.referers li li { clear: none; margin-bottom: 0; padding-left: 0; }
.statistiques_visites ul.referers li li a { font-weight: normal; }

ul.classement {list-style:none;font-size:x-small;margin:0;padding:0;padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
':42px;color:#666666;}
ul.classement li {padding:0 0 4px;margin:0;line-height:100%;}
ul.classement li em {display:block;width:37px;float:' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
';margin-left:-40px;position:relative;display:inline;font-style:normal;text-align:' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
';}

/* exec=controle_petition */

.signature .info_statut {color: red}
.signature .date {}
.signature .site {}
.signature .ad_email {}
.signature .texte {}
.signature div.reponse_a {}
.signature a.reponse_a {color: black;}
.signature .cartouche {background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; color: white; font-weight: bold}
.signature .contenu {background-color: #ffffff}
.signature .poubelle {background-color: #ffff00}

/* agenda */
.bandeau_agenda { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.jour_dimanche { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
';color: #fff; }
.jour_encours { background: #fff;color: #000; }
.jour_gris { background: #eee;color: #000; }
.jour_pris { background: #fff;color: #000; }
.calendrier-cadreagenda { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
div.navigation-calendrier { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }

/* lang_raccourcis */
#raccourcis .titrem { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }

/* exec=mesage */
#participants table.spip {border:0; }
#participants .cadre_padding {padding:0 0 4px 0; }

/* editer_auteurs */
.option_separateur_statut_auteur { background: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.option_auteur { background: #e4e4e4; }

/* menu langues */
.lang_ecrire { max-height: 24px; border: 1px solid #fff; color: white; width: 100px; background: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }

/* selecteur ajax */
#choix_parent_principal { background: #fff; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; position: relative; height: 170px; overflow: auto; margin-top:5px;}
.recherche_rapide_parent {margin-top: -25px;float:right; }
.rubrique_actuelle {height: 25px; }
#selection_rubrique .informer { background: #fff; }
.informer-auteur { background: #fff; padding: 5px; border-top: 0; }

/* legender */
/*.legender { background: #fff; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; padding:5px; margin:3px; font-size:x-small; }*/
.legender { margin-top: 10px; font-size:x-small; }

/* portfolios */
.lien_tout_supprimer { background-color: #eee; padding: 4px; color: #000; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; border: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.lien_tout_supprimer a { color: red; padding-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 10px; background: url(' .
interdire_scripts(find_in_path('images/croix-rouge.gif')) .
') ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'no-repeat; }
.cadre-portfolio .titrem { background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.cadre-portfolio .cadre_padding {padding: 0; }
.cadre-portfolio table {border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; table-layout:fixed }
.cadre-portfolio table td.document { border-bottom: 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; width:33%; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; vertical-align:top; }
.cadre-documents .titrem { background-color:#999; }
.cadre-documents .cadre_padding {padding: 0; }
.cadre-documents table {border-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 1px solid #999; table-layout:fixed}
.cadre-documents table td.document { border-bottom: 1px solid #999; border-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 1px solid #999; width:33%; text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; vertical-align:top; }

#contenu td.document .titrem { background-color: #fff; }
td.vu { background: #ccc; }

/* messages d\'upload (zip etc) */
.upload_message {border: dotted ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
' 1px; padding:0px 5px 5px 10px; font-size: x-small}
.upload_message ol {padding: 2px;list-style: none; font-size: xx-small; max-height:20em; overflow:auto}
.upload_message ol li {padding: 2px;}

/* config/reducteur */
.vignette_reducteur { text-align: center; vertical-align: middle; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; padding:2px; border:2px solid #fff; width:150px; height:170px; }
.vignette_reducteur.selected { font-weight: bold; border:2px dotted ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; }
.vignette_reducteur span { display: block; }
/* config/locuteur */
.langues_bloquees {color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
';font-weight: bold; }



li .puce_statut { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; padding-top: 5px; }
li .puce_article_popup, li.puce_breve_popup,li.puce_site_popup, { padding: 0; }
.puce_article, .puce_breve, .puce_site { position: relative; }
.puce_article_fixe, .puce_breve_fixe, .puce_site_fixe { position: relative; }

.puce_article_popup, .puce_breve_popup, .puce_site_popup { position: absolute; top: 0; ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 0; visibility: hidden; border: 1px solid #666; background-color: #ccc; z-index: 10; }
.puce_article_popup img, .puce_breve_popup img, .puce_site_popup img { padding: 1px; border: 0; }

.puce_article_popup { width: 55px; }
.puce_breve_popup, .puce_site_popup { width: 27px; }

.boite_onglets {clear:both; margin-top:15px; }
.tabs-nav a { color: ' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
'; }

/* generique */
#voir { overflow: hidden; }

#contenu #wysiwyg div.label { clear: both; display: block; background-color: ' .
(is_array($a = ($Pile["vars"])) ? $a['claire'] : "") .
'; margin-top: 2em; padding: .1em; font-size: x-small; color: #777; }
#contenu #wysiwyg div p { margin-top: 0; }
#navigation .infos .numero { font-size: x-small;font-weight: bold; text-align: center; }
#navigation .infos .numero p { font-size: x-large; margin:5px 0;color:#333; font-family: verdana, helvetica, arial, sans; }
#navigation .infos .noinfo { color:#ddd;}
#contenu .bandeau_actions { margin:5px 0;clear:both; }
#contenu .bandeau_actions a:hover { background: #fff; }
#contenu .logo_titre { float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; margin: 5px 0; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
': 5px; }

#contenu #wysiwyg div.champ {display:block;}
#contenu #wysiwyg div.contenu_ps { background:#dddddd; border:1px solid #666; padding:5px;  margin:1em 0;}
#contenu #wysiwyg div.contenu_ps.vide {display: none;}
#contenu #wysiwyg div.contenu_ps div.label {display:inline; background:none;color:#666;}
#contenu #wysiwyg div.contenu_notes { background:#fff; border-top:1px solid #666; padding-top:5px; margin:1em 0; font-size: 0.83em; line-height: 1.3em;}
#contenu #wysiwyg div.contenu_notes p {
	margin: 0; padding: 0; 
	margin-top: 0.5em;
	margin-left: 2em;
	text-indent: -2em;
	
}
#contenu #wysiwyg div.contenu_notes.vide {display: none;}
#contenu #wysiwyg div.contenu_notes div.label {display:inline;font-weight:bold;font-size:0.9em;background:none;color:#000;}
#contenu #wysiwyg div.texte {font-size:1em;}

ul.instituer { /*float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; */ text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; border-top: 1px solid #eee; border-bottom: 1px solid #eee; margin: 0; padding:5px 0; /*font-size:0.9em; */ }
ul.instituer li { list-style: none; margin: 0; padding: 0; }
ul.instituer li ul { margin: 0; padding: 0; }
ul.instituer li ul li a { display: block; }
ul.instituer li ul li img { margin: 1px 1px -1px; margin-' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
': 5px; visibility: hidden; border: 1px solid #f8f7f3; }
ul.instituer li.selected img,ul.instituer li a:hover img {visibility:visible; }
ul.instituer a:hover { background: #eee; }
ul.instituer li.prepa.selected,ul.instituer li.prepa a:hover { background: #fff; }
ul.instituer li.prop.selected,ul.instituer li.prop a:hover { background: #f89058;color: #fff; }
ul.instituer li.publie.selected,ul.instituer li.publie a:hover { background: #9dba00;color: #fff; }
ul.instituer li.poubelle.selected,ul.instituer li.poubelle a:hover { background: #000; color: #fff;}
ul.instituer li.refuse.selected,ul.instituer li.refuse a:hover { background: #ff0000;color: #fff; }

#voir.tabs-container { background: #fff; padding: 5px; border: 1px solid #999; }
.no_onglets .tabs-container {background:#fff; border:none;padding-top:0;}
.no_onglets .tabs-nav {display: none;}
.no_onglets .fiche_objet { background:#fff;border:1px solid #ccc; padding:5px;margin-bottom:1em; margin-top: 20px;}
.no_onglets #voir.tabs-container { background: #fff; padding:0; border: 0; }

.no_onglets #contenu #wysiwyg div.label{ display: none; }
.no_onglets #contenu #wysiwyg .contenu_lien_titre {margin:1em 0;}
.no_onglets #contenu #wysiwyg .contenu_lien_titre div.label{ color:#000;background:none;display:inline; font-size:1.1em;font-weight:bold;font-family:Georgia,Garamond,Times New Roman,serif;}
.no_onglets #contenu #wysiwyg .contenu_lien_titre div.lien_titre p { display:inline;}
.no_onglets #contenu #wysiwyg { padding:5px;}
.no_onglets #contenu #wysiwyg div.contenu_soustitre,
.no_onglets #contenu #wysiwyg div.contenu_surtitre,
.no_onglets #contenu #wysiwyg div.contenu_titre {display: none;}
.no_onglets #contenu #wysiwyg div.vide {display: none;}
.no_onglets #contenu h1 {color:' .
(is_array($a = ($Pile["vars"])) ? $a['foncee'] : "") .
';}
.no_onglets #contenu #wysiwyg div.contenu_descriptif,
.no_onglets #contenu #wysiwyg div.contenu_nom_site,
.no_onglets #contenu #wysiwyg div.contenu_ps
	{ background:#eeeeee; border: 1px solid #ccc; padding: 1em 1em 0em 1em; margin: 1em 0 ;}
 .no_onglets #contenu #wysiwyg div.contenu_nom_site {
 	padding: 1em;
 }
.no_onglets #contenu #wysiwyg div.contenu_descriptif span.label {color:#000;background:none;display:inline;font-size:1.1em;font-weight:bold;}
body.sites .no_onglets #contenu #wysiwyg div.contenu_nom_site {display: none;}
.no_onglets .boite_onglets {margin-top:0px; }

/* exec/articles */
.articles h1 {color: #000; font-size: large; margin-top: 5px; }
#voir .article_prop {text-align: center; font-weight: bold; font-size: small; color: red; }

/* exec/naviguer */
.naviguer h1 {color: #000;font-size: large; margin-top: 5px; }
#contenu div.gauche { width: 49%; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['left'] : "") .
'; }
#contenu div.droite { width: 49%; float: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; }

/* exec/sites */
.sites h1 { color: #000;font-size: large; margin-top:5px; }
#voir .site_prop {text-align: center;font-weight: bold;font-size: small;color:red; }
#voir .site_syndique { font-weight: bold; text-align: center; }
#voir .site_syndique img { vertical-align:middle; }
#voir .date_syndic { margin-top: 1em; }
#voir .mise_a_jour_syndic { text-align: ' .
(is_array($a = ($Pile["vars"])) ? $a['right'] : "") .
'; }

/* exec/breves_voir */
.breves h1 {color: #000;font-size:large; margin-top:5px; }
#voir .breve_prop {text-align: center;font-weight: bold;font-size: small;color:red; }
#props .langue {text-align: left;}

/* exec/auteur_infos */
#auteur-voir .statut {margin:10px 0;border-top :1px solid #eee;border-bottom :1px solid #eee;padding:10px 0;}
#auteur-voir .statut ul {margin-bottom:0;}


/* fond des miniatures de logos et documents */
.miniature_logo, .miniature_document {
	background: url(' .
(is_array($a = ($Pile["vars"])) ? $a['chemin_img_pack'] : "") .
'fond-grille.gif) top left;
}

/* controle des forums : afficher les liens */
.controle a {
	position: relative !important;
	left:0 !important;
	right:0 !important;
	top:0 !important;
	bottom: 0 !important;
}
.controle a:after {
	display: inline; content: " [\\27a0" attr(href) "]";
}

/******** Formulaires **************/
' .
recuperer_fond( 'style_prive_formulaires' , array('couleur_claire' => @$Pile[0]['couleur_claire'] ,
	'couleur_foncee' => @$Pile[0]['couleur_foncee'] ,
	'ltr' => @$Pile[0]['ltr'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('../prive/style_prive.html','html_8638567901775a77b8f85e4b9175d543','',179,$GLOBALS['spip_lang'])), '') .
'
/******** Formulaires fin  **************/

/*** Plugins ***/
' .
recuperer_fond( 'style_prive_plugins' , array('couleur_claire' => @$Pile[0]['couleur_claire'] ,
	'couleur_foncee' => @$Pile[0]['couleur_foncee'] ,
	'ltr' => @$Pile[0]['ltr'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('../prive/style_prive.html','html_8638567901775a77b8f85e4b9175d543','',55,$GLOBALS['spip_lang'])), '') .
'
/**** Plugins fin ***/
');

	return analyse_resultat_skel('html_8638567901775a77b8f85e4b9175d543', $Cache, $page, '../prive/style_prive.html');
}
?>