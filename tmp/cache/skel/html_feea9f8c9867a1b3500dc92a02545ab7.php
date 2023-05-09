<?php

/*
 * Squelette : ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_couleurs.html
 * Date :      Tue, 27 Jul 2010 09:47:27 GMT
 * Compile :   Mon, 01 May 2023 10:24:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_couleurs.html
// Temps de compilation total: 52.876 ms
//

function html_feea9f8c9867a1b3500dc92a02545ab7($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['explication']),true))))!=='' ?
		('<p><strong>' . $t1 . '</strong></p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(bg)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_bg',array(lbl_bg_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_bg']),true)))) .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'bg' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'bg' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'bg' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="bg' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'bg' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))),true)) .
	'" size="11" class="fondl palette" 
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(bi)') ? ' ':''))))!=='' ?
		($t1 . (	'
<p>' .
	_T('sarkaspip:cfg_lbl_css_image_fond',array(lbl_bi_suffixe => interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))) .
	'</p>
' .
	(($t2 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_FONDS'.';') == 'oui') ? ' ':''))))!=='' ?
			($t2 . (	'
' .
		(($t3 = strval(lister_fonds('1','bi',interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))))!=='' ?
				((	'<select name="fond_bi' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
			'">
	') . $t3 . '
</select>') :
				'') .
		'
<br />
')) :
			'') .
	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_bi1') .
	'</label>
<label>
	<input type="radio" name="bi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".gif" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'bi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.gif') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_gif') .
	'
</label>
<label>
	<input type="radio" name="bi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".png" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'bi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.png') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_png') .
	'
</label>
<label>
	<input type="radio" name="bi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".jpg" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'bi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.jpg') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_jpg') .
	'
</label>
<br />
<label>' .
	_T('sarkaspip:cfg_lbl_css_bi2') .
	'</label><br />
<input type="text" name="bi_proprietes' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html((@$Pile[0][(	'bi_proprietes' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true)) .
	'" size="60" class="fondl" />
<br /><br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(hb)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_hb') .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'hb' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['hb_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'hb' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['hb_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'hb' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['hb_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="hb' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'hb' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['hb_defaut']),true))),true)) .
	'" size="11" class="fondl palette" 
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(hi)') ? ' ':''))))!=='' ?
		($t1 . (	'
<p>' .
	_T('sarkaspip:cfg_lbl_css_image_hfond',array(lbl_hi_suffixe => interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))) .
	'</p>
' .
	(($t2 = strval(interdire_scripts(((eval('return '.'_SARKASPIP_DEBUG_CFG_FONDS'.';') == 'oui') ? ' ':''))))!=='' ?
			($t2 . (	'
' .
		(($t3 = strval(lister_fonds('1','hi',interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))))!=='' ?
				((	'<select name="fond_hi' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
			'">
	') . $t3 . '
</select>') :
				'') .
		'
<br />
')) :
			'') .
	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_bi1') .
	'</label>
<label>
	<input type="radio" name="hi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".gif" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'hi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.gif') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_gif') .
	'
</label>
<label>
	<input type="radio" name="hi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".png" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'hi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.png') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_png') .
	'
</label>
<label>
	<input type="radio" name="hi_extension' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value=".jpg" ' .
	interdire_scripts(((entites_html(sinon(@$Pile[0][(	'hi_extension' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],'.gif'),true) == '.jpg') ? 'checked="checked"':'')) .
	' />
	' .
	_T('sarkaspip:cfg_lbl_jpg') .
	'
</label>
<br />
<label>' .
	_T('sarkaspip:cfg_lbl_css_bi2') .
	'</label><br />
<input type="text" name="hi_proprietes' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html((@$Pile[0][(	'hi_proprietes' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))]),true)) .
	'" size="60" class="fondl" />
<br /><br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(fg)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_fg',array(lbl_fg_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_fg']),true)))) .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'fg' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['fg_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'fg' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['fg_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'fg' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['fg_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="fg' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'fg' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['fg_defaut']),true))),true)) .
	'" size="11" class="fondl palette" 
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(ho)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_ho',array(lbl_ho_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_ho']),true)))) .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'ho' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ho_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'ho' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ho_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'ho' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ho_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="ho' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'ho' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ho_defaut']),true))),true)) .
	'" size="11" class="fondl palette"
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(td)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_td',array(lbl_ho_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_ho']),true)))) .
	'</label>
<input type="text" name="td' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'td' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['td_defaut']),true))),true)) .
	'" size="15" class="fondl" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(ca)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_ca',array(lbl_ca_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_ca']),true)))) .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'ca' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ca_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'ca' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ca_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'ho' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ca_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="ca' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'ca' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ca_defaut']),true))),true)) .
	'" size="11" class="fondl palette"
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((match(entites_html((@$Pile[0]['choix']),true),'(ch)') ? ' ':''))))!=='' ?
		($t1 . (	'
<label>' .
	_T('sarkaspip:cfg_lbl_css_ch',array(lbl_ch_complement => interdire_scripts(entites_html((@$Pile[0]['complement_label_ch']),true)))) .
	'</label>
' .
	vide($Pile['vars']['bg_color'] = interdire_scripts(entites_html(sinon(@$Pile[0][(	'ch' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ch_defaut']),true))),true))) .
	'
' .
	vide($Pile['vars']['color'] = (	'#' .
		interdire_scripts(filtrer('couleur_extreme',filtrer('couleur_inverser',entites_html(sinon(@$Pile[0][(	'ch' .
			interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ch_defaut']),true))),true)))))) .
	'
' .
	(($t2 = strval(interdire_scripts((match(entites_html(sinon(@$Pile[0][(	'ho' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ch_defaut']),true))),true),'(transparent)') ? ' ':''))))!=='' ?
			($t2 . (	'
	' .
		vide($Pile['vars']['color'] = '#000000') .
		'
')) :
			'') .
	'
<input type="text" name="ch' .
	interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)) .
	'" value="' .
	interdire_scripts(entites_html(sinon(@$Pile[0][(	'ch' .
		interdire_scripts(entites_html((@$Pile[0]['suffixe']),true)))],interdire_scripts(entites_html((@$Pile[0]['ch_defaut']),true))),true)) .
	'" size="11" class="fondl palette"
style="background-color: ' .
	sinon(is_array($a = ($Pile["vars"])) ? $a['bg_color'] : "",interdire_scripts(entites_html((@$Pile[0]['bg_defaut']),true))) .
	'; color: ' .
	(is_array($a = ($Pile["vars"])) ? $a['color'] : "") .
	';" />
<br />
')) :
		'') .
'
');

	return analyse_resultat_skel('html_feea9f8c9867a1b3500dc92a02545ab7', $Cache, $page, '../plugins/sarkaspip_31/noisettes/cfg/inc_cfg_couleurs.html');
}
?>