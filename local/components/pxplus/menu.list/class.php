<?php


class Rating extends CBitrixComponent
{
    protected $iType = 'content_without_sections';
    protected $iCode = 'catalog';
    protected $iId = '';
    protected $itemId = '';
    protected $cookie = 'rating';

    protected $itemUrl = '';
    protected $schemaName = '';


    public function onPrepareComponentParams($params)
    {
        if ( ! isset($params['CACHE_TIME'])) {
            $params['CACHE_TIME'] = 36000000;
        }

        $params['ID'] = intval(($params['ID'] ?? 0));
        $params['IBLOCK_ID'] = intval($params['IBLOCK_ID']);

        $params['DEPTH_LEVEL'] = intval($params['DEPTH_LEVEL']);
        if ($params['DEPTH_LEVEL'] <= 0) {
            $params['DEPTH_LEVEL'] = 1;
        }

        return $params;
    }


    public function executeComponent()
    {
        if ($this->StartResultCache()) {
            if ( ! CModule::IncludeModule('iblock')) {
                $this->AbortResultCache();
            } else {
                $arFilter = [
                    'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                    'GLOBAL_ACTIVE' => 'Y',
                    'IBLOCK_ACTIVE' => 'Y',
                    '<=' . 'DEPTH_LEVEL' => $this->arParams['DEPTH_LEVEL'],
                ];
                $arOrder = [
                    'left_margin' => 'asc',
                ];

                $rsSections = CIBlockSection::GetList(
                    $arOrder,
                    $arFilter,
                    false,
                    [
                        'ID',
                        'DEPTH_LEVEL',
                        'NAME',
                        'SECTION_PAGE_URL',
                    ]
                );
                if ($this->arParams['IS_SEF'] !== 'Y') {
                    $rsSections->SetUrlTemplates('', $this->arParams['SECTION_URL']);
                } else {
                    $rsSections->SetUrlTemplates(
                        '',
                        $this->arParams['SEF_BASE_URL'] . $this->arParams['SECTION_PAGE_URL']
                    );
                }
                $sectionId = [];
                while ($arSection = $rsSections->GetNext()) {
                    $sectionId[] = $arSection['ID'];
                    $arResult['SECTIONS'][] = [
                        'ID' => $arSection['ID'],
                        'DEPTH_LEVEL' => $arSection['DEPTH_LEVEL'],
                        '~NAME' => $arSection['~NAME'],
                        '~SECTION_PAGE_URL' => $arSection['~SECTION_PAGE_URL'],
                    ];
                    $arResult['ELEMENT_LINKS'][$arSection['ID']] = [];
                }
                
                if ($sectionId) {
                    $arFilter = [
                        'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                        'ACTIVE' => 'Y',
                        'SECTION_ID' => $sectionId,
                    ];

                    $rsElements = CIBlockElement::GetList(
                        ['sort' => 'asc', 'id' => 'desc'],
                        $arFilter,
                        false,
                        false,
                        [
                            'ID',
                            'DEPTH_LEVEL',
                            'NAME',
                            'DETAIL_PAGE_URL',
                            'SECTION_ID',
                        ]
                    );
                    while ($row = $rsElements->GetNext(true, false)) {
                        $arResult['ELEMENTS'][$row['IBLOCK_SECTION_ID']][] = $row;
                    }
                }


                $this->EndResultCache();
            }
        }

        //In 'SEF' mode we'll try to parse URL and get ELEMENT_ID from it
        if ($this->arParams['IS_SEF'] === 'Y') {
            $engine = new CComponentEngine($this);
            if (CModule::IncludeModule('iblock')) {
                $engine->addGreedyPart('#SECTION_CODE_PATH#');
                $engine->setResolveCallback(array('CIBlockFindTools', 'resolveComponentEngine'));
            }
            $componentPage = $engine->guessComponentPath(
                $this->arParams['SEF_BASE_URL'],
                [
                    'section' => $this->arParams['SECTION_PAGE_URL'],
                    'detail' => $this->arParams['DETAIL_PAGE_URL'],
                ],
                $arVariables
            );

            if ($componentPage === 'detail') {
                CComponentEngine::InitComponentVariables(
                    $componentPage,
                    [
                        'SECTION_ID',
                        'ELEMENT_ID',
                    ],
                    [
                        'section' => [
                            'SECTION_ID' => 'SECTION_ID',
                        ],
                        'detail' => [
                            'SECTION_ID' => 'SECTION_ID',
                            'ELEMENT_ID' => 'ELEMENT_ID',
                        ],
                    ],
                    $arVariables
                );
                $this->arParams['ID'] = intval($arVariables['ELEMENT_ID']);
            }
        }

        if (($this->arParams['ID'] > 0)
            && (intval($arVariables['SECTION_ID']) <= 0)
            && CModule::IncludeModule('iblock')
        ) {
            $arSelect = [
                'ID',
                'IBLOCK_ID',
                'DETAIL_PAGE_URL',
                'IBLOCK_SECTION_ID',
            ];
            $arFilter = [
                'ID' => $this->arParams['ID'],
                'ACTIVE' => 'Y',
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            ];
            $rsElements = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
            if (($this->arParams['IS_SEF'] === 'Y') && ($this->arParams['DETAIL_PAGE_URL'] <> '')) {
                $rsElements->SetUrlTemplates($this->arParams['SEF_BASE_URL'] . $this->arParams['DETAIL_PAGE_URL']);
            }
            while ($arElement = $rsElements->GetNext()) {
                $arResult['ELEMENT_LINKS'][$arElement['IBLOCK_SECTION_ID']][] = $arElement['~DETAIL_PAGE_URL'];
            }
        }

        $aMenuLinksNew = [];
        $menuIndex = 0;
        $previousDepthLevel = 1;
        $menuIndexElement = 0;
        foreach ($arResult['SECTIONS'] as $arSection) {
            if ($menuIndex > 0) {
                $aMenuLinksNew[$menuIndex - 1 - $menuIndexElement][3]['IS_PARENT'] = $arSection['DEPTH_LEVEL'] > $previousDepthLevel;
            }

            $arResult['ELEMENT_LINKS'][$arSection['ID']][] = urldecode($arSection['~SECTION_PAGE_URL']);
            $aMenuLinksNew[$menuIndex++] = [
                htmlspecialcharsbx($arSection['~NAME']),
                $arSection['~SECTION_PAGE_URL'],
                $arResult['ELEMENT_LINKS'][$arSection['ID']],
                [
                    'FROM_IBLOCK' => true,
                    'IS_PARENT' => false,
                    'DEPTH_LEVEL' => $arSection['DEPTH_LEVEL'],
                ],
            ];

            if ($arResult['ELEMENTS'][$arSection['ID']]) {
                foreach ($arResult['ELEMENTS'][$arSection['ID']] as $item) {
                    $aMenuLinksNew[$menuIndex++] = [
                        htmlspecialcharsbx($item['NAME']),
                        $item['DETAIL_PAGE_URL'],
                        $arResult['ELEMENT_LINKS'][$arSection['ID']],
                        [
                            'FROM_IBLOCK' => true,
                            'IS_PARENT' => false,
                            'DEPTH_LEVEL' => $arSection['DEPTH_LEVEL'] + 1,
                        ],
                    ];
                }
                $menuIndexElement = count($arResult['ELEMENTS'][$arSection['ID']]);
                $previousDepthLevel = $arSection['DEPTH_LEVEL'] - 1;
            } else {
                $previousDepthLevel = $arSection['DEPTH_LEVEL'];
            }
        }

        return $aMenuLinksNew;
    }
}
