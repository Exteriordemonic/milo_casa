<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$productMap = new FieldsBuilder('product-map');

$productMap
    ->addImage('image', ['label'=>'Zdjęcie'])
    ->addRepeater('dots', ['label'=>'Kropki'])
        ->addNumber('left', ['label'=>'Od Lewej'])
        ->addNumber('top', ['label'=>'Od góry'])
        ->addRelationship('products', ['label'=>'Produkty', 'post_type'=>'product', 'min'=>1, 'max'=>1]);
return $productMap;
