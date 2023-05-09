<?php

/*
 * Squelette : plugins/zen-garden/inclure/zengarden_switcher.html
 * Date :      Tue, 01 Feb 2011 23:00:02 GMT
 * Compile :   Mon, 01 May 2023 10:33:07 GMT
 * Boucles :   _themes
 */ 

/* BOUCLE POUR  */

 function BOUCLE_themeshtml_7173524966a718c865899199bfb68b56(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = 'pour';
	static $table = 'POUR';
	static $id = '_themes';
	static $from = array('POUR' => 'POUR');
	static $type = array();
	static $groupby = array();
	static $select = array("POUR.cle",
		"POUR.valeur");
	static $orderby = array('chemin_tri');
	static $where = 
			array();
	static $join = array();
	static $limit = '';
	$having = 
			array(
			array('tableau', interdire_scripts(zengarden_liste_themes(entites_html(sinon(@$Pile[0]['tous'],''),true)))));
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('plugins/zen-garden/inclure/zengarden_switcher.html','html_7173524966a718c865899199bfb68b56','_themes',3,$GLOBALS['spip_lang']));
	if ($result) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result, 'pour')) {

		$t0 .= (
'
			<option value="' .
interdire_scripts($Pile[$SP]['cle']) .
'">' .
interdire_scripts(textebrut(extraire_multi(typo(table_valeur($Pile[$SP]['valeur'],'nom'))))) .
'</option>
		');
	}
	@sql_free($result, 'pour');
	}
	return $t0;
}


//
// Fonction principale du squelette plugins/zen-garden/inclure/zengarden_switcher.html
// Temps de compilation total: 13.278 ms
//

function html_7173524966a718c865899199bfb68b56($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="switcher_zen">
<form action=\'\' method=\'post\' class=\'formulaire_switcher_zen\'>
' .
(($t1 = BOUCLE_themeshtml_7173524966a718c865899199bfb68b56($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<select name="var_theme">
		<option value="">' .
		_T('zengarden:themes') .
		'</option>
		') . $t1 . (	'
	</select>
	<input type="submit" value="' .
		_T('public/spip/ecrire:bouton_choisir') .
		'" />
')) :
		'') .
'
</form>
</div>
[<style type="text/css">/* <![CDATA' .
(($t1 = strval(compacte((($c = find_in_path('inclure/zengarden_switcher.css')) ? spip_file_get_contents($c) : ""),'css')))!=='' ?
		(' */ ' . $t1 . ' /* ') :
		'') .
']> */</style>]
[<script type="text/javascript">/* <![CDATA' .
(($t1 = strval(compacte((($c = find_in_path('inclure/zengarden_switcher.js')) ? spip_file_get_contents($c) : ""),'js')))!=='' ?
		(' */ ' . $t1 . ' /* ') :
		'') .
']> */</script>]');

	return analyse_resultat_skel('html_7173524966a718c865899199bfb68b56', $Cache, $page, 'plugins/zen-garden/inclure/zengarden_switcher.html');
}
?>