<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
	$APPLICATION->SetTitle($arResult["~NAME"]);
	$APPLICATION->SetPageProperty("title", $arResult["~NAME"]);
?>

<div id="allrecords" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node" data-tilda-project-id="2098589" data-tilda-page-id="9723941" data-tilda-page-alias="1" data-tilda-formskey="a06d0d0f7f5020ed1c0aca519367e04b">

	<div id="rec166952384" class="r t-rec t-rec_pb_30 t-screenmin-980px" style="padding-bottom:30px; " data-record-type="207" data-screen-min="980px" >
	  <!-- cover -->
	  <div class="t-cover" id="recorddiv166952384" bgimgfield="img" style="height:100vh; background-image:url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');" >
	     <div class="t-cover__carrier" id="coverCarry166952384" data-content-cover-id="166952384" data-content-cover-bg="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" data-content-cover-height="100vh" data-content-cover-parallax="fixed" style="height:100vh; "></div>
	     <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));background-image: linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#99000000', endColorstr='#99000000');"></div>
	     <div class="t184">
	        <div class="t-container t-align_center">
	           <div class="t-col t-col_12">
	              <div class="t-cover__wrapper t-valign_middle" style="height:100vh;">
	                 <h1 class="t184__title t-title t-title_xxl" style="font-weight:500;font-family:'Oswald';letter-spacing:0.5px;" field="title">
	                    <div style="font-size:62px;font-family:'Oswald';" data-customstyle="yes"><?=$arResult["~NAME"]?></div>
	                 </h1>
	              </div>
	              <div class="t184__uptitle t-uptitle t-opacity_70" style="" field="subtitle">MALINKA CAPITAL</div>
	           </div>
	        </div>
	     </div>
	  </div>
	</div>
	<?echo $arResult["~DETAIL_TEXT"];?>
</div>
