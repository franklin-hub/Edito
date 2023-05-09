<?php

/*
 * Squelette : plugins/sarkaspip_31/login.html
 * Date :      Tue, 27 Jul 2010 09:47:28 GMT
 * Compile :   Tue, 02 May 2023 09:32:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/sarkaspip_31/login.html
// Temps de compilation total: 138.504 ms
//

function html_e1b77dc3e3c206e4db994b691149af37($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php header("X-Spip-Cache: 86400"); ?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inc_header') . ', array(\'meta_titre\' => ' . argumenter_squelette(interdire_scripts(lire_config('sarkaspip_formulaires/titre_login2',_T('sarkaspip:acceder_espace_prive'),false))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/login.html\',\'html_e1b77dc3e3c206e4db994b691149af37\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

<body dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">
<div id="container">

	<div id="header">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/bandeau') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/login.html\',\'html_e1b77dc3e3c206e4db994b691149af37\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>
	
	<div id="wrapper">
		<div id="content">
			<div id="login_prive" class="formulaire">
				' .
(($t1 = strval(interdire_scripts(lire_config('sarkaspip_formulaires/titre_login2',_T('sarkaspip:acceder_espace_prive'),false))))!=='' ?
		('<div class="titre"><h1>' . $t1 . '</h1></div>') :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(propre(lire_config('sarkaspip_formulaires/descriptif_login2',null,false)))))!=='' ?
		('<div class="description">' . $t1 . '</div>') :
		'') .
'
				' .
executer_balise_dynamique('MENU_LANG_ECRIRE',
	array(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])),
	array('plugins/sarkaspip_31/login.html','html_e1b77dc3e3c206e4db994b691149af37','',20,$GLOBALS['spip_lang'])) .
'
				' .
(($t1 = strval(executer_balise_dynamique('LOGIN_PRIVE',
	array(@$Pile[0]['url']),
	array('plugins/sarkaspip_31/login.html','html_e1b77dc3e3c206e4db994b691149af37','',0,$GLOBALS['spip_lang']))))!=='' ?
		($t1 . (	'
				<p style="text-align: center;">
					' .
	interdire_scripts(((lire_config('accepter_inscriptions',null,false) == 'oui') ? (	'&#91;<a href="' .
		interdire_scripts(generer_url_public('inscription')) .
		'">' .
		_T('sarkaspip:login_sinscrire') .
		'</a>&#93;'):'')) .
	'
					&#91;<a href="' .
	interdire_scripts(generer_url_public('spip_pass')) .
	'" target="spip_pass" onclick="javascript:window.open(this.href, \'spip_pass\', \'scrollbars=yes, resizable=yes, width=480, height=330\'); return false;">' .
	_T('sarkaspip:login_motpasseoublie') .
	'</a>&#93;
					&#91;<a href="' .
	htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/">' .
	_T('sarkaspip:login_retoursitepublic') .
	'</a>&#93;
				</p>')) :
		'') .
'
			</div>
		</div><!--content-->
	</div><!--wrapper-->
	
	<div id="navigation">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/login.html\',\'html_e1b77dc3e3c206e4db994b691149af37\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>  <!--navigation-->
	
	<div id="extra">
			
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/extra') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/sarkaspip_31/login.html\',\'html_e1b77dc3e3c206e4db994b691149af37\',\'\',33,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>
	
	<div id="footer">
		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/pied') . ', array(\'squelette\' => ' . argumenter_squelette('plugins/sarkaspip_31/login.html') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/sarkaspip_31/login.html\',\'html_e1b77dc3e3c206e4db994b691149af37\',\'\',38,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>  <!--footer-->

</div>
</body>
</html>
');

	return analyse_resultat_skel('html_e1b77dc3e3c206e4db994b691149af37', $Cache, $page, 'plugins/sarkaspip_31/login.html');
}
?>