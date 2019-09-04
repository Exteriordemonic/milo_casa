<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('product');

$page
    ->setLocation('post_type', '==', 'product');

$page
    ->addImage('product-list', ['label'=>'Image in Collection'])

    ;
return $page;
