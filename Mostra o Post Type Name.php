<?php


function cpt_posttype_name_shortcode($atts) {
    // Atributos padrão
    $a = shortcode_atts(array(
        'cpt' => 'post', // 'post' é o valor padrão caso nenhum slug seja fornecido
    ), $atts);

    $post_type_object = get_post_type_object($a['cpt']);
    if ($post_type_object) {
        return esc_html($post_type_object->labels->name);
    } else {
        return 'Post Type não encontrado';
    }
}
add_shortcode('cpt_posttype_name', 'cpt_posttype_name_shortcode');
