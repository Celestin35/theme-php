<?php

add_action('customize_register', function(WP_Customize_Manager $manager) {
   
    $manager->add_section('theme_planete_socials', array(
        'title' => __('Réseaux sociaux', 'theme_planete'),
        'description' => __('Ajoutez vos réseaux sociaux', 'theme_planete'),
    ));

    $manager->add_setting('facebook-link', array(
        'default' => '',
    ));

    $manager->add_control(new WP_Customize_Control($manager, 'facebook-link', array(
        'label' => 'Lien Facebook',
        'section' => 'theme_planete_socials',
        'settings' => 'facebook-link',
        'type' => 'text',
    )));

    $manager->add_setting('instagram-link', array(
        'default' => '',
    ));

    $manager->add_control(new WP_Customize_Control($manager, 'instagram-link', array(
        'label' => 'Lien Instagram',
        'section' => 'theme_planete_socials',
        'settings' => 'instagram-link',
        'type' => 'text',
    )));


    $manager->add_section('theme_planete_colors', array(
        'title' => __('Couleurs', 'theme_planete'),
        'description' => __('Personnalisez les couleurs de votre thème', 'theme_planete'),
    ));

    $manager->add_setting('header-color', array(
        'default' => '#D4D4D4',
    ));

    $manager->add_setting('footer-color', array(
        'default' => '#EAEAFF',
    ));



    

    $manager->add_control(new WP_Customize_Color_Control($manager, 'footer-color', array(
        'label' => 'Couleur du pied de page',
        'section' => 'theme_planete_colors',
        'settings' => 'footer-color',
    )));

});

?>
