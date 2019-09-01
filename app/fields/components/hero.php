<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addImage('hero')
    ->addImage('sygnet');
;
return $hero;
