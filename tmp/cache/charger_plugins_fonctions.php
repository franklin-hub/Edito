<?php
if (defined('_ECRIRE_INC_VERSION')) {
if (file_exists($f=_ROOT_EXTENSIONS.'filtres_images/'.'images_fonctions.php')){ include_once $f;}
if (file_exists($f=_ROOT_EXTENSIONS.'porte_plume/'.'inc/barre_outils.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'cfg/'.'cfg_fonctions.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'spip-bonux/'.'public/spip_bonux_criteres.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'spip-bonux/'.'public/spip_bonux_balises.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'spip-bonux/'.'spip_bonux_fonctions.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'spip-bonux/'.'configurer/pipelines.php')){ include_once $f;}
if (file_exists($f=_ROOT_PLUGINS.'sarkaspip_31/'.'sarkaspip_fonctions.php')){ include_once $f;}
if (file_exists($f=_ROOT_EXTENSIONS.'compresseur/'.'filtres/compresseur.php')){ include_once $f;}
}
?>