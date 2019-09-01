<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$collection = new FieldsBuilder('collection');

$collection
    ->addImage('collection_bg', ['label'=>'Background of collection section'])
    ->addRelationship('products', ['label'=>'Products', 'post_type'=>'product'])
;
return $collection;
