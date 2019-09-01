<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$collection = new FieldsBuilder('collection');

$collection
    ->setLocation('page_template', '==', 'views/page-collection.blade.php');

$collection
    ->addTab('Main setting', ['placement' => 'left'])
        ->addFields(get_field_partial('components.collection'))
    ;
return $collection;
