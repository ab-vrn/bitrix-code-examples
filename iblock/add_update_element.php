<?php

//  Обновление элемента инфоблока
$el = new CIBlockElement();
$res = $el->Update($elementID, ['DATE_CREATE'] => $data);

//  Обновление значение свойства элемента инфоблока
CIBlockElement::SetPropertyValueEx($elementID, $iBlockId, ['NEW_NAME' => $name]);

//  Создание элемента инфоблока
$arProperty = [
    //...
];
$arElement == [
    'MODIFIED_BY' => 1,
    'IBLOCK_SECTION_ID' => false,
    'IBLOCK_ID' => 1,
    'PROPERTY_VALUES' => $arProperty
];
$el = new \CIBlockElement();
$id = $el->Add($arElement);
unset($el);
