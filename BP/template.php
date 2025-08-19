<?php

//  Поиск шаблонов БП
CBPWorkflowTemplateLoader::GetList(
    [],
    [
        'DOCUMENT_TYPE' => [
            'iblock',
            'CIBlockDocument',
            'iblock_'.$iblockId
        ]
    ]
)->Fetch();
