<?php if ($_NAVPATH['show'] != 1) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php }
$_NAVPATH['title_eng'] = "Welcome";
$_NAVPATH['title_fra'] = "Bienvenue";
$_NAVPATH['link_eng'] = "/theme-gcwu-fegc/php/2col-megamenu-theme-gcwu-fegc-eng.php";
$_NAVPATH['link_fra'] = "/theme-gcwu-fegc/php/2col-megamenu-theme-gcwu-fegc-fra.php";
$_NAVPATH['lang1'] = "eng";
$_NAVPATH['lang2'] = "fra";
$_NAVPATH['issued'] = "2011-10-31";
$_NAVPATH['modified'] = "YYYY-MM-DD";
$_NAVPATH['html5'] = "1";
if ($_NAVPATH['show'] != 1) {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/sp-pe-vars.php"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="dcterms.description" lang="fr" content="French description / Description en français" />
<meta name="description" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="keywords" lang="fr" content="French keywords / Mots-clés en français" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
<meta name="dcterms.subject" title="scheme" lang="fr" content="French subject terms / Termes de sujet en français" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/cont.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/trail-arr.php"; ?>
</body>
</html>
<?php } else {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/np.php";
} ?>