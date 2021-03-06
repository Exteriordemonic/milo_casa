<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option = new FieldsBuilder('option');

$option
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option
    ->addTab('Main setting', ['label' => 'Main setting', 'placement' => 'left'])
        ->addImage('logo', ['title' => 'Logo'])
        ->addImage('logo_int', ['title' => 'Logo Interiors'])
        ->addText('footer_link', ['title' => 'Footer link txt'])
        ->addText('sideText',  ['title' => 'Side text'])
    ->addTab('Popup', ['label' => 'Popup', 'placement' => 'left'])
        ->addTrueFalse('show_popup', ['title'=>'Show popup'])
        ->addImage('popup', ['title' => 'Popup'])
        ->addImage('popup__mobile', ['title' => 'Popup'])
        ->addUrl('link', ['title'=>'Link'])
    ->addTab('Social media', ['label' => 'Social Media', 'placement' => 'left'])
        ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
            ->addImage('icon', ['title' => 'Icon'])
            ->addText('link', ['title' => 'link'])
        ->endRepeater()
    ->addTab('Additional links', ['label' => 'Additional links', 'placement' => 'left'])
        ->addRepeater('links', ['min' => 0, 'layout' => 'table'])
            ->addImage('icon', ['title' => 'Icon'])
            ->addText('link', ['title' => 'link'])
            ->addText('data', ['title' => 'link'])
        ->endRepeater()
    ->addTab('Contact', ['label' => 'Contact', 'placement' => 'left'])
        ->addTextarea('contact_title', ['title' => 'Title', 'new_lines'=>'br'])
        ->addWysiwyg('contact_content_top', ['tytle' => 'Contact top', 'new_lines'=>'br'])
        ->addWysiwyg('contact_content_bottom', ['title' => 'Contact bottom', 'new_lines'=>'br'])
        ->addImage('contact_img', ['title' => 'Image for background', 'new_lines'=>'br'])
    ->addTab('Wishlist', ['label' => 'Wishlsit', 'placement' => 'left'])
        ->addText('wishlsit_title', ['title' => 'Title'])
        ->addTextarea('wishlsit_empty', ['title' => 'Wishlsit empty message', 'new_lines'=>'br'])
        ->addTextarea('wishlsit_login', ['title' => 'Wishlsit you need to login message', 'new_lines'=>'br'])
    ->addTab('SingleProduct', ['label' => 'SingleProduct', 'placement' => 'left'])
        ->addRepeater('flex', ['min' => 0, 'layout' => 'table'])
            ->addImage('image', ['title' => 'Icon'])
            ->addLink('link', ['title' => 'link'])
            ->addTextarea('title', [ 'new_lines'=>'br'])
        ->endRepeater()
    ->addTab('Milo_Interiros', ['label' => 'Milo Interiros', 'placement' => 'left'])
        ->addRepeater('interiors_gallery', ['min' => 0, 'layout' => 'table'])
            ->addSelect('style')
                ->addChoice('1-2')
                ->addChoice('2-1')
                ->addChoice('1')
                ->addChoice('1-1')
            ->addGallery('gallery')
        ->endRepeater()
    ;
return $option;
