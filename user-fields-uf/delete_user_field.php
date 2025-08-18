<?php
// Удаление пользовательского свойства (UF_)

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
    $obUserField = new CUserTypeEntity();
    $obUserField->Delete($arUserField['ID']);
}