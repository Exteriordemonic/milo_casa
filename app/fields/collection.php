<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$collection = new FieldsBuilder('collection');

$collection
    ->setLocation('page_template', '==', 'views/page-collection.blade.php');

$collection
    ->addRepeater('flex', ['min' => 0, 'layout' => 'table'])
        ->addFields(get_field_partial('components.flex'))
    ->endRepeater()
    ;
return $collection;
