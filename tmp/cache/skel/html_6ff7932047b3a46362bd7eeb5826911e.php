<?php

/*
 * Squelette : ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html
// Temps de compilation total: 47.616 ms
//

function html_6ff7932047b3a46362bd7eeb5826911e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- titre=' .
_T('sarkaspip:cfg_titre_styles') .
' -->
<!-- descriptif=' .
_T('sarkaspip:cfg_descr_styles') .
' -->
<!-- boite=' .
_T('sarkaspip:cfg_boite_styles') .
' -->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?><form method="post" action="' .
self() .
'"><div>
	' .
interdire_scripts(form_hidden(entites_html((@$Pile[0]['_cfg_']),true))) .
'
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_general') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_general') .
'</p>
		<label>' .
_T('sarkaspip:cfg_lbl_css_fo') .
'</label>
		<input type="text" name="fo_site" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['fo_site'],'Helvetica,Verdana'),true)) .
'" size="50" class="fondl" />,Arial,sans-serif
		<br />
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_site')) . ',
	\'suffixe\' => ' . argumenter_squelette('_site') . ',
	\'choix\' => ' . argumenter_squelette('fg_bg_bi') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_texte')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .
(($t1 = strval(interdire_scripts((match(lire_config('sarkaspip_layout/numero_layout','13',false),'^(7|8|9|10|11|12|34)$') ? ' ':''))))!=='' ?
		($t1 . (	'	
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_body')) . ',
	\'suffixe\' => ' . argumenter_squelette('_body') . ',
	\'choix\' => ' . argumenter_squelette('fg_bg_bi') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_texte')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'	
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_lien') . ',
	\'choix\' => ' . argumenter_squelette('fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_lien')) . ',
	\'fg_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',25,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_intertitre') . ',
	\'choix\' => ' . argumenter_squelette('fg') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_intertitre')) . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',26,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_citations')) . ',
	\'suffixe\' => ' . argumenter_squelette('_citation') . ',
	\'choix\' => ' . argumenter_squelette('fg_bg') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',27,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_quote') . ',
	\'choix\' => ' . argumenter_squelette('ca') . ',
	\'complement_label_ca\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ca_quote')) . ',
	\'ca_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_code') . ',
	\'choix\' => ' . argumenter_squelette('ca') . ',
	\'complement_label_ca\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ca_code')) . ',
	\'ca_defaut\' => ' . argumenter_squelette('#669999') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',29,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_cadre') . ',
	\'choix\' => ' . argumenter_squelette('ca') . ',
	\'complement_label_ca\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ca_cadre')) . ',
	\'ca_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',30,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_tableaux')) . ',
	\'suffixe\' => ' . argumenter_squelette('_thead') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_tb_head')) . ',
	\'complement_label_bg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_tb_head')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',31,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_todd') . ',
	\'choix\' => ' . argumenter_squelette('bg') . ',
	\'complement_label_bg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_tb_odd')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#e0e0e0') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',32,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_teven') . ',
	\'choix\' => ' . argumenter_squelette('bg') . ',
	\'complement_label_bg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_tb_even')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',33,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_bandeau') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_bandeau') .
'</p>
		<p>' .
_T('sarkaspip:cfg_inf_css_couleurs') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_bandeau_haut')) . ',
	\'suffixe\' => ' . argumenter_squelette('_bandeau_haut') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#aaaaaa') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',40,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_bandeau_bas')) . ',
	\'suffixe\' => ' . argumenter_squelette('_bandeau_bas') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',41,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_hmenus')) . ',
	\'suffixe\' => ' . argumenter_squelette('_menu_horiz') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_hi_fg_ho_td_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#323284') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',42,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_chemin')) . ',
	\'suffixe\' => ' . argumenter_squelette('_chemin') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#ddddef') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',43,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_pied') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_pied') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_pied_bas')) . ',
	\'suffixe\' => ' . argumenter_squelette('_pied_bas') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#aaaaaa') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',49,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<label>' .
_T('sarkaspip:cfg_lbl_css_ta') .
'</label>
		<input type="text" name="ta_pied_bas" value="' .
interdire_scripts(entites_html(sinon(@$Pile[0]['ta_pied_bas'],'right'),true)) .
'" size="6" class="fondl" />
		<br />
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_noisettes') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_noisettes') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_noisettes_titre')) . ',
	\'suffixe\' => ' . argumenter_squelette('_noisette_titre') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_hi_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',58,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_noisettes_soustitre')) . ',
	\'suffixe\' => ' . argumenter_squelette('_noisette_soustitre') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_hi_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',59,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_noisettes_contenu')) . ',
	\'suffixe\' => ' . argumenter_squelette('_noisette') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg_ho_td_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',60,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_agenda_aujourdhui')) . ',
	\'suffixe\' => ' . argumenter_squelette('_aujourdhui') . ',
	\'choix\' => ' . argumenter_squelette('bg_ca') . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',61,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_agenda_horsmois')) . ',
	\'suffixe\' => ' . argumenter_squelette('_horsmois') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_texte')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#aaaaaa') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',62,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>		
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_menus')) . ',
	\'suffixe\' => ' . argumenter_squelette('_menu') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_hi_fg_ho_td_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#323284') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',63,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_pagination') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_pagination') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_pagination')) . ',
	\'suffixe\' => ' . argumenter_squelette('_pagination') . ',
	\'choix\' => ' . argumenter_squelette('bg_hb_fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_tout')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#f0f0fa') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',69,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_pagination_on')) . ',
	\'suffixe\' => ' . argumenter_squelette('_pagination_on') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg_td') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',70,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_extraits') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_extraits') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_extrait_1')) . ',
	\'suffixe\' => ' . argumenter_squelette('_extrait') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg_ho_td_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_titre')) . ',
	\'complement_label_ho\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ho_titre')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',76,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_extrait_2')) . ',
	\'suffixe\' => ' . argumenter_squelette('_extrait_lien') . ',
	\'choix\' => ' . argumenter_squelette('fg_ho_td') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',77,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_description') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_description') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_description')) . ',
	\'suffixe\' => ' . argumenter_squelette('_description') . ',
	\'choix\' => ' . argumenter_squelette('fg') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',83,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_portfolio')) . ',
	\'suffixe\' => ' . argumenter_squelette('_portfolio') . ',
	\'choix\' => ' . argumenter_squelette('ca_ch') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ch_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',84,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_edito')) . ',
	\'suffixe\' => ' . argumenter_squelette('_edito') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_ca') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',85,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_une')) . ',
	\'suffixe\' => ' . argumenter_squelette('_une') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_ca') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#808080') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',86,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_commentaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_commentaires') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'suffixe\' => ' . argumenter_squelette('_commentaire') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_fg_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_titre_cartouche')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#f0f0fa') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',92,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_arbre') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_arbre') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_cadre')) . ',
	\'suffixe\' => ' . argumenter_squelette('_arbre') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_ca') . ',
	\'bg_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#888888') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',98,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_noeud')) . ',
	\'suffixe\' => ' . argumenter_squelette('_arbre_noeud') . ',
	\'choix\' => ' . argumenter_squelette('fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_titre')) . ',
	\'complement_label_ho\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ho_titre')) . ',
	\'fg_defaut\' => ' . argumenter_squelette('#888888') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#888888') . ',
	\'td_defaut\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',99,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_feuille')) . ',
	\'suffixe\' => ' . argumenter_squelette('_arbre_feuille') . ',
	\'choix\' => ' . argumenter_squelette('fg_ho_td') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_titre')) . ',
	\'complement_label_ho\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ho_titre')) . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',100,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_planche') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_planche') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_description')) . ',
	\'suffixe\' => ' . argumenter_squelette('_planche') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg_ho_td_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_titre')) . ',
	\'complement_label_ho\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_ho_titre')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',106,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_lien')) . ',
	\'suffixe\' => ' . argumenter_squelette('_planche_lien') . ',
	\'choix\' => ' . argumenter_squelette('fg_ho_td') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'ho_defaut\' => ' . argumenter_squelette('#990000') . ',
	\'td_defaut\' => ' . argumenter_squelette('underline') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',107,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_vignette')) . ',
	\'suffixe\' => ' . argumenter_squelette('_planche_logo') . ',
	\'choix\' => ' . argumenter_squelette('ca_ch') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ch_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',108,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_album') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_album') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_carrousel')) . ',
	\'suffixe\' => ' . argumenter_squelette('_carrousel') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_hb_hi_ca_ch') . ',
	\'bg_defaut\' => ' . argumenter_squelette('transparent') . ',
	\'hb_defaut\' => ' . argumenter_squelette('#888888') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#eeeeee') . ',
	\'ch_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',114,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>

	<fieldset>
		<legend>' .
_T('sarkaspip:cfg_lgd_css_formulaires') .
'</legend>
		<p>' .
_T('sarkaspip:cfg_inf_css_formulaires') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_form_1')) . ',
	\'suffixe\' => ' . argumenter_squelette('_form') . ',
	\'choix\' => ' . argumenter_squelette('bg_bi_fg') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_texte')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#f0f0fa') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',120,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_form_2')) . ',
	\'suffixe\' => ' . argumenter_squelette('_form_legende') . ',
	\'choix\' => ' . argumenter_squelette('fg') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_legende')) . ',
	\'fg_defaut\' => ' . argumenter_squelette('#6262a4') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',121,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_form_3')) . ',
	\'suffixe\' => ' . argumenter_squelette('_form_input') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_label')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#ffffff') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#888888') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',122,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_couleurs') . ', array_merge('.var_export($Pile[0],1).',array(\'explication\' => ' . argumenter_squelette(_T('sarkaspip:cfg_inf_css_couleurs_form_4')) . ',
	\'suffixe\' => ' . argumenter_squelette('_form_previsu') . ',
	\'choix\' => ' . argumenter_squelette('bg_fg_ca') . ',
	\'complement_label_fg\' => ' . argumenter_squelette(_T('sarkaspip:cfg_lbl_css_fg_texte')) . ',
	\'bg_defaut\' => ' . argumenter_squelette('#f0f0fa') . ',
	\'fg_defaut\' => ' . argumenter_squelette('#000000') . ',
	\'ca_defaut\' => ' . argumenter_squelette('#f57900') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',123,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/cfg/inc_cfg_boutons') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html\',\'html_6ff7932047b3a46362bd7eeb5826911e\',\'\',126,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div></form>

' .
(($t1 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_ARBO'.';') == 'oui') ? ' ':''))))!=='' ?
		($t1 . (	'
	<div id="bloc_debug">
		<br />
		>> Debug - Etat des variables du fond Styles:<br />
		' .
	cfg_affiche_arborescence('sarkaspip_styles') .
	'</div>
')) :
		'') .
'
' .
fin_cadre_trait_couleur('1') .
'
');

	return analyse_resultat_skel('html_6ff7932047b3a46362bd7eeb5826911e', $Cache, $page, '../plugins/sarkaspip_31/fonds/cfg_sarkaspip_styles.html');
}
?>