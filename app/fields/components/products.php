<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$products = new FieldsBuilder('products');

$products
    ->addText('title', ['label'=>'Tytuł'])
    ->addRelationship('products', ['label'=>'Produkty', 'post_type'=>'product', 'min'=>2]);
return $products;
