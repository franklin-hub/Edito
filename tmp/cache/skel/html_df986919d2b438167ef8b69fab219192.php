<?php

/*
 * Squelette : plugins/sarkaspip_31/css/ie.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/ie.css.html
// Temps de compilation total: 7.721 ms
//

function html_df986919d2b438167ef8b69fab219192($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>/* IE.CSS                                                               */
/* Cette feuille contient:                                              */
/* - tous les hacks necessaires a IE (version >= 6)                     */
/* -------------------------------------------------------------------- */

/* -------------------------------------------------------------------- */
/* raz.css                                                              */
/* -------------------------------------------------------------------- */
* html * {height:1; zoom:1}
* html .ajaxbloc, * html input, * html img, * html textarea, * html blockquote {height:auto;}
 
/* -------------------------------------------------------------------- */
/* layoutxx.css                                                         */
/* -------------------------------------------------------------------- */


/* -------------------------------------------------------------------- */
/* base.css                                                             */
/* -------------------------------------------------------------------- */
* html .spip_code, * html .spip_cadre {height:auto; width:90%;}
* html blockquote.spip_poesie div {text-indent:0;}

* html .formulaire_recherche input{border-width:0; display:inline; background-color:#E0E0E0}
* html .formulaire_recherche input.text {height:23px; width:118px; border:1px solid #6262A4;}
* html .formulaire_recherche input.submit {border: 0;}
*+html .formulaire_recherche input.submit {float : right;}

/* -------------------------------------------------------------------- */
/* layout.css                                                           */
/* -------------------------------------------------------------------- */
' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(34)$')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	interdire_scripts(((lire_config('sarkaspip_layout/appliquer_padding','1',false) == '1') ? (	vide($Pile['vars']['gauche_moitie'] = interdire_scripts(mult(lire_config('sarkaspip_layout/largeur_padding','20',false),'0.5'))) .
		'
		' .
		vide($Pile['vars']['droite_moitie'] = interdire_scripts(mult(lire_config('sarkaspip_layout/largeur_padding','20',false),'0.5'))) .
		'
		'):(	vide($Pile['vars']['gauche_moitie'] = '0') .
		'
		' .
		vide($Pile['vars']['droite_moitie'] = '0')))) .
	'  
	
	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '34')) ?' ' :''))))!=='' ?
			($t2 . (	'
		* html div#content   {' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite_moitie'] : "")))!=='' ?
				('margin-right:' . $t3 . 'px ;') :
				'') .
		' }
		* html div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche_moitie'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
		* html div#extra     {' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche_moitie'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
	')) :
			'') .
	'  
')) :
		'') .
'

/* -------------------------------------------------------------------- */
/* bandeau.css                                                          */
/* -------------------------------------------------------------------- */
* html .bandeau_haut {height: ' .
interdire_scripts(lire_config('sarkaspip_bandeau/haut_minheight','50',false)) .
'px;} /* IE6 ne comprend pas min-height */
* html .nav_bandeau {width: 45%;} /* IE6 ne comprend pas max-width */
* html .bandeau_bas {height: 23px;}
* html .bandeau_chemin {height: 22px;}
* html .bandeau_chemin .recherche_chemin {float: right ; width:330px;}
*+html .bandeau_chemin .recherche_chemin {float: right ; width:330px;}

/* -------------------------------------------------------------------- */
/* noisettes.css                                                        */
/* -------------------------------------------------------------------- */
* html #noisette_herbier.noisette .contenu .texte ul.innerfade li {margin-left:-60px;}
*+html #noisette_herbier.noisette .contenu .texte ul.innerfade li {margin-left:-60px;}

* html #noisette_miniagenda.noisette {height:auto;}
* html #noisette_miniagenda.noisette .contenu {width:178px;}
* html #noisette_miniagenda.noisette .contenu br.nettoyeur {line-height : 0;} /* Sous IE6 ce nettoyeur a une hauteur non nulle */
* html #noisette_miniagenda.noisette .contenu h2 {float:left;}
* html #noisette_miniagenda.noisette .contenu h2.titre_bloc.centre {width: 90px;}
* html #noisette_miniagenda.noisette .contenu h2 a.titre_bloc.bord {width: 44px;}
* html #noisette_miniagenda.noisette .contenu h2 a.titre_bloc#auj {border:none; width: 100%;}

* html .menu_rub1 ul.menulist ul {top: 0; left: 173px;}
*+html .menu_rub1 ul.menulist ul {top: 0;} 

/* -------------------------------------------------------------------- */
/* elements.css                                                         */
/* -------------------------------------------------------------------- */
* html .planche .cartouche {width :140px; float:none;}
* html .planche li {height: 0;}
* html .galerie .planche li {' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_galerie/album_1_colonne','0',false)) ?'' :' '))))!=='' ?
		($t1 . ' height: 18em;') :
		'') .
'}
* html #albums_recents.planche li {' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_galerie/album_1_colonne','0',false)) ?'' :' '))))!=='' ?
		($t1 . ' height: 18em;') :
		'') .
'}

* html .carrousel .contenu ul.vignettes span.wrap2 {display: inline-block; text-align: left;}
* html .carrousel .contenu ul.vignettes span.wrap2 a {overflow: visible;  top: 50%; text-align: center;}
* html .carrousel .contenu ul.vignettes span.wrap2 span {overflow: visible;  top: 50%; text-align: center;}
* html .carrousel .contenu ul.vignettes img {margin-top: 10px;  top: -30%; }
*+html .carrousel .contenu ul.vignettes span.wrap2 {display: block; position: relative; text-align: left;}
*+html .carrousel .contenu ul.vignettes span.wrap2 a {overflow: visible; position: absolute; top: 50%; text-align: center;}
*+html .carrousel .contenu ul.vignettes span.wrap2 span {overflow: visible; position: absolute; top: 50%; text-align: center;}
*+html .carrousel .contenu ul.vignettes img {position: relative; top: -50%;  margin-top: 2%;}
');

	return analyse_resultat_skel('html_df986919d2b438167ef8b69fab219192', $Cache, $page, 'plugins/sarkaspip_31/css/ie.css.html');
}
?>