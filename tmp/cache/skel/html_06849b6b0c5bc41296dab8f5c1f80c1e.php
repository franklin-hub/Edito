<?php

/*
 * Squelette : plugins/sarkaspip_31/noisettes/recherche/inc_recherche_exalead.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:33:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/noisettes/recherche/inc_recherche_exalead.html
// Temps de compilation total: 0.950 ms
//

function html_06849b6b0c5bc41296dab8f5c1f80c1e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="nav_recherche contenu ">
	<h2 class="titre_bloc">' .
_T('sarkaspip:sstitre_recherche_web') .
'</h2>
	<a href="http://www.exalead.com/search"><img class="moteur" src="' .
interdire_scripts(find_in_path('images/logo-exalead.gif')) .
'" alt="Exalead" /></a>
	<div class="formulaire_spip formulaire_recherche" id="exalead">
		
		<form method="get" action="http://partner.exalead.fr/search/C=0">
			<div>
				<input type="hidden" name="2q" value="*" />
				<input type="hidden" name="siteop" value="include" />
				<input type="hidden" name="site" value="" />
				
				<label for="q">' .
_T('public/spip/ecrire:info_rechercher_02') .
'</label>
				<input type="text" class="text" name="q" id="q" size="10" maxlength="255" value="' .
_T('sarkaspip:requete') .
'" onfocus="this.value=\'\';" />
				<input type="image" src="' .
interdire_scripts(find_in_path('rechercher.gif')) .
'" class="submit" value="" />			
			</div>
		</form>
	</div>
</div>
');

	return analyse_resultat_skel('html_06849b6b0c5bc41296dab8f5c1f80c1e', $Cache, $page, 'plugins/sarkaspip_31/noisettes/recherche/inc_recherche_exalead.html');
}
?>