<?php

/*
 * Squelette : plugins/sarkaspip_31/css/layout.css.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/css/layout.css.html
// Temps de compilation total: 32.200 ms
//

function html_b013140dddbd102eba3582dde02d7923($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'/* LAYOUT.CSS                                                           */
/* Cette feuille contient:                                              */
/* - les styles de surcharge des layout Gala pour le squelette          */
/* -------------------------------------------------------------------- */

/* Correspond a une taille de 16px dans la plupart des navigateurs */
html {font-size: 100%;}
/* correspond a une taille de 10px car 10px/16px = 0,625 */
body {
	padding: 0; 
	font: 0.625em/1em ' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/fo_site','Helvetica,Verdana',false))))!=='' ?
		($t1 . ',') :
		'') .
'Arial,sans-serif; 
	color: ' .
interdire_scripts(lire_config('sarkaspip_styles/fg_site','#000000',false)) .
';
	background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_body','#ffffff',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_body' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_body','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_body',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
';
}

#header {padding: 0 0 10px;}
div#header h1{margin: 0; padding-left: 0; height: auto; line-height: 1.12em; color: transparent; background: none;}
div#footer{padding: 30px 0 0; color: transparent; background: none; line-height: 1.12em;}
div#navigation{width: 180px; background: none;}
div#extra{width:180px; background: none;} 
div#container{background: ' .
interdire_scripts(lire_config('sarkaspip_styles/bg_site','#ffffff',false)) .
(($t1 = strval(interdire_scripts(find_in_path((	'images/bg_site' .
	interdire_scripts(lire_config('sarkaspip_styles/bi_extension_site','.gif',false)))))))!=='' ?
		(' url(' . $t1 . ')') :
		'') .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_styles/bi_proprietes_site',null,false))))!=='' ?
		(' ' . $t1) :
		'') .
'; 
}  

/* Pour les layouts a largeur variable*/
' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(13|14|15|16|17|18)$')) ?' ' :''))))!=='' ?
		($t1 . '
	div#navigation{padding: 0 20px;}
	div#extra{padding: 0 20px;}
	#content {padding: 0 20px;}
') :
		'') .
'

/* Pour les layouts a largeur fixe 3 colonnes*/
' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(7|8|9|10|11|12)$')) ?' ' :''))))!=='' ?
		($t1 . (	'
	body{text-align:center}
	div#container{' .
	(($t2 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_site','700',false))))!=='' ?
			('width:' . $t2 . 'px; ') :
			'') .
	'margin:0 auto;}

	' .
	interdire_scripts(((lire_config('sarkaspip_layout/appliquer_padding','1',false) == '1') ? (	vide($Pile['vars']['moitie'] = interdire_scripts(div(lire_config('sarkaspip_layout/largeur_padding','20',false),'2'))) .
		'
		' .
		vide($Pile['vars']['gauche'] = (($t4 = strval(interdire_scripts(moins(lire_config('sarkaspip_layout/largeur_site','700',false),interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))))))!=='' ?
					('-' . $t4) :
					'')) .
		'
		' .
		vide($Pile['vars']['droite'] = (($t4 = strval(interdire_scripts(plus(lire_config('sarkaspip_layout/largeur_padding','20',false),'180'))))!=='' ?
					('-' . $t4) :
					'')) .
		'
		' .
		vide($Pile['vars']['centre'] = interdire_scripts(plus(lire_config('sarkaspip_layout/largeur_padding','20',false),'220'))) .
		'
		'):(	vide($Pile['vars']['moitie'] = '0') .
		'
		' .
		vide($Pile['vars']['gauche'] = (($t4 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_site','700',false))))!=='' ?
					('-' . $t4) :
					'')) .
		'
		' .
		vide($Pile['vars']['droite'] = '-180') .
		'
		' .
		vide($Pile['vars']['centre'] = '220') .
		'
		'))) .
	'

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '7')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#content{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['centre'] : "")))!=='' ?
				('margin: 0 ' . $t3 . 'px; ') :
				'') .
		'}
	')) :
			'') .
	' 

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '8')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#content{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['centre'] : "")))!=='' ?
				('margin: 0 ' . $t3 . 'px; ') :
				'') .
		'}
	')) :
			'') .
	' 

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '9')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval(plus((is_array($a = ($Pile["vars"])) ? $a['moitie'] : ""),'400')))!=='' ?
				('margin-left:-' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#content{margin-right: 440px; ' .
		(($t3 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
	')) :
			'') .
	' 

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '10')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval(plus((is_array($a = ($Pile["vars"])) ? $a['moitie'] : ""),'400')))!=='' ?
				('margin-left:-' . $t3 . 'px; ') :
				'') .
		'}
		div#content{margin-right: 440px; ' .
		(($t3 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
	')) :
			'') .
	' 

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '11')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval(interdire_scripts(moins(moins(lire_config('sarkaspip_layout/largeur_site','700',false),'220'),(is_array($a = ($Pile["vars"])) ? $a['moitie'] : "")))))!=='' ?
				('margin-left:-' . $t3 . 'px; ') :
				'') .
		'}
		div#content{margin-left: 440px; ' .
		(($t3 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))))!=='' ?
				('margin-right:' . $t3 . 'px ;') :
				'') .
		'}
	')) :
			'') .
	'

	' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '12')) ?' ' :''))))!=='' ?
			($t2 . (	'
		div#navigation{' .
		(($t3 = strval(interdire_scripts(moins(moins(lire_config('sarkaspip_layout/largeur_site','700',false),'220'),(is_array($a = ($Pile["vars"])) ? $a['moitie'] : "")))))!=='' ?
				('margin-left:-' . $t3 . 'px; ') :
				'') .
		'}
		div#extra{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px; ') :
				'') .
		'}
		div#content{margin-left: 440px; ' .
		(($t3 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))))!=='' ?
				('margin-right:' . $t3 . 'px ;') :
				'') .
		'}
	')) :
			'') .
	'
')) :
		'') .
'

/* Pour les layouts a 2 colonnes*/
' .
(($t1 = strval(interdire_scripts(((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(34)$')) ?' ' :''))))!=='' ?
		($t1 . (	'
	  body{text-align:center}
		div#container{' .
	(($t2 = strval(interdire_scripts(lire_config('sarkaspip_layout/largeur_site','700',false))))!=='' ?
			('width:' . $t2 . 'px; ') :
			'') .
	'margin:0 auto;}
		
		' .
	interdire_scripts(((lire_config('sarkaspip_layout/appliquer_padding','1',false) == '1') ? (	vide($Pile['vars']['double'] = interdire_scripts(mult(lire_config('sarkaspip_layout/largeur_padding','20',false),'2'))) .
		'
		  ' .
		vide($Pile['vars']['gauche'] = interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))) .
		'
		  ' .
		vide($Pile['vars']['droite'] = interdire_scripts(lire_config('sarkaspip_layout/largeur_padding','20',false))) .
		'		  
		'):(	vide($Pile['vars']['double'] = '0') .
		'
		  ' .
		vide($Pile['vars']['gauche'] = '0') .
		'
		  ' .
		vide($Pile['vars']['droite'] = '0') .
		'
		'))) .
	'
		
	 ' .
	(($t2 = strval(interdire_scripts((((lire_config('sarkaspip_layout/numero_layout','13',false) == '34')) ?' ' :''))))!=='' ?
			($t2 . (	'
	  #wrapper{zoom:normal;}
		div#navigation{' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
		div#extra     {' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['gauche'] : "")))!=='' ?
				('margin-left:' . $t3 . 'px ;') :
				'') .
		'}
		div#content{
      ' .
		(($t3 = strval(interdire_scripts(moins(moins(lire_config('sarkaspip_layout/largeur_site','700',false),'220'),(is_array($a = ($Pile["vars"])) ? $a['double'] : "")))))!=='' ?
				('width:' . $t3 . 'px ;') :
				'') .
		'
      ' .
		(($t3 = strval((is_array($a = ($Pile["vars"])) ? $a['droite'] : "")))!=='' ?
				('margin-right:' . $t3 . 'px ;') :
				'') .
		'
    }
	')) :
			'') .
	'	
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b013140dddbd102eba3582dde02d7923', $Cache, $page, 'plugins/sarkaspip_31/css/layout.css.html');
}
?>