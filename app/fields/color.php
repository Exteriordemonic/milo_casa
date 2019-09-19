<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$color = new FieldsBuilder('color');

$color
    ->setLocation('taxonomy', '==', 'pa_color');

$color
    ->addImage('color_image', ['label'=>'Color image'])
    ->addText('color_hex', ['label'=>'Color image HEX']);
return $color;
