<?php

$education_insight_custom_style= "";

$education_academy_coach_slider_content_alignment = get_theme_mod( 'education_academy_coach_slider_content_alignment','LEFT-ALIGN');

if($education_academy_coach_slider_content_alignment == 'LEFT-ALIGN'){

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='text-align:left; right: 45%; left: 19%';

$education_insight_custom_style .='}';

$education_insight_custom_style .='@media screen and (max-width:1199px){';

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='right: 20%; left: 19%';
    
$education_insight_custom_style .='} }';

$education_insight_custom_style .='@media screen and (max-width:991px){';

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='right: 15%; left: 19%';
    
$education_insight_custom_style .='} }';


}else if($education_academy_coach_slider_content_alignment == 'CENTER-ALIGN'){

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='text-align:center; left: 15%; right: 15%;';

$education_insight_custom_style .='}';


}else if($education_academy_coach_slider_content_alignment == 'RIGHT-ALIGN'){

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='text-align:right; left: 45%; right: 19%;';

$education_insight_custom_style .='}';

$education_insight_custom_style .='@media screen and (max-width:1199px){';

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='left: 20%; right: 19%';
    
$education_insight_custom_style .='} }';

$education_insight_custom_style .='@media screen and (max-width:991px){';

$education_insight_custom_style .='#slider .carousel-caption{';

    $education_insight_custom_style .='left: 15%; right: 19%';
    
$education_insight_custom_style .='} }';

}

//--------------------sticky header----------------------
if (false === get_option('education_insight_sticky_header')) {
    add_option('education_insight_sticky_header', 'off');
}

// Define the custom CSS based on the 'education_insight_sticky_header' option

if (get_option('education_insight_sticky_header', 'off') !== 'on') {
    $education_insight_custom_style .= '.fixed_header.fixed {';
    $education_insight_custom_style .= 'position: static;';
    $education_insight_custom_style .= '}';
}

if (get_option('education_insight_sticky_header', 'off') !== 'off') {
    $education_insight_custom_style .= '.fixed_header.fixed {';
    $education_insight_custom_style .= 'position: fixed; background: var(--theme-primary-color); box-shadow: 0px 3px 10px 2px var(--theme-primary-color);';
    $education_insight_custom_style .= '}';

    $education_insight_custom_style .= '.page-template-custom-home-page .wrap_figure.fixed {';
    $education_insight_custom_style .= 'background: var(--theme-primary-color);';
    $education_insight_custom_style .= '}';

    $education_insight_custom_style .= '.admin-bar .fixed {';
    $education_insight_custom_style .= ' margin-top: 32px;';
    $education_insight_custom_style .= '}';
}

// slider button
$mobile_button_setting = get_option('education_academy_coach_slider_button_mobile_show_hide', '1');
$main_button_setting = get_option('education_academy_coach_slider_button_show_hide', '1');

$education_insight_custom_style .= '#slider .slide-btn {';

if ($main_button_setting == 'off') {
    $education_insight_custom_style .= 'display: none;';
}

$education_insight_custom_style .= '}';

// Add media query for mobile devices
$education_insight_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_button_setting == 'off' || $mobile_button_setting == 'off') {
    $education_insight_custom_style .= '#slider .slide-btn { display: none; }';
}
$education_insight_custom_style .= '}';


//colors
$color = get_theme_mod('education_academy_coach_primary_color', '#21ad95');
$color_heading = get_theme_mod('education_academy_coach_heading_color', '#17191b');
$color_fade = get_theme_mod('education_academy_coach_primary_fade', '#edf5f4');
$color_secondary = get_theme_mod('education_academy_coach_secondary_color', '#ef5921');

$education_insight_custom_style .= ":root {";
    $education_insight_custom_style .= "--theme-primary-color: {$color};";
    $education_insight_custom_style .= "--theme-heading-color: {$color_heading};";
    $education_insight_custom_style .= "--theme-primary-fade: {$color_fade};";
    $education_insight_custom_style .= "--theme-secondary-color: {$color_secondary};";

$education_insight_custom_style .= "}";