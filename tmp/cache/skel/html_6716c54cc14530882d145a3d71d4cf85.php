<?php

/*
 * Squelette : ../extensions/porte_plume/porte_plume_start.js.html
 * Date :      Fri, 03 Sep 2010 07:30:20 GMT
 * Compile :   Mon, 01 May 2023 10:06:29 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../extensions/porte_plume/porte_plume_start.js.html
// Temps de compilation total: 4.201 ms
//

function html_6716c54cc14530882d145a3d71d4cf85($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . (	'Content-Type: text/javascript; charset=' .
	interdire_scripts($GLOBALS['meta']['charset'])) . '"); ?'.'>
' .
porte_plume_creer_json_markitup('') .
'


;(function($){

// 2 fonctions pour appeler le porte plume reutilisables pour d\'autres plugins
// on envoie dedans la selection jquery qui doit etre effectuee
// ce qui evite des appels direct a markitup, aucazou on change de lib un jour
$.fn.barre_outils = function(nom, settings) {
	options = {
		lang:\'' .
interdire_scripts(entites_html((@$Pile[0]['lang']),true)) .
'\'
	};
	$.extend(options, settings);

	return $(this)
		.not(\'.markItUpEditor, .no_barre\')
		.markItUp(eval(\'barre_outils_\' + nom), {lang:options.lang});
};

$.fn.barre_previsualisation = function(settings) {
	options = {
		previewParserPath:"index.php?action=porte_plume_previsu", // ici une url relative pour prive/public
		textEditer:"' .
_T('barre_outils:editer') .
'",
		textVoir:"' .
_T('barre_outils:voir') .
'"
	};
	$.extend(options, settings);

	return $(this)
		.not(\'.pp_previsualisation, .no_previsualisation\')
		.previsu_spip(options);
};

$(window).load(function(){
	// ajoute les barres d\'outils markitup
	function barrebouilles(){
		// fonction generique appliquee aux classes CSS :
		// inserer_barre_forum, inserer_barre_edition, inserer_previsualisation
		$(\'.formulaire_spip textarea.inserer_barre_forum\').barre_outils(\'forum\');
		$(\'.formulaire_spip textarea.inserer_barre_edition\').barre_outils(\'edition\');
		$(\'.formulaire_spip textarea.inserer_previsualisation\').barre_previsualisation();
		// fonction specifique aux formulaires de SPIP :
		// barre de forum
		$(\'textarea.textarea_forum\').barre_outils(\'forum\');
		' .
(($t1 = strval(interdire_scripts(((((is_array($a = ($GLOBALS["meta"])) ? $a['forums_afficher_barre'] : "") == 'non')) ?'' :' '))))!=='' ?
		($t1 . (	'
		$(\'.formulaire_forum textarea' .
	chr('91') .
	'name=texte' .
	chr('93') .
	'\').barre_outils(\'forum\');')) :
		'') .
'
		// barre d\'edition et onglets de previsualisation
		$(\'.formulaire_spip' .
interdire_scripts((((is_array($a = ($GLOBALS["meta"])) ? $a['forums_afficher_barre'] : "") == 'non') ? ':not(#formulaire_forum)':'')) .
' textarea[name=texte]\')
			.barre_outils(\'edition\')
			.barre_previsualisation();
	}
	barrebouilles();
	onAjaxLoad(barrebouilles);

});
})(jQuery);
');

	return analyse_resultat_skel('html_6716c54cc14530882d145a3d71d4cf85', $Cache, $page, '../extensions/porte_plume/porte_plume_start.js.html');
}
?>