<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$instagram = new FieldsBuilder('instagram');

$instagram
    ->addText('instagram_title', ['label'=>'Title'])
    ->addUrl('instagram_link', ['label'=>'Just chose a instagram link'])
    ->addImage('instagram_img', ['label'=>'Instagram feed'])
;
return $instagram;
