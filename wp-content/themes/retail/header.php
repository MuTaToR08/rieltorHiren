<?php
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

        <div class="header">
            <div class="container header__container">
                <div class="header__logo-container">
                    <a href="/"><img src="https://placekitten.com/140/40" alt="logo" class="header__logo"></a>
                </div>
                <?php
					if ( has_nav_menu( 'primary' )  ) {
				?>
                <nav class="header__menu">
                    <ul class="header__menu-primary">
                        <?php
                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'menu_class' => 'header__menu',
                                'theme_location' => 'primary',
                            )
                        );
                        ?>
                    </ul>
                </nav>
                <?php
                    }
                ?>
                <div class="header__contacts">
                    <a href="tel:+79180111190" class="header__contacts-phone">+7 918 011 11 90</a>
                    <a href="mailto:ang.expert@mail.ru" class="header__contacts-email">ang.expert@mail.ru</a>
                </div>
            </div>
        </div>
