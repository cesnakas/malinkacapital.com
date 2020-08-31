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
    // Bootstrap
    // use Bitrix\Main\UI\Extension;
    // Extension::load('ui.bootstrap4');
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/grid-3.0.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/blocks-2.12.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/animation-1.0.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/menusub-1.0.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/slds-1.4.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/zoom-2.0.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/popup-1.1.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/assets/style.css');
    // CSS Main
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.min.css');
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/jquery-1.10.2.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/scripts-2.8.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/blocks-2.7.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/lazyload-1.3.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/animation-1.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/menusub-1.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/slds-1.4.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/hammer.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/zoom-2.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/animation-sbs-1.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/forms-1.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/assets/animation-ext-1.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/common.js');
    // JS Main
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
    ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle(false);?>">
    <meta property="og:description" content="<?=$APPLICATION->ShowProperty('description');?>">
    <meta property="og:image" content="<?=SITE_TEMPLATE_PATH;?>/img/og_image.png">

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <!-- mobile menu -->
    <div id="rec166577349" class="r t-rec t-rec_pt_60 t-screenmax-980px" data-animationappear="off" data-record-type="327" data-screen-max="980px">
        <!-- T282 -->
        <div id="nav166577349marker"></div>
        <div id="nav166577349" class="t282" data-menu="yes" data-appearoffset="">
            <div class="t282__container t282__positionfixed">
                <div class="t282__container__bg" data-navmarker="nav166577349marker" data-bgopacity="1" data-menu-shadow="0px 1px 3px rgba(0,0,0,0.)"></div>
                <div class="t282__container__bg_opened"></div>
                <div class="t282__menu__content">
                    <div class="t282__logo__container">
                        <a class="t282__logo__content" href="/">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-mobile.svg" class="t280__logo__img" imgfield="img" alt="">
                        </a>
                        <div class="t282__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="t282__menu__container t282__closed">
                <div class="t282__menu__wrapper">
                    <div class="t282__menu">
                        <div class="t282__menu__items">
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/hedge/" data-menu-submenu-hook="">Хедж-фонд</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/instrumenty" data-menu-submenu-hook="">Особенности</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/blog" data-menu-submenu-hook="">Блог</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="#calculator" data-menu-submenu-hook="">Калькулятор</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="#demo" data-menu-submenu-hook="">Открыть демо-счет</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="#forma" data-menu-submenu-hook="">Консультация</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="#footer" data-menu-submenu-hook="">Контакты</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="tel:+73422009199" data-menu-submenu-hook="">+7 (342) 200 91 99</a>
                        </div>

                        <div class="t-sociallinks">
                            <div class="t-sociallinks__wrapper">
                                <div class="t-sociallinks__item">
                                    <a href="https://www.facebook.com/malinka_capital-605830633245003/" target="_blank">
                                        <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>Facebook</desc><path style="fill:#000;" d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>
                                    </a>
                                </div>
                                <div class="t-sociallinks__item">
                                    <a href="https://vk.com/malinkacapital" target="_blank">
                                        <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>VK</desc><path style="fill:#000;" d="M47.761,24c0,13.121-10.639,23.76-23.76,23.76C10.878,47.76,0.239,37.121,0.239,24c0-13.123,10.639-23.76,23.762-23.76C37.122,0.24,47.761,10.877,47.761,24 M35.259,28.999c-2.621-2.433-2.271-2.041,0.89-6.25c1.923-2.562,2.696-4.126,2.45-4.796c-0.227-0.639-1.64-0.469-1.64-0.469l-4.71,0.029c0,0-0.351-0.048-0.609,0.106c-0.249,0.151-0.414,0.505-0.414,0.505s-0.742,1.982-1.734,3.669c-2.094,3.559-2.935,3.747-3.277,3.524c-0.796-0.516-0.597-2.068-0.597-3.171c0-3.449,0.522-4.887-1.02-5.259c-0.511-0.124-0.887-0.205-2.195-0.219c-1.678-0.016-3.101,0.007-3.904,0.398c-0.536,0.263-0.949,0.847-0.697,0.88c0.31,0.041,1.016,0.192,1.388,0.699c0.484,0.656,0.464,2.131,0.464,2.131s0.282,4.056-0.646,4.561c-0.632,0.347-1.503-0.36-3.37-3.588c-0.958-1.652-1.68-3.481-1.68-3.481s-0.14-0.344-0.392-0.527c-0.299-0.222-0.722-0.298-0.722-0.298l-4.469,0.018c0,0-0.674-0.003-0.919,0.289c-0.219,0.259-0.018,0.752-0.018,0.752s3.499,8.104,7.573,12.23c3.638,3.784,7.764,3.36,7.764,3.36h1.867c0,0,0.566,0.113,0.854-0.189c0.265-0.288,0.256-0.646,0.256-0.646s-0.034-2.512,1.129-2.883c1.15-0.36,2.624,2.429,4.188,3.497c1.182,0.812,2.079,0.633,2.079,0.633l4.181-0.056c0,0,2.186-0.136,1.149-1.858C38.281,32.451,37.763,31.321,35.259,28.999"></path></svg>
                                    </a>
                                </div>
                                <div class="t-sociallinks__item">
                                    <a href="https://www.instagram.com/malinka_capital/" target="_blank">
                                        <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve"><desc>Instagram</desc><path style="fill:#000000;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#000;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#000;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="t282__lang">
                            <a class="t-descr t-descr_xxs" href="/eng">En</a>
                            <a class="t-descr t-descr_xxs t-active" href="/">Ru</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="t282__overlay t282__closed"></div>
        </div>

    </div>
    <!-- /mobile menu -->

    <!-- navigation -->
    <div id="rec179624420" class="r t-rec t-rec_pt_60 t-screenmin-980px" style="padding-top:60px; " data-animationappear="off" data-record-type="230" data-screen-min="980px">
        <div id="nav179624420" class="t199__header t199__js__header" style="background-color: rgba(255, 255, 255, 0);" data-menu="yes">
            <div class="t199__holder">

                <a class="t199__logo" href="<?=SITE_DIR;?>">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg" class="t199__logo-image" style="max-width: 150px; width: 100%; height: auto;" imgfield="img">
                    <div class="t199__logo-text-mobile t-title" field="title"></div>
                </a>

                <a class="t199__mmenu-toggler t199__js__menu-toggler" href="#">
                    <span class="t199__mmenu-toggler-in"></span>
                </a>

                <div class="t199__mmenu t199__js__menu">
                    <nav class="t199__menu">
                        <div class="t199__menu-item-wrap">
                            <a class="t199__menu-item t-title t-menu__link-item" href="" data-menu-submenu-hook="">+7 (342) 200 91 99</a>
                        </div>
                    </nav>
                    <div class="t199__lang">
                        <a class="t199__lang-item" href="/eng/">En</a>
                        <a class="t199__lang-item" href="/">Ru</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /navigation -->

    <main class="_container-fluid">
