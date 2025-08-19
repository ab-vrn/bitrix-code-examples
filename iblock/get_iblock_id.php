<?php

use Bitrix\Main\Data\Cache;

Class HelperIBlock {
    const CACHE_TIEM = 86400 * 31;

    public static function getIblockByCode($sIblockCode) : int
    {
        $nResult = 0;
        $bCache = true;

        if (!empty($sIblockCode)) {
            //  Получаем из кеширования
            $obCache = Cache::createInstance();
            $cacheId = md5($sIblockCode . 'Local\Iblock\getIblockByCode#001');
            if ($obCache->initCache(self::CACHE_TIEM, $cacheId)) {
                $arResult = (int)$obCache->getVars();
            }

            if ($nResult <= 0) {
                $obCache->startDataCache();
                $obCache = false;

                $arResult = CIBlock::GetList(
                    [],
                    [
                        '=CODE' => $sIblockCode,
                        'CHECK_PERMISSIONS' => 'N'
                    ]
                )->Fetch();
                if (!empty($arResult['ID'])) {
                    $nResult = intval($arResult['ID']);
                }

                if (empty($nResult)) {
                    $obConnection = Application::getConnection();
                    $sSQL = "SELECT ID FROM `b_iblock` WHERE CODE='" . $sIblockCode . "'";
                    $arQuery = $obConnection->query($sSQL)->fetch();
                    if (!empty($arQuery['ID'])) {
                        $nResult = intval($arQuery['ID']);
                    }
                }

                if ($obCache->isStarted()) {
                    // Сохраняем кеш
                    if ($nResult > 0) {
                        $obCache->endDataCache($nResult);
                    } else {
                        $obCache->abortDataCache();
                    }
                }
            }
        }

        if ($nResult <= 0) {
            // формируем ошибку, т.к. ID инфоблока не найден
        }
    }
}
