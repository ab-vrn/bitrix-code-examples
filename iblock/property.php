<?php

//  Получаем все варианты значений свойства типа список
$objPropEnumList = \CIBlockProperty::GetPropertyEnum(
    'STATUS',
    [],
    [
        'IBLOCK_ID' => 1
    ]
);
while ($resValuePeropEnumList = $objPropEnumList->Fetch()) {
    $arResult[$resValuePeropEnumList['XML_ID']] = $resValuePeropEnumList['ID'];
}

//  Получение значений свойства
$arProp = \Bitrix\Iblock\PropertyTable::getRow(
    [
        'filter' => [
            'IBLOCK_ID' => 1,
            'CODE' => 'NEW_DATA'
        ],
        'select' => [
            'ID'
        ]
    ]
);
if ($arProp['ID'] > 0) {
    //...
}