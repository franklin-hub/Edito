<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/navigation/inc_menu_formulaires.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/navigation/inc_menu_formulaires.html
// Temps de compilation total: 27.190 ms
//

function html_adf45ba4d3675a0e6f5b8dba54f5568b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['position']),true) == 'navigation') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['classe_div'] = 'noisette nav2') .
	vide($Pile['vars']['classe_li'] = 'raccourci_nav1'))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html((@$Pile[0]['position']),true) == 'bandeau_haut') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars']['classe_div'] = 'nav_raccourci') .
	vide($Pile['vars']['classe_li'] = 'raccourci_bandeau'))) :
		'') .
'
<div id="nav_visiteur" class="' .
(is_array($a = ($Pile["vars"])) ? $a['classe_div'] : "") .
'">
	<ul>
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_menus/lien_plan','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
			<li class="' .
	(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
	'"><a href="' .
	interdire_scripts(generer_url_public('plan','tri=par_rubrique')) .
	'">' .
	_T('sarkaspip:plan_site') .
	'</a></li>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_formulaires/plugin_contact','0',false) == '0') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(interdire_scripts((lire_config('sarkaspip_formulaires/auteur_contact',null,false) ? ' ':''))))!=='' ?
			($t2 . (	'
			<li class="' .
		(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
		'"><a href="' .
		interdire_scripts(generer_url_public('contact')) .
		'">' .
		_T('sarkaspip:contact') .
		'</a></li>
				')) :
			'') .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((lire_config('sarkaspip_formulaires/plugin_contact','0',false) == '1') ? ' ':''))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(interdire_scripts((filtre_info_plugin_dist("CONTACT", "est_actif") ? ' ':''))))!=='' ?
			($t2 . (	'
					<li class="' .
		(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
		'"><a href="' .
		interdire_scripts(generer_url_public('contact')) .
		'">' .
		_T('sarkaspip:contact') .
		'</a></li>
			')) :
			'') .
	'
		')) :
		'') .
'
		' .
interdire_scripts(((lire_config('activer_sites',null,false) == 'oui') ? (	'
			' .
	interdire_scripts(((lire_config('proposer_sites',null,false) == '2') ? (	(($t3 = strval(interdire_scripts((entites_html((@$Pile[0]['id_rubrique']),true) ? (	'<a href="' .
			interdire_scripts(generer_url_public('referencement',(	'id_rubrique=' .
				interdire_scripts(entites_html((@$Pile[0]['id_rubrique']),true))))) .
			'">' .
			_T('sarkaspip:bouton_referencement') .
			'</a>'):''))))!=='' ?
				((	'<li class="' .
			(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
			'">') . $t3 . '</li>') :
				'') .
		'
			'):'')) .
	'
		'):'')) .
'
		' .
interdire_scripts(((lire_config('accepter_inscriptions',null,false) == 'oui') ? (	'<li class="' .
	(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
	'"><a href="' .
	interdire_scripts(generer_url_public('inscription')) .
	'">' .
	_T('sarkaspip:inscription') .
	'</a></li>'):'')) .
'
		' .
(($t1 = strval(interdire_scripts(((((((((filtre_info_plugin_dist("SPIPLISTES", "est_actif")) OR (interdire_scripts(filtre_info_plugin_dist("CLEVERMAIL", "est_actif")))) ?' ' :'')) OR (interdire_scripts(filtre_info_plugin_dist("ABOMAILMANS", "est_actif")))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
			<li class="' .
	(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
	'"><a href="' .
	interdire_scripts(generer_url_public('abonnement-newsletter')) .
	'">' .
	_T('sarkaspip:newsletter') .
	'</a></li>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((is_array($a = ($GLOBALS["visiteur_session"])) ? $a['id_auteur'] : "") ? '':' ')))))!=='' ?
		($t1 . (	'
			
			<li class="' .
	(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
	'"><a href="' .
	interdire_scripts(parametre_url(generer_url_public('login-public'),'url','./')) .
	'">' .
	_T('sarkaspip:login_membre') .
	'</a></li>
		</ul>
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((is_array($a = ($GLOBALS["visiteur_session"])) ? $a['id_auteur'] : "") ? ' ':'')))))!=='' ?
		($t1 . (	'
			
			' .
	(($t2 = strval(interdire_scripts((filtre_info_plugin_dist("SHOUTBOX", "est_actif") ? ' ':''))))!=='' ?
			($t2 . (	'
				<li class="' .
		(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
		'"><a href="' .
		interdire_scripts(generer_url_public('dialogue')) .
		'">' .
		_T('sarkaspip:dialogue') .
		'</a></li>
			')) :
			'') .
	'
			<li class="' .
	(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
	'"><a href="' .
	executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('plugins/sarkaspip_31/noisettes/navigation/inc_menu_formulaires.html','html_adf45ba4d3675a0e6f5b8dba54f5568b','',13,$GLOBALS['spip_lang'])) .
	'">' .
	_T('sarkaspip:logout_membre') .
	'</a></li>
			' .
	(($t2 = strval(invalideur_session($Cache, (include_spip("inc/autoriser")&&autoriser('ecrire')?" ":""))))!=='' ?
			($t2 . (	'
				<li class="' .
		(is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "") .
		'"><a href="' .
		interdire_scripts(generer_url_ecrire('')) .
		'">' .
		_T('sarkaspip:espace_prive') .
		'</a></li>
			')) :
			'') .
	'
			' .
	(($t2 = strval(invalideur_session($Cache, (include_spip("inc/autoriser")&&autoriser('webmestre')?" ":""))))!=='' ?
			($t2 . (	'
				' .
		(($t3 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_BOUTON'.';') == 'oui') ? ' ':''))))!=='' ?
				($t3 . (	'
					<li' .
			(($t4 = strval((is_array($a = ($Pile["vars"])) ? $a['classe_li'] : "")))!=='' ?
					(' class="' . $t4 . '"') :
					'') .
			'><a href="' .
			interdire_scripts((tester_url_ecrire('cfg') ?generer_url_ecrire('cfg','cfg=sarkaspip_accueil')  : "")) .
			'">' .
			_T('sarkaspip:bouton_configuration') .
			'</a></li>
				')) :
				'') .
		'
			')) :
			'') .
	'
		</ul>
		<ul>
			' .
	interdire_scripts(invalideur_session($Cache, (((is_array($a = ($GLOBALS["visiteur_session"])) ? $a['statut'] : "") == '0minirezo') ? (($t3 = strval(interdire_scripts(invalideur_session($Cache, (is_array($a = ($GLOBALS["visiteur_session"])) ? $a['nom'] : "")))))!=='' ?
				((	'<li class="auteur" title="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_0minirezo') .
			'"><a href="' .
			interdire_scripts(invalideur_session($Cache, generer_url_public('auteur',(	'id_auteur=' .
				interdire_scripts(invalideur_session($Cache, (is_array($a = ($GLOBALS["visiteur_session"])) ? $a['id_auteur'] : ""))))))) .
			'">') . $t3 . (	'</a>&nbsp;&nbsp;<img src="' .
			(($t4 = strval(interdire_scripts(invalideur_session($Cache, eval('return '.'_DIR_IMG_PACK'.';')))))!=='' ?
					($t4 . 'admin-12.gif') :
					'') .
			'" alt="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_0minirezo') .
			'" /></li>')) :
				''):''))) .
	'
			' .
	interdire_scripts(invalideur_session($Cache, (((is_array($a = ($GLOBALS["visiteur_session"])) ? $a['statut'] : "") == '1comite') ? (($t3 = strval(interdire_scripts(invalideur_session($Cache, (is_array($a = ($GLOBALS["visiteur_session"])) ? $a['nom'] : "")))))!=='' ?
				((	'<li class="auteur" title="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_1comite') .
			'"><a href="' .
			interdire_scripts(invalideur_session($Cache, generer_url_public('auteur',(	'id_auteur=' .
				interdire_scripts(invalideur_session($Cache, (is_array($a = ($GLOBALS["visiteur_session"])) ? $a['id_auteur'] : ""))))))) .
			'">') . $t3 . (	'</a>&nbsp;<img src="' .
			(($t4 = strval(interdire_scripts(invalideur_session($Cache, eval('return '.'_DIR_IMG_PACK'.';')))))!=='' ?
					($t4 . 'redac-12.gif') :
					'') .
			'" alt="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_1comite') .
			'" /></li>')) :
				''):''))) .
	'
			' .
	interdire_scripts(invalideur_session($Cache, (((is_array($a = ($GLOBALS["visiteur_session"])) ? $a['statut'] : "") == '6forum') ? (($t3 = strval(interdire_scripts(invalideur_session($Cache, (is_array($a = ($GLOBALS["visiteur_session"])) ? $a['nom'] : "")))))!=='' ?
				((	'<li class="auteur" title="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_6forum') .
			'"><span >') . $t3 . (	'</span>&nbsp;<img src="' .
			(($t4 = strval(interdire_scripts(invalideur_session($Cache, eval('return '.'_DIR_IMG_PACK'.';')))))!=='' ?
					($t4 . 'visit-12.gif') :
					'') .
			'" alt="' .
			_T('sarkaspip:message_bonjour') .
			'&nbsp;' .
			_T('sarkaspip:statut_6forum') .
			'" /></li>')) :
				''):''))) .
	'
		</ul>	
		')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_adf45ba4d3675a0e6f5b8dba54f5568b', $Cache, $page, 'plugins/sarkaspip_31/noisettes/navigation/inc_menu_formulaires.html');
}
?>