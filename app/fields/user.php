<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$user = new FieldsBuilder('user');

$user
    ->setLocation('user_form', '==', 'edit');

$user
    ->addText('product-list', ['label'=>'Wishlist'])
    ;
return $user;
