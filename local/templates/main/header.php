<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

    <?
    $APPLICATION->ShowHead();
    // Bitrix
    use Bitrix\Main\Page\Asset;
    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
    // Open Graph
    // Bootstrap
    use Bitrix\Main\UI\Extension;
    Extension::load('ui.bootstrap4');
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.min.css');
    // JS
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-1.10.2.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
    ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle(false);?>">
    <meta property="og:description" content="<?=$APPLICATION->ShowProperty('description');?>">
    <meta property="og:image" content="https://static.tildacdn.com/tild3034-3033-4135-b036-643034346162/___.png">

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <div class="navbar navbar-expand-lg navbar-light fixed-top" id="navigation">
        <div class="container">
            <a class="navbar-brand" href="<?=SITE_DIR?>">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="tel:+73422009199">+7 (342) 200 91 99</a>
                </div>
                <div class="navbar-nav ml-3">
                    <a class="nav-link" href="">En</a>
                    <a class="nav-link" href="">Ru</a>
                </div>
            </div>
        </div>
    </div>

    <main>
