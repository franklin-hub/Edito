<?php

/*
 * Squelette : ../plugins/zen-garden/prive/zengarden_theme.html
 * Date :      Thu, 14 Oct 2010 23:00:03 GMT
 * Compile :   Mon, 01 May 2023 10:24:40 GMT
 * Boucles :   _squelettes, _themes
 */ 

/* BOUCLE POUR  */

 function BOUCLE_squeletteshtml_bffa71122260b217aff6b4b17df22e2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = 'pour';
	static $table = 'POUR';
	static $id = '_squelettes';
	static $from = array('POUR' => 'POUR');
	static $type = array();
	static $groupby = array();
	static $select = array("POUR.valeur");
	static $orderby = array();
	static $where = 
			array();
	static $join = array();
	static $limit = '';
	$having = 
			array(
			array('tableau', interdire_scripts(table_valeur($Pile[$SP]['valeur'],'utilise'))));
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/zen-garden/prive/zengarden_theme.html','html_bffa71122260b217aff6b4b17df22e2d','_squelettes',20,$GLOBALS['spip_lang']));
	if ($result) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result, 'pour')) {

		$t0 .= (($t1 = strval(interdire_scripts((((table_valeur($Pile[$SP]['valeur'],'id') == 'Z')) ?'' :' '))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(PtoBR(propre(table_valeur($Pile[$SP]['valeur'],'name'))))))!=='' ?
			('
							<li>
								' . $t2 . (	'
								' .
		(($t3 = strval(interdire_scripts(PtoBR(propre(zengarden_affiche_version_compatible(table_valeur($Pile[$SP]['valeur'],'version')))))))!=='' ?
				(': ' . $t3) :
				'') .
		'
							</li>
				')) :
			'')) :
		'');
	}
	@sql_free($result, 'pour');
	}
	return $t0;
}



/* BOUCLE POUR  */

 function BOUCLE_themeshtml_bffa71122260b217aff6b4b17df22e2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $connect = 'pour';
	static $table = 'POUR';
	static $id = '_themes';
	static $from = array('POUR' => 'POUR');
	static $type = array();
	static $groupby = array();
	static $select = array("POUR.valeur",
		"POUR.cle");
	static $orderby = array('chemin_tri');
	$where = 
			array(
			array('NOT', 
			array('=', 'POUR.cle', sql_quote(interdire_scripts(entites_html((@$Pile[0]['selection']),true))))));
	static $join = array();
	static $limit = '';
	$having = 
			array(
			array('tableau', (is_array($a = ($Pile["vars"])) ? $a['themes'] : "")));
	$t0 = "";
	// REQUETE
	$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect,
		 array('../plugins/zen-garden/prive/zengarden_theme.html','html_bffa71122260b217aff6b4b17df22e2d','_themes',3,$GLOBALS['spip_lang']));
	if ($result) {
	
	// COMPTEUR
	$Numrows['_themes']['compteur_boucle'] = 0;
	$Numrows['_themes']['total'] = @intval(sql_count($result, 'pour'));
	$debut_boucle = isset($Pile[0]['debut_themes']) ? $Pile[0]['debut_themes'] : _request('debut_themes');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_themes'] = quete_debut_pagination('cle',$Pile[0]['@cle'] = substr($debut_boucle,1),20,$result,'pour');
		if (!sql_seek($result,0,'pour')){
			@sql_free($result,'pour');
			$result = calculer_select($select, $from, $type, $where, $join, $groupby, $orderby, $limit, $having, $table, $id, $connect);
		}
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$fin_boucle = min(($tout ? $Numrows['_themes']['total'] : $debut_boucle + 19), $Numrows['_themes']['total'] - 1);
	$Numrows['_themes']['grand_total'] = $Numrows['_themes']['total'];
	$Numrows['_themes']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_themes']['grand_total'] AND sql_seek($result,$debut_boucle,'pour','continue'))
		$Numrows['_themes']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public/spip/ecrire:intitule_licence');
	$l2 = _T('zengarden:intitule_compatiblite_squelette');
	$l3 = _T('zengarden:bandeau_personalisable');
	$l4 = _T('zengarden:apercevoir_ce_theme');
	$l5 = _T('zengarden:choisir_ce_theme');$SP++;
	// RESULTATS
	while ($Pile[$SP] = @sql_fetch($result, 'pour')) {

		$Numrows['_themes']['compteur_boucle']++;
		if ($Numrows['_themes']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_themes']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
	<li class=\'theme\'>
		<div class="qTip target_leftMiddle tooltip_rightMiddle">
		' .
interdire_scripts(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_reduire',concat(eval('return '.'_DIR_THEMES'.';'),interdire_scripts(table_valeur($Pile[$SP]['valeur'],'chemin')),'/',interdire_scripts(table_valeur($Pile[$SP]['valeur'],'icon'))),interdire_scripts(entites_html(sinon(@$Pile[0]['largeur_previsu'],'100'),true)),interdire_scripts(entites_html(sinon(@$Pile[0]['hauteur_previsu'],'75'),true)))),'class',''),'alt',interdire_scripts(extraire_multi(typo(table_valeur($Pile[$SP]['valeur'],'nom')))))) .
'
		<h3 class="">' .
interdire_scripts(extraire_multi(typo(table_valeur($Pile[$SP]['valeur'],'nom')))) .
'</h3>
		</div>
		<div class="qTipContent">
		<div class=\'descriptif\'>' .
interdire_scripts(propre(table_valeur($Pile[$SP]['valeur'],'description'))) .
'</div>
		<div class=\'auteur\'>' .
_T('info_les_auteurs_1',array('les_auteurs' => interdire_scripts(PtoBR(propre(table_valeur($Pile[$SP]['valeur'],'auteur')))))) .
'</div>
		<div class=\'licence\'>' .
(($t1 = strval(interdire_scripts(PtoBR(propre(table_valeur($Pile[$SP]['valeur'],'licence'))))))!=='' ?
		((	$l1 .
	' ') . $t1) :
		'') .
'</div>

		' .
(($t1 = BOUCLE_squeletteshtml_bffa71122260b217aff6b4b17df22e2d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class=\'squelette\'>
				' .
		$l2 .
		'
				<ul>
				') . $t1 . '
				</ul>
			</div>
			<br class="nettoyeur" />
		') :
		'') .
'

		' .
(($t1 = strval(interdire_scripts((table_valeur($Pile[$SP]['valeur'],'bandeau') ? $l3:''))))!=='' ?
		('<div class=\'bandeau\'>' . $t1 . '</div>') :
		'') .
'
		</div>
		<p class=\'actions\'>
		[<a target=\'_blank\' href=\'' .
invalideur_session($Cache, generer_action_auteur('zengarden_activer_theme',(	'apercu:' .
	interdire_scripts(invalideur_session($Cache, $Pile[$SP]['cle']))),interdire_scripts(invalideur_session($Cache, ((($a = eval('return '.'_DIR_RACINE'.';')) OR (!is_array($a) AND strlen($a))) ? $a : interdire_scripts(invalideur_session($Cache, entites_html((@$Pile[0]['redirect']),true)))))))) .
'\'>' .
$l4 .
'</a>]
		[<a href=\'' .
invalideur_session($Cache, generer_action_auteur('zengarden_activer_theme',(	'activation:' .
	interdire_scripts(invalideur_session($Cache, $Pile[$SP]['cle']))),invalideur_session($Cache, parametre_url(self(),'debut_themes','')))) .
'\'>' .
$l5 .
'</a>]
		</p>
	</li>
');
	}
	@sql_free($result, 'pour');
	}
	return $t0;
}


//
// Fonction principale du squelette ../plugins/zen-garden/prive/zengarden_theme.html
// Temps de compilation total: 44.527 ms
//

function html_bffa71122260b217aff6b4b17df22e2d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars']['themes'] = interdire_scripts(zengarden_liste_themes(entites_html(sinon(@$Pile[0]['tous'],''),true)))) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/zengarden_theme_actif') . ', array_merge('.var_export($Pile[0],1).',array(\'themes\' => ' . argumenter_squelette((is_array($a = ($Pile["vars"])) ? $a['themes'] : "")) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/zen-garden/prive/zengarden_theme.html\',\'html_bffa71122260b217aff6b4b17df22e2d\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
(($t1 = BOUCLE_themeshtml_bffa71122260b217aff6b4b17df22e2d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_themes"]["grand_total"],
 		'_themes',
		isset($Pile[0]['debut_themes'])?$Pile[0]['debut_themes']:intval(_request('debut_themes')),
		20, true, '', 'pour', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste_themes\'>
') . $t1 . (	'
</ul>
<br class="nettoyeur" />
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_themes"]["grand_total"],
 		'_themes',
		isset($Pile[0]['debut_themes'])?$Pile[0]['debut_themes']:intval(_request('debut_themes')),
		20, true, '', 'pour', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'

<script type="text/javascript" src="' .
		interdire_scripts(find_in_path('javascript/jquery.qtip-1.0.0-rc3.js')) .
		'" ></script>
<script type="text/javascript" src="' .
		interdire_scripts(find_in_path('javascript/jquery.qtip.activate.js')) .
		'" ></script>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_bffa71122260b217aff6b4b17df22e2d', $Cache, $page, '../plugins/zen-garden/prive/zengarden_theme.html');
}
?>