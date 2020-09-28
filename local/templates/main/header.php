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

    <!-- menu -->
    <div id="rec165048487" class="r t-rec t-screenmin-980px" style="padding-top: 0px; padding-bottom: 0px; opacity: 1;" data-animationappear="off" data-record-type="450" data-screen-min="980px">
        <div class="t450__burger_container t450__burger-nobg" data-appearoffset="" data-hideoffset="" style="top:15px; ">
            <div class="t450__burger_bg " style="; opacity:0.0;"></div>
            <div class="t450__burger"><img src="https://image.flaticon.com/icons/svg/595/595005.svg" imgfield="img"></div>
        </div>
        <!-- t450 -->
        <div id="nav165048487marker"></div>
        <div class="t450__overlay">
            <div class="t450__overlay_bg" style="background-color:#373334; "></div>
        </div>
        <div id="nav165048487" class="t450" data-tooltip-hook="#menuopen" style="max-width: 100vw;background-color: #373334;">
            <div class="t450__close t450_opened " style="background-color: #373334;">
                <div class="t450__close_icon"> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> </div>
            </div>
            <div class="t450__container t-align_left"><div id="rec168124446" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off" data-record-type="396" data-screen-min="980px">
                    <!-- T396 -->
                    <div class="t396">
                        <div class="t396__artboard rendered" data-artboard-recid="168124446" data-artboard-height="710" data-artboard-height_vh="" data-artboard-valign="center" data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="710" data-artboard-proxy-max-height="710">
                            <div class="t396__elem tn-elem tn-elem__1681244461582527585852" data-elem-id="1582527585852" data-elem-type="text" data-field-top-value="260" data-field-left-value="70" data-field-width-value="280" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 260px; left: 190px; width: 280px;"> <a class="tn-atom" href="<?=SITE_DIR;?>instrumenty/">Особенности</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528121438" data-elem-id="1582528121438" data-elem-type="text" data-field-top-value="350" data-field-left-value="70" data-field-width-value="280" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 350px; left: 190px; width: 280px;"> <a class="tn-atom" href="<?=SITE_DIR;?>blog/">Блог</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528129211" data-elem-id="1582528129211" data-elem-type="text" data-field-top-value="170" data-field-left-value="70" data-field-width-value="280" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 170px; left: 190px; width: 280px;"> <a class="tn-atom" href="<?=SITE_DIR;?>hedge/">Хедж-фонд</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528171134" data-elem-id="1582528171134" data-elem-type="text" data-field-top-value="175" data-field-left-value="470" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 175px; left: 590px; width: 101px;"> <a class="tn-atom" href="/#uslugi">Услуги</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528199478" data-elem-id="1582528199478" data-elem-type="text" data-field-top-value="245" data-field-left-value="470" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 245px; left: 590px; width: 101px;"> <a class="tn-atom" href="<?=SITE_DIR;?>/instrumenty/#profit2">Доходность</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528206877" data-elem-id="1582528206877" data-elem-type="text" data-field-top-value="310" data-field-left-value="470" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 310px; left: 590px; width: 101px;"> <a class="tn-atom" href="<?=SITE_DIR;?>/#best">Преимущества</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528236832" data-elem-id="1582528236832" data-elem-type="text" data-field-top-value="375" data-field-left-value="470" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 375px; left: 590px; width: 101px;"> <a class="tn-atom" href="/#ceo">О нас</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528279356" data-elem-id="1582528279356" data-elem-type="text" data-field-top-value="170" data-field-left-value="810" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 170px; left: 930px; width: 101px;"> <a class="tn-atom" href="/#calculator">Калькулятор</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528279359" data-elem-id="1582528279359" data-elem-type="text" data-field-top-value="240" data-field-left-value="810" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 240px; left: 930px; width: 101px;"> <a class="tn-atom" href="/#footer">Контакты</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528279362" data-elem-id="1582528279362" data-elem-type="text" data-field-top-value="375" data-field-left-value="810" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 375px; left: 930px; width: 101px;"> <a class="tn-atom" href="/#faq">FAQ</a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528279366" data-elem-id="1582528279366" data-elem-type="text" data-field-top-value="310" data-field-left-value="810" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 310px; left: 930px; width: 101px;"> <a class="tn-atom" href="/#forma">Консультация</a> </div>
                            <div class="t396__carrier" data-artboard-recid="168124446"></div>
                            <div class="t396__filter" data-artboard-recid="168124446"></div>

                            <div class="t396__elem tn-elem tn-elem__1681244461582528426534" data-elem-id="1582528426534" data-elem-type="text" data-field-top-value="615" data-field-left-value="510" data-field-width-value="201" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 615px; left: 630px; width: 201px;">
                                <div class="tn-atom" field="tn_text_1582528426534">+7 (342) 200 91 99</div>
                            </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528472741" data-elem-id="1582528472741" data-elem-type="image" data-field-top-value="610" data-field-left-value="110" data-field-width-value="34" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 230px; top: 610px; width: 34px;"> <a class="tn-atom" href="https://www.facebook.com/malinka_capital-605830633245003/"> <img class="tn-atom__img t-img loading" src="/upload/tilda/d50ba2e156b0c850afdcae821249872f001-facebook.svg" imgfield="tn_img_1582528472741"> </a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528484309" data-elem-id="1582528484309" data-elem-type="image" data-field-top-value="610" data-field-left-value="160" data-field-width-value="34" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 280px; top: 610px; width: 34px;"> <a class="tn-atom" href="https://www.instagram.com/malinka_capital/"> <img class="tn-atom__img t-img loading" src="/upload/tilda/bda415103290a0e88306ca878cda61cb002-instagram.svg" imgfield="tn_img_1582528484309"> </a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528506766" data-elem-id="1582528506766" data-elem-type="image" data-field-top-value="610" data-field-left-value="210" data-field-width-value="34" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 330px; top: 610px; width: 34px;"> <a class="tn-atom" href="https://vk.com/malinkacapital"> <img class="tn-atom__img t-img loading" src="/upload/tilda/cc7a3fa642dc9c20f7fecd3ba18c5241photo.svg" imgfield="tn_img_1582528506766"> </a> </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528675083" data-elem-id="1582528675083" data-elem-type="image" data-field-top-value="435" data-field-left-value="720" data-field-width-value="15" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 840px; top: 435px; width: 15px;">
                                <div class="tn-atom"> <img class="tn-atom__img t-img loading" src="/upload/tilda/977df2fbdebd11eda9c350d3517f8fa1Ellipse_31.svg" imgfield="tn_img_1582528675083"> </div>
                            </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528699006" data-elem-id="1582528699006" data-elem-type="image" data-field-top-value="425" data-field-left-value="350" data-field-width-value="344" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 470px; top: 425px; width: 344px;">
                                <div class="tn-atom"> <img class="tn-atom__img t-img loading" src="/upload/tilda/56ff0cb35c5e0b1afb641fc74cfee737photo.svg" imgfield="tn_img_1582528699006"> </div>
                            </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582528748143" data-elem-id="1582528748143" data-elem-type="image" data-field-top-value="-15" data-field-left-value="980" data-field-width-value="276" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 1100px; top: -15px; width: 276px;">
                                <div class="tn-atom"> <img class="tn-atom__img t-img loading" src="/upload/tilda/90179a59113c3a3715c578151b34751dphoto_1.svg" imgfield="tn_img_1582528748143"> </div>
                            </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461582964459541" data-elem-id="1582964459541" data-elem-type="text" data-field-top-value="615" data-field-left-value="811" data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 615px; left: 931px; width: 101px;">
                                <div class="tn-atom" field="tn_text_1582964459541">malinkacapital@gmail.com</div>
                            </div>
                            <div class="t396__elem tn-elem tn-elem__1681244461583437174466" data-elem-id="1583437174466" data-elem-type="image" data-field-top-value="30" data-field-left-value="-10" data-field-width-value="307" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value="" data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits" style="left: 110px; top: 30px; width: 307px;">
                                <div class="tn-atom"> <img class="tn-atom__img t-img loading" src="/upload/tilda/6374e5be28db28ab0984ccb9c9a6eed4__.svg" alt="Logo" imgfield="tn_img_1583437174466"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /T396 -->
                </div>
            </div>
        </div>
    </div>
    <!-- /menu -->

    <!-- cookie -->
    <div id="rec171979892" class="r t-rec" style=" " data-animationappear="off" data-record-type="657">
        <!-- T657 -->
        <div class="t657 t657_long t657_closed" data-storage-item="t657cookiename_2098589" style="">
            <div class="t657__wrapper t-align_center" style="background:#fbfbf9;">
                <div class="t657__text t-name t-descr_xxs" style="font-weight:300;" field="text">
                    <div style="font-size:14px;font-family:'Roboto';" data-customstyle="yes"><span style="font-weight: 100;">Мы используем файлы cookie, чтобы анализировать трафик, подбирать для вас подходящий контент и рекламу, а также дать вам возможность делиться информацией в социальных сетях. Мы передаем информацию о ваших действиях на сайте партнерам Google: социальным сетям и компаниям, занимающимся рекламой и веб-аналитикой. Наши партнеры могут комбинировать эти сведения с предоставленной вами информацией, а также данными, которые они получили при использовании вами их сервисов. Продолжая использовать наш сайт, вы соглашаетесь на использование нами куки-файлов. Вы можете отозвать согласие в любое время.</span></div>
                </div>
                <div class="t657__btn-wrapper">
                    <div class="t657__btn t-btn t-btn_sm" style="color:#ebebeb;background-color:#d11e29;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;text-transform:uppercase;">Принять все cookies</div>
                </div>
                <svg class="t657__icon-close" width="10px" height="10px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Close</desc>
                    <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd">
                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                    </g>
                </svg>
            </div>
        </div>
        <script data-skip-moving="true" type="text/javascript">$(document).ready(function() {   t657_init('171979892');
            });
        </script>
    </div>
    <!-- /cookie -->

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
                        <a class="t282__logo__content" href="<?=SITE_DIR;?>">
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
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="<?=SITE_DIR;?>/hedge/" data-menu-submenu-hook="">Хедж-фонд</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="<?=SITE_DIR;?>/instrumenty" data-menu-submenu-hook="">Особенности</a>
                            <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="<?=SITE_DIR;?>/blog" data-menu-submenu-hook="">Блог</a>
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
    <div id="rec179624420" class="r t-rec t-screenmin-980px" data-animationappear="off" data-record-type="230" data-screen-min="980px">
        <div id="nav179624420" class="t199__header t199__js__header" data-menu="yes">
            <div class="t199__holder">

                <a class="t199__logo" href="<?=SITE_DIR;?>">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg" class="t199__logo-image" imgfield="img">
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
                        <a class="t199__lang-item" href="<?=ISTE_DIR;?>/eng/">En</a>
                        <a class="t199__lang-item" href="<?=SITE_DIR;?>">Ru</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /navigation -->

    <main role="main">
