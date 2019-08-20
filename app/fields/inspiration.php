<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$insipration = new FieldsBuilder('insipration');

$insipration
    ->setLocation('page_template', '==', 'views/page-insipration.blade.php');

$insipration
    ->addTab('Ustawienia strony', ['placement' => 'left'])
        ->addRelationship('posts', ['label'=>'Wpisy', 'post_type'=>'post']);
return $insipration;
