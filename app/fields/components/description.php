<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$description = new FieldsBuilder('description');

$description
    ->addTextarea('description', ['label'=>'Description', 'new_lines'=>'br'])
    ->addImage('description_bg', ['label'=>'Background of description section'])
    ->addLink('description_link', ['label'=>'Just chose a link'])
;
return $description;
