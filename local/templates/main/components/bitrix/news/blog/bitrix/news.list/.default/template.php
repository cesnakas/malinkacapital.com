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


<div id="rec166952849" class="r t-rec t-rec_pt_45 t-rec_pb_90" style="padding-top:45px;padding-bottom:90px;background-color:#f3f3f3; " data-animationappear="off" data-record-type="404" data-bg-color="#f3f3f3">
   <!-- T404 -->
   <div class="t404" >
      <div class="t-container">
				 <?foreach($arResult["ITEMS"] as $arItem):?>
           <?
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
	         <div class="t404__col t-col t-col_4 t-align_left t404__withbg" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	            <a class="t404__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>" >
	               <div class="t404__imgbox" >
	                  <div class="t404__img t-bgimg" data-original="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');"></div>
	                  <div class="t404__separator"></div>
	               </div>
	               <div class="t404__textwrapper t404__paddingsmall" style="background-color: #ffffff;">
	                  <div class="t404__uptitle t-uptitle" style="font-weight:400;font-family:&apos;Roboto&apos;;text-transform:uppercase;">
											<span style="font-weight:400;font-family:&apos;Roboto&apos;;text-transform:uppercase;" class="t404__date">
												<?if($arItem["DISPLAY_ACTIVE_FROM"]):?>
													<?echo date('d-m-Y', strtotime($arItem["DISPLAY_ACTIVE_FROM"]))?>
												<?endif?>
											</span>
										</div>
	                  <div class="t404__title t-heading t-heading_xs" style=""><?echo $arItem["~NAME"]?></div>
	                  <div class="t404__descr t-descr t-descr_xs" style="font-weight:400;font-family:&apos;Roboto&apos;;">
	                  	<?=$arItem["PREVIEW_TEXT"]?>
	                  </div>
	               </div>
	            </a>
	         </div>
				 <?endforeach;?>
      </div>
      <div class="t-container"> </div>
   </div>
   <script>$(document).ready(function(){ t404_unifyHeights('166952849'); $('.t404').bind('displayChanged',function(){ t404_unifyHeights('166952849'); }); $(window).bind('resize', t_throttle(function(){ t404_unifyHeights('166952849'); }, 200)); $(window).load(function(){ t404_unifyHeights('166952849'); });
      });
   </script><script>$(document).ready(function(){ t404_unifyHeightsTextwrapper('166952849'); $('.t404').bind('displayChanged',function(){ t404_unifyHeightsTextwrapper('166952849'); }); $(window).bind('resize', t_throttle(function(){ t404_unifyHeightsTextwrapper('166952849'); }, 200)); $(window).load(function(){ t404_unifyHeightsTextwrapper('166952849'); });
      });
   </script>
</div>


<?/*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

*/?>
