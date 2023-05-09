<?php

/*
 * Squelette : plugins/sarkaspip_31/formulaires/menu_lang.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Tue, 02 May 2023 09:32:24 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/formulaires/menu_lang.html
// Temps de compilation total: 2.515 ms
//

function html_e3a7ebabbeeb7f68114d548d2e192ccb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_menu_lang">
	<a name="formulaire_menu_lang" id="formulaire_menu_lang"></a>

	<form method="post" action="' .
interdire_scripts(entites_html((@$Pile[0]['url']),true)) .
'">
		<div>' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['url']),true))) .
'</div>
		<fieldset>
			<legend>' .
_T('sarkaspip:info_langues') .
'</legend>
			<p><label for="' .
interdire_scripts(entites_html((@$Pile[0]['nom']),true)) .
'">' .
_T('sarkaspip:item_choisir_langue') .
'</label>
			<select class="forml" name="' .
interdire_scripts(entites_html((@$Pile[0]['nom']),true)) .
'" id="' .
interdire_scripts(entites_html((@$Pile[0]['nom']),true)) .
'" onchange="document.location.href=\'' .
interdire_scripts(entites_html((@$Pile[0]['url']),true)) .
'&amp;' .
interdire_scripts(entites_html((@$Pile[0]['nom']),true)) .
'=\'+this.options[this.selectedIndex].value">
				' .
interdire_scripts((@$Pile[0]['langues'])) .
'</select></p>
			<noscript>
				<p><input type="submit" value="&gt;&gt;" /></p>
			</noscript>
		</fieldset>
	</form>
</div> <!-- Fin formulaire_spip -->');

	return analyse_resultat_skel('html_e3a7ebabbeeb7f68114d548d2e192ccb', $Cache, $page, 'plugins/sarkaspip_31/formulaires/menu_lang.html');
}
?>