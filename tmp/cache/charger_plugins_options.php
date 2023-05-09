<?php
if (defined('_ECRIRE_INC_VERSION')) {
if (file_exists($f=_ROOT_EXTENSIONS.'porte_plume/'.'porte_plume_options.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'cfg/'.'cfg_options.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'spip-bonux/'.'spip_bonux_options.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'sarkaspip_31/'.'sarkaspip_options.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'zen-garden/'.'zengarden_options.php')){ include_once $f;}
if (file_exists($f=_ROOT_EXTENSIONS.'compresseur/'.'compresseur_http.php')){ include_once $f;}
function boutons_plugins(){return unserialize('a:3:{s:13:"sarkaspip_cfg";a:6:{s:6:"parent";s:13:"configuration";s:8:"position";s:0:"";s:5:"titre";s:27:"sarkaspip:bouton_configurer";s:5:"icone";s:31:"prive/images/sarka-spip-cfg.png";s:3:"url";s:3:"cfg";s:4:"args";s:21:"cfg=sarkaspip_accueil";}s:5:"theme";a:6:{s:6:"parent";s:13:"configuration";s:8:"position";s:0:"";s:5:"titre";s:16:"zengarden:themes";s:5:"icone";s:22:"img_pack/themes-24.png";s:3:"url";s:9:"zengarden";s:4:"args";s:0:"";}s:7:"theme21";a:6:{s:6:"parent";s:15:"bando_squelette";s:8:"position";s:0:"";s:5:"titre";s:16:"zengarden:themes";s:5:"icone";s:20:"images/themes-16.png";s:3:"url";s:9:"zengarden";s:4:"args";s:0:"";}}');}
function onglets_plugins(){return unserialize('a:0:{}');}
}
?>