<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.product-map'))
            ->addLayout(get_field_partial('components.products'));
return $builder;
