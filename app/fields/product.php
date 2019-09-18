<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('product');

$page
    ->setLocation('post_type', '==', 'product');

$page
    ->addTab('Main setting', ['label' => 'Main setting', 'placement' => 'left'])
        ->addImage('product-list', ['label'=>'Image in Collection'])
    ->addTab('Colors', ['label' => 'Colors', 'placement' => 'left'])
        ->addGallery('colors gallery')
        ->addRepeater('product-colors')
            ->addTaxonomy('color', ['taxonomy'=>'pa_color', 'add_term'=>'0',])
            ->addGallery('images')
        ->endRepeater()
    ->addTab('Legs', ['label' => 'Legs', 'placement' => 'left'])
        ->addTaxonomy('legs', ['taxonomy'=>'pa_legs', 'add_term'=>'0',])
        ->addRelationship('product_legs', ['post_type'=>'product'])
    ->addTab('De la même famille', ['label' => 'De la même famille', 'placement' => 'left'])
        ->addRepeater('famille')
            ->addRelationship('product', ['post_type'=>'product', 'max'=>1])
            ->addText('title')
        ->endRepeater()
    ;
return $page;
