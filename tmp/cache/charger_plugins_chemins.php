<?php
if (defined('_ECRIRE_INC_VERSION')) {
define('_DIR_PLUGIN_IMAGES',_DIR_EXTENSIONS.'filtres_images/');
define('_DIR_PLUGIN_MSIE_COMPAT',_DIR_EXTENSIONS.'msie_compat/');
define('_DIR_PLUGIN_PORTE_PLUME',_DIR_EXTENSIONS.'porte_plume/');
define('_DIR_PLUGIN_SAFEHTML',_DIR_EXTENSIONS.'safehtml/');
define('_DIR_PLUGIN_VERTEBRES',_DIR_EXTENSIONS.'vertebres/');
define('_DIR_PLUGIN_CFG',_DIR_PLUGINS.'cfg/');
define('_DIR_PLUGIN_SPIP_BONUX',_DIR_PLUGINS.'spip-bonux/');
define('_DIR_PLUGIN_SARKASPIP',_DIR_PLUGINS.'sarkaspip_31/');
define('_DIR_PLUGIN_ZENGARDEN',_DIR_PLUGINS.'zen-garden/');
define('_DIR_PLUGIN_COMPRESSEUR',_DIR_EXTENSIONS.'compresseur/');
if (_DIR_RESTREINT) _chemin(implode(':',array(_DIR_PLUGIN_COMPRESSEUR,_DIR_PLUGIN_ZENGARDEN,_DIR_PLUGIN_SARKASPIP,_DIR_PLUGIN_SPIP_BONUX,_DIR_PLUGIN_CFG,_DIR_PLUGIN_VERTEBRES,_DIR_PLUGIN_SAFEHTML,_DIR_PLUGIN_PORTE_PLUME,_DIR_PLUGIN_MSIE_COMPAT,_DIR_PLUGIN_IMAGES)));
else _chemin(implode(':',array(_DIR_PLUGIN_COMPRESSEUR,_DIR_PLUGIN_ZENGARDEN,_DIR_PLUGIN_SARKASPIP,_DIR_PLUGIN_SPIP_BONUX,_DIR_PLUGIN_CFG,_DIR_PLUGIN_VERTEBRES,_DIR_PLUGIN_SAFEHTML,_DIR_PLUGIN_PORTE_PLUME,_DIR_PLUGIN_MSIE_COMPAT,_DIR_PLUGIN_IMAGES)));
}
?>