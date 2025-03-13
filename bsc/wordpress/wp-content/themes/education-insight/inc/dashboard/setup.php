<?php //to use wp udpate plugin
wp_enqueue_script( 'updates' ); ?>

<div class="theme-offer">
	<?php 
  if(isset($_GET['import-demo'])){
    $home_id=''; $blog_id=''; $page_id=''; $about_id='';


    // Function to check if a page with a specific title exists
    function page_exists_by_title($title) {
      $page_query = new WP_Query(array(
          'post_type'   => 'page',
          'title'       => $title,
          'post_status' => 'publish',
          'numberposts' => 1
      ));
      
      if ($page_query->have_posts()) {
          // Return the ID of the first matching page
          $page = $page_query->posts[0];
          return $page->ID;
      }
    
      return false; // Return false if no page found
    }

    //Homepage
    $home_title = 'Home';
    if (!page_exists_by_title($home_title)) {
      $home_content = '';
      $home = array(
        'post_type'    => 'page',
        'post_title'   => $home_title,
        'post_content' => $home_content,
        'post_status'  => 'publish',
        'post_author'  => 1,
        'post_name'    => 'home'
      );

      $home_id = wp_insert_post($home);
      
      // Set the home page template
      add_post_meta($home_id, '_wp_page_template', 'page-template/custom-home-page.php');
      
      // Set the static front page
      update_option('page_on_front', $home_id);
      update_option('show_on_front', 'page');
    }

    // Create a Page if it doesn't exist
    if ( !page_exists_by_title('Page') ) {
      $page_title = 'Page';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page'
      );
      $page_id = wp_insert_post($ot_page);
    }

    if ( !page_exists_by_title('Page Left Sidebar') ) {
      $page_title = 'Page Left Sidebar';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page-left'
      );
      $page_id = wp_insert_post($ot_page);

      // Set the page template
      add_post_meta($page_id, '_wp_page_template', 'page-template/left-sidebar.php');
    }

    if ( !page_exists_by_title('Page Right Sidebar') ) {
      $page_title = 'Page Right Sidebar';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page-right'
      );
      $page_id = wp_insert_post($ot_page);

      // Set the page template
      add_post_meta($page_id, '_wp_page_template', 'page-template/right-sidebar.php');
    }

    if ( ! page_exists_by_title('Lorem Ipsum simply') ) {
      $page_title = 'Lorem Ipsum simply';
      $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';

      $ot_page = array(
          'post_type'     => 'page',
          'post_title'    => $page_title,
          'post_content'  => $content,
          'post_status'   => 'publish',
          'post_author'   => 1,
          'post_name'     => 'service'
      );
      $service_page_id = wp_insert_post($ot_page);
    } else {
      // Get the ID of the existing page
      $service_page_id = page_exists_by_title('Lorem Ipsum simply');
    }

    // ------- Create Left Menu --------
    $menuname =  'Left Menu';
    $bpmenulocation = 'primary-1';
    $menu_exists = wp_get_nav_menu_object( $menuname );

    if (!$menu_exists) {
      // Create the menu
      $menu_id = wp_create_nav_menu($menuname);

      // Add the HOME item
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Home', 'education-insight'),
          'menu-item-classes' => 'home',
          'menu-item-url'     => home_url('/'),
          'menu-item-status'  => 'publish'
      ));

      // Add the PAGE item
      $parent_page_item_id = wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Pages', 'education-insight'),
          'menu-item-classes' => 'page',
          'menu-item-url'     => home_url('/index.php/page/'),
          'menu-item-status'  => 'publish'
      ));

      // Add the Page Left Sidebar item as a child of PAGE
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'   => __('Page Left Sidebar', 'education-insight'),
          'menu-item-classes' => 'page-left',
          'menu-item-url'     => home_url('/index.php/page-left/'),
          'menu-item-status'  => 'publish',
          'menu-item-parent-id' => $parent_page_item_id
      ));

      // Add the Page Right Sidebar item as a child of PAGE
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'   => __('Page Right Sidebar', 'education-insight'),
          'menu-item-classes' => 'page-right',
          'menu-item-url'     => home_url('/index.php/page-right/'),
          'menu-item-status'  => 'publish',
          'menu-item-parent-id' => $parent_page_item_id
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Courses', 'education-insight'),
          'menu-item-classes' => 'courses',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Features', 'education-insight'),
          'menu-item-classes' => 'features',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));
      
      // Assign the menu to the desired location if not already assigned
      if (!has_nav_menu($bpmenulocation)) {
          $locations = get_theme_mod('nav_menu_locations');
          $locations[$bpmenulocation] = $menu_id;
          set_theme_mod('nav_menu_locations', $locations);
      }
    }

    // ------- Create Right Menu --------
    $menunameright =  'Right Menu';
    $bpmenulocationright = 'primary-2';
    $menu_existsright = wp_get_nav_menu_object( $menunameright );

    if (!$menu_existsright) {
      // Create the menu
      $menu_id = wp_create_nav_menu($menunameright);

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Events', 'education-insight'),
          'menu-item-classes' => 'events',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Blog', 'education-insight'),
          'menu-item-classes' => 'blog',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Gallery', 'education-insight'),
          'menu-item-classes' => 'gallery',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Contact', 'education-insight'),
          'menu-item-classes' => 'contact',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));
      
      // Assign the menu to the desired location if not already assigned
      if (!has_nav_menu($bpmenulocationright)) {
          $locations = get_theme_mod('nav_menu_locations');
          $locations[$bpmenulocationright] = $menu_id;
          set_theme_mod('nav_menu_locations', $locations);
      }
    }


    // ------- Create Mobile Menu --------
    $menunamemobile =  'Mobile Menu';
    $bpmenulocationmobile = 'primary-3';
    $menu_existsmobile = wp_get_nav_menu_object( $menunamemobile );

    if (!$menu_existsmobile) {
      // Create the menu
      $menu_id = wp_create_nav_menu($menunamemobile);

      // Add the HOME item
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Home', 'education-insight'),
          'menu-item-classes' => 'home',
          'menu-item-url'     => home_url('/'),
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Courses', 'education-insight'),
          'menu-item-classes' => 'courses',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Features', 'education-insight'),
          'menu-item-classes' => 'features',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Events', 'education-insight'),
          'menu-item-classes' => 'events',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Blog', 'education-insight'),
          'menu-item-classes' => 'blog',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Gallery', 'education-insight'),
          'menu-item-classes' => 'gallery',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Contact', 'education-insight'),
          'menu-item-classes' => 'contact',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));
      
      // Assign the menu to the desired location if not already assigned
      if (!has_nav_menu($bpmenulocationmobile)) {
          $locations = get_theme_mod('nav_menu_locations');
          $locations[$bpmenulocationmobile] = $menu_id;
          set_theme_mod('nav_menu_locations', $locations);
      }
    }
       
    // --------Header------------------------

    set_theme_mod( 'education_insight_call', '+44 785 462 358' ); 

    set_theme_mod( 'education_insight_call_icon', 'fas fa-phone' ); 

    set_theme_mod( 'education_insight_email', 'info@education.com' ); 

    set_theme_mod( 'education_insight_email_icon', 'far fa-envelope' );

    // --------Social icons------------------------

    set_theme_mod( 'education_insight_facebook', 'https://facebook.com/' ); 

    set_theme_mod( 'education_insight_twitter', 'https://twitter.com/' );

    set_theme_mod( 'education_insight_linkedin', 'https://linkedin.com/' ); 

    set_theme_mod( 'education_insight_pinterest', 'https://pinterest.com/' );

    //-------------- Slider-----------------------

    for($i=1;$i<=4;$i++){

      $title = 'Lorem Ipsum';
      $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';

      // Create post object
      $my_post = array(
       'post_title'    => wp_strip_all_tags( $title ),
       'post_content'  => $content,
       'post_status'   => 'publish',
       'post_type'     => 'post',
      );

      $slider_post_id = wp_insert_post($my_post);

      // Set theme mod for each post created
      set_theme_mod('education_insight_post_setting' . $i, $slider_post_id);

    }

    //-------------- Service-----------------------

    set_theme_mod( 'education_insight_middle_sec_page_settigs', $service_page_id );

    $service_title=array('Trending Courses','Books & Library','Certified Teachers','Certification');

    $service_icon=array('fas fa-graduation-cap','fas fa-book-open','fas fa-user-graduate','fas fa-certificate');

    for($i=1;$i<=4;$i++){

      $title = $service_title[$i-1];
      $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';

      // Create post object
      $my_post = array(
       'post_title'    => wp_strip_all_tags( $title ),
       'post_content'  => $content,
       'post_status'   => 'publish',
       'post_type'     => 'post',
      );

      $service_post_id = wp_insert_post($my_post);

      set_theme_mod('education_insight_middle_sec_settigs' . $i, $service_post_id);

      set_theme_mod( 'education_insight_mid_section_icon'.$i, $service_icon[$i-1]);
    }

    //-------------- Courses-----------------------
      
    set_theme_mod( 'education_insight_popular_courses_heading', 'Our Popular Courses' );

    $course_category = wp_create_category('Popular Courses'); 

    set_theme_mod( 'education_insight_course_count', '4' );

    for($i=1;$i<=4;$i++){

      $title = 'Our Popular Courses';
      $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

      // Create post object
      $my_post = array(
       'post_title'    => wp_strip_all_tags( $title ),
       'post_content'  => $content,
       'post_status'   => 'publish',
       'post_type'     => 'post',
       'post_category' => array($course_category) 
      );

      $popular_course_post_id = wp_insert_post($my_post);

    }

    set_theme_mod( 'education_insight_popular_courses_setting', 'Popular Courses' );

  } ?>
    
  <p class="note"><?php esc_html_e("If your website is already live and containing data, please make a backup.This importer will override the Education Insight's new customizable values.",'education-insight'); ?></p>
  <form id="mep-demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=education-insight-guide-page" method="POST">
    <input type="submit" name="submit" value="<?php echo esc_attr( __('Begin With Demo Import', 'education-insight') ); ?>" class="button button-primary button-large">
    <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="button button-primary button-large"><?php esc_html_e('View Site','education-insight'); ?></a>
  </form>
  <div class="mep-spinner-div"><p class="spinner"></p></div>
  <div class="success">
    <?php if (isset($_GET['import-demo'])) {
      echo esc_html(__('Demo Import Successful', 'education-insight'));
    } ?>
  </div>
  <?php $admin_url = admin_url( 'admin-ajax.php' ); ?>

  <script type="text/javascript">
    function validate() {
      document.forms[0].submit();
    }
    jQuery(document).ready(function($) {
      var pathUrl = new URL(window.location.href)
      var searchParams = pathUrl.searchParams.get("import-demo")
      if(searchParams) {
        history.replaceState({}, '', 'themes.php?page=education-insight-guide-page')
      }
      $( "#mep-demo-importer-form" ).submit(function( event ) {
        event.preventDefault();
        if(confirm("Are you sure, you want to import demo content?")){
          $('.spinner').addClass('is-active');
          location.href = location.href + '&import-demo=true';
        } else {
          return false;
        }
      });
    });
  </script>
</div>