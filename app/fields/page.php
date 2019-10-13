<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page')
        ->and('page_template', '!=', 'views/page-collection.blade.php')
        ->and('page_template', '!=', 'views/page-content.blade.php')
        ->and('page_template', '!=', 'views/page-insipration.blade.php')
        ->and('page_template', '!=', 'views/page-about.blade.php');

$page
    ->addTab('Hero', ['placement' => 'left'])
        ->addFields(get_field_partial('components.hero'))
    ->addTab('Flex', ['label' => 'Flex', 'placement' => 'left'])
        ->addRepeater('flex', ['min' => 0, 'layout' => 'table'])
            ->addFields(get_field_partial('components.flex'))
        ->endRepeater()
    ->addTab('Description', ['placement' => 'left'])
        ->addFields(get_field_partial('components.description'))
    ->addTab('Instagram', ['placement' => 'left'])
        ->addGroup('instagram')
            ->addFields(get_field_partial('components.flex'));
return $page;
