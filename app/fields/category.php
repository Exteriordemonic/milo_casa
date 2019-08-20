<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$category = new FieldsBuilder('category');

$category
    ->setLocation('taxonomy', '==', 'product_cat');

$category
    ->addWysiwyg('header', ['label'=>'Nagłówek', 'rows'=>'3'])
    ->addWysiwyg('header_cat', ['label'=>'Nagłówek', 'rows'=>'3'])
    ->addImage('bg_image', ['label'=>'Zdjęcie w tle'])
    ->addRelationship('products', ['label'=>'Produkty', 'post_type'=>'product']);
return $category;
