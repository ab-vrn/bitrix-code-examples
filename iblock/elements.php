<?php

//  Пример ORM запроса
$arElements = \Bitrix\Iblock\Elements\ElementCatalogTable::getList(
    [
        'filter' => [
            '=ALTERNATIVE_NAME_VALUE' => 5
        ],
        'select' => [
            'ID',
            'NAME',
            'ACTIVE',
            'IBLOCK_ID',
            'CODE',
            'IBLOCK_SECTION_ID',
            'IBLOCK_TYPE_ID' => 'IBLOCK.IBLOCK_TYPE_ID',
            'DETAIL_PAGE_URL' => 'IBLOCK.DETAIL_PAGE_URL',
            'A_NAME' => 'A_NAME',
            'ALTERNATIVE_NAME' => 'ALTERNATIVE_NAME'
        ]
    ]
)->fetchAll();
