<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page')
        ->and('page_template', '!=', 'views/page-faq.blade.php')
        ->and('page_template', '!=', 'views/page-content.blade.php')
        ->and('page_template', '!=', 'views/page-insipration.blade.php');

$page
    ->addTab('Hero', ['placement' => 'left'])
        ->addFields(get_field_partial('components.hero'))
    ->addTab('Description', ['placement' => 'left'])
        ->addFields(get_field_partial('components.description'))
    ->addTab('Instagram', ['placement' => 'left'])
        ->addFields(get_field_partial('components.instagram'));
return $page;
