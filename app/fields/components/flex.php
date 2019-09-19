<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');

$flex
    ->addRadio('options')
        ->addChoice('default')
        ->addChoice('center')
        ->addChoice('center-with-center-lines')
        ->addChoice('cta')
        ->addChoice('full')
        ->addChoice('with-text')
        ->setDefaultValue('default')
    ->addRadio('color')
        ->addChoice('light')
        ->addChoice('dark')
        ->setDefaultValue('dark')
    ->addImage('image', ['title' => 'Icon'])
    ->addLink('link', ['title' => 'link'])
    ->addTextarea('title', [ 'new_lines'=>'br']);
return $flex;
