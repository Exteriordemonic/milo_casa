<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');

$flex
    ->addTrueFalse('left', ['label'=> 'Zdjęcie z lewej?'])
    ->addText('title', ['label'=> 'Tytuł'])
    ->addTextarea('content', ['label'=> 'Treść'])
    ->addImage('image', ['label'=> 'Zdjęcie']);
return $flex;
