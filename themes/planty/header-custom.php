<?php
/**
 * Header personnalisé pour l'exercice
*/
?>


<header id="header-personnalise" class="site-header" role="banner">


    <div class="logo">     
    <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
       <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <!-- J'intègre l'image du logo ici -->
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.png' ); ?>" alt="logo du site">
        </a>
    <?php endif; ?>
</div>




    <?php
    //mon menu principal
     if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'site-navigation',
                'menu_class'     => 'main-nav',
                'container'       => 'nav',
                'container_class' => 'main-nav',
                'container_role' => 'navigation', // Ajouter l'attribut role="navigation"
                'items_wrap'     => '<ul class="nav-list">%3$s</ul>'
            ) );
        }
    ?>
      
 <?php
    //mon menu mobile
     if ( has_nav_menu( 'mobile_menu' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'mobile_menu',
                'menu_id'        => 'site-navigation',
                'menu_class'     => 'main-nav',
                'container'       => 'nav',
                'container_class' => 'main-nav',
                'container_role' => 'navigation', // Ajouter l'attribut role="navigation"
                'items_wrap'     => '<ul class="nav-list">%3$s</ul>',
                'menu_class'     => 'menu',
                'fallback_cb'      => false,
            ) );
        }

    ?>

        <div class="header-button">
        <a href="<?php echo esc_url( home_url( '/commander' ) ); ?>" class="button">Commander</a>
    </div>
    
</header>
