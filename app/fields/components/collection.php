<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$collection = new FieldsBuilder('collection');

$collection
    ->addImage('collection_bg', ['label'=>'Background of collection section'])
    ->addRepeater('familles')
        ->addTaxonomy('famille', ['label'=>'Familly', 'taxonomy'=>'product_cat'])
;
return $collection;
