<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$legs = new FieldsBuilder('legs');

$legs
    ->setLocation('taxonomy', '==', 'pa_legs');

$legs
    ->addImage('legs_image', ['label'=>'Legs image']);
return $legs;
