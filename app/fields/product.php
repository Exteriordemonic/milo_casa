<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('product');

$page
    ->setLocation('post_type', '==', 'product');

$page
    ->addTab('Główne opcje',['placement' => 'left'])
        ->addImage('product-list', ['label'=>'Zdjęcie w asortymencie'])
        ->addRelationship('main_product', ['label'=>'Główny produkt', 'post_type'=>'product', 'max'=>1])
    ->addTab('Atrybuty')
        ->addRelationship('color', ['label'=>'Kolor', 'post_type'=>'kolory', 'max'=>1])
        ->addRepeater('atrybuty')
            ->addText('title', ['label'=> 'Nagłówek'])
            ->addTextarea('desc', ['label'=> 'Opis', 'rows'=>'3'])
        ->endRepeater()
    ->addTab('Kolory')
        ->addRelationship('products', ['label'=>'Produkty', 'post_type'=>'product'])
    ->addFields(get_field_partial('partials.builder'));
return $page;
