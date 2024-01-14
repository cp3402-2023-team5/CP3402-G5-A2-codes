<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CP3402-G5-A2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="smp-header" role="banner">

	
	

<div class="smp-header__upper">
    <div class="container">

        <div class="smp-header-tip__accessibility">
            <div class="smp-header-tip__accessibility-skip js-header-skip">
                <a href="#main">Skip navigation</a>
            </div>
            <div class="smp-header-tip__accessibility-tip js-header-tip">
                <span>Use space to open navigation items</span>
            </div>
        </div>

        <div class="smp-header__content d-flex align-items-center justify-content-between">
            
                <div class="smp-header__logo" style="background-image: url(https://www.jcu.edu.sg/__data/assets/image/0011/1232579/logoJCUS.png)">
                    <a href="https://www.jcu.edu.sg/university-pathways-discovery-week">
            <span class="sr-only">JCU Singapore Logo</span>
        </a>
                </div>
            
            <div class="smp-header__right col-6 col-md-8 d-flex align-items-center align-content-center justify-content-end">
                <button class="smp-header__mobile-btn smp-js-smpmobile-btn" aria-controls="smp-header-menu__mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="sr-only">Open/Close Menu Button</span>
                </button>
            </div>
        </div>
    </div>
</div>



	<div class="smp-header__lower">

		
		<nav class="smp-navigation-dropdown" role="navigation">
			<div class="smp-navigation-dropdown__inner flex-wrap d-flex ">
				
				
                <nav class="smp-navigation-secondary smp-navigation-secondary--top-nav">
                    <ul>
                               
                        <li>
                            <a href="#rankings">
                                Rankings
                            </a>
                            
                        </li>
                    
                        <li>
                            <a href="#admissionsday">
                                Admissions Day
                            </a>
                            
                        </li>
                    
                        <li>
                            <a href="#virtualcampustour">
                                Campus Tour
                            </a>
                            
                        </li>
                    
                        <li>
                            <a href="#register">
                                Register Now
                            </a>                           
                        </li>                   
                    </ul>
                </nav>
			</div>
		</nav>
	</div>
</header>

		
