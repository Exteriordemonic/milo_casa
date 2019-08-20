<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$dropdown = new FieldsBuilder('dropdown');

$dropdown
    ->addRepeater('dropdown')
        ->addGroup('header')
            ->addText('title')
            ->addTextarea('content')
        ->endGroup()
        ->addRepeater('questions')
            ->addTextarea('title')
            ->addTextarea('content');
return $dropdown;
