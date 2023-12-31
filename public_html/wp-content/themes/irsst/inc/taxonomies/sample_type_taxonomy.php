<?php

/**
 * create taxo for Sample
 */
function sample_type_taxonomy($labelsGlobal, $argsGlobal)
{
    $labels = [
        'name'          => _x('Types', 'taxonomy general name', 'irsst'),
        'singular_name' => _x('Type', 'taxonomy singular name', 'irsst'),
        'menu_name'     => __('Types', 'irsst'),
    ];
    $args = [
        'labels'  => array_merge($labelsGlobal, $labels),
        'rewrite' => ['slug' => __('type', 'irsst')],
    ];

    register_taxonomy('sample_type', ['sample'], array_merge($argsGlobal, $args));
}
