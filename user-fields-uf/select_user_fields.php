<?php
//  Запрос на получение пользователького (пользовательских) свойств (UF_)

$arUserField = \Bitrix\Main\UserFieldTable::getList(
    [
        'order' => [
            'ENTITY_ID' => 'ASC',
            'SORT' => 'ASC'
        ],
        'filter' => [
            'FIELD_NAME' => 'UF_TEST'
        ]
    ]
);

if (!empty($arUserField)) {
    //...
}
