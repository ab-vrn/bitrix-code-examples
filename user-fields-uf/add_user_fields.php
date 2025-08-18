<?php
//  Добавить пользовательское свойство (UF_)

$sFieldTitle = 'Тестовое поле';

$arResord = [
    'ENTOTY_ID' => 'BIZPROC',
    'FIELD_NAME' => 'UF_TEST',
    'USER_TYPE_ID' => 'string',
    'SORT' => 100,
    'EDIT_FROM_LABEL' => [
        'ru' => $sFieldTitle,
        'en' => $sFieldTitle
    ],
    'LIST_COLUMN_LABEL' => [
        'ru' => $sFieldTitle,
        'en' => $sFieldTitle
    ],
    'LIST_FILTER_LABEL' => [
        'ru' => $sFieldTitle,
        'en' => $sFieldTitle
    ],
    'HELP_MESSAGE' => [
        'ru' => $sFieldTitle,
        'en' => $sFieldTitle
    ]
];

$CUserTypeEnntity = new \CUserTypeEntiry();
$CUserTypeEnntity->add($arResord);
