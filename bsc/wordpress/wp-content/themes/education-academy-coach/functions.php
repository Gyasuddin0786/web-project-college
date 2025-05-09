<?php
/**
 * Theme functions and definitions
 *
 * @package education_academy_coach
 */

//enque files
if ( ! function_exists( 'education_academy_coach_enqueue_styles' ) ) :
  /**
   * Load assets.
   *
   * @since 1.0.0
   */
  function education_academy_coach_enqueue_styles() {
    wp_enqueue_style( 'education-insight-style-parent', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'education-academy-coach-style', get_stylesheet_directory_uri() . '/style.css', array( 'education-insight-style-parent' ), '1.0.0' );

    // Theme Customize CSS.
    require get_parent_theme_file_path( 'inc/extra_customization.php' );
    wp_add_inline_style( 'education-academy-coach-style',$education_insight_custom_style );
    require get_theme_file_path( 'inc/extra_customization.php' );
    wp_add_inline_style( 'education-academy-coach-style',$education_insight_custom_style );

    // blocks css
    wp_enqueue_style( 'education-academy-coach-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'education-academy-coach-style' ), '1.0' );
  }
endif;
add_action( 'wp_enqueue_scripts', 'education_academy_coach_enqueue_styles', 99 );

//theme setup
function education_academy_coach_setup() {
  add_theme_support( "align-wide" );
  add_theme_support( "wp-block-styles" );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support('custom-background',array(
    'default-color' => 'ffffff',
  ));

  $GLOBALS['content_width'] = 525;

  add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Add theme support for Custom Logo.
  add_theme_support( 'custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ) );

  /*
   * This theme styles the visual editor to resemble the theme style,
   * specifically font, colors, and column width.
   */
  add_editor_style( array( 'assets/css/editor-style.css', education_insight_fonts_url() ) );
}
add_action( 'after_setup_theme', 'education_academy_coach_setup' );

// widgets
function education_academy_coach_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'education-academy-coach' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Page Sidebar', 'education-academy-coach' ),
    'id'            => 'sidebar-2',
    'description'   => __( 'Add widgets here to appear in your pages and posts', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Sidebar 3', 'education-academy-coach' ),
    'id'            => 'sidebar-3',
    'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 1', 'education-academy-coach' ),
    'id'            => 'footer-1',
    'description'   => __( 'Add widgets here to appear in your footer.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 2', 'education-academy-coach' ),
    'id'            => 'footer-2',
    'description'   => __( 'Add widgets here to appear in your footer.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 3', 'education-academy-coach' ),
    'id'            => 'footer-3',
    'description'   => __( 'Add widgets here to appear in your footer.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 4', 'education-academy-coach' ),
    'id'            => 'footer-4',
    'description'   => __( 'Add widgets here to appear in your footer.', 'education-academy-coach' ),
    'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'education_academy_coach_widgets_init' );

// remove sections
function education_academy_coach_customize_register() {
    global $wp_customize;
  $wp_customize->remove_section( 'education_insight_pro' );
  $wp_customize->remove_setting( 'education_insight_popular_courses_heading' );
  $wp_customize->remove_control( 'education_insight_popular_courses_heading' );
  $wp_customize->remove_setting( 'education_insight_slider_content_alignment' );
  $wp_customize->remove_control( 'education_insight_slider_content_alignment' );

  //color
  $wp_customize->remove_setting( 'education_insight_primary_color' );
  $wp_customize->remove_control( 'education_insight_primary_color' );
  $wp_customize->remove_setting( 'education_insight_heading_color' );
  $wp_customize->remove_control( 'education_insight_heading_color' );
  $wp_customize->remove_setting( 'education_insight_primary_light' );
  $wp_customize->remove_control( 'education_insight_primary_light' );
  $wp_customize->remove_setting( 'education_insight_primary_fade' );
  $wp_customize->remove_control( 'education_insight_primary_fade' );
  $wp_customize->remove_setting( 'education_insight_secondary_color' );
  $wp_customize->remove_control( 'education_insight_secondary_color' );
  $wp_customize->remove_setting( 'education_insight_third_color' );
  $wp_customize->remove_control( 'education_insight_third_color' );
  $wp_customize->remove_setting( 'education_insight_fourth_color' );
  $wp_customize->remove_control( 'education_insight_fourth_color' );
  $wp_customize->remove_setting( 'education_insight_service_bg' );
  $wp_customize->remove_control( 'education_insight_service_bg' );
}
add_action( 'customize_register', 'education_academy_coach_customize_register', 11 );

// remove themelocation
function education_academy_coach_remove_parent_theme_locations(){
    unregister_nav_menu( 'primary-1' );
    unregister_nav_menu( 'primary-2' );
}
add_action( 'after_setup_theme', 'education_academy_coach_remove_parent_theme_locations', 20 );

// comments
function education_academy_coach_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'education_academy_coach_enqueue_comments_reply' );

// Footer Text
function education_academy_coach_copyright_link() {
    $education_academy_coach_footer_text = get_theme_mod('education_insight_footer_text', esc_html__('Education WordPress Theme', 'education-academy-coach'));
    $education_academy_coach_credit_link = esc_url('https://www.ovationthemes.com/products/free-academy-wordpress-theme');

    echo '<a href="' . $education_academy_coach_credit_link . '" target="_blank">' . esc_html($education_academy_coach_footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 'education-academy-coach') . '</span></a>';
}

// post meta fields
function education_academy_coach_bn_custom_meta_offer() {
  add_meta_box( 'bn_meta', __( 'Courses Custom Feilds', 'education-academy-coach' ), 'education_academy_coach_meta_callback_courses', 'post', 'normal', 'high' );
}
/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'education_academy_coach_bn_custom_meta_offer');
}
function education_academy_coach_meta_callback_courses( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'education_academy_coach_offer_courses_meta_nonce' );
  $education_academy_coach_bn_stored_meta = get_post_meta( $post->ID );
  $education_academy_coach_courses_amount = get_post_meta( $post->ID, 'education_academy_coach_courses_amount', true );
  $education_academy_coach_courses_lesson = get_post_meta( $post->ID, 'education_academy_coach_courses_lesson', true );
  $education_academy_coach_courses_student = get_post_meta( $post->ID, 'education_academy_coach_courses_student', true );
  ?>
  <table id="list">
    <tbody id="the-list" data-wp-lists="list:meta">
      <tr id="meta-8">
        <td class="left">
          <?php esc_html_e( 'Courses Amount', 'education-academy-coach' )?>
        </td>
        <td class="left">
          <input type="text" name="education_academy_coach_courses_amount" id="education_academy_coach_courses_amount" value="<?php echo esc_attr($education_academy_coach_courses_amount); ?>" />
        </td>
      </tr>
      <tr id="meta-8">
        <td class="left">
          <?php esc_html_e( 'Lessons', 'education-academy-coach' )?>
        </td>
        <td class="left">
          <input type="text" name="education_academy_coach_courses_lesson" id="education_academy_coach_courses_lesson" value="<?php echo esc_attr($education_academy_coach_courses_lesson); ?>" />
        </td>
      </tr>
      <tr id="meta-8">
        <td class="left">
          <?php esc_html_e( 'Students', 'education-academy-coach' )?>
        </td>
        <td class="left">
          <input type="text" name="education_academy_coach_courses_student" id="education_academy_coach_courses_student" value="<?php echo esc_attr($education_academy_coach_courses_student); ?>" />
        </td>
      </tr>
    </tbody>
  </table>
  <?php
}
/* Saves the custom meta input */
function education_academy_coach_custom_feild_save( $post_id ) {
  if (!isset($_POST['education_academy_coach_offer_courses_meta_nonce']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['education_academy_coach_offer_courses_meta_nonce']) ), basename(__FILE__))) {
      return;
  }
  if (!current_user_can('edit_post', $post_id)) {
      return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }
  // Save Trip Amount
  if( isset( $_POST[ 'education_academy_coach_courses_amount' ] ) ) {
      update_post_meta( $post_id, 'education_academy_coach_courses_amount', strip_tags( wp_unslash( $_POST[ 'education_academy_coach_courses_amount' ]) ) );
  }
  // Save Trip Days
  if( isset( $_POST[ 'education_academy_coach_courses_lesson' ] ) ) {
      update_post_meta( $post_id, 'education_academy_coach_courses_lesson', strip_tags( wp_unslash( $_POST[ 'education_academy_coach_courses_lesson' ]) ) );
  }
  // Save Trip Days
  if( isset( $_POST[ 'education_academy_coach_courses_student' ] ) ) {
      update_post_meta( $post_id, 'education_academy_coach_courses_student', strip_tags( wp_unslash( $_POST[ 'education_academy_coach_courses_student' ]) ) );
  }
}
add_action( 'save_post', 'education_academy_coach_custom_feild_save' );

// customizer
function education_academy_coach_customize( $wp_customize ) {

  wp_enqueue_style('customizercustom_css', get_stylesheet_directory_uri(). '/assets/css/customizer.css');

  require get_theme_file_path( 'inc/custom-control.php' );

  // pro section
  $wp_customize->add_section('education_academy_coach_pro', array(
    'title'    => __('UPGRADE EDUCATION PREMIUM', 'education-academy-coach'),
    'priority' => 1,
  ));
  $wp_customize->add_setting('education_academy_coach_pro', array(
    'default'           => null,
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control(new Education_Academy_Coach_Pro_Control($wp_customize, 'education_academy_coach_pro', array(
    'label'    => __('EDUCATION ACADEMY PREMIUM', 'education-academy-coach'),
    'section'  => 'education_academy_coach_pro',
    'settings' => 'education_academy_coach_pro',
    'priority' => 1,
  )));

  // slider
  $wp_customize->add_setting(
    'education_academy_coach_slider_button_show_hide',
    array(
      'type'                 => 'option',
      'capability'           => 'edit_theme_options',
      'theme_supports'       => '',
      'default'              => '1',
      'transport'            => 'refresh',
      'sanitize_callback'    => 'education_insight_callback_sanitize_switch',
    )
  );
  $wp_customize->add_control(
    new Education_Academy_Coach_Customizer_Customcontrol_Switch(
      $wp_customize,
      'education_academy_coach_slider_button_show_hide',
      array(
        'settings'        => 'education_academy_coach_slider_button_show_hide',
        'section'         => 'education_insight_slider_section',
        'label'           => __( 'Show Hide Button', 'education-academy-coach' ),        
        'choices'     => array(
          '1'      => __( 'On', 'education-academy-coach' ),
          'off'    => __( 'Off', 'education-academy-coach' ),
        ),
      )
    )
  );
  $wp_customize->add_setting('education_academy_coach_slider_read_more',array(
    'default' => 'Read More',
    'sanitize_callback' => 'sanitize_text_field'
  )); 
  $wp_customize->add_control('education_academy_coach_slider_read_more',array(
    'label' => esc_html__('Button Text','education-academy-coach'),
    'section' => 'education_insight_slider_section',
    'setting' => 'education_academy_coach_slider_read_more',
    'type'    => 'text',
  ));
  $wp_customize->add_setting( 'education_academy_coach_slider_content_alignment',
    array(
      'default' => 'LEFT-ALIGN',
      'transport' => 'refresh',
      'sanitize_callback' => 'education_insight_sanitize_choices'
    )
  );
  $wp_customize->add_control( new Education_Academy_Coach_Text_Radio_Button_Custom_Control( $wp_customize, 'education_academy_coach_slider_content_alignment',
    array(
      'type' => 'select',
      'label' => esc_html__( 'Slider Content Alignment', 'education-academy-coach' ),
      'section' => 'education_insight_slider_section',
      'choices' => array(
        'LEFT-ALIGN' => __('LEFT','education-academy-coach'),
              'CENTER-ALIGN' => __('CENTER','education-academy-coach'),
              'RIGHT-ALIGN' => __('RIGHT','education-academy-coach'),
      ),
    )
  ) );

  $wp_customize->add_setting(
    'education_academy_coach_slider_button_mobile_show_hide',
    array(
      'type'                 => 'option',
      'capability'           => 'edit_theme_options',
      'theme_supports'       => '',
      'default'              => '1',
      'transport'            => 'refresh',
      'sanitize_callback'    => 'education_insight_callback_sanitize_switch',
    )
  );
  $wp_customize->add_control(
    new Education_Academy_Coach_Customizer_Customcontrol_Switch(
      $wp_customize,
      'education_academy_coach_slider_button_mobile_show_hide',
      array(
        'settings'        => 'education_academy_coach_slider_button_mobile_show_hide',
        'section'         => 'education_insight_mobile_options',
        'label'           => __( 'Show Slider Button', 'education-academy-coach' ),
        'description' => __('Control wont function if the button is off in the main slider settings.', 'education-academy-coach') ,        
        'choices'     => array(
          '1'      => __( 'On', 'education-academy-coach' ),
          'off'    => __( 'Off', 'education-academy-coach' ),
        ),
        'active_callback' => '',
      )
    )
  );

  // admission btn
  $wp_customize->add_setting('education_insight_admission_text',array(
    'default' => '',
    'sanitize_callback'  => 'sanitize_text_field'
  ));
  $wp_customize->add_control('education_insight_admission_text',array(
    'type' => 'text',
    'label' => __('Button Text','education-academy-coach'),
    'section' => 'education_insight_top',
  ));
	$wp_customize->selective_refresh->add_partial( 'education_insight_admission_text', array(
		'selector' => '.admision-btn a',
		'render_callback' => 'education_insight_customize_partial_education_insight_admission_text',
	) );
  $wp_customize->add_setting('education_insight_admission_link',array(
    'default' => '',
    'sanitize_callback'  => 'esc_url_raw'
  ));
  $wp_customize->add_control('education_insight_admission_link',array(
    'type' => 'url',
    'label' => __('Button Link','education-academy-coach'),
    'section' => 'education_insight_top',
  ));

  //color
  $wp_customize->add_setting('education_academy_coach_primary_color', array(
      'default' => '#21ad95',
      'sanitize_callback' => 'sanitize_hex_color',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'education_academy_coach_primary_color', array(
      'section' => 'colors',
      'label' => esc_html__('Theme Color', 'education-academy-coach'),
   
  )));
  $wp_customize->add_setting('education_academy_coach_heading_color', array(
      'default' => '#17191b',
      'sanitize_callback' => 'sanitize_hex_color',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'education_academy_coach_heading_color', array(
      'section' => 'colors',
      'label' => esc_html__('Theme Heading Color', 'education-academy-coach'),
   
  )));
  $wp_customize->add_setting('education_academy_coach_primary_fade', array(
      'default' => '#edf5f4',
      'sanitize_callback' => 'sanitize_hex_color',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'education_academy_coach_primary_fade', array(
      'section' => 'colors',
      'label' => esc_html__('Theme Color Fade', 'education-academy-coach'),
   
  )));
  $wp_customize->add_setting('education_academy_coach_secondary_color', array(
      'default' => '#ef5921',
      'sanitize_callback' => 'sanitize_hex_color',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'education_academy_coach_secondary_color', array(
      'section' => 'colors',
      'label' => esc_html__('Second Color', 'education-academy-coach'),
   
  )));
}
add_action( 'customize_register', 'education_academy_coach_customize' );

if ( ! defined( 'EDUCATION_ACADEMY_COACH_PRO_LINK' ) ) {
  define('EDUCATION_ACADEMY_COACH_PRO_LINK',__('https://www.ovationthemes.com/products/education-coach-wordpress-theme','education-academy-coach'));
}
/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Education_Academy_Coach_Pro_Control')):
    class Education_Academy_Coach_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( EDUCATION_ACADEMY_COACH_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE EDUCATION PREMIUM','education-academy-coach');?> </a>
            </div>
            <div class="col-md">
                <img class="education_academy_coach_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('EDUCATION ACADEMY PREMIUM - Features', 'education-academy-coach'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'education-academy-coach');?> </li>
                    <li class="upsell-education_academy_coach"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'education-academy-coach');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( EDUCATION_ACADEMY_COACH_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE EDUCATION PREMIUM','education-academy-coach');?> </a>
            </div>
        </label>
    <?php } }
endif;
if ( ! defined( 'EDUCATION_INSIGHT_SUPPORT' ) ) {
	define('EDUCATION_INSIGHT_SUPPORT',__('https://wordpress.org/support/theme/education-academy-coach','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_REVIEW' ) ) {
	define('EDUCATION_INSIGHT_REVIEW',__('https://wordpress.org/support/theme/education-academy-coach/reviews/#new-post','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_LIVE_DEMO' ) ) {
define('EDUCATION_INSIGHT_LIVE_DEMO',__('https://trial.ovationthemes.com/education-academy-coach/','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_BUY_PRO' ) ) {
define('EDUCATION_INSIGHT_BUY_PRO',__('https://www.ovationthemes.com/products/education-coach-wordpress-theme','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_PRO_DOC' ) ) {
define('EDUCATION_INSIGHT_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-education-academy-coach-pro-doc/','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_FREE_DOC' ) ) {
define('EDUCATION_INSIGHT_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-education-academy-coach-free-doc/','education-academy-coach'));
}
if ( ! defined( 'EDUCATION_INSIGHT_THEME_NAME' ) ) {
define('EDUCATION_INSIGHT_THEME_NAME',__('Premium Academy Theme','education-academy-coach'));
}