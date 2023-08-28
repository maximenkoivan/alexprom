<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/projects/([\\w\\d\\-_]+)(?:\\?.*)?#',
    'RULE' => 'CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/projects/view/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/services/([\\w\\d\\-_]+)(?:\\?.*)?#',
    'RULE' => 'CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/services/view/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
