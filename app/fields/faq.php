<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$faq = new FieldsBuilder('faq');

$faq
    ->setLocation('page_template', '==', 'views/page-faq.blade.php');

$faq
    ->addFields(get_field_partial('components.dropdown'));
return $faq;
