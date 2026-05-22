<?php
// https://generatewp.com

function projects_post_type()
{
    register_post_type('projeto', array(
        'labels' => array('name' => 'Projetos', 'singular_name' => 'Projeto', 'all_items' => 'Todos'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => array('title', 'editor')
    ));
}

add_action('init', 'projects_post_type');

function ratings_post_type()
{
    register_post_type('avaliacao', array(
        'labels' => array('name' => 'Avaliações', 'singular_name' => 'Avaliação', 'all_items' => 'Todas'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => array('title', 'editor')
    ));
}

add_action('init', 'ratings_post_type');

// function create_taxonomy()
// {
//     $post_types = array('evento');

//     register_taxonomy('departamento', $post_types, array(
//         'labels' => array(
//             'name' => 'Departamento',
//             'singular_name' => 'Departamentos'
//         ),
//         'hierarchical' => true,
//         'show_admin_column' => true,
//     ));
// }
// add_action('init', 'create_taxonomy');
