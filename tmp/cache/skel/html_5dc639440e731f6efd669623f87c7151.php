<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_header.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_header.html
// Temps de compilation total: 0.222 ms
//

function html_5dc639440e731f6efd669623f87c7151($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- autoriser=webmestre -->
<!-- refus=' .
_T('sarkaspip:cfg_msg_webmestre_nok') .
' -->
<!-- onglet=sarkaspip_accueil -->
<!-- liens*=sarkaspip:sarkaspip_accueil -->
<!-- liens*=sarkaspip:sarkaspip_header -->
<!-- liens*=sarkaspip:sarkaspip_plugins -->
<!-- liens*=sarkaspip:sarkaspip_backend -->
<!-- liens*=sarkaspip:sarkaspip_layout -->
<!-- liens*=sarkaspip:sarkaspip_bandeau -->
<!-- liens*=sarkaspip:sarkaspip_pied -->
<!-- liens*=sarkaspip:sarkaspip_noisettes -->
<!-- liens*=sarkaspip:sarkaspip_menus -->
<!-- liens*=sarkaspip:sarkaspip_sommaire -->
<!-- liens*=sarkaspip:sarkaspip_rubrique -->
<!-- liens*=sarkaspip:sarkaspip_article -->
<!-- liens*=sarkaspip:sarkaspip_auteur -->
<!-- liens*=sarkaspip:sarkaspip_breve -->
<!-- liens*=sarkaspip:sarkaspip_site -->
<!-- liens*=sarkaspip:sarkaspip_agenda -->
<!-- liens*=sarkaspip:sarkaspip_herbier -->
<!-- liens*=sarkaspip:sarkaspip_galerie -->
<!-- liens*=sarkaspip:sarkaspip_album -->
<!-- liens*=sarkaspip:sarkaspip_plan -->
<!-- liens*=sarkaspip:sarkaspip_formulaires -->
<!-- liens*=sarkaspip:sarkaspip_recherche -->
<!-- liens*=sarkaspip:sarkaspip_styles -->
<!-- liens*=sarkaspip:sarkaspip_coins -->
<!-- liens*=sarkaspip:sarkaspip_modeles -->
<!-- liens*=sarkaspip:sarkaspip_maintenance -->
');

	return analyse_resultat_skel('html_5dc639440e731f6efd669623f87c7151', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_header.html');
}
?>