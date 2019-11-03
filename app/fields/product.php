<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('product');

$page
    ->setLocation('post_type', '==', 'product');

$page
    ->addTab('Main setting', ['label' => 'Main setting', 'placement' => 'left'])
        ->addTaxonomy('main_cat', ['taxonomy'=>'product_cat', 'add_term'=>'0',])
        ->addFile('pdf', ['label'=> 'PDF'])
    ->addTab('Colors', ['label' => 'Colors', 'placement' => 'left'])
        ->addRepeater('product-colors')
            ->addTaxonomy('color', ['taxonomy'=>'pa_color', 'add_term'=>'0',])
            ->addGallery('images')
        ->endRepeater()
    ->addTab('Legs', ['label' => 'Legs', 'placement' => 'left'])
        ->addTaxonomy('legs', ['taxonomy'=>'pa_legs', 'add_term'=>'0',])
        ->addRelationship('product_legs', ['post_type'=>'product'])
    ;
return $page;
