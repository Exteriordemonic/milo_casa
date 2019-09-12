<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$category = new FieldsBuilder('category');

$category
    ->setLocation('taxonomy', '==', 'product_cat');

$category
    ->addImage('bg_image', ['label'=>'Zdjęcie w tle']);
return $category;
