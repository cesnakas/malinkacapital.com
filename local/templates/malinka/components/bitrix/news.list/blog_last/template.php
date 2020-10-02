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


<div id="rec166953388" class="r t-rec t-rec_pt_75 t-rec_pb_60" style="padding-top:75px;padding-bottom:60px; " data-animationappear="off" data-record-type="403" >
	 <!-- T403 -->
	 <div class="t403" >
		  <?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="t403__container-table t-width_12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					 <a class="t403__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>" >
							<div class="t403__tcol2 t403__tcol2_flipped" >
								 <div class="t403__textwrapper">
										<div class="t403__title t-title t-title_xxs" style=""><?echo $arItem["~NAME"]?></div>
										<div class="t403__descr t-descr t-descr_sm t-opacity_70" style=""><?=$arItem["PREVIEW_TEXT"]?></div>
								 </div>
							</div>
							<div class="t403__tcol1">
								 <div class="t403__imgbox" >
										<div class="t403__img t-bgimg" data-original="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');"></div>
										<div class="t403__separator"></div>
								 </div>
							</div>
					 </a>
				</div>
			<?endforeach;?>
	 </div>
</div>
